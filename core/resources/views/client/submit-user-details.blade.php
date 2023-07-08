<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Multi Step Bootstrap Form with animations</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel="stylesheet" href="{{ asset('assets/custom/style.css') }}">
</head>

<body>
    <!-- partial:index.partial.html -->

    <!--PEN HEADER-->
    <header class="header">
        <h1 class="header__title">Update Your Details</h1>
    </header>
    <!--PEN CONTENT     -->
    <div class="content">
        <!--content inner-->
        <div class="content__inner">
            <div class="container">
                <!--content title-->
                <!--animations form-->
                <form hidden class="pick-animation my-4">
                    <div class="form-row">
                        <div class="col-5 m-auto">
                            <select class="pick-animation__select form-control">
                                <option value="scaleIn" selected="selected">ScaleIn</option>
                                <option value="scaleOut" selected="selected">ScaleOut</option>
                                <option value="slideHorz">SlideHorz</option>
                                <option value="slideVert">SlideVert</option>
                                <option value="fadeIn">FadeIn</option>
                            </select>
                        </div>
                    </div>
                </form>
                <!--content title-->
            </div>
            <div class="container overflow-hidden">
                <!--multisteps-form-->
                <div class="multisteps-form">
                    <!--progress bar-->
                    <div class="row">
                        <div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
                            <div class="multisteps-form__progress">
                                <button class="multisteps-form__progress-btn js-active" type="button"
                                    title="User Info">User
                                    Info</button>
                                <button class="multisteps-form__progress-btn js-active" type="button"
                                    title="Address">Preffered
                                    Tasks</button>
                                <button class="multisteps-form__progress-btn js-active" type="button"
                                    title="Order Info">Education
                                    Info</button>
                                <button class="multisteps-form__progress-btn js-active" type="button"
                                    title="Comments">Submit
                                </button>
                            </div>
                        </div>
                    </div>
                    <!--form panels-->
                    <div class="row">
                        <div class="col-12 col-lg-8 m-auto">
                            <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active"
                                data-animation="scaleIn">
                                <h3 class="multisteps-form__title">Submit Details</h3>
                                <div class="button-row d-flex mt-4">
                                    <a class="btn btn-primary js-btn-prev" href="#" title="Prev">Prev</a>
                                    <a class="btn btn-success ml-auto js-btn-next" href="{{ route('home') }}"
                                        title="Next">Submit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- partial -->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'></script>
        <script src="{{ asset('assets/custom/script.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>

</html>
