<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Topic;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questions = Question::paginate(10);
        return view('question.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $topics = Topic::all();
        return view('question.create', compact('topics'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());

        if ($question = Question::create([
            'question' => $request->questionTitle,
            'topic_id' => $request->topic_id
        ])) {
            //question is set
            $choices = [
                'A' => $request->choiceA,
                'B' => $request->choiceB,
                'C' => $request->choiceC,
                'D' => $request->choiceD,
            ];

            $answer = Answer::create([
                'choices' => $choices,
                'explanation' => $request->fullAnswerExplanation,
                'question_id' => $question->id,
                'correct_choice' => $request->correctChoice
            ]);
        }

        return redirect()->route('question-create');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
