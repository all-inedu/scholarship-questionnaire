<!DOCTYPE html>
<html>
<style>
    @font-face {
        font-family: "Montserrat";
        src: url("../fonts/montserrat/Montserrat-Regular.otf");
    }

    @font-face {
        font-family: "Muli-SemiBold";
        src: url("../fonts/muli/Muli-SemiBold.ttf");
    }

    @font-face {
        font-family: "Muli-Bold";
        src: url("../fonts/muli/Muli-Bold.ttf");
    }

    @font-face {
        font-family: "Abril_Fatface";
        src: url("../fonts/Abril_Fatface/AbrilFatface-Regular.ttf");
    }

    * {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    body {
        font-family: "Muli-Regular";
        color: #666;
        font-size: 13px;
        margin: 0;
    }

    input,
    textarea,
    select,
    button {
        font-family: "Muli-Regular";
        color: #333;
        font-size: 13px;
    }

    p,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    ul {
        line-height: 1.5;
        margin: 0;
    }

    img {
        max-width: 100%;
    }

    ul {
        padding-left: 0;
        margin-bottom: 0;
    }

    a:hover {
        text-decoration: none;
    }

    :focus {
        outline: none;
    }

    .wrapper {
        min-height: 100vh;
        background-size: cover;
        background-repeat: no-repeat;
        display: flex;
        align-items: center;
    }

    .inner {
        max-width: 850px;
        margin: auto;
        background: #252c4a;
        padding: 50px;
    }



    form {
        border: 2px solid #252c4a;
        padding: 25px 40px 25px;
        border-radius: 1rem;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        background: #fafafa;
    }

    form .form-result {
        border: 2px solid #252c4a;
        padding: 10px 25px 10px;
        border-radius: 1rem;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        background: #fafafa;
    }

    h3 {
        /* text-transform: uppercase; */
        font-size: 42px;
        font-family: "Montserrat", sans-serif;
        text-align: center;
        font-weight: 800;
        margin-bottom: 5px;
        color: #252c4a;
        letter-spacing: 3px;
    }

    h5 {
        /* text-transform: uppercase; */
        font-size: 28px;
        font-family: "Montserrat", sans-serif;
        text-align: center;
        margin-bottom: 8px;
        color: #252c4a;
        letter-spacing: 3px;
    }

    .form-group {
        display: flex;
    }

    .form-group .form-wrapper {
        width: 50%;
    }

    .form-group .form-wrapper:first-child {
        margin-right: 40px;
    }

    .form-wrapper {
        margin-bottom: 17px;
    }

    .form-wrapper label {
        margin-bottom: 10px;
        font-size: 16px;
        font-weight: 600;
        display: block;
        color: #5a5a5a;
        /* text-transform: uppercase; */
        font-family: "Montserrat", sans-serif;
    }

    .form-holder {
        position: relative;
    }

    .form-holder i {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        left: 14px;
        font-size: 17px;
        color: #999;
    }


    .invalid-feedback {
        color: #F43636 !important;
        font-weight: 700;
        font-family: 'Muli-Bold';
    }

    .form-control-satu {
        border: 2px solid #999999;
        border-radius: 0.3rem;
        display: block;
        width: 100%;
        height: 42px;
        padding: 0 20px 0 46px;
        color: #525252;
        font-weight: 700;
        font-size: 15px;
    }

    .form-control-satu::-webkit-input-placeholder {
        font-size: 17px;
        transform: translateY(5px);
        color: #999;
    }

    .form-control-dua::-moz-placeholder {
        font-size: 17px;
        transform: translateY(5px);
        color: #999;
    }

    .form-control-satu:-ms-input-placeholder {
        font-size: 17px;
        transform: translateY(5px);
        color: #999;
    }

    .form-control-satu:-moz-placeholder {
        font-size: 17px;
        transform: translateY(5px);
        color: #999;
    }

    .form-control-dua {
        border: 2px solid #999999;
        display: block;
        width: 100%;
        height: 42px;
        padding: 0 20px 0 46px;
        color: #525252;
        font-weight: 700;
        font-size: 15px;
    }

    .form-control-dua::-webkit-input-placeholder {
        font-size: 17px;
        transform: translateY(5px);
        color: #999;
    }

    .form-control-dua::-moz-placeholder {
        font-size: 17px;
        transform: translateY(5px);
        color: #999;
    }

    .form-control-dua:-ms-input-placeholder {
        font-size: 17px;
        transform: translateY(5px);
        color: #999;
    }

    .form-control-dua:-moz-placeholder {
        font-size: 17px;
        transform: translateY(5px);
        color: #999;
    }

    /* .form-control {
  border: 2px solid #999999;
  display: block;
  width: 100%;
  height: 42px;
  padding: 0 20px 0 46px;
  color: #525252;
 font-weight: 700;
  font-size: 15px; }
  .form-control::-webkit-input-placeholder {
    font-size: 17px;
    transform: translateY(5px);
    color: #999; }
  .form-control::-moz-placeholder {
    font-size: 17px;
    transform: translateY(5px);
    color: #999; }
  .form-control:-ms-input-placeholder {
    font-size: 17px;
    transform: translateY(5px);
    color: #999; }
  .form-control:-moz-placeholder {
    font-size: 17px;
    transform: translateY(5px);
    color: #999; } */

    .select::after {
        content: "\f2f9";
        font-family: Material-Design-Iconic-Font;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        right: 12px;
        font-size: 15px;
        color: #999;
    }

    select {
        -moz-appearance: none;
        -webkit-appearance: none;
        cursor: pointer;
        padding-left: 20px;
    }

    select option[value=""][disabled] {
        display: none;
    }


    .title-register {
        color: #252c4a;
        letter-spacing: 1px;
        font-size: 38px;
        font-weight: 800;
        font-family: "Montserrat", sans-serif;
    }



    .sub-title-register {
        color: #252c4a;
        letter-spacing: 2px;
        font-size: 24px;
        font-weight: 600;
        font-family: "Montserrat", sans-serif;
    }

    .button-register {
        border-radius: 0.5rem;
    }

    button {
        border: none;
        float: right;
        width: 152px;
        height: 42px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0;
        background: #235788;
        font-size: 16px;
        color: #fff;
        /* text-transform: uppercase; */
        font-family: "Montserrat", sans-serif;
        -webkit-transform: perspective(1px) translateZ(0);
        transform: perspective(1px) translateZ(0);
        position: relative;
        -webkit-transition-property: color;
        transition-property: color;
        -webkit-transition-duration: 0.3s;
        transition-duration: 0.3s;
    }

    button::before {
        border-radius: 0.5rem;
        content: "";
        position: absolute;
        z-index: -1;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: #252c4a;
        -webkit-transform: scaleX(0);
        transform: scaleX(0);
        -webkit-transform-origin: 50%;
        transform-origin: 50%;
        -webkit-transition-property: transform;
        transition-property: transform;
        -webkit-transition-duration: 0.3s;
        transition-duration: 0.3s;
        -webkit-transition-timing-function: ease-out;
        transition-timing-function: ease-out;
    }

    button:hover::before,
    button:active::before,
    button:focus::before {
        -webkit-transform: scaleX(1);
        transform: scaleX(1);
    }

    .form-end {
        display: flex;
        align-items: center;
        margin-top: 13px;
    }

    .button-holder {
        width: 100%;
    }

    .checkbox {
        position: relative;
        width: 50%;
        padding-left: 22px;
    }

    .checkbox label {
        cursor: pointer;
        color: #999;
        font-family: "Muli-SemiBold";
    }

    .checkbox input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
    }

    .checkbox input:checked~.checkmark:after {
        display: block;
    }

    .checkmark {
        position: absolute;
        top: 1px;
        left: 0;
        height: 12px;
        width: 13px;
        border-radius: 2px;
        background-color: #ebebeb;
        border: 1px solid #ccc;
        font-family: Material-Design-Iconic-Font;
        color: #000;
        font-size: 10px;
        font-weight: bolder;
    }

    .checkmark:after {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: none;
        content: '\f26b';
    }

    @media (max-width: 767px) {
        .wrapper {
            display: block;
        }

        form {
            padding: 1rem;
            border: none;
        }

        .form-group {
            display: block;
        }

        .form-group .form-wrapper {
            width: 100%;
        }

        .form-group .form-wrapper:first-child {
            margin-right: 0px;
        }

        .form-end {
            display: block;
        }

        .checkbox,
        .button-holder {
            width: 100%;
        }

        .inner {
            padding: 30px 15px;
        }

        button {
            float: none;
            margin-top: 30px;
        }

        h5 {
            /* font-size: 36px; */
            margin-bottom: 2rem;
        }

        h3 {
            font-size: 36px;
            line-height: 1;
            margin-bottom: 10px;
        }
    }

    .input-group-text {
        background-color: #FFFFFF !important;
    }

    /*# sourceMappingURL=style.css.map */
    @media only screen and (max-width: 600px) {
        .submit {
            margin: 1rem 2.6rem 1rem 2.6rem !important;
        }
    }






    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    ::selection {
        background: #fff;
        color: #F9910C;
    }

    .body-color {
        background: #252c4a;
        font-family: "Montserrat", sans-serif;
        font-weight: 300;
        color: #fff;
    }

    body {
        background: #252c4a;
        font-family: "Montserrat", sans-serif;
        font-weight: 300;
        color: #fff;
    }

    .container {
        max-width: 50rem;
        width: 90vw;
        margin: 2rem auto;
    }

    .quiz__heading {
        display: none;
    }

    .result {
        font-size: 2rem;
        color: #117eeb;
    }

    .heading__text {
        margin-bottom: 1.5rem;
        text-align: center;
        font-size: 3rem;
        font-weight: 300;
    }

    .quiz__heading-text {
        margin-bottom: 2rem;
        text-align: center;
        font-weight: 300;
    }

    .result_question {
        margin-bottom: 0.8rem;
        padding: 10px 25px 10px;
        font-size: 1.2rem;
        font-weight: 300;
        color: #4b4b4b;
    }

    .quiz-form__question {
        margin-bottom: 0.8rem;
        font-size: 1.2rem;
        font-weight: 600;
        color: #4b4b4b;
    }

    .quiz-form__question {
        margin-bottom: 0.8rem;
        font-size: 1.2rem;
        font-weight: 600;
        color: #4b4b4b;
    }

    .quiz-form__question2 {
        margin-bottom: 0.8rem;
        font-size: 1.1rem;
        margin-left: 0.5rem;
        color: #4b4b4b;
    }

    .quiz-form__question3 {
        margin-bottom: 0.8rem;
        font-size: 1.1rem;
        margin-left: 1.3rem;
        color: #4b4b4b;
    }


    .quiz-form__question2,
    .quiz-form__question2 p {
        line-height: 1.5;
    }


    .quiz-form__quiz:not(:last-child) {
        margin-bottom: 1.5rem;
    }

    .quiz-form__ans {
        border-radius: 0.8rem;
        border: 2px solid #264868;
        padding: 0.8rem;
        font-size: 16px;
        font-weight: 500;
        color: #525252;
        position: relative;
        display: flex;
        justify-content: flex-start;
        align-items: center;
        flex-wrap: nowrap;
        cursor: pointer;
    }

    .quiz-form__ans:not(:last-child) {
        margin-bottom: 0.5rem;
    }

    input[type="radio"] {
        opacity: 0;
        position: absolute;
        left: 15px;
        z-index: -1;
    }

    .design {
        width: 1rem;
        height: 1rem;
        border: 1px solid #a1a9bd;
        border-radius: 100%;
        margin-right: 1rem;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .design::before,
    .design::after {
        content: "";
        position: absolute;
        width: inherit;
        height: inherit;
        border-radius: inherit;
        transform: scale(0);
        transform-origin: center center;
    }

    .design:before {
        background: #a1a9bd;
        opacity: 0;
        transition: 0.3s;
    }

    .design::after {
        background: #264868;
        opacity: 0.4;
        transition: 0.6s;
    }

    .text {
        backface-visibility: hidden;
        transition: transform 200ms ease-in;
    }

    input[type="radio"]:hover~.text {
        transform: translateX(0.4rem);
    }

    input[type="radio"]:hover .quiz-form__ans {
        color: #264868;
    }

    input[type="radio"]:checked+.design::before {
        opacity: 1;
        transform: scale(0.6);
    }

    input[type="radio"]:hover+.design,
    input[type="radio"]:focus+.design {
        border: 1px solid #264868;
    }

    input[type="radio"]:hover+.design:before,
    input[type="radio"]:focus+.design:before {
        background: #264868;
    }

    input[type="radio"]:focus+.design::after,
    input[type="radio"]:active+.design::after {
        opacity: 0.1;
        transform: scale(2);
    }

    .tombol {
        text-align: center;
    }

    .back-button {
        color: #4e4e4e !important;
        border: 2px solid #252c4a !important;
        background: #f7f7f7 !important;
    }

    .submit {
        border: none;
        border-radius: 100vh;
        padding: 0.8rem 1.5rem;
        background: #264868;
        color: #fff;
        font-family: inherit;
        text-transform: uppercase;
        font-size: 1rem;
        font-weight: 400;
        /* display: block; */
        margin: 1rem 4rem 1rem 4rem;
        cursor: pointer;
        transition: transform 200ms ease, box-shadow 200ms ease;
    }

    .submit:focus {
        outline: none;
    }

    .submit:hover {
        transform: translateY(-2px) scale(1.015);
        box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.35);
    }

    .submit:active {
        transform: translateY(0) scale(1);
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
    }

    .correct {
        color: #117eeb;
    }

    .wrong {
        color: crimson;
    }









    * {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    .modalDialog {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: rgba(0, 0, 0, 0.8);
        z-index: 99999;
        opacity: 0;
        -webkit-transition: opacity 100ms ease-in;
        -moz-transition: opacity 100ms ease-in;
        transition: opacity 100ms ease-in;
        pointer-events: none;
    }

    .modalDialog:target {
        opacity: 1;
        pointer-events: auto;
    }

    .modalDialog>div {
        max-width: 800px;
        width: 90%;
        position: relative;
        margin: 10% auto;
        padding: 20px;
        border-radius: 3px;
        background: #fff;
    }

    .close {
        font-family: Arial, Helvetica, sans-serif;
        background: #f26d7d;
        color: #fff;
        line-height: 25px;
        position: absolute;
        right: -12px;
        text-align: center;
        top: -10px;
        width: 34px;
        height: 34px;
        text-decoration: none;
        font-weight: bold;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        border-radius: 50%;
        -moz-box-shadow: 1px 1px 3px #000;
        -webkit-box-shadow: 1px 1px 3px #000;
        box-shadow: 1px 1px 3px #000;
        padding-top: 5px;
    }

    .close:hover {
        background: #fa3f6f;
    }
</style>

<body style="background:  #252c4a;">

    <div class="container body-color">
        <div class="row justify-content-center">
            <div class="col-md-8 ">
                <div class="heading">
                    <h1 class="heading__text">Result</h1>
                </div>
                <form class="form-result">
                    <div class="quiz-form__quiz">
                        <p class="quiz-form__question">
                            @if ($academic == 1 && $aktivitas == 1 && $prestasi == 1 && $personal_brand == 1 && $komunikasi == 1)
                                <form class="form-result">
                                    <p class="result_question">
                                        Halo, <b>{{ $jawaban->guestss->full_name }}</b>
                                        <br><br>
                                        Terima kasih telah memilih ALL-in Eduspace Scholarship Questionnaire sebagai
                                        langkah
                                        awal
                                        mengatur
                                        strategi kesiapan pendaftaran beasiswamu.
                                        <br><br>
                                        Setelah menjawab beberapa soal, kami menilai bahwa persiapan beasiswamu telah
                                        pada
                                        tahap
                                        ‘Ready’.
                                    </p>
                                </form>
                            @elseif ($academic == 0 && $aktivitas == 0 && $prestasi == 0 && $personal_brand == 0 && $komunikasi == 0)
                                <form class="form-result">
                                    <p class="result_question">
                                        Halo, <b>{{ $jawaban->guestss->full_name }}</b>
                                        <br><br>
                                        Terima kasih telah memilih ALL-in Eduspace Scholarship Questionnaire sebagai
                                        langkah
                                        awal
                                        mengatur
                                        strategi kesiapan pendaftaran beasiswamu.
                                        <br><br>
                                        Setelah menjawab beberapa soal, kami menilai bahwa persiapan beasiswamu telah
                                        pada
                                        tahap
                                        ‘Not
                                        Ready’, sehingga kami memberikan beberapa saran untuk meningkatkan kesiapanmu
                                        dalam
                                        mendaftarkan
                                        diri untuk beasiswa, antara lain:
                                    </p>
                                </form>
                            @elseif ($academic == 0 || $aktivitas == 0 || $prestasi == 0 || $personal_brand == 0 || $komunikasi == 0)
                                <form class="form-result">
                                    <p class="result_question">
                                        Halo, <b>{{ $jawaban->guestss->full_name }}</b>
                                        <br><br>
                                        Terima kasih telah memilih ALL-in Eduspace Scholarship Questionnaire sebagai
                                        langkah
                                        awal
                                        mengatur
                                        strategi kesiapan pendaftaran beasiswamu.
                                        <br><br>
                                        Setelah menjawab beberapa soal, kami menilai bahwa persiapan beasiswamu telah
                                        pada
                                        tahap
                                        ‘Not
                                        Ready’
                                        dengan beberapa catatan, antara lain:
                                    </p>
                                </form>
                            @endif

                            @if ($academic == 1 && $aktivitas == 1 && $prestasi == 1 && $personal_brand == 1 && $komunikasi == 1)
                                <form class="form-result">

                                    <p class="quiz-form__question">Namun, akan lebih maksimal apabila kamu tetap
                                        mengembangkan
                                        profil
                                        kamu menyesuaikan dengan
                                        kriteria-kriteria beasiswa yang akan kamu daftarkan, seperti:</p>
                                    <ul>
                                        <li class="quiz-form__question2">
                                            <p>
                                                Mempersiapkan nilai yang baik untuk tes standarisasi (SAT/ACT/IB Level/A
                                                Level/EJU/sejenisnya).
                                            </p>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li class="quiz-form__question2">
                                            <p>
                                                Mempersiapkan nilai yang baik untuk tes bahasa (TOEFL, IELTS, TELC,
                                                JLPT,
                                                dan
                                                sejenisnya).
                                            </p>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li class="quiz-form__question2">
                                            <p>
                                                Mempersiapkan essay yang baik, kreatif, dan menarik.
                                            </p>
                                        </li>
                                    </ul>

                                    <p class="quiz-form__question">Serta hal-hal lainnya yang dapat mendukung persiapan
                                        beasiswamu
                                    </p>
                                </form>
                            @endif

                            @if ($academic == 0)
                                <form class="form-result">
                                    <br>
                                    <p class="quiz-form__question"><b>Poin akademikmu</b> belum menyentuh angka minimum
                                        dari
                                        questionnaire ini, sehingga:</p>
                                    <ul>
                                        <li class="quiz-form__question2">
                                            <p>
                                                Apabila kamu belum berada pada tahun terakhir sekolahmu, pastikan kamu
                                                bersungguh-bersungguh untuk
                                                menaikan atau mempertahankan nilai dan mendapatkan atau mempertahankan
                                                ranking
                                                (apabila
                                                sekolahmu
                                                memiliki sistem ranking)
                                            </p>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li class="quiz-form__question2">
                                            <p>
                                                Apabila sulit bagimu untuk melakukan poin sebelumnya atau kamu telah
                                                berada
                                                dalam
                                                tahun
                                                terakhir
                                                sekolahmu, pertimbangkan dan manfaatkan peluang-peluang lain seperti
                                                pengalaman-pengalaman
                                                kepemimpinan atau pengembangan kemampuan
                                            </p>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li class="quiz-form__question2">
                                            <p>
                                                Akan sangat membantu apabila kamu menyiapkan dan mengikuti tes-tes
                                                standarisasi,
                                                seperti
                                                SAT/ACT/IB Level/A Level/EJU/sejenisnya sebagai ‘nilai bonus’ dalam
                                                seleksi
                                                berkas
                                            </p>
                                        </li>
                                    </ul>
                                </form>
                                <br>
                            @endif

                            @if ($aktivitas == 0)
                                <form class="form-result">
                                    <br>
                                    <p class="quiz-form__question"><b>Poin aktivitas/kegiatanmu belum menyentuh angka
                                            minimum
                                            dari
                                            questionnaire ini, sehingga:</p>
                                    <ul>
                                        <li class="quiz-form__question2">
                                            <p>
                                                Ikutilah dan perbanyaklah kegiatan-kegiatan yang mendukung pengembangan
                                                diri
                                                dan
                                                kepemimpinan, seperti:
                                            </p>
                                        <li class="quiz-form__question3">
                                            <p>Extracurricular.</p>
                                        </li>
                                        <li class="quiz-form__question3">
                                            <p>Kepengurusan/kepanitiaan.</p>
                                        </li>
                                        <li class="quiz-form__question3">
                                            <p>Volunteer</p>
                                        </li>
                                        <li class="quiz-form__question3">
                                            <p>Internship/part-time.</p>
                                        </li>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li class="quiz-form__question2">
                                            <p>
                                                Inisiasikan suatu project yang memiliki manfaat untuk sekitar, seperti:
                                            </p>
                                        <li class="quiz-form__question3">
                                            <p>Komunitas/organisasi.</p>
                                        </li>
                                        <li class="quiz-form__question3">
                                            <p>Kampanye isu-isu yang menjadi beban pemikiranmu.</p>
                                        </li>
                                        <li class="quiz-form__question3">
                                            <p>Proyek pemecahan masalah di sekitarmu melalui ilmu sains dan sosial
                                            <p>
                                        </li>
                                        <li class="quiz-form__question3">
                                            <p>Inovasi alat-alat yang dapat mempermudah kegiatan manusia.</p>
                                        </li>
                                        <li class="quiz-form__question3">
                                            <p>Inovasi karya seni</p>
                                        </li>
                                        </li>
                                    </ul>
                                </form>
                                <br>
                            @endif

                            @if ($personal_brand == 0)
                                <form class="form-result">
                                    <br>
                                    <p class="quiz-form__question"><b>Poin prestasimu </b> belum menyentuh angka minimum
                                        dari
                                        questionnaire ini, sehingga:</p>
                                    <ul>
                                        <li class="quiz-form__question2">
                                            <p>
                                                Cobalah untuk mengeksplorasi hal-hal yang mendukung pengembangan diri,
                                                pendidikan
                                                dan
                                                karirmu, seperti:
                                            </p>
                                        <li class="quiz-form__question3">
                                            <p>Jurusan yang kamu minati.</p>
                                        </li>
                                        <li class="quiz-form__question3">
                                            <p>Universitas yang menurutmu metode pembelajaran dan lingkungannya
                                                mendukung
                                                kegiatan
                                                pembelajaranmu.</p>
                                        </li>
                                        <li class="quiz-form__question3">
                                            <p>Kemampuan-kemampuan non akademik, seperti: seni, olahraga, dan
                                                sejenisnya.
                                            </p>
                                        </li>
                                        <li class="quiz-form__question3">
                                            <p>Dan sebagainya.</p>
                                        </li>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li class="quiz-form__question2">
                                            <p>
                                                Beberapa jenis media yang dapat digunakan untuk mengembangkan poin-poin
                                                diatas
                                                adalah:
                                            </p>
                                        <li class="quiz-form__question3">
                                            <p>Menghadiri campus/major expo.</p>
                                        </li>
                                        <li class="quiz-form__question3">
                                            <p>Mengikuti kegiatan pelatihan/les.</p>
                                        </li>
                                        <li class="quiz-form__question3">
                                            <p>Mengikuti short courses/bootcamp.
                                            <p>
                                        </li>
                                        <li class="quiz-form__question3">
                                            <p>Dan sebagainya.</p>
                                        </li>
                                        </li>
                                    </ul>
                                </form>
                                <br>
                            @endif

                            @if ($prestasi == 0)
                                <form class="form-result">
                                    <br>
                                    <p class="quiz-form__question"><b>Poin personal brandmu</b> belum menyentuh angka
                                        minimum
                                        dari
                                        questionnaire ini, sehingga:</p>
                                    <ul>
                                        <li class="quiz-form__question2">
                                            <p>
                                                Cobalah dan ikutilah kegiatan-kegiatan lomba/konferensi/ajang pemilihan
                                                figur
                                                generasi
                                                muda,
                                                seperti:
                                            </p>
                                        <li class="quiz-form__question3">
                                            <p>Lomba/olimpiade, mulai tingkat sekolah hingga internasional.</p>
                                        </li>
                                        <li class="quiz-form__question3">
                                            <p>Konferensi, seperti: Model United Nations, Summits, dan sejenisnya.</p>
                                        </li>
                                        <li class="quiz-form__question3">
                                            <p>Ajang pemilihan figur generasi muda, seperti: Duta Bahasa, Duta Hukum,
                                                Abang
                                                None,
                                                dan
                                                sejenisnya.</p>
                                        </li>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li class="quiz-form__question2">
                                            <p>
                                                Apabila kamu merasa tidak memungkinkan untuk menjalankan poin
                                                sebelumnya,
                                                pertimbangkan
                                                dan
                                                manfaatkan peluang-peluang lain seperti pelatihan, program loka-karya
                                                untuk
                                                mengembangkan skill mu.
                                            </p>
                                        </li>
                                    </ul>
                                </form>
                                <br>
                            @endif

                            @if ($komunikasi == 0)
                                <form class="form-result">
                                    <br>
                                    <p class="quiz-form__question"><b>Poin communication skillsmu </b> belum menyentuh
                                        angka
                                        minimum
                                        dari questionnaire ini, sehingga:</p>
                                    <ul>
                                        <li class="quiz-form__question2">
                                            <p>
                                                Persiapkan diri untuk mengikuti tes bahasa yang nilainya akan dibutuhkan
                                                dalam
                                                pendaftaran, seperti TOEFL, IELTS, TELC, JLPT, dan sejenisnya
                                            </p>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li class="quiz-form__question2">
                                            <p>
                                                Persiapkan diri untuk mengikuti interview, dengan:
                                            </p>
                                        <li class="quiz-form__question3">
                                            <p>Pelajari pertanyaan-pertanyaan apa saja yang sekiranya akan ditanyakan
                                                dalam
                                                umumnya
                                                sesi
                                                interview beasiswa.</p>
                                        </li>
                                        <li class="quiz-form__question3">
                                            <p>Kenali metode/cara menjawab pertanyaan dengan baik, seperti: STAR Method
                                                dan
                                                sejenisnya.
                                            </p>
                                        </li>
                                        <li class="quiz-form__question3">
                                            <p>Gunakan interview simulation/ajak orang lain untuk melatihmu menjawab
                                                pertanyaan-pertanyaan dalam
                                                sesi interview.
                                            </p>
                                        </li>
                                        <li class="quiz-form__question3">
                                            <p>Pastikan kamu mengenal dirimu dengan baik dan fasih dengan bahasa yang
                                                digunakan
                                                dalam
                                                interview
                                                untuk memudahkanmu menjawab pertanyaan-pertanyaan yang ada.</p>
                                        </li>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li class="quiz-form__question2">
                                            <p>
                                                Persiapkan diri untuk menulis sebuah essay yang baik dan sesuai
                                                kebutuhan,
                                                dengan:
                                            </p>
                                        <li class="quiz-form__question3">
                                            <p>Mengenali kriteria essay yang baik dimata pemberi beasiswa.</p>
                                        </li>
                                        <li class="quiz-form__question3">
                                            <p>Sesuaikan tema essay dengan tema yang diminta.</p>
                                        </li>
                                        <li class="quiz-form__question3">
                                            <p>Gunakan bahasa yang baik dan mudah dicerna, namun tetap menarik untuk
                                                dibaca.
                                            <p>
                                        </li>
                                        </li>
                                    </ul>
                                </form>
                                <br>
                            @endif

                        <p class="result_question">
                            Sebagai pendaftar beasiswa, kamu perlu ingat bahwa sainganmu tidaklah sedikit sehingga
                            membutuhkan
                            ekstra usaha untuk membuatmu lebih unggul daripada pendaftar lainnya. Tetaplah semangat dan
                            good
                            luck!
                        </p>
                        </p>
                    </div>
                </form>
            </div>

        </div>
    </div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
