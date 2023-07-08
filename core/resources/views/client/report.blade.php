
    <div class="container">

        <div class="row">

            <div class="col-md-12" style="text-align: center; font-size: 24px; font-weight: bold; color: darkblue;">
                <p>Test Report - Naxlex </p>
                
            </div>
            <div class="col-md-12">
                <p>Name: {{ $username }}</p>
                <p>Topic: {{ $topic->name }}</p>
                <p style="color: black ">Score: {{ round($attempt->score) }}% </p>
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
                        <div class="row py-3 explanation">
                            <div class="col-md-12">
                                <p class="m-0"><b>Options</b></p>
                                @foreach ($question['answer']['choices'] as $key => $choice)
                                    @if($key == $question['answer']['correct_choice']) <!--If answer is correct-->
                                        <p class="m-0"><b>{{ $key }}</b>: {{ $choice }} - Correct </p>
                                    @else <!--If answer is wrong-->
                                        <p class="m-0"><b>{{ $key }}</b>: {{ $choice }}</p>
                                    @endif
                                @endforeach
                                <hr>
                            </div>
                            
                            <div class="col-md-12">
                                <h4>Explanation</h4>
                                <p class="m-0">{!! $question['answer']['explanation'] !!} </p>
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
        <div style="clear: both;">
          <p style="float: right;">Naxlex.com - {{ $date }}</p>
        </div>
    </div>