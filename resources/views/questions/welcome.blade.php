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
                    <h1 class="heading__text">Questionnaire</h1>
                </div>

                <!-- Quiz section -->
                <div class="quiz">
                    <form method="POST" action="/akademik" enctype="multipart/form-data">
                        @csrf
                        <div class="quiz-form__quiz">
                            <p class="quiz-form__question">
                                1. Apakah sekolahmu menggunakan sistem ranking?
                            </p>
                            <input type="hidden" name="id_guest" value="{{ Session::get('id_guest') }}" />
                            <input type="hidden" name="category" value="academic" />
                            <input type="hidden" name="questions_number" value="1" />
                            <label class="quiz-form__ans" for="q11">
                                <input type="radio" name="answer" id="q11" value="Yes"
                                    {{ Session::get('decision.answer') == 'Yes' ? 'checked' : '' }} />
                                <span class="design"></span>
                                <span class="text"><strong>Iya</strong> </span>
                            </label>
                            <label class="quiz-form__ans" for="q12">
                                <input type="radio" name="answer" id="q12" value="No"
                                    {{ Session::get('decision.answer') == 'No' ? 'checked' : '' }} />
                                <span class="design"></span>
                                <span class="text"> <strong>Tidak</strong> </span>
                            </label>

                            <div class="row tombol">
                                <div class="col-md-12">
                                    <input class="submit back-button" type="button" value="Back"
                                        onclick="location.href='/'" />
                                    <input class="submit" type="submit" value="Next" />
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
