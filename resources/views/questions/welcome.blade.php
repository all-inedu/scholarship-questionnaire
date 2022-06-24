@extends('utama.header')
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet" />
<div class="container">
    <div class="heading">
    <h1 class="heading__text">Questionnaire</h1>
    </div>

    <!-- Quiz section -->
    <div class="quiz">
        <div class="quiz__heading">
            <h2 class="quiz__heading-text">
            Your are <span class="result"></span> right.
            </h2>
        </div>

        <form method="POST" action="/akademik" enctype="multipart/form-data">
            @csrf
            <div class="quiz-form__quiz">
            <p class="quiz-form__question">
                1. Apakah sekolahmu menggunakan sistem ranking?
            </p>
            <input type="text" name="id_guest" value="{{ Session::get('id_guest')}}"/>
            <input type="text" name="category" value="academic"/>
            <input type="text" name="questions_number" value="1"/>
            <label class="quiz-form__ans" for="q11">
                <input type="radio" name="answer" id="q11" value="Yes" {{ Session::get('decision.answer') == 'Yes' ? 'checked' : ''}}/>
                
                {{-- <input type="hidden" name="category[1]" value="academic">
                <input type="hidden" name="question_number[1]" value="1"> --}}
                <span class="design"></span>
                <span class="text"><strong>Iya</strong> </span>
            </label>
            <label class="quiz-form__ans" for="q12">
                <input type="radio" name="answer" id="q12" value="No"  {{ Session::get('decision.answer') == "No" ? 'checked' : '' }}/>
                {{-- <input type="hidden" name="category[2]" value="academic">
                <input type="hidden" name="question_number[2]" value="1"> --}}
                <span class="design"></span>
                <span class="text"> <strong>Tidak</strong> </span>
            </label>

            <div class="row tombol">
                {{-- <input class="submit" type="button" value="Back" onclick="location.href='/form_registrasi'" /> --}}
                <input class="submit" type="submit" value="Next" />
            </div>
        </form>
    </div>
</div>