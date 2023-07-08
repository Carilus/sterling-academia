@if ($count == $totalQuestions)
    <div>
        <div class="row p-5">
            <div class="col-md-12 col-lg-12">
                <div class="card" style="border: 4px solid #076585;">
                    <div class="row">
                        <div class="card-body col-md-6 col-lg-6" style="border-right: 4px solid #076585;">
                            <span style="font-style: bold;"><b>Congratulations, You have finished the test. </b></span>
                            <p class="card-text">Attempted Questions: {{ $totalQuestions }}</p>
                            <p class="card-text">Correct Answers: {{ $correctAnswers }}</p>
                            <div style="text-align: center; display: flex; justify-content: center;">
                                <div class="circle_success shadow-lg">
                                    <div class="circle_content">
                                        <div class="score"><b>Your Score: </b></div>
                                        @if (round($scorePercentage, 0) > 81)
                                            <div style="font-size: 40px;" class="percentage text-success"><b>
                                                    {{ round($scorePercentage, 0) }}%</b></div>
                                        @else
                                            <div style="font-size: 40px;" class="percentage text-danger"><b>
                                                    {{ round($scorePercentage, 0) }}%</b></div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body col-md-6 col-lg-6">
                            <p>
                                <span style="font-style: bold;">Press <b>Finish</b> to opt out.</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="display: flex; justify-content: end;">
            <button wire:click="saveAllAnswer" class="btn btn-success mb-4">Finish</button>
        </div>
    </div>
@else
    <div class="card">
        <div class="card-body">
            <h4 class="h3 fw-bold">Question {{ $count + 1 }}</h4>
            <div class="card-text">
                {!! str_replace('&nbsp;', '', $question->question) !!}
            </div>

            <div class="radio-group form-check">
                @if ($showAnswer)
                    @foreach ($answer[0]['choices'] as $key => $choice)
                        <label class="d-block mb-2 fs-3" for="flexRadioDefaulta">
                            @if ($key == $answer[0]->correct_choice)
                                <i class="bi bi-check-circle text-success me-2 fs-2"
                                    style="position: relative; top: 1px;"></i>
                            @else
                                <i class="bi bi-x-circle text-danger me-2 fs-2"
                                    style="position: relative; top: 1px;"></i>
                            @endif
                            <b>{{ $key }}.</b> {{ $choice }}
                        </label>
                    @endforeach
                @else
                    @foreach ($answer[0]['choices'] as $key => $choice)
                        <label class="d-block mb-2" for="flexRadioDefaulta{{ $key }}">
                            <input type="radio" name="flexRadioDefaulta{{ $key }}"
                                value="{{ $key }}" class="form-check-input"
                                id="flexRadioDefaulta{{ $key }}" wire:model="myAnswer" />
                            <span class="fw-bold">{{ $key }}.</span> {{ $choice }}
                        </label>
                    @endforeach
                @endif
            </div>

            <div>
                @if (session()->has('error'))
                    <div class="alert alert-warning">
                        {{ session('error') }}
                    </div>
                @endif
            </div>

            @if ($showAnswer)
                <h3>Correct Answer is <span class="text-primary">{{ $answer[0]->correct_choice }}</span></h3>

                <div class="card bg-white">
                    <div class="card-body">
                        <h4 class="h3 fw-bold">Explanation</h4>
                        <hr />

                        <div class="card-text">
                            {!! str_replace('&nbsp;', '', $answer[0]['explanation']) !!}
                        </div>

                        <hr />
                        <div>
                            @if (true)
                                <div class="row">
                                    <div class="col-sm-12 col-md-4">
                                        <div style="display: flex; justify-content: start;">
                                            <button wire:click="nextQuestion" class="btn btn-primary mb-4 btn-lg">Go to
                                                Next Question <i class="bi bi-arrow-right"></i></button>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-8 pt-3"></div>
                                </div>
                            @else
                                <div class="row">
                                    <div class="col-sm-12 col-md-12">
                                        <div style="display: flex; justify-content: space-between;">
                                            <button disabled wire:click="showPreviousQuestion" id="previous"
                                                class="btn btn-primary mb-4"><i class="bi bi-arrow-left"></i>Previous
                                                Question</button>
                                            <button wire:click="nextQuestion" class="btn btn-primary mb-4 btn-lg">Go to
                                                Next Question <i class="bi bi-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

            @endif
            @if (!$showAnswer)
                <hr />
                <button wire:click="showQuestionAnswer" class="btn btn-primary mb-4 btn-lg">Show Correct
                    Answer</button>
            @endif
        </div>
    </div>
@endif

<!--End Test-->

<!--Scripts-->
@push('scripts')
@endpush
<!--End of Scripts-->
