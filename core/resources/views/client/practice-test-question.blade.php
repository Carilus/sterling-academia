@extends('layouts.app')
@section('title', 'English Test')
@section('content')

    <!--MathJax Script-->
    <script>
        MathJax = {
            tex: {
                inlineMath: [
                    ['$', '$'],
                    ['\\(', '\\)']
                ]
            },
            svg: {
                fontCache: 'global'
            }
        };
    </script>
    <script type="text/javascript" id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-svg.js">
    </script>
    <!--End Of MathJax Script-->


    <style>
        @media(max-width:767px) {
            #toppaglinks nav {
                overflow-x: scroll;
            }
        }

        .modal {
            display: none;
            position: absolute;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: #fff;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .content-modal {
            max-width: 900px;
            margin: auto;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
    </style>

    @php
        $qsns = App\Models\Question::paginate(1);
        $qsns2 = App\Models\Question::simplePaginate(1);
    @endphp
    <main id="main" class="main">
        <div class="fw-400 pl-3 pr-3 pt-5 pb-4">
            English Test
        </div>
        <div class="ml-4 mr-4">
            <div class="row" id="toppaglinks">
                <div class="pl-3 pr-3 pt-3 pb-2 col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 d-none d-md-block">
                    {{ $qsns->links() }}
                </div>

                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                    @php
                        $scores = \App\Http\Controllers\ClientController::currentScore($attempt->id);
                        
                        $score = isset($scores['score']) ? $scores['score'] : 0;
                        
                        $attempted = $scores['attempted'];
                        try {
                            $value = $score / $attempt->total_questions;
                        } catch (DivisionByZeroError $e) {
                            $value = 0;
                        } catch (ErrorException $e) {
                            $value = 0;
                        }
                        
                        $percent = round($value * 100, 0);
                    @endphp
                    <span>Your score {{ $percent }}%, questions attempted {{ $attempted }},
                        {{ $attempt->total_questions - $attempted }} remaining)</span>

                    <div class="progress">
                        @if ($percent < 50)
                            <div class="bg-danger progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuenow="{{ $percent }}" aria-valuemin="1" aria-valuemax="100"
                                style="width: {{ $percent }}%">{{ $percent }}%</div>
                        @elseif($percent > 50 && $percent < 81)
                            <div class="bg-primary progress-bar progress-bar-striped progress-bar-animated"
                                role="progressbar" aria-valuenow="{{ $percent }}" aria-valuemin="1" aria-valuemax="100"
                                style="width: {{ $percent }}%">{{ $percent }}%</div>
                        @else
                            <div class="bg-success progress-bar progress-bar-striped progress-bar-animated"
                                role="progressbar" aria-valuenow="{{ $percent }}" aria-valuemin="1"
                                aria-valuemax="100" style="width: {{ $percent }}%">{{ $percent }}%</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="p-4">
            @forelse($qsns as $question)
                <div class="card">
                    <div class="card-body">
                        <div style="display:flex;justify-content:space-between">
                            <h4 class="h3 font-weight-bold mb-3">Question @isset($_GET['page'])
                                    {{ $_GET['page'] }}
                                @else
                                    1
                                @endisset
                            </h4>
                        </div>
                        <div class="card-text">
                            {!! str_replace('&nbsp;', '', $question->question) !!}
                            <!--{{ $question->id }}-->
                        </div>
                        @php
                            $answer = App\Models\Answer::where('question_id', $question->id)->first();
                            $choices = json_decode(json_encode($answer->choices), true);
                            
                        @endphp

                        <div class="ml-4 mt-4 choicess">
                            @foreach ($choices as $key => $choice)
                                @php
                                    $checkedChoice = '';
                                    
                                    if ($attempt->id != null) {
                                        $checkedChoice = App\Models\Result::where(['question_id' => $question->id, 'attempt_id' => $attempt->id])->first();
                                    }
                                @endphp

                                <label class="d-block mb-2" for="choices{{ $key }}">

                                    @if ($checkedChoice != null)
                                        @if ($checkedChoice->choice == $key)
                                            <input checked type="radio" name="choices" value="{{ $key }}"
                                                data-qsn="{{ $question->id }}" class="form-check-input radioBtn"
                                                id="choices{{ $key }}" />
                                            <span class="font-weight-bold">{{ $key }}.</span> {{ $choice }}
                                        @else
                                            <input type="radio" name="choices" value="{{ $key }}"
                                                data-qsn="{{ $question->id }}" class="form-check-input radioBtn"
                                                id="choices{{ $key }}" />
                                            <span class="font-weight-bold">{{ $key }}.</span> {{ $choice }}
                                        @endif
                                    @else
                                        <input type="radio" name="choices" value="{{ $key }}"
                                            data-qsn="{{ $question->id }}" class="form-check-input radioBtn"
                                            id="choices{{ $key }} " />
                                        <span class="font-weight-bold">{{ $key }}.</span> {{ $choice }}
                                    @endif
                                </label>
                            @endforeach
                        </div>
                        <input type="hidden" name="nxt" id="nxt" />
                    </div>
                    <div class="card-footer">
                        <div class="pl-4 pr-4 pb-4">
                            <button type="button" data-toggle="collapse" data-target=".collapse{{ $question->id }}"
                                class="btn-primary btn" id="showAnswer"><small>View Correct Answer</small></button>
                        </div>
                        <div class="collapse collapse{{ $question->id }}" style="display: none;" id="answercontainer">
                            <div class="pt-0">
                                <h3 class="text-primary mb-3">Correct Answer is
                                    @if ($answer->correct_choice[0] !== '[')
                                        {{ $answer->correct_choice }}
                                    @else
                                        @foreach (json_decode($question->correct_answer) as $choice)
                                            {{ $choice }}
                                        @endforeach
                                    @endif
                                </h3>
                                @if (!empty($question->solution))
                                    <h4 class="h3 font-weight-bold mb-3">Explanation</h4>

                                    <div class="card-text" style="line-height: 2.5" id="explanation-container">
                                        {!! str_replace('&nbsp;', '', $question->solution) !!}
                                        <!--{!! $question->solution !!}-->
                                    </div>
                                @else
                                    <p>No explanation</p>
                                @endif
                            </div>
                        </div>

                        <div class="mt-2">
                            <a data-toggle="collapse" href=".collapse{{ $question->id }}" id="hideAnswer"
                                style="display:none;">
                                <u><span class="h4">Hide Answer</span></u>
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div>
                    No questions found.
                </div>
            @endforelse
        </div>

        <div class="ml-4 mr-4 pt-5 pb-4" id="pagination">
            {{ $qsns2->links() }}
        </div>
    </main>

    <!--MathJax Scripts-->
    <script>
        function checkAnswer() {
            // Get the selected choice value
            const selectedChoice = $('input[name="choices"]:checked').val();

            // Get the correct answer value
            const correctAnswer = "{{ $question->correct_answer }}";

            // Get the label element for the selected choice
            const selectedChoiceLabel = $('input[name="choices"]:checked').closest('label');

            // Clear any existing tick or X icons
            selectedChoiceLabel.find('.tick-icon, .x-icon').remove();

            const userAnswer = $('input[name="inputField"]').val();
            if (correctAnswer.includes(userAnswer)) {
                // Display correct answer feedback
                $('input[name="inputField"]').removeClass('is-invalid').addClass('is-valid');
                $('input[name="choices"]').attr('disabled', 'disabled');
                $('#submit').attr('disabled', 'disabled');
                $('#showAnswer').attr('disabled', 'disabled');
                $('.choicess label').off('click');

                if (!$("#answercontainer").is(":visible")) {
                    $("#answercontainer").toggle();
                }
            } else {
                // Display incorrect answer feedback
                $('input[name="inputField"]').removeClass('is-valid').addClass('is-invalid');
            }

            if (selectedChoice === correctAnswer) {
                selectedChoiceLabel.append('<i style="color: green; font-weight: bold" class="pi pi-check"></i>');
                if (!$("#answercontainer").is(":visible")) {
                    $("#answercontainer").toggle();
                }

                // Disable all inputs
                $('input[name="choices"]').attr('disabled', 'disabled');
                $('#submit').attr('disabled', 'disabled');
                $('#showAnswer').attr('disabled', 'disabled');
                $('.choicess label').off('click');
            } else {
                selectedChoiceLabel.append('<i style="color: red; font-weight: bold" class="pi pi-times"></i>');
            }

        }
    </script>

    <script>
        $('.collapse').on('shown.bs.collapse', function() {
            console.log("Show clicked");
        });
    </script>
    <!--End of MathJax Scripts-->

    <!--Show Answers Script-->
    <script>
        $(function() {
            $('.choicess label').click(function() {
                $(this).find('.radioBtn').prop('checked', true);
            })

            $('#showAnswer').click(function() {
                $(this).hide();
                $("#answercontainer").toggle();
                $('input[name="choices"]').attr('disabled', 'disabled');
                $('#submit').attr('disabled', 'disabled');
                $('#showAnswer').attr('disabled', 'disabled');
                $('.choicess label').off('click');
                // $('#hideAnswer').show();
            })

            $('#hideAnswer').click(function() {
                $(this).hide();
                $("#answercontainer").toggle();
                $('#showAnswer').show();
            });
        })
    </script>
    <!--End of Answers Script-->

    <!--Pagination Script-->
    <script>
        $(function() {

            $('#pagination nav a').removeClass('bg-white page-link').addClass('btn btn-primary');
            $('#pagination nav ul').addClass('d-flex justify-content-between');
            //click of next button
            $('#pagination nav a:last-child').click(function() {
                if ($('.radioBtn').is(':checked')) {
                    let checkedChoice = $('input[name="choices"]:checked').val();
                    let qsn = $('input[name="choices"]:checked').attr('data-qsn');
                    const datas = {
                        checkedChoice: checkedChoice,
                        qsn: qsn,
                        attempt: <?php echo $attempt->id; ?>,
                        lastPage: <?php if (isset($_GET['page'])) {
                            echo $_GET['page'];
                        } else {
                            echo '1';
                        } ?>
                    }

                    $.ajax({
                        type: "get",
                        url: "<?php echo route('store-answers'); ?>",
                        data: datas
                    });
                } else {
                    let inputValue = $('input[name="inputField"]').val();
                    let qsn = $('input[name="inputField"]').attr('data-qsn');
                    if (inputValue !== '') {
                        const datas = {
                            checkedChoice: inputValue,
                            qsn: qsn,
                            attempt: <?php echo $attempt->id; ?>,
                            lastPage: <?php if (isset($_GET['page'])) {
                                echo $_GET['page'];
                            } else {
                                echo '1';
                            } ?>
                        }

                        $.ajax({
                            type: "get",
                            url: "<?php echo route('store-answers'); ?>",
                            data: datas
                        });
                    }
                }
            });

            // Click of Next on the Last page
            let pageNumber = {{ isset($_GET['page']) ? $_GET['page'] : 1 }};

            console.log(pageNumber);
            if (pageNumber > 1) {
                $('#pagination nav span:last-child').removeClass('bg-white page-link').addClass(
                    'btn btn-success').text(
                    'Finish');


                $('#pagination nav span:last-child').click(function() {
                    if ($('.radioBtn').is(':checked')) {
                        let checkedChoice = $('input[name="choices"]:checked').val();
                        let qsn = $('input[name="choices"]:checked').attr('data-qsn');
                        //console.log(checkedChoice, qsn);
                        $.ajax({
                            type: "get",
                            url: "<?php echo route('store-answers'); ?>",
                            data: {
                                checkedChoice: checkedChoice,
                                qsn: qsn,
                                attempt: <?php echo $attempt->id; ?>,
                                lastPage: <?php if (isset($_GET['page'])) {
                                    echo $_GET['page'];
                                } else {
                                    echo '1';
                                } ?>
                            }
                        });
                    }

                    window.location.href = "<?php echo route('calculate-score', $attempt->id); ?>";
                })

                $('#pagination nav a:last-child.disabled').removeClass('disabled').addClass('btn btn-success');
            }
        })
    </script>
    <!--End of Pagination Script-->

    <!--Arrow navigation scripts-->
    <script>
        // Create a function to handle keypress events
        function handleKeyPress(event) {
            // Check if the arrow left or right key was pressed
            const paginationLinks = document.querySelectorAll('#pagination nav a');
            if (event.keyCode === 37) {
                // Get the current pagination links

                // Go to the previous page
                paginationLinks[0].click();
            } else if (event.keyCode === 39) {
                paginationLinks[paginationLinks.length - 1].click();
            }
        }

        // Attach the handleKeyPress function to the keydown event
        document.addEventListener('keydown', handleKeyPress);
    </script>
    <!--End of Arrow Navigation Scripts-->

@endsection
