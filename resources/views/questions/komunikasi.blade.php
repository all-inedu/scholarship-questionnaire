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
                    <h1 class="heading__text">Komunikasi</h1>
                </div>

                <!-- Quiz section -->
                <div class="quiz">
                    <form method="POST" action="/komunikasi">
                        @csrf
                        <div class="quiz-form__quiz">
                            <input type="hidden" name="id_guest" value="{{ Session::get('id_guest') }}" />
                            <input type="hidden" name="category[0]" value="komunikasi" />
                            <input type="hidden" name="questions_number[0]" value="1" />
                            <p class="quiz-form__question">
                                1. Apakah kamu familiar dengan struktur penulisan essay personal statement dan/atau pernah
                                menulis
                                essay tersebut?
                            </p>
                            <label class="quiz-form__ans" for="q11">
                                <input type="radio" name="answer[0]" id="q11" value="5"
                                    {{ $retVal = !isset($komunikasi) ? '' : ($komunikasi[0]['answer'] == '5' ? 'checked' : '') }}
                                    required />
                                <span class="design"></span>
                                <span class="text">Pernah</span>
                            </label>
                            <label class="quiz-form__ans" for="q12">
                                <input type="radio" name="answer[0]" id="q12" value="3"
                                    {{ $retVal = !isset($komunikasi) ? '' : ($komunikasi[0]['answer'] == '3' ? 'checked' : '') }}
                                    required />
                                <span class="design"></span>
                                <span class="text">Belum Pernah</span>
                            </label>
                            <label class="quiz-form__ans" for="q13">
                                <input type="radio" name="answer[0]" id="q13" value="0"
                                    {{ $retVal = !isset($komunikasi) ? '' : ($komunikasi[0]['answer'] == '0' ? 'checked' : '') }}
                                    required />
                                <span class="design"></span>
                                <span class="text">Tidak Familiar</span>
                            </label>
                        </div>

                        <div class="quiz-form__quiz">
                            <input type="hidden" name="category[1]" value="komunikasi" />
                            <input type="hidden" name="questions_number[1]" value="2" />
                            <p class="quiz-form__question">
                                2. Apakah kamu mengetahui tips and tricks interview dan pernah latihan interview?
                            </p>
                            <label class="quiz-form__ans" for="q16">
                                <input type="radio" name="answer[1]" id="q16" value="5"
                                    {{ $retVal = !isset($komunikasi) ? '' : ($komunikasi[1]['answer'] == '5' ? 'checked' : '') }}
                                    required />
                                <span class="design"></span>
                                <span class="text">Sudah</span>
                            </label>
                            <label class="quiz-form__ans" for="q17">
                                <input type="radio" name="answer[1]" id="q17" value="0"
                                    {{ $retVal = !isset($komunikasi) ? '' : ($komunikasi[1]['answer'] == '0' ? 'checked' : '') }}
                                    required />
                                <span class="design"></span>
                                <span class="text">Belum</span>
                            </label>
                        </div>

                        <div class="quiz-form__quiz">
                            <input type="hidden" name="category[2]" value="komunikasi" />
                            <input type="hidden" name="questions_number[2]" value="3" />
                            <p class="quiz-form__question">
                                3. Apakah kamu telah mengikuti tes bahasa asing, terutama bahasa yang digunakan dalam
                                universitas/beasiswa yang kamu inginkan
                            </p>
                            <label class="quiz-form__ans" for="q21">
                                <input type="radio" name="answer[2]" id="q21" value="5"
                                    {{ $retVal = !isset($komunikasi) ? '' : ($komunikasi[2]['answer'] == '5' ? 'checked' : '') }}
                                    required />
                                <span class="design"></span>
                                <span class="text">Sudah, dengan nilai diatas ketentuan beasiswa/universitas </span>
                            </label>
                            <label class="quiz-form__ans" for="q22">
                                <input type="radio" name="answer[2]" id="q22" value="3"
                                    {{ $retVal = !isset($komunikasi) ? '' : ($komunikasi[2]['answer'] == '3' ? 'checked' : '') }}
                                    required />
                                <span class="design"></span>
                                <span class="text">Sudah, dengan nilai dibawah ketentuan beasiswa/universitas</span>
                            </label>
                            <label class="quiz-form__ans" for="q23">
                                <input type="radio" name="answer[2]" id="q23" value="0"
                                    {{ $retVal = !isset($komunikasi) ? '' : ($komunikasi[2]['answer'] == '0' ? 'checked' : '') }}
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
