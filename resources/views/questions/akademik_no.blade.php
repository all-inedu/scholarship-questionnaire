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
                    <h1 class="heading__text">Akademis</h1>
                </div>

                <!-- Quiz section -->
                <div class="quiz">
                    <form method="POST" action="/akademik_no">
                        @csrf
                        <div class="quiz-form__quiz">
                            <input type="hidden" name="id_guest" value="{{ Session::get('id_guest') }}" />
                            <input type="hidden" name="category[0]" value="academic" />
                            <input type="hidden" name="questions_number[0]" value="2" />
                            <p class="quiz-form__question">
                                2. Berapakah nilai rata-ratamu dari tahun pertama hingga sekarang?
                                {{-- {{json_encode($no_decision[0]['answer'])}} --}}
                            </p>
                            {{-- {{  $no_decision[0]['answer'] == '0' ? 'checked' : ''  }} --}}
                            <label class="quiz-form__ans" for="q11">
                                <input type="radio" name="answer[0]" id="q11" value="0"
                                    {{ $retVal = !isset($no_decision) ? '' : ($no_decision[0]['answer'] == '0' ? 'checked' : '') }} />
                                <span class="design"></span>
                                <span class="text">&lt; 70</span>
                            </label>
                            <label class="quiz-form__ans" for="q12">
                                <input type="radio" name="answer[0]" id="q12" value="4"
                                    {{ $retVal = !isset($no_decision) ? '' : ($no_decision[0]['answer'] == '4' ? 'checked' : '') }} />
                                <span class="design"></span>
                                <span class="text">&gt; 70</span>
                            </label>
                            <label class="quiz-form__ans" for="q13">
                                <input type="radio" name="answer[0]" id="q13" value="5"
                                    {{ $retVal = !isset($no_decision) ? '' : ($no_decision[0]['answer'] == '5' ? 'checked' : '') }} />
                                <span class="design"></span>
                                <span class="text">&gt; 80</span>
                            </label>
                            <label class="quiz-form__ans" for="q14">
                                <input type="radio" name="answer[0]" id="q14" value="7.5"
                                    {{ $retVal = !isset($no_decision) ? '' : ($no_decision[0]['answer'] == '7.5' ? 'checked' : '') }} />
                                <span class="design"></span>
                                <span class="text">&gt; 90</span>
                            </label>
                        </div>

                        <div class="quiz-form__quiz">
                            <input type="hidden" name="category[1]" value="academic" />
                            <input type="hidden" name="questions_number[1]" value="3" />
                            <p class="quiz-form__question">
                                3. Apakah nilaimu selalu konsisten (dengan angka yang baik) atau selalu meningkat setiap
                                tahunnya?
                            </p>
                            <label class="quiz-form__ans" for="q15">
                                <input type="radio" name="answer[1]" id="q15" value="7.5"
                                    {{ $retVal = !isset($no_decision) ? '' : ($no_decision[1]['answer'] == '7.5' ? 'checked' : '') }} />
                                <span class="design"></span>
                                <span class="text">Dari tahun pertama hingga tahun terakhir </span>
                            </label>
                            <label class="quiz-form__ans" for="q16">
                                <input type="radio" name="answer[1]" id="q16" value="0"
                                    {{ $retVal = !isset($no_decision) ? '' : ($no_decision[1]['answer'] == '0' ? 'checked' : '') }} />
                                <span class="design"></span>
                                <span class="text">Ada nilai yang turun dari semester/tahun sebelumnya</span>
                            </label>
                        </div>

                        <div class="quiz-form__quiz">
                            <input type="hidden" name="category[2]" value="academic" />
                            <input type="hidden" name="questions_number[2]" value="4" />
                            <p class="quiz-form__question">
                                4. Apakah kamu telah mengikuti tes standarisasi seperti SAT/ACT dengan nilai >1300 (untuk
                                SAT) dan
                                >30 (untuk ACT)?
                            </p>
                            <label class="quiz-form__ans" for="q17">
                                <input type="radio" name="answer[2]" id="q17" value="5"
                                    {{ $retVal = !isset($no_decision) ? '' : ($no_decision[2]['answer'] == '5' ? 'checked' : '') }} />
                                <span class="design"></span>
                                <span class="text">Sudah</span>
                            </label>
                            <label class="quiz-form__ans" for="q18">
                                <input type="radio" name="answer[2]" id="q18" value="0"
                                    {{ $retVal = !isset($no_decision) ? '' : ($no_decision[2]['answer'] == '0' ? 'checked' : '') }} />
                                <span class="design"></span>
                                <span class="text">Belum</span>
                            </label>
                        </div>

                        <div class="row tombol">
                            <div class="col-md-12">
                                <input class="submit back-button" type="button" value="Back"
                                    onclick="location.href='/akademik_decision'" />
                                <input class="submit" type="submit" value="Next" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
