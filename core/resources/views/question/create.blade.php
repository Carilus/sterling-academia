@extends('layouts.app')
@section('title', 'Add Question - Naxlex')
@section('content')
    <main id="main" class="main">
        <div class="tp-contact-area pt-135 pb-130">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <h1 class="tp-title-sm">Quiz Upload Form</h1>
                        <div class="tpcontact mt-40">
                            <div class="tpcontact__form tpcontact__form-3">
                                <form id="quiz-form" method="POST" action="{{ route('post_quiz') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="container">
                                        <label for="topic">Topic</label>
                                        <select class="form-control" name="topic_id" id="topic_id">
                                            <option selected value="">Choose Topic</option>
                                            @foreach ($topics as $topic)
                                                <option value="{{ $topic->id }}">{{ $topic->name }}</option>
                                            @endforeach
                                        </select>

                                        <label class="pt-2" for="questionTitle" class="form-label">Question:</label>
                                        <textarea class="form-control" required name="questionTitle" id="questionTitle" style="padding-bottom:10px;"
                                            class="form-control my-1" type="text" placeholder="Enter Question"></textarea>
                                        <div class="row pt-2">
                                            <div class="col-xl-2 col-lg-2">
                                                <label for="choiceA" class="form-label">Choice A:</label>
                                            </div>
                                            <div class="col-xl-10 col-lg-10">
                                                <input class="form-control" name="choiceA" class="form-control my-1 w-25"
                                                    type="text" placeholder="Enter Choice A">
                                            </div>
                                        </div>
                                        <div class="row pt-2">
                                            <div class="col-xl-2 col-lg-2">
                                                <label for="choiceB" class="form-label">Choice B:</label>
                                            </div>
                                            <div class="col-xl-10 col-lg-10">
                                                <input class="form-control" name="choiceB" class="form-control my-1  w-25"
                                                    type="text" placeholder="Enter Choice B">
                                            </div>
                                        </div>
                                        <div class="row pt-2">
                                            <div class="col-xl-2 col-lg-2">
                                                <label for="choiceC" class="form-label">Choice C:</label>
                                            </div>
                                            <div class="col-xl-10 col-lg-10">
                                                <input class="form-control" name="choiceC" class="form-control my-1  w-25"
                                                    type="text" placeholder="Enter Choice C">
                                            </div>
                                        </div>
                                        <div class="row pt-2">
                                            <div class="col-xl-2 col-lg-2">
                                                <label for="choiceD" class="form-label">Choice D:</label>
                                            </div>
                                            <div class="col-xl-10 col-lg-10">
                                                <input class="form-control" name="choiceD" class="form-control my-1  w-25"
                                                    type="text" placeholder="Enter Choice D">
                                            </div>
                                        </div>
                                        <div style="padding-bottom:10px;" class="row pt-2">
                                            <div class="col-xl-2 col-lg-2">
                                                <label for="choiceB" class="form-label">Correct Choice:</label>
                                            </div>
                                            <div class="col-xl-10 col-lg-10">
                                                <select class="form-control" name="correctChoice"
                                                    class="form-control my-1  w-25" type="text"
                                                    placeholder="Correct Choice">
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="padding-bottom:10px;">
                                        <label for="fullAnswerExplanation" class="form-label">Full Explanation:</label>
                                        <textarea class="form-control my-1" name="fullAnswerExplanation" placeholder="Enter Full Answer Explanation"></textarea>
                                    </div>
                                    <button type="submit" class="btn bg-success">Submit</button>

                                </form>
                            </div>
                            <p class="ajax-response"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                CKEDITOR.replace('questionTitle');
                CKEDITOR.replace('fullAnswerExplanation');
            });
        </script>
    </main>
@endsection
