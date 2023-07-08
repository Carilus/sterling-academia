<?php

namespace App\Http\Livewire;

use App\Models\Answer;
use App\Models\Attempt;
use App\Models\Question;
use App\Models\Topic;
use Illuminate\Support\Facades\Auth;
use LDAP\Result;
use Livewire\Component;

class QuestionComponent extends Component
{
    public $topic;
    public $question;
    public $next_question;
    public $topicSlug;
    public $answer;
    public $questionCount = 1;
    public $currentQuestion;
    public $totalQuestions;
    public $count;
    public $answers = [];
    public $myAnswer = "";
    public $currentScore = "";
    public $nextAnswer = "";

    public $correctAnswers = 0;
    public $scorePercentage, $showAnswer = false;

    public $here = "Here";



    public function mount()
    {

        $this->currentQuestion = 0;
        $this->count = 0;
        $this->question = Question::first();
        $this->answer = Answer::where('question_id', $this->question->id)->get();
        $this->totalQuestions = Question::get()->count();
    }

    public function toggleHere()
    {
        $this->here = "Now";
    }

    public function showQuestionAnswer()
    {
        if (!empty($this->myAnswer)) {
            $this->showAnswer = $this->showAnswer == false ? true : false;
            return;
        } else {
            session()->flash('error', 'Please select an answer first');
        }
    }
    public function nextQuestion()
    {
        if (empty($this->myAnswer)) {
            session()->flash('error', 'Please select an answer first');
            return;
        }

        $db_answer = Answer::where('question_id', $this->question->id)->first();
        $correct = $db_answer['correct_choice'];

        if ($this->myAnswer == $correct) {
            $this->correctAnswers = $this->correctAnswers + 1;
        }
        $allCountedQuestions = $this->totalQuestions;
        $updatePercentage =  ($this->correctAnswers / $allCountedQuestions) * 100;
        $this->scorePercentage  = $updatePercentage;

        $this->currentScore = $updatePercentage;


        // $next_question = Question::where('topic_id',$this->topic->id)->skip($this->currentQuestion)->first();
        // $this->answer = Answer::where('question_id',$this->question->id)->get();


        //go to next question then save
        $this->saveAnswer();

        // For the next question
        $this->currentQuestion = min($this->totalQuestions - 1, $this->currentQuestion + 1);
        $next_question = Question::where('topic_id', $this->topic->id)->skip($this->currentQuestion)->first();
        $this->answer = Answer::where('question_id', $next_question->id)->get();
        $this->question = $next_question;
        $this->count = $this->count + 1;
        $this->myAnswer = "";
        $this->showAnswer = false;
    }

    public function showPreviousQuestion()
    {
        $this->saveAnswer();
        $this->showAnswer = false;
        $prevQuestionID = Question::where('topic_id', $this->topic->id)->where('id', '<', $this->question->id)->max('id');
        $prevprevQuestion = Question::where('topic_id', $this->topic->id)->where('id', $prevQuestionID)->first();
        $this->question = $prevprevQuestion;
        $this->answer = Answer::where('question_id', $this->question->id)->get();
        $this->count = $this->count - 1;
        $this->getPrevious();
    }

    public function saveAnswer()
    {
        $answer = $this->question->id . 'answer';
        array_push($this->answers, [$this->question->id => $this->question->id, $answer => $this->myAnswer]);
        $this->myAnswer = "";
    }

    public function getPrevious()
    {
        foreach ($this->answers as $key => $value) {
            $this->nextAnswer = $this->myAnswer;
            //Checking if the question had been saved in the array
            if (array_key_exists($this->question->id, $this->answers[$key])) {
                $answer = $this->question->id . 'answer';
                $previousAnswer = $this->answers[$key][$answer];
                $this->myAnswer = $previousAnswer;
                //to this point,user can now go to next question

                $this->answers[$key][$answer] = $this->myAnswer;
            } else {
                $answer = $this->question->id . 'answer';
                $question = $this->question->id . 'question';

                array_push($this->answers, [$this->question->id => $this->question->id, $answer => $this->myAnswer]);
                $this->myAnswer = "";
            }
        }
    }
    public function saveAllAnswer()
    {
        // Updates all the score variables

        $allCountedQuestions = $this->totalQuestions;

        // Add scores to DB
        $test = new Attempt();
        $test->score = $this->scorePercentage;
        $test->total_questions = $allCountedQuestions;
        $test->correct_answers = $this->correctAnswers;
        $test->user_id = Auth::id();
        if (!$test->save()) {
            return redirect()->back();
        }

        // dd($this->answers);
        foreach ($this->answers as $key => $value) {
            $result = new Result;

            $result->user_id = Auth::id();

            $result->question_id = array_values($value)[0];
            $result->choice = array_values($value)[1];
            $result->attempt_id = $test->id;
            $result->save();
        }
        $this->answers = [];

        return redirect()->route('clientDash');
    }

    public function render()
    {
        return view('livewire.question-component');
    }
}
