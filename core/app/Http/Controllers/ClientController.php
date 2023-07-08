<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Mail;

use App\Models\Topic;
use App\Models\Category;
use App\Models\Section;
use App\Models\Question;
use App\Models\Attempt;
use App\Models\Result;
use App\Models\Answer;
use App\Models\Incident;
use App\Mail\sendNotificationMail;


use Carbon\Carbon; // To parse date-times to human readable dates

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getQuestion($questionId)
    {
        $question = Question::where('id', $questionId)->first();
        //dd($question);
        return $question;
    }

    public function showQns()
    {
        $attempt = Attempt::where(['user_id' => Auth::id(), 'status' => 0])->first();

        $total_questions = Question::get()->count();

        if ($attempt == null) {
            $attempt = Attempt::create([
                'user_id' => Auth::id(),
                'total_questions' => $total_questions
            ]);
        }
        return view('Client.practice-test-question', compact('attempt'));
    }

    public static function currentScore($attemptId)
    {
        // Calculates current score as the exam is still ongoing
        $score = 0;
        $attempted = 0;

        $attempt = Attempt::where(['user_id' => Auth::id(), 'id' => $attemptId])->first();

        if ($attempt) {

            $attempted = Result::where('attempt_id', $attemptId)->count();

            $results = Result::where('attempt_id', $attemptId)->get();

            foreach ($results as $result) {
                $question = Question::where('id', $result->question_id)->first();
                $answer = Answer::where("question_id", $question->id)->first();

                // OR condition marks questions with text answers
                if ($answer->correct_choice) {
                    $text_answer = $answer->correct_choice;
                } else {
                    $text_answer = "";
                }

                if ($answer->correct_answer == $result->choice || $text_answer == $result->choice) {
                    $score = $score + 1;
                }
            }
            return $values = [
                'attempted' => $attempted,
                'score' => $score
            ];
        }
    }


    public function calculateScore(Request $request, $attemptId)
    {
        // Calculate score at end of test and redirect

        $attemptv = Attempt::where(['user_id' => Auth::id(), 'id' => $attemptId])->first();

        $score = 0;
        $results = Result::where('attempt_id', $attemptId)->get();

        foreach ($results as $result) {
            $answer = Question::where('id', $result->question_id)->first();
            if ($answer->correct_answer == $result->choice) {
                $score = $score + 1;
            }
        }

        // $attemptv = Attempt::where('id', $attemptId)->first();
        $attemptv->correct_answers = $score;
        $attemptv->score = round((($score / $attemptv->total_questions) * 100), 0);
        $attemptv->status = 1;
        $attemptv->save();
        // return redirect()->route('clientDash');
        return redirect()->route('view-result', ['attemptId' => $attemptv->id]);
    }

    public function storeAnswers(Request $request)
    {
        info($request->all());

        $checkedChoice  = Result::where(['question_id' => $request->qsn, 'user_id' => Auth::id(), 'attempt_id' => $request->attempt])->first();
        $score = 0;

        if ($checkedChoice != null) {
            if ($checkedChoice->choice != $request->checkedChoice) {
                $checkedChoice->choice = $request->checkedChoice;
                $checkedChoice->save();
            }
        } else {

            $qsn = Question::find($request->qsn);

            $practice = new Result;

            $practice->question_id = $request->qsn;
            $practice->choice = $request->checkedChoice;
            $practice->user_id = Auth::id();
            $practice->attempt_id = $request->attempt;
            $practice->save();

            // Add last page to attempt - State Management
            $attempt = Attempt::where('id', $request->attempt)->first();

            if ($attempt != null) {
                $attempt->last_page = $request->lastPage;
                $attempt->save();
            }
        }
    }

    // public function restartAttempt($attemptId, $topicSlug)
    // {
    //     $attemptv = Attempt::where(['user_id' => Auth::id(), 'id'=>$attemptId])->delete();

    //     $results = Result::where('attempt_id', $attemptId)->delete();

    //     alert()->success('Test Restarted')->autoClose(3000);
    //     return redirect()->route('showMathPracticeQuestions', $topicSlug);
    // }

    public function viewResult(Request $request, $attemptId)
    {
        $attempt = Attempt::where(['user_id' => Auth::id(), 'id' => $attemptId])->first();

        $results = Result::where('attempt_id', $attemptId)->get();

        $question_count = $results->count();

        $questions = Question::join('results', 'questions.id', '=', 'results.question_id')
            ->where('results.attempt_id', $attempt->id)
            ->select('questions.*', 'results.*')
            ->get();

        return view('client.view-result', compact('results', 'attempt', 'questions', 'question_count'));
    }
}
