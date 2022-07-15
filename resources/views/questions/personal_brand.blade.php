@extends('utama.header')
@section('content')
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet" />
    <div class="container body-color">
        <div class="row justify-content-center">
            <div class="col-md-8 ">
                <div class="row" style="justify-content: center;margin-bottom:1rem">
                    <img src="{{ asset('frontend') }}/images/ALLIN-LOGO-NEW-WHITE.webp" style="width: 20%" alt="">
                </div>
                <div class="heading">
                    <h1 class="heading__text">Personal Branding</h1>
                </div>
                <div class="stepper-wrapper">
                    <div class="stepper-item completed">
                        <div class="step-counter">1</div>
                        <div class="step-name">Akademis</div>
                    </div>
                    <div class="stepper-item completed">
                        <div class="step-counter">2</div>
                        <div class="step-name">Aktivitas</div>
                    </div>
                    <div class="stepper-item completed">
                        <div class="step-counter">3</div>
                        <div class="step-name">Prestasi</div>
                    </div>
                    <div class="stepper-item active">
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
                    <form method="POST" action="/personal_brand">
                        @csrf
                        <div class="quiz-form__quiz">

                            {{-- <input type="hidden" name="id_guest" value="{{ Session::get('id_guest') }}" /> --}}
                            <input type="hidden" name="number" value="0" />
                            <input type="hidden" name="category[0]" value="personal_brand" />
                            <input type="hidden" name="questions_number[0]" value="1" />
                            <p class="quiz-form__question">
                                1. Apakah kamu telah mengetahui personal interestmu? (diluar academic)
                            </p>
                            <label class="quiz-form__ans" for="q11">
                                <input type="radio" name="answer[0]" id="q11" value="2"
                                    {{ $retVal = !isset($personal_branding[0]) ? '' : ($personal_branding[0]['answer'] == '2' ? 'checked' : '') }}
                                    required />
                                <span class="design"></span>
                                <span class="text">Iya</span>
                            </label>
                            <label class="quiz-form__ans" for="q12">
                                <input type="radio" name="answer[0]" id="q12" value="0"
                                    {{ $retVal = !isset($personal_branding[0]) ? '' : ($personal_branding[0]['answer'] == '0' ? 'checked' : '') }}
                                    required />
                                <span class="design"></span>
                                <span class="text">Tidak</span>
                            </label>
                        </div>

                        <div class="quiz-form__quiz">
                            <input type="hidden" name="number" value="1" />
                            <input type="hidden" name="category[1]" value="personal_brand" />
                            <input type="hidden" name="questions_number[1]" value="2" />
                            <p class="quiz-form__question">
                                2. Apakah kamu telah mengembangkan personal interestmu menjadi suatu kemampuan/skill?
                            </p>
                            <label class="quiz-form__ans" for="q16">
                                <input type="radio" name="answer[1]" id="q16" value="4"
                                    {{ $retVal = !isset($personal_branding[1]) ? '' : ($personal_branding[1]['answer'] == '4' ? 'checked' : '') }}
                                    required />
                                <span class="design"></span>
                                <span class="text">Iya</span>
                            </label>
                            <label class="quiz-form__ans" for="q17">
                                <input type="radio" name="answer[1]" id="q17" value="0"
                                    {{ $retVal = !isset($personal_branding[1]) ? '' : ($personal_branding[1]['answer'] == '0' ? 'checked' : '') }}
                                    required />
                                <span class="design"></span>
                                <span class="text">Tidak</span>
                            </label>
                        </div>

                        <div class="quiz-form__quiz">
                            <input type="hidden" name="number" value="2" />
                            <input type="hidden" name="category[2]" value="personal_brand" />
                            <input type="hidden" name="questions_number[2]" value="3" />
                            <p class="quiz-form__question">
                                3. Apakah kamu telah mengetahui arah/tujuan karirmu?
                            </p>
                            <label class="quiz-form__ans" for="q21">
                                <input type="radio" name="answer[2]" id="q21" value="2"
                                    {{ $retVal = !isset($personal_branding[2]) ? '' : ($personal_branding[2]['answer'] == '2' ? 'checked' : '') }}
                                    required />
                                <span class="design"></span>
                                <span class="text">Iya</span>
                            </label>
                            <label class="quiz-form__ans" for="q22">
                                <input type="radio" name="answer[2]" id="q22" value="0"
                                    {{ $retVal = !isset($personal_branding[2]) ? '' : ($personal_branding[2]['answer'] == '0' ? 'checked' : '') }}
                                    required />
                                <span class="design"></span>
                                <span class="text">Tidak</span>
                            </label>
                        </div>

                        <div class="quiz-form__quiz">
                            <input type="hidden" name="number" value="3" />
                            <input type="hidden" name="category[3]" value="personal_brand" />
                            <input type="hidden" name="questions_number[3]" value="4" />
                            <p class="quiz-form__question">
                                4. Apakah kamu telah mengetahui dan menentukan jurusan apa yang akan diambil?
                            </p>
                            <label class="quiz-form__ans" for="q26">
                                <input type="radio" name="answer[3]" id="q26" value="2"
                                    {{ $retVal = !isset($personal_branding[3]) ? '' : ($personal_branding[3]['answer'] == '2' ? 'checked' : '') }}
                                    required />
                                <span class="design"></span>
                                <span class="text">Iya</span>
                            </label>
                            <label class="quiz-form__ans" for="q27">
                                <input type="radio" name="answer[3]" id="q27" value="0"
                                    {{ $retVal = !isset($personal_branding[3]) ? '' : ($personal_branding[3]['answer'] == '0' ? 'checked' : '') }}
                                    required />
                                <span class="design"></span>
                                <span class="text">Tidak</span>
                            </label>
                        </div>

                        <div class="quiz-form__quiz">
                            <input type="hidden" name="number" value="4" />
                            <input type="hidden" name="category[4]" value="personal_brand" />
                            <input type="hidden" name="questions_number[4]" value="5" />
                            <p class="quiz-form__question">
                                5. Apakah kamu dapat mendeskripsikan diri dengan merefleksikan academic interestmu dengan
                                personal
                                interestmu?
                            </p>
                            <label class="quiz-form__ans" for="q29">
                                <input type="radio" name="answer[4]" id="q29" value="5"
                                    {{ $retVal = !isset($personal_branding[4]) ? '' : ($personal_branding[4]['answer'] == '5' ? 'checked' : '') }}
                                    required />
                                <span class="design"></span>
                                <span class="text">Iya</span>
                            </label>
                            <label class="quiz-form__ans" for="q30">
                                <input type="radio" name="answer[4]" id="q30" value="0"
                                    {{ $retVal = !isset($personal_branding[4]) ? '' : ($personal_branding[4]['answer'] == '0' ? 'checked' : '') }}
                                    required />
                                <span class="design"></span>
                                <span class="text">Tidak</span>
                            </label>
                        </div>

                        <div class="row tombol">
                            <div class="col-md-12">
                                <input class="submit back-button" type="button" value="Back"
                                    onclick="location.href='/soal_prestasi'" />
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
                    url: "{{ URL::to('/personal_brand_session') }}",
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
