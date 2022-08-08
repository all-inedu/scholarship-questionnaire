@extends('utama.header')
@section('content')
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet" />
    <div class="container body-color">
        <div class="row justify-content-center">
            <div class="col-md-8 ">
                <div class="row" style="justify-content: center;margin-bottom:1rem">
                    <img src="{{ asset('frontend') }}/images/EDUVERSE LOGO-13.webp" style="width: 35%" alt="">
                </div>
                <div class="heading">
                    <h1 class="heading__text">Aktivitas</h1>
                </div>
                <div class="stepper-wrapper">
                    <div class="stepper-item completed">
                        <div class="step-counter">1</div>
                        <div class="step-name">Akademis</div>
                    </div>
                    <div class="stepper-item active">
                        <div class="step-counter">2</div>
                        <div class="step-name">Aktivitas</div>
                    </div>
                    <div class="stepper-item">
                        <div class="step-counter">3</div>
                        <div class="step-name">Prestasi</div>
                    </div>
                    <div class="stepper-item">
                        <div class="step-counter">4</div>
                        <div class="step-name">Personal Branding</div>
                    </div>
                    <div class="stepper-item">
                        <div class="step-counter">5</div>
                        <div class="step-name">Komunikasi</div>
                    </div>
                </div>
                <!-- Quiz section -->
                <div class="quiz">
                    <form method="POST" action="/aktivitas">
                        @csrf
                        <div class="quiz-form__quiz">
                            {{-- <input type="hidden" name="id_guest" value="{{ Session::get('id_guest') }}" /> --}}
                            <input type="hidden" name="number" value="0" />
                            <input type="hidden" name="category[0]" value="aktivitas" />
                            <input type="hidden" name="questions_number[0]" value="1" />
                            <p class="quiz-form__question">
                                1. Berapa jumlah extracurricular yang pernah diikuti?
                            </p>
                            <label class="quiz-form__ans" for="q11">
                                <input type="radio" name="answer[0]" id="q11" value="0"
                                    {{ $retVal = !isset($aktivitas[0]) ? '' : ($aktivitas[0]['answer'] == '0' ? 'checked' : '') }}
                                    required />
                                <span class="design"></span>
                                <span class="text">0</span>
                            </label>
                            <label class="quiz-form__ans" for="q12">
                                <input type="radio" name="answer[0]" id="q12" value="1"
                                    {{ $retVal = !isset($aktivitas[0]) ? '' : ($aktivitas[0]['answer'] == '1' ? 'checked' : '') }}
                                    required />
                                <span class="design"></span>
                                <span class="text">1-2</span>
                            </label>
                            <label class="quiz-form__ans" for="q13">
                                <input type="radio" name="answer[0]" id="q13" value="1"
                                    {{ $retVal = !isset($aktivitas[0]) ? '' : ($aktivitas[0]['answer'] == '1' ? 'checked' : '') }}
                                    required />
                                <span class="design"></span>
                                <span class="text">3-4</span>
                            </label>
                            <label class="quiz-form__ans" for="q14">
                                <input type="radio" name="answer[0]" id="q14" value="2"
                                    {{ $retVal = !isset($aktivitas[0]) ? '' : ($aktivitas[0]['answer'] == '2' ? 'checked' : '') }}
                                    required />
                                <span class="design"></span>
                                <span class="text">4-5</span>
                            </label>
                            <label class="quiz-form__ans" for="q15">
                                <input type="radio" name="answer[0]" id="q15" value="3"
                                    {{ $retVal = !isset($aktivitas[0]) ? '' : ($aktivitas[0]['answer'] == '3' ? 'checked' : '') }}
                                    required />
                                <span class="design"></span>
                                <span class="text">&gt; 5</span>
                            </label>
                        </div>

                        <div class="quiz-form__quiz">
                            <input type="hidden" name="number" value="1" />
                            <input type="hidden" name="category[1]" value="aktivitas" />
                            <input type="hidden" name="questions_number[1]" value="2" />
                            <p class="quiz-form__question">
                                2. Berapa jumlah pengalaman menjadi ketua/pengurus/committee
                                extracurricular/komunitas/kegiatan yang
                                pernah dijalani?
                            </p>
                            <label class="quiz-form__ans" for="q16">
                                <input type="radio" name="answer[1]" id="q16" value="0"
                                    {{ $retVal = !isset($aktivitas[1]) ? '' : ($aktivitas[1]['answer'] == '0' ? 'checked' : '') }}
                                    required />
                                <span class="design"></span>
                                <span class="text">0</span>
                            </label>
                            <label class="quiz-form__ans" for="q17">
                                <input type="radio" name="answer[1]" id="q17" value="2"
                                    {{ $retVal = !isset($aktivitas[1]) ? '' : ($aktivitas[1]['answer'] == '2' ? 'checked' : '') }}
                                    required />
                                <span class="design"></span>
                                <span class="text">1-2</span>
                            </label>
                            <label class="quiz-form__ans" for="q18">
                                <input type="radio" name="answer[1]" id="q18" value="3"
                                    {{ $retVal = !isset($aktivitas[1]) ? '' : ($aktivitas[1]['answer'] == '3' ? 'checked' : '') }}
                                    required />
                                <span class="design"></span>
                                <span class="text">3-4</span>
                            </label>
                            <label class="quiz-form__ans" for="q19">
                                <input type="radio" name="answer[1]" id="q19" value="4"
                                    {{ $retVal = !isset($aktivitas[1]) ? '' : ($aktivitas[1]['answer'] == '4' ? 'checked' : '') }}
                                    required />
                                <span class="design"></span>
                                <span class="text">5-6</span>
                            </label>
                            <label class="quiz-form__ans" for="q20">
                                <input type="radio" name="answer[1]" id="q20" value="6"
                                    {{ $retVal = !isset($aktivitas[1]) ? '' : ($aktivitas[1]['answer'] == '6' ? 'checked' : '') }}
                                    required />
                                <span class="design"></span>
                                <span class="text">&gt; 6</span>
                            </label>
                        </div>

                        <div class="quiz-form__quiz">
                            <input type="hidden" name="number" value="2" />
                            <input type="hidden" name="category[2]" value="aktivitas" />
                            <input type="hidden" name="questions_number[2]" value="3" />
                            <p class="quiz-form__question">
                                3. Berapa jumlah kegiatan volunteer yang pernah diikuti?
                            </p>
                            <label class="quiz-form__ans" for="q21">
                                <input type="radio" name="answer[2]" id="q21" value="0"
                                    {{ $retVal = !isset($aktivitas[2]) ? '' : ($aktivitas[2]['answer'] == '0' ? 'checked' : '') }}
                                    required />
                                <span class="design"></span>
                                <span class="text">0</span>
                            </label>
                            <label class="quiz-form__ans" for="q22">
                                <input type="radio" name="answer[2]" id="q22" value="2"
                                    {{ $retVal = !isset($aktivitas[2]) ? '' : ($aktivitas[2]['answer'] == '2' ? 'checked' : '') }}
                                    required />
                                <span class="design"></span>
                                <span class="text">1-2</span>
                            </label>
                            <label class="quiz-form__ans" for="q23">
                                <input type="radio" name="answer[2]" id="q23" value="3"
                                    {{ $retVal = !isset($aktivitas[2]) ? '' : ($aktivitas[2]['answer'] == '3' ? 'checked' : '') }}
                                    required />
                                <span class="design"></span>
                                <span class="text">3-4</span>
                            </label>
                            <label class="quiz-form__ans" for="q24">
                                <input type="radio" name="answer[2]" id="q24" value="4"
                                    {{ $retVal = !isset($aktivitas[2]) ? '' : ($aktivitas[2]['answer'] == '4' ? 'checked' : '') }}
                                    required />
                                <span class="design"></span>
                                <span class="text">5-6</span>
                            </label>
                            <label class="quiz-form__ans" for="q25">
                                <input type="radio" name="answer[2]" id="q25" value="6"
                                    {{ $retVal = !isset($aktivitas[2]) ? '' : ($aktivitas[2]['answer'] == '6' ? 'checked' : '') }}
                                    required />
                                <span class="design"></span>
                                <span class="text">&gt; 6</span>
                            </label>
                        </div>

                        <div class="quiz-form__quiz">
                            <input type="hidden" name="number" value="3" />
                            <input type="hidden" name="category[3]" value="aktivitas" />
                            <input type="hidden" name="questions_number[3]" value="4" />
                            <p class="quiz-form__question">
                                4. Berapa jumlah pengalaman menjadi internship/parttime yang pernah dijalani?
                            </p>
                            <label class="quiz-form__ans" for="q26">
                                <input type="radio" name="answer[3]" id="q26" value="0"
                                    {{ $retVal = !isset($aktivitas[3]) ? '' : ($aktivitas[3]['answer'] == '0' ? 'checked' : '') }}
                                    required />
                                <span class="design"></span>
                                <span class="text">0</span>
                            </label>
                            <label class="quiz-form__ans" for="q27">
                                <input type="radio" name="answer[3]" id="q27" value="2"
                                    {{ $retVal = !isset($aktivitas[3]) ? '' : ($aktivitas[3]['answer'] == '2' ? 'checked' : '') }}
                                    required />
                                <span class="design"></span>
                                <span class="text">1-2</span>
                            </label>
                            <label class="quiz-form__ans" for="q28">
                                <input type="radio" name="answer[3]" id="q28" value="3"
                                    {{ $retVal = !isset($aktivitas[3]) ? '' : ($aktivitas[3]['answer'] == '3' ? 'checked' : '') }}
                                    required />
                                <span class="design"></span>
                                <span class="text">&gt; 3</span>
                            </label>
                        </div>

                        <div class="quiz-form__quiz">
                            <input type="hidden" name="number" value="4" />
                            <input type="hidden" name="category[4]" value="aktivitas" />
                            <input type="hidden" name="questions_number[4]" value="5" />
                            <p class="quiz-form__question">
                                5. Apakah kamu pernah menginisiasikan sebuah komunitas/kegiatan/project?
                            </p>
                            <label class="quiz-form__ans" for="q29">
                                <input type="radio" name="answer[4]" id="q29" value="7"
                                    {{ $retVal = !isset($aktivitas[4]) ? '' : ($aktivitas[4]['answer'] == '7' ? 'checked' : '') }}
                                    required />
                                <span class="design"></span>
                                <span class="text">Pernah</span>
                            </label>
                            <label class="quiz-form__ans" for="q30">
                                <input type="radio" name="answer[4]" id="q30" value="0"
                                    {{ $retVal = !isset($aktivitas[4]) ? '' : ($aktivitas[4]['answer'] == '0' ? 'checked' : '') }}
                                    required />
                                <span class="design"></span>
                                <span class="text">Belum Pernah</span>
                            </label>
                        </div>

                        <div class="row tombol">
                            <div class="col-md-12">
                                <input class="submit back-button" type="button" value="Back"
                                    onclick="location.href='{{ Session::get('decision.answer') == 'No' ? '/akademik_no_view' : '/akademik_yes_view' }}'" />
                                <input class="submit" type="submit" value="Next" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $("input[type=radio]").each(function() {
            $(this).on('change', function() {
                var number = $(this).closest('.quiz-form__quiz').find(
                    'input[name="number"]').val();
                var questions_number = $(this).closest('.quiz-form__quiz').find(
                    'input[name="questions_number[' + number + ']"]').val();

                // alert(questions_number);
                $.ajax({
                    type: "post",
                    url: "{{ URL::to('/aktivitas_session') }}",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        number: number,
                        answer: $(this).val(),
                        id_guest: $('input[name="id_guest"]').val(),

                        questions_number: $(this).closest('.quiz-form__quiz').find(
                            'input[name="questions_number[' + number + ']"]').val(),

                        category: $(this).closest('.quiz-form__quiz').find(
                            'input[name="category[' + number + ']"]').val(),
                    },
                    success: function(result) {
                        console.log(result);
                    },
                    error: function(data, textStatus, errorThrown) {
                        console.log(errorThrown);

                    },

                });
            })
        })
    </script>
@endsection
