@extends('prospect.layout.index')
@section('title')
    Quiz
@endsection
@section('content')
    {{-- <link rel="stylesheet" href="{{ asset('quiz/css/bootstrap.min.css') }}"> --}}
    <!-- Animate-css include -->
    <link rel="stylesheet" href="{{ asset('quiz/css/animate.min.css') }}">
    <!-- Main-StyleSheet include -->
    <link rel="stylesheet" href="{{ asset('quiz/css/style.css') }}">
    {{-- <div class="card">
        <div class="card-header">
            <h4>Quiz Title: {{ $quiz->title }}</h4>
            <h5>Exam Time: {{ $quiz->duration }} Minutes or {{ $quiz->duration * 60 }} Seconds</h5>
            <h4>Timer: <div id="timer_style"><label id="minutes">00</label>:<label id="seconds">00</label></div>
            </h4>
        </div>
        <div class="card-body">
            <div class="text-center">
                <form method="post" action="{{ route('prospect.store.answer') }}">
                    @csrf
                    <input type="hidden" name="quiz_id" value="{{ $quiz->id }}" readonly required>
                    <input id="start_time" type="hidden" name="start_time" value="{{ $start_time }}" readonly required>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($questions as $question)
                        <h5 style="text-align:left;">Question: {{ $question->question }}</h5 class="text-left">
                        <select name="answer[{{ $i++ }}]" class="form-control" required>
                            <option value="">Select</option>
                            <option value="option_a">{{ $question->option_a }}</option>
                            <option value="option_b">{{ $question->option_b }}</option>
                            <option value="option_c">{{ $question->option_c }}</option>
                            <option value="option_d">{{ $question->option_d }}</option>
                        </select>

                        <hr>
                    @endforeach
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div> --}}

    <div class="wrapper position-relative">
        <div class="top_content_area pt-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="logo_area ms-5">
                            <a href="index-2.html">
                                {{-- <img src="assets/images/logo/logo.png" alt="image_not_found"> --}}
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 d-none d-md-block">
                        <div class="count_box overflow-hidden rounded-pill d-flex float-end me-5">
                            <div class="count_clock ps-2">
                                {{-- <img src="assets/images/counter/clock.png" alt="image_not_found"> --}}
                            </div>
                            <div class="count_title px-1">
                                <h4 class="pe-5">Quiz</h4>
                                <span>Time start</span>
                                <h4>Exam Time: {{ $quiz->duration }}</h4>
                            </div>
                            <div class="count_number rounded-pill bg-white overflow-hidden me-2 text-center"
                                data-countdown="2022/10/24">
                                {{-- <h5>Exam Time: {{ $quiz->duration }} Minutes or {{ $quiz->duration * 60 }} Seconds</h5> --}}
                                <h4>
                                    <div id="timer_style" style="margin-top: 1.5rem"><label id="minutes">00</label>:<label
                                            id="seconds">00</label></div>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <form class="multisteps_form position-relative overflow-hidden" id="wizard" method="POST"
                action="{{ route('prospect.store.answer') }}">
                @csrf
                <input type="hidden" name="quiz_id" value="{{ $quiz->id }}" readonly required>
                <input id="start_time" type="hidden" name="start_time" value="{{ $start_time }}" readonly required>

                <div class="form_header_content text-center pt-4">
                    <h2>QUIZ</h2>
                    <span>Fill out this Tirnva quiz for fun!</span>
                </div>

                @php
                    $i = 1;
                @endphp

                @foreach ($questions as $question)
                    <div class="multisteps_form_panel step">
                        <!-- Form-content -->
                        <span class="question_number text-uppercase mb-3 float-end">QUESTION
                            {{ $i }}/{{ count($questions) }}</span>
                        <div class="progress rounded-pill">
                            <div class="progress-bar" role="progressbar"
                                style="width: {{ ($i / count($questions)) * 100 }}%;"
                                aria-valuenow="{{ ($i / count($questions)) * 100 }}" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                        <h4 class="question_title px-5 py-3 animate__animated animate__fadeInRight animate_25ms">
                            {{ $question->question }}</h4>
                        <!-- Form-items -->
                        <div class="form_items ps-5">
                            <ul class="list-unstyled p-0">
                                <li
                                    class="active step_1 ps-5 rounded-pill animate__animated animate__fadeInRight animate_50ms">
                                    <input type="radio" id="opt_1_{{ $i }}"
                                        name="answer[{{ $i }}]" value="{{ $question->option_a }}" required>
                                    <label for="opt_1_{{ $i }}">{{ $question->option_a }}</label>
                                </li>
                                <li class="step_1 ps-5 rounded-pill animate__animated animate__fadeInRight animate_100ms">
                                    <input type="radio" id="opt_2_{{ $i }}"
                                        name="answer[{{ $i }}]" value="{{ $question->option_b }}">
                                    <label for="opt_2_{{ $i }}">{{ $question->option_b }}</label>
                                </li>
                                <li class="step_1 ps-5 rounded-pill animate__animated animate__fadeInRight animate_150ms">
                                    <input type="radio" id="opt_3_{{ $i }}"
                                        name="answer[{{ $i }}]" value="{{ $question->option_c }}">
                                    <label for="opt_3_{{ $i }}">{{ $question->option_c }}</label>
                                </li>
                                <li class="step_1 ps-5 rounded-pill animate__animated animate__fadeInRight animate_200ms">
                                    <input type="radio" id="opt_4_{{ $i }}"
                                        name="answer[{{ $i }}]" value="{{ $question->option_d }}">
                                    <label for="opt_4_{{ $i }}">{{ $question->option_d }}</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    @php
                        $i++;
                    @endphp
                @endforeach
            </form>
        </div>

        <!---------- Form Button ---------->
        <div class="form_btn py-5 text-center">
            <button type="submit" class="f_btn disable text-uppercase rounded-pill text-white" id="prevBtn"
                onclick="nextPrev(-1)"><span><i class="fas fa-arrow-left"></i></span> Last Question</button>
            <button type="button" class="f_btn active text-uppercase rounded-pill text-white" id="nextBtn"
                onclick="nextPrev(1)"> Next Question <i class="fas fa-arrow-right"></i></button>
        </div>
    </div>

    <!-- jQuery-js include -->
    <script src="{{ asset('quiz/js/jquery-3.6.0.min.js') }}"></script>
    <!-- Countdown-js include -->
    <script src="{{ asset('quiz/js/countdown.js') }}"></script>
    <!-- Bootstrap-js include -->
    <script src="{{ asset('quiz/js/bootstrap.min.js') }}"></script>
    <!-- jQuery-validate-js include -->
    <script src="{{ asset('quiz/js/jquery.validate.min.js') }}"></script>
    <!-- Custom-js include -->
    <script src="{{ asset('quiz/js/script.js') }}"></script>

    <script>
        var minutesLabel = document.getElementById("minutes");
        var secondsLabel = document.getElementById("seconds");
        var totalSeconds = 0;
        setInterval(setTime, 1000);

        function setTime() {
            ++totalSeconds;
            secondsLabel.innerHTML = pad(totalSeconds % 60);
            minutesLabel.innerHTML = pad(parseInt(totalSeconds / 60));
        }

        function pad(val) {
            var valString = val + "";
            if (valString.length < 2) {
                return "0" + valString;
            } else {
                return valString;
            }
        }

        function myFunction() {
            window.setTime = null;
            window.pad = null;
            document.getElementById('timer_style').innerHTML = "Time is Up!";
            document.getElementById('timer_style').style.color = 'red'
        }
        window.setTimeout(myFunction, {{ $quiz->duration * 60 * 1000 }});
    </script>
@endsection
