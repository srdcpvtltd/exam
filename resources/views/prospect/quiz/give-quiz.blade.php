@extends('prospect.layout.index')
@section('title')
    Quiz
@endsection
@section('content')
    <div class="container">
        <div class="row">
            {{-- <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="col-lg-4">
                            <h4>Quiz Title: {{ $quiz->title }}</h4>
                        </div>
                        <div class="col-lg-4">
                            <h5>Exam Time: {{ $quiz->duration }} Minutes Seconds</h5>
                        </div>
                        <div class="col-lg-4">
                            <h4>Timer: <div id="timer_style"><label id="minutes">00</label>:<label id="seconds">00</label>
                                </div>
                            </h4>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="col-md-12">
                <div class="card card-body">
                    <div class="media mb-0">
                        <div class="media-body col-lg-4">
                            <h4 class="font-weight-semibold mb-0 ">
                                Quiz Title: {{ $quiz->title }}
                            </h4>
                        </div>
                        <div class="media-body col-lg-4">
                            <h4 class="font-weight-semibold mb-0 text-center">
                                Timer: <div id="timer_style"><label id="minutes">00</label>:<label
                                        id="seconds">00</label>
                                </div>
                            </h4>
                        </div>
                        <div class="media-body col-lg-4">
                            <h5 class="font-weight-semibold mb-0 text-right">
                                Exam Time: {{ $quiz->duration }} Minutes
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        {{-- <div class="text-center">
                            <form method="post" action="{{ route('prospect.store.answer') }}">
                                @csrf
                                <input type="hidden" name="quiz_id" value="{{ $quiz->id }}" readonly required>
                                <input id="start_time" type="hidden" name="start_time" value="{{ $start_time }}" readonly
                                    required>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($questions as $question)
                                    <h5 style="text-align:left;">Question {{ $i }} : {{ $question->question }}
                                    </h5>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="answer[{{ $i }}]"
                                            value="option_a" required>
                                        <label class="form-check-label">{{ $question->option_a }}</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="answer[{{ $i }}]"
                                            value="option_b" required>
                                        <label class="form-check-label">{{ $question->option_b }}</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="answer[{{ $i }}]"
                                            value="option_c" required>
                                        <label class="form-check-label">{{ $question->option_c }}</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="answer[{{ $i }}]"
                                            value="option_d" required>
                                        <label class="form-check-label">{{ $question->option_d }}</label>
                                    </div>
                                    <hr>
                                    @php
                                        $i++;
                                    @endphp
                                @endforeach
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div> --}}

                        <div class="quiz-container">
                            <div class="quiz-question" data-question="1">
                                <form method="post" action="{{ route('prospect.store.answer') }}">
                                    @csrf
                                    <input type="hidden" name="quiz_id" value="{{ $quiz->id }}" readonly required>
                                    <input id="start_time" type="hidden" name="start_time" value="{{ $start_time }}"
                                        readonly required>

                                    @php
                                        $i = 0;
                                    @endphp

                                    @foreach ($questions as $question)
                                        <div class="question quiz-question-container" id="question{{ $i }}"
                                            style="{{ $i > 0 ? 'display: none;' : '' }}">
                                            <div id="question">
                                            <h5  style="text-align:left;">Question {{ $i + 1 }} :
                                                {{ $question->question }}</h5>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="answer[{{ $i + 1 }}]" value="option_a" required>
                                                        <label class="form-check-label">{{ $question->option_a }}</label>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="answer[{{ $i + 1 }}]" value="option_b" required>
                                                        <label class="form-check-label">{{ $question->option_b }}</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <br>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="answer[{{ $i + 1 }}]" value="option_c" required>
                                                        <label class="form-check-label">{{ $question->option_c }}</label>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="answer[{{ $i + 1 }}]" value="option_d" required>
                                                        <label class="form-check-label">{{ $question->option_d }}</label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        </div>
                                        @php
                                            $i++;
                                        @endphp
                                    @endforeach

                                    <div class="quiz-navigation mt-3" style="text-align: center;">
                                        <button type="button" class="btn btn-secondary prev-question"
                                            style="float: left; display: none;">Previous</button>
                                        <button type="button" class="btn btn-primary next-question"
                                            style="float: right;">Next</button>
                                        <button type="submit" class="btn btn-success submit-quiz"
                                            style="margin: 0 auto;">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <!-- Left side div showing all the questions -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Questions ({{ count($questions) }})</h5>
                        <div class="container">
                            <div class="row">
                                @foreach ($questions as $key => $question)
                                    <div class="col-2 mb-2">
                                        <button type="button"
                                            class="btn btn-outline-primary rounded-pill btn-xs load-question"
                                            value="{{ $question->id }}">
                                            {{ $key + 1 }}</button>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            var totalQuestions = {{ count($questions) }};
            var currentQuestion = 1;

            $('.submit-quiz').hide();
            $('.next-question').click(function() {
                if (currentQuestion < totalQuestions) {
                    $('.quiz-question .question').hide();
                    $('#question' + currentQuestion).show();
                    currentQuestion++;
                    $('.prev-question').show();
                }
                if (currentQuestion === totalQuestions) {
                    $('.next-question').hide();
                    $('.submit-quiz').show();
                }
            });

            $('.prev-question').click(function() {
                if (currentQuestion > 1) {
                    currentQuestion--;
                    $('.quiz-question .question').hide();
                    $('#question' + (currentQuestion - 1)).show();
                    $('.submit-quiz').hide();
                }
                if (currentQuestion === 1) {
                    $('.prev-question').hide();
                }
                $('.next-question').show();
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $(document).on('click', '.load-question', function() {

                var question_id = $(this).val();
                var question_no = $(this).text();
                console.log(question_no);
                $.ajax({
                    type: "POST",
                    url: '{{ url('prospect/get_question') }}',
                    data: {
                        'id': question_id,
                        _token: "{{ csrf_token() }}"
                    },
                    dataType: 'json',
                    success: function(response) {
                        $('#question').empty().append(
                            '<div class="question quiz-question-container" id="question' + question_no + '">' +
                                '<h5 style="text-align:left;">Question ' + question_no + ' : ' + response.question + '</h5>' +
                                '<div class="row">' +
                                    '<div class="col-lg-6">' +
                                        '<div class="form-check form-check-inline">' +
                                            '<input class="form-check-input" type="radio" name="answer[' + question_no + ']" value="option_a" required>' +
                                            '<label class="form-check-label">' + response.option_a + '</label>' +
                                        '</div>' +
                                    '</div>' +
                                    '<div class="col-lg-6">' +
                                        '<div class="form-check form-check-inline">' +
                                            '<input class="form-check-input" type="radio" name="answer[' + question_no + ']" value="option_b" required>' +
                                            '<label class="form-check-label">' + response.option_b + '</label>' +
                                        '</div>' +
                                    '</div>' +
                                '</div>' +
                                '<br>' +
                                '<div class="row">' +
                                    '<div class="col-lg-6">' +
                                        '<div class="form-check form-check-inline">' +
                                            '<input class="form-check-input" type="radio" name="answer[' + question_no + ']" value="option_c" required>' +
                                            '<label class="form-check-label">' + response.option_c + '</label>' +
                                        '</div>' +
                                    '</div>' +
                                    '<div class="col-lg-6">' +
                                        '<div class="form-check form-check-inline">' +
                                            '<input class="form-check-input" type="radio" name="answer[' + question_no + ']" value="option_d" required>' +
                                            '<label class="form-check-label">' + response.option_d + '</label>' +
                                        '</div>' +
                                    '</div>' +
                                '</div>' +
                            '</div>'
                        );
                    },
                });

            });
        });
    </script>
@endsection
