@extends('layouts.app')
@section('title', 'English Test')
@section('content')
    <main id="main" class="main">
        <div class="bg-white z-10 shadow">
            <div class="max-w-5xl mx-auto">
                <div class="py-4">
                    <div class="px-4 sm:px-6 md:px-0">
                        <div class="flex flex-col md:flex-row items-start md:items-center justify-between">
                            <div>
                                <div class="flex items-center">
                                    <a href="#">
                                        <button
                                            class="text-gray-400 flex ltr:flex-row rtl:flex-row-reverse items-center ltr:mr-4 rtl:ml-4 focus:outline-none">
                                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 rtl:flip">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                                            </svg>
                                        </button>
                                    </a>
                                    <h1 class="app-heading">Test Review</h1>
                                </div>
                            </div>
                            <div class="sm:mb-0 sm:mt-0">
                                <div class="uppercase font-semibold text-secondary">{{ $question_count }} Questions</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-1 relative h-full z-0 overflow-hidden focus:outline-none">
            <main class="max-w-7xl mx-auto">
                <div class="px-4 sm:px-6 md:px-0">
                    <div role="alert" class="p-message p-component p-message-success" style="display: none;">
                        <div class="p-message-wrapper"><span class="p-message-icon pi pi-check"></span>
                            <div class="p-message-text">

                            </div>
                            <!---->
                        </div>
                    </div>

                    <div class="py-8">
                        <div>
                            <div class="w-full card">
                                <div class="w-full card-body lg:flex flex-wrap">
                                    <ul class="my-6 flex flex-wrap justify-center items-center gap-2">
                                        <li>
                                            <div class="w-full overflow-hidden rounded-sm cursor-pointer">

                                            </div>
                                        </li>
                                    </ul>

                                    <!-- Start of Question Display -->
                                    @foreach ($questions as $question)
                                        <div
                                            class="py-4 w-full md:ltr:pl-6 md:rtl:pr-6 sm:ltr:border-l sm:rtl:border-r border-gray-200">
                                            <div>
                                                <div>
                                                    <div id="que_UzI7BQwca4v">
                                                        <div class="flex justify-between items-center mb-6">
                                                            <div
                                                                class="font-mono px-2 py-1 inline-block bg-qt-option text-white rounded text-sm mb-2">
                                                                Time Spent: Coming Soon
                                                            </div>

                                                        </div>
                                                        <div
                                                            class="border rounded border-gray-200 bg-gray-50 p-6 shadow-sm">
                                                            <div class="flex gap-2 mb-4"><span
                                                                    class="text-sm font-semibold">Question
                                                                    {{ isset($_GET['page']) ? $_GET['page'] : 1 }} </span>
                                                                <span class="text-sm">|</span>
                                                                <span class="text-sm text-gray-600 uppercase">HESI</span>
                                                            </div>
                                                            <!---->
                                                            <div class="q-data question">
                                                                <p>{!! $question->question !!}</p>
                                                            </div>
                                                        </div>
                                                        <div class="mt-4">
                                                            <div class="q-radio">
                                                                @php
                                                                    $answer = App\Models\Answer::where('question_id', $question->id)->first();
                                                                    $choices = json_decode(json_encode($answer->choices), true);
                                                                    
                                                                @endphp

                                                                @foreach ($choices as $key => $option)
                                                                    <div class="q-options">
                                                                        @if ($key == $question->choice)
                                                                            @if ($question->choice == $question->correct_answer)
                                                                                <div class="q-option"><input type="radio"
                                                                                        id="que_UzI7BQwca4v_option_0"
                                                                                        disabled="disabled" value="1">
                                                                                    <label for="que_UzI7BQwca4v_option_0"
                                                                                        class="correct"><span
                                                                                            class="o-id"><strong>{{ $key }}</strong></span>
                                                                                        <span class="o-text">
                                                                                            <p>{{ $option }}</p>
                                                                                        </span></label>
                                                                                </div>
                                                                            @else
                                                                                <div class="q-option"><input type="radio"
                                                                                        id="que_UzI7BQwca4v_option_1"
                                                                                        disabled="disabled" value="2">
                                                                                    <label for="que_UzI7BQwca4v_option_1"
                                                                                        class="wrong"><span
                                                                                            class="o-id"><strong>{{ $key }}</strong></span>
                                                                                        <span class="o-text">
                                                                                            <p>{{ $option }}</p>
                                                                                        </span></label>
                                                                                </div>
                                                                            @endif
                                                                        @else
                                                                            <div class="q-option"><input type="radio"
                                                                                    id="que_UzI7BQwca4v_option_2"
                                                                                    disabled="disabled" value="3">
                                                                                <label for="que_UzI7BQwca4v_option_2"
                                                                                    class=""><span
                                                                                        class="o-id"><strong>{{ $key }}</strong></span>
                                                                                    <span class="o-text">
                                                                                        <p>{{ $option }}</p>
                                                                                    </span></label>
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                @endforeach

                                                                <div
                                                                    class="flex gap-2 border border-green-200 bg-green-50 items-center rounded p-4 mt-6">
                                                                    <svg fill="none" stroke="currentColor"
                                                                        viewBox="0 0 24 24"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        class="w-6 h-6 text-green-400">
                                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                                            stroke-width="2"
                                                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z">
                                                                        </path>
                                                                    </svg>
                                                                    <h4 class=" text-gray-600">Correct answer is
                                                                        {{ $question->correct_answer }}</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <div class="mt-4">
                                                            <div
                                                                class="q-data rounded bg-yellow-50 border border-yellow-200 p-6">
                                                                <h4 class="font-semibold text-gray-600 mb-4 uppercase">
                                                                    Solution
                                                                </h4>
                                                                <!---->
                                                                <div>
                                                                    {!! $question->solution !!}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <!-- End of question display -->
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </main>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; right: 0px;">
                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
            </div>
        </div>
    </main>
    <script>
        $(document).ready(function() {
            $('.question-buttons').click(function() {
                var questionId = $(this).data('question-id');

                $.ajax({
                    url: '/get-question/' + questionId,
                    method: 'GET',
                    success: function(response) {
                        $('#question-container').html(response);
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            });

        });
    </script>

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
