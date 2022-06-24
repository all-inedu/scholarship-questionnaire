@extends('utama.header')
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet" />
<div class="container">
<div class="heading">
<h1 class="heading__text">Kuesioner personal_branding</h1>
</div>

<!-- Quiz section -->
<div class="quiz">
<div class="quiz__heading">
    <h2 class="quiz__heading-text">
    Your are <span class="result"></span> right.
    </h2>
</div>

<form method="POST" action="/personal_brand">
    @csrf
    <div class="quiz-form__quiz">
        <input type="text" name="id_guest" value="{{ Session::get('id_guest')}}"/>
        <input type="text" name="category[0]" value="personal_brand"/>
        <input type="text" name="questions_number[0]" value="1"/>
        <p class="quiz-form__question">
            1. Apakah kamu telah mengetahui personal interestmu? (diluar academic)
        </p>
        <label class="quiz-form__ans" for="q11">
            <input type="radio" name="answer[0]" id="q11" value="2" {{ $retVal = (!isset($personal_branding)) ? '' : ($personal_branding[0]['answer'] == '2' ? 'checked' : '') ;  }}/>
            <span class="design"></span>
            <span class="text">Iya</span>
        </label>
        <label class="quiz-form__ans" for="q12">
            <input type="radio" name="answer[0]" id="q12" value="0" {{ $retVal = (!isset($personal_branding)) ? '' : ($personal_branding[0]['answer'] == '0' ? 'checked' : '') ;  }}/>
            <span class="design"></span>
            <span class="text">Tidak</span>
        </label>
    </div>

    <div class="quiz-form__quiz">
        <input type="text" name="category[1]" value="personal_brand"/>
        <input type="text" name="questions_number[1]" value="2"/>
        <p class="quiz-form__question">
            2. Apakah kamu telah mengembangkan personal interestmu menjadi suatu kemampuan/skill?
        </p>
        <label class="quiz-form__ans" for="q16">
            <input type="radio" name="answer[1]" id="q16" value="4" {{ $retVal = (!isset($personal_branding)) ? '' : ($personal_branding[1]['answer'] == '4' ? 'checked' : '') ;  }}/>
            <span class="design"></span>
            <span class="text">Iya</span>
        </label>
        <label class="quiz-form__ans" for="q17">
            <input type="radio" name="answer[1]" id="q17" value="0" {{ $retVal = (!isset($personal_branding)) ? '' : ($personal_branding[1]['answer'] == '0' ? 'checked' : '') ;  }}/>
            <span class="design"></span>
            <span class="text">Tidak</span>
        </label>
    </div>

    <div class="quiz-form__quiz">
        <input type="text" name="category[2]" value="personal_brand"/>
        <input type="text" name="questions_number[2]" value="3"/>
        <p class="quiz-form__question">
            3. Apakah kamu telah mengetahui arah/tujuan karirmu?
        </p>
        <label class="quiz-form__ans" for="q21">
            <input type="radio" name="answer[2]" id="q21" value="2" {{ $retVal = (!isset($personal_branding)) ? '' : ($personal_branding[2]['answer'] == '2' ? 'checked' : '') ;  }}/>
            <span class="design"></span>
            <span class="text">Iya</span>
        </label>
        <label class="quiz-form__ans" for="q22">
            <input type="radio" name="answer[2]" id="q22" value="0" {{ $retVal = (!isset($personal_branding)) ? '' : ($personal_branding[2]['answer'] == '0' ? 'checked' : '') ;  }}/>
            <span class="design"></span>
            <span class="text">Tidak</span>
        </label>
    </div>

    <div class="quiz-form__quiz">
        <input type="text" name="category[3]" value="personal_brand"/>
        <input type="text" name="questions_number[3]" value="4"/>
        <p class="quiz-form__question">
            4. Apakah kamu telah mengetahui dan menentukan jurusan apa yang akan diambil?
        </p>
        <label class="quiz-form__ans" for="q26">
            <input type="radio" name="answer[3]" id="q26" value="2" {{ $retVal = (!isset($personal_branding)) ? '' : ($personal_branding[3]['answer'] == '2' ? 'checked' : '') ;  }}/>
            <span class="design"></span>
            <span class="text">Iya</span>
        </label>
        <label class="quiz-form__ans" for="q27">
            <input type="radio" name="answer[3]" id="q27" value="0" {{ $retVal = (!isset($personal_branding)) ? '' : ($personal_branding[3]['answer'] == '0' ? 'checked' : '') ;  }}/>
            <span class="design"></span>
            <span class="text">Tidak</span>
        </label>
    </div>

    <div class="quiz-form__quiz">
        <input type="text" name="category[4]" value="personal_brand"/>
        <input type="text" name="questions_number[4]" value="5"/>
        <p class="quiz-form__question">
            5. Apakah kamu dapat mendeskripsikan diri dengan merefleksikan academic interestmu dengan personal interestmu?
        </p>
        <label class="quiz-form__ans" for="q29">
            <input type="radio" name="answer[4]" id="q29" value="5" {{ $retVal = (!isset($personal_branding)) ? '' : ($personal_branding[4]['answer'] == '5' ? 'checked' : '') ;  }}/>
            <span class="design"></span>
            <span class="text">Iya</span>
        </label>
        <label class="quiz-form__ans" for="q30">
            <input type="radio" name="answer[4]" id="q30" value="0" {{ $retVal = (!isset($personal_branding)) ? '' : ($personal_branding[4]['answer'] == '0' ? 'checked' : '') ;  }}/>
            <span class="design"></span>
            <span class="text">Tidak</span>
        </label>
    </div>

    <div class="row tombol">
        <input class="submit" type="button" value="Back" onclick="location.href='/soal_prestasi'" />
        <input class="submit" type="submit" value="Next" />
    </div>

</form>
</div>
</div>