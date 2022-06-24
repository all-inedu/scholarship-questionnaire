@extends('utama.header')
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet" />
<div class="container">
    <div class="heading">
        <h1 class="heading__text">Questionnaire Result</h1>
    </div>

    <div class="quiz-form__quiz">
        <p class="quiz-form__question">
        <form method="POST" action="/akademik" enctype="multipart/form-data">
            @csrf
            <div class="quiz-form__quiz">
                <p class="quiz-form__question">
                    Halo {{ $lihat_user->full_name }} kamu sudah pernah mengisi Questionnaire ini,
                    apakah kamu mau mengisi ulang?
                </p>

                <div class="row tombol">
                    {{-- <input class="submit" type="button" value="Back" onclick="location.href='/form_registrasi'" /> --}}
                    <input class="submit" type="submit" value="Tidak"
                        onclick="location.href='/konfirmasi_yes',$lihat_user->id" />
                </div>
                <div class="row tombol">
                    {{-- <input class="submit" type="button" value="Back" onclick="location.href='/form_registrasi'" /> --}}
                    <input class="submit" type="submit" value="Ya" onclick="location.href='/'" />
                </div>
        </form>
        </p>

        {{-- <div class="row tombol">
            <input class="submit" type="submit" onclick="location.href='/'" value="Selesai" />
        </div> --}}

    </div>
