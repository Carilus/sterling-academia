@extends('layouts.app')
@section('title', 'Test Review - Naxlex')
@section('content')

    <style>
    
  @media screen and (min-width:992px) {
    .img {max-width: 500px;}
 
      }
    </style>

    <div class="container">
        <!--{{ $attempt }}-->
        @php
            $score = round($attempt->score);
        
            if ($score >= 81 && $score <= 100) {
                $circleColor = '#008000'; // green
            } elseif ($score >= 61 && $score <= 80) {
                $circleColor = '#ffcc00'; // yellow
            } else {
                $circleColor = '#ff0000'; // red
            }
        @endphp
        
        
        <div class="row">
            <div class="col-md-3 d-flex align-items-center justify-content-center">
                <div style="display: inline-block; position: relative; width: 100px; height: 100px; border-radius: 50%; border: 10px solid {{ $circleColor }}; text-align: center; font-size: 24px; font-weight: bold;">
                    <span style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">{{ $score }}%</span>
                </div>
            </div>

            <div class="col-md-6" style="text-align: center; font-size: 24px; font-weight: bold;">
                @if ($attempt->score >= 81)
                    <p>Excellent work!</p>
                    <p>Review your test questions.</p>
                @elseif ($attempt->score >= 61)
                    <p>Good job!</p>
                    <p>Review your test questions.</p>
                @else
                    <p>Keep practicing!</p>
                    <p>Review your test questions.</p>
                @endif
            </div>

            <div class="jumbotron col-md-3 mx-auto text-center pb-1" style="font-size: 20px;">
              <div style="text-align: left;">
                <a href="{{ route('showTopicQuestions', ['topicSlug' => $topic->slug]) }}"> <i class="bi bi-arrow-clockwise"></i> Retake test</a><br>
                <a href="{{ route('deleteTest', ['id' => $attempt->id ]) }}" class="text-danger"> <i class="bi bi-trash2-fill text-danger"></i> Delete test</a><br>
                <a href="{{ route('generatePDF', ['id' => $attempt->id ]) }}" target="_blank"> <i class="bi bi-arrow-down"></i> Get PDF Report</a>
              </div>
            </div>

        </div>

        @php
            $counter = 1;
        @endphp

        @foreach ($all_questions as $question)
        <div class="card mb-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-9">
                        <h4 class="card-title">Question {{ $counter }}:</h4>
                        <p class="m-0"> {!! $question['question']['question'] !!}</p>
                        <div class="row bg-light py-3">
                            
                            @if($question['attempt']['choice'] != $question['answer']['correct_choice'])
                                <p class="card-text"><i class="bi bi-x-circle-fill text-danger"></i> Your answer: {{ $question['attempt']['choice'] }} - {{ $question['answer']['choices'][$question['attempt']['choice']] }} </p>
                                <p class="card-text"><i class="bi bi-check-circle-fill text-success"></i> Correct Answer: {{ $question['answer']['correct_choice'] }} - {{ $question['answer']['choices'][$question['answer']['correct_choice']] }} </p>
                            @else
                                <p class="card-text"><i class="bi bi-check-circle-fill text-success"></i> Your Answer: {{ $question['answer']['correct_choice'] }} - {{ $question['answer']['choices'][$question['answer']['correct_choice']] }}  </p>
                            @endif

                        </div>
                        <div class="row py-3 explanation" style="display: none;">
                            <div class="col-md-12">
                                <p class="m-0"><b>Options</b></p>
                                @foreach ($question['answer']['choices'] as $key => $choice)
                                    @if($key == $question['answer']['correct_choice']) <!--If answer is correct-->
                                        <p class="m-0"><b>{{ $key }}</b>: {{ $choice }} <i class="bi bi-check-circle-fill text-success"></i></p>
                                    @else <!--If answer is wrong-->
                                        <p class="m-0"><b>{{ $key }}</b>: {{ $choice }}</p>
                                    @endif
                                @endforeach
                                <hr>
                            </div>
                            
                            <div class="col-md-12">
                                <p class="m-0">{!! $question['answer']['explanation'] !!} </p>
                            </div>
                        </div>


                    </div>
                    <div class="col-md-3">
                        <div class="row py-3">
                            <div class="col-md-12">
                                <button class="btn btn-primary view-explanation">View Explanation</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @php
                $counter++;
        @endphp
        @endforeach
    </div>
    
    <script>
      $(document).ready(function() {
          
        $('.view-explanation').click(function() {
          // Check if any other explanations are open and slide them up
          $('.explanation:visible').not($(this).closest('.card').find('.explanation')).slideUp();
          
          // Toggle the explanation for the current card
          $(this).closest('.card').find('.explanation').slideToggle();
        
          // Change the text of the button
          var buttonText = $(this).text();
          $(this).text(buttonText == 'View Explanation' ? 'Hide Explanation' : 'View Explanation');
        });


        
        $("img").removeAttr("style").addClass("img-fluid img mx-auto d-block");
      });
      
    </script>



@endsection
