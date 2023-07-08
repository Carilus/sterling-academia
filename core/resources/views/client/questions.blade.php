@extends('layouts.app') 
@section('content')
@section('title',$topic->name )
<div class="row">
    <div class="col-md-12 col-lg-12" style="padding: 5px;">
        <div class="card" style="border: 4px solid #076585;">
            <div class="card-body">
                {!!$topic->description!!}
                <div></div>
                <h3 class="mt-5">Questions</h3>
                <ol>
                @foreach($questions as $question)

                <div class="card-text mt-5">
                    <li>{{$question->question}}</li>

                </div>
                @endforeach
                </ol>
                @if($questions_count > 1)
                <a href="{{route('showTopicQuestions',$topic->slug)}}" class="btn btn-success mb-4 ml-5" type="button">Take Practice Test</a>
                @else
                <a href="{{route('showTopicQuestions',$topic->slug)}}" class="btn btn-warning disabled mb-4 ml-5" type="button">No questions</a>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
