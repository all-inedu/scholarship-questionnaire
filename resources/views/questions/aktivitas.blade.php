@extends('utama.header')
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet" />
<div class="container">
<div class="heading">
<h1 class="heading__text">Kuesioner Aktivitas</h1>
</div>

<!-- Quiz section -->
<div class="quiz">
<div class="quiz__heading">
    <h2 class="quiz__heading-text">
    Your are <span class="result"></span> right.
    </h2>
</div>

<form method="POST" action="/aktivitas">
    @csrf
    <div class="quiz-form__quiz">
        <input type="text" name="id_guest" value="{{ Session::get('id_guest')}}"/>
        <input type="text" name="category[0]" value="aktivitas"/>
        <input type="text" name="questions_number[0]" value="1"/>
        <p class="quiz-form__question">
            1. Berapa jumlah extracurricular yang pernah diikuti?
        </p>
        <label class="quiz-form__ans" for="q11">
            <input type="radio" name="answer[0]" id="q11" value="0" {{ $retVal = (!isset($aktivitas)) ? '' : ($aktivitas[0]['answer'] == '0' ? 'checked' : '') ;  }}/>
            <span class="design"></span>
            <span class="text">0</span>
        </label>
        <label class="quiz-form__ans" for="q12">
            <input type="radio" name="answer[0]" id="q12" value="1" {{ $retVal = (!isset($aktivitas)) ? '' : ($aktivitas[0]['answer'] == '1' ? 'checked' : '') ;  }}/>
            <span class="design"></span>
            <span class="text">1-2</span>
        </label>
        <label class="quiz-form__ans" for="q13">
            <input type="radio" name="answer[0]" id="q13" value="1" {{ $retVal = (!isset($aktivitas)) ? '' : ($aktivitas[0]['answer'] == '1' ? 'checked' : '') ;  }}/>
            <span class="design"></span>
            <span class="text">2-3</span>
        </label>
        <label class="quiz-form__ans" for="q14">
            <input type="radio" name="answer[0]" id="q14" value="2" {{ $retVal = (!isset($aktivitas)) ? '' : ($aktivitas[0]['answer'] == '2' ? 'checked' : '') ;  }}/>
            <span class="design"></span>
            <span class="text">3-4</span>
        </label>
        <label class="quiz-form__ans" for="q15">
            <input type="radio" name="answer[0]" id="q15" value="3" {{ $retVal = (!isset($aktivitas)) ? '' : ($aktivitas[0]['answer'] == '3' ? 'checked' : '') ;  }}/>
            <span class="design"></span>
            <span class="text">&gt; 5</span>
        </label>
    </div>

    <div class="quiz-form__quiz">
        <input type="text" name="category[1]" value="aktivitas"/>
        <input type="text" name="questions_number[1]" value="2"/>
        <p class="quiz-form__question">
            2. Berapa jumlah pengalaman menjadi ketua/pengurus/committee  extracurricular/komunitas/kegiatan yang pernah dijalani?
        </p>
        <label class="quiz-form__ans" for="q16">
            <input type="radio" name="answer[1]" id="q16" value="0" {{ $retVal = (!isset($aktivitas)) ? '' : ($aktivitas[1]['answer'] == '0' ? 'checked' : '') ;  }}/>
            <span class="design"></span>
            <span class="text">0</span>
        </label>
        <label class="quiz-form__ans" for="q17">
            <input type="radio" name="answer[1]" id="q17" value="2" {{ $retVal = (!isset($aktivitas)) ? '' : ($aktivitas[1]['answer'] == '2' ? 'checked' : '') ;  }}/>
            <span class="design"></span>
            <span class="text">1-2</span>
        </label>
        <label class="quiz-form__ans" for="q18">
            <input type="radio" name="answer[1]" id="q18" value="3" {{ $retVal = (!isset($aktivitas)) ? '' : ($aktivitas[1]['answer'] == '3' ? 'checked' : '') ;  }}/>
            <span class="design"></span>
            <span class="text">2-3</span>
        </label>
        <label class="quiz-form__ans" for="q19">
            <input type="radio" name="answer[1]" id="q19" value="4" {{ $retVal = (!isset($aktivitas)) ? '' : ($aktivitas[1]['answer'] == '4' ? 'checked' : '') ;  }}/>
            <span class="design"></span>
            <span class="text">4-5</span>
        </label>
        <label class="quiz-form__ans" for="q20">
            <input type="radio" name="answer[1]" id="q20" value="6" {{ $retVal = (!isset($aktivitas)) ? '' : ($aktivitas[1]['answer'] == '6' ? 'checked' : '') ;  }}/>
            <span class="design"></span>
            <span class="text">&gt; 5</span>
        </label>
    </div>

    <div class="quiz-form__quiz">
        <input type="text" name="category[2]" value="aktivitas"/>
        <input type="text" name="questions_number[2]" value="3"/>
        <p class="quiz-form__question">
            3. Berapa jumlah kegiatan volunteer yang pernah diikuti?
        </p>
        <label class="quiz-form__ans" for="q21">
            <input type="radio" name="answer[2]" id="q21" value="0" {{ $retVal = (!isset($aktivitas)) ? '' : ($aktivitas[2]['answer'] == '0' ? 'checked' : '') ;  }}/>
            <span class="design"></span>
            <span class="text">0</span>
        </label>
        <label class="quiz-form__ans" for="q22">
            <input type="radio" name="answer[2]" id="q22" value="2" {{ $retVal = (!isset($aktivitas)) ? '' : ($aktivitas[2]['answer'] == '2' ? 'checked' : '') ;  }}/>
            <span class="design"></span>
            <span class="text">1-2</span>
        </label>
        <label class="quiz-form__ans" for="q23">
            <input type="radio" name="answer[2]" id="q23" value="3" {{ $retVal = (!isset($aktivitas)) ? '' : ($aktivitas[2]['answer'] == '3' ? 'checked' : '') ;  }}/>
            <span class="design"></span>
            <span class="text">2-3</span>
        </label>
        <label class="quiz-form__ans" for="q24">
            <input type="radio" name="answer[2]" id="q24" value="4" {{ $retVal = (!isset($aktivitas)) ? '' : ($aktivitas[2]['answer'] == '4' ? 'checked' : '') ;  }}/>
            <span class="design"></span>
            <span class="text">4-5</span>
        </label>
        <label class="quiz-form__ans" for="q25">
            <input type="radio" name="answer[2]" id="q25" value="6" {{ $retVal = (!isset($aktivitas)) ? '' : ($aktivitas[2]['answer'] == '6' ? 'checked' : '') ;  }}/>
            <span class="design"></span>
            <span class="text">&gt; 5</span>
        </label>
    </div>

    <div class="quiz-form__quiz">
        <input type="text" name="category[3]" value="aktivitas"/>
        <input type="text" name="questions_number[3]" value="4"/>
        <p class="quiz-form__question">
            4. Berapa jumlah pengalaman menjadi internship/parttime yang pernah dijalani?
        </p>
        <label class="quiz-form__ans" for="q26">
            <input type="radio" name="answer[3]" id="q26" value="0" {{ $retVal = (!isset($aktivitas)) ? '' : ($aktivitas[3]['answer'] == '0' ? 'checked' : '') ;  }}/>
            <span class="design"></span>
            <span class="text">0</span>
        </label>
        <label class="quiz-form__ans" for="q27">
            <input type="radio" name="answer[3]" id="q27" value="2" {{ $retVal = (!isset($aktivitas)) ? '' : ($aktivitas[3]['answer'] == '2' ? 'checked' : '') ;  }}/>
            <span class="design"></span>
            <span class="text">1-2</span>
        </label>
        <label class="quiz-form__ans" for="q28">
            <input type="radio" name="answer[3]" id="q28" value="3" {{ $retVal = (!isset($aktivitas)) ? '' : ($aktivitas[3]['answer'] == '3' ? 'checked' : '') ;  }}/>
            <span class="design"></span>
            <span class="text">&gt; 3</span>
        </label>
    </div>

    <div class="quiz-form__quiz">
        <input type="text" name="category[4]" value="aktivitas"/>
        <input type="text" name="questions_number[4]" value="5"/>
        <p class="quiz-form__question">
            5. Apakah kamu pernah menginisiasikan sebuah komunitas/kegiatan/project?
        </p>
        <label class="quiz-form__ans" for="q29">
            <input type="radio" name="answer[4]" id="q29" value="7" {{ $retVal = (!isset($aktivitas)) ? '' : ($aktivitas[4]['answer'] == '7' ? 'checked' : '') ;  }}/>
            <span class="design"></span>
            <span class="text">Pernah</span>
        </label>
        <label class="quiz-form__ans" for="q30">
            <input type="radio" name="answer[4]" id="q30" value="0" {{ $retVal = (!isset($aktivitas)) ? '' : ($aktivitas[4]['answer'] == '0' ? 'checked' : '') ;  }}/>
            <span class="design"></span>
            <span class="text">Belum Pernah</span>
        </label>
    </div>

    <div class="row tombol">
        <input class="submit" type="button" value="Back" onclick="location.href='{{ Session::get('decision.answer') == 'No' ? '/akademik_no_view' : '/akademik_yes_view' }}'" />
        <input class="submit" type="submit" value="Next" />
    </div>

</form>
</div>
</div>