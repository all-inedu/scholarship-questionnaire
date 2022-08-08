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
                    <h1 class="heading__text">Komunikasi</h1>
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
                    <div class="stepper-item completed">
                        <div class="step-counter">4</div>
                        <div class="step-name">Personal Branding</div>
                    </div>
                    <div class="stepper-item active">
                        <div class="step-counter">5</div>
                        <div class="step-name">Komunikasi</div>
                    </div>
                </div>
                <!-- Quiz section -->
                <div class="quiz">
                    <form method="POST" action="/komunikasi">
                        @csrf
                        <div class="quiz-form__quiz">
                            {{-- <input type="hidden" name="id_guest" value="{{ Session::get('id_guest') }}" /> --}}
                            <input type="hidden" name="number" value="0" />
                            <input type="hidden" name="category[0]" value="komunikasi" />
                            <input type="hidden" name="questions_number[0]" value="1" />
                            <p class="quiz-form__question">
                                1. Apakah kamu familiar dengan struktur penulisan essay personal statement dan/atau pernah
                                menulis
                                essay tersebut?
                            </p>
                            <label class="quiz-form__ans" for="q11">
                                <input type="radio" name="answer[0]" id="q11" value="5"
                                    {{ $retVal = !isset($komunikasi[0]) ? '' : ($komunikasi[0]['answer'] == '5' ? 'checked' : '') }}
                                    required />
                                <span class="design"></span>
                                <span class="text">Pernah</span>
                            </label>
                            <label class="quiz-form__ans" for="q12">
                                <input type="radio" name="answer[0]" id="q12" value="3"
                                    {{ $retVal = !isset($komunikasi[0]) ? '' : ($komunikasi[0]['answer'] == '3' ? 'checked' : '') }}
                                    required />
                                <span class="design"></span>
                                <span class="text">Belum Pernah</span>
                            </label>
                            <label class="quiz-form__ans" for="q13">
                                <input type="radio" name="answer[0]" id="q13" value="0"
                                    {{ $retVal = !isset($komunikasi[0]) ? '' : ($komunikasi[0]['answer'] == '0' ? 'checked' : '') }}
                                    required />
                                <span class="design"></span>
                                <span class="text">Tidak Familiar</span>
                            </label>
                        </div>

                        <div class="quiz-form__quiz">
                            <input type="hidden" name="number" value="1" />
                            <input type="hidden" name="category[1]" value="komunikasi" />
                            <input type="hidden" name="questions_number[1]" value="2" />
                            <p class="quiz-form__question">
                                2. Apakah kamu mengetahui tips and tricks interview dan pernah latihan interview?
                            </p>
                            <label class="quiz-form__ans" for="q16">
                                <input type="radio" name="answer[1]" id="q16" value="5"
                                    {{ $retVal = !isset($komunikasi[1]) ? '' : ($komunikasi[1]['answer'] == '5' ? 'checked' : '') }}
                                    required />
                                <span class="design"></span>
                                <span class="text">Sudah</span>
                            </label>
                            <label class="quiz-form__ans" for="q17">
                                <input type="radio" name="answer[1]" id="q17" value="0"
                                    {{ $retVal = !isset($komunikasi[1]) ? '' : ($komunikasi[1]['answer'] == '0' ? 'checked' : '') }}
                                    required />
                                <span class="design"></span>
                                <span class="text">Belum</span>
                            </label>
                        </div>

                        <div class="quiz-form__quiz">
                            <input type="hidden" name="number" value="2" />
                            <input type="hidden" name="category[2]" value="komunikasi" />
                            <input type="hidden" name="questions_number[2]" value="3" />
                            <p class="quiz-form__question">
                                3. Apakah kamu telah mengikuti tes bahasa asing, terutama bahasa yang digunakan dalam
                                universitas/beasiswa yang kamu inginkan
                            </p>
                            <label class="quiz-form__ans" for="q21">
                                <input type="radio" name="answer[2]" id="q21" value="5"
                                    {{ $retVal = !isset($komunikasi[2]) ? '' : ($komunikasi[2]['answer'] == '5' ? 'checked' : '') }}
                                    required />
                                <span class="design"></span>
                                <span class="text">Sudah, dengan nilai diatas ketentuan beasiswa/universitas </span>
                            </label>
                            <label class="quiz-form__ans" for="q22">
                                <input type="radio" name="answer[2]" id="q22" value="3"
                                    {{ $retVal = !isset($komunikasi[2]) ? '' : ($komunikasi[2]['answer'] == '3' ? 'checked' : '') }}
                                    required />
                                <span class="design"></span>
                                <span class="text">Sudah, dengan nilai dibawah ketentuan beasiswa/universitas</span>
                            </label>
                            <label class="quiz-form__ans" for="q23">
                                <input type="radio" name="answer[2]" id="q23" value="0"
                                    {{ $retVal = !isset($komunikasi[2]) ? '' : ($komunikasi[2]['answer'] == '0' ? 'checked' : '') }}
                                    required />
                                <span class="design"></span>
                                <span class="text">Belum pernah mengikuti </span>
                            </label>
                        </div>

                        <div class="row tombol">
                            <div class="col-md-12">
                                <input class="submit back-button" type="button" value="Back"
                                    onclick="location.href='/soal_personal_brand'" />
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
                    url: "{{ URL::to('/komunikasi_session') }}",
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
