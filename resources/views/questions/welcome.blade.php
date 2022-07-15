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
                <div class="stepper-wrapper">
                    <div class="stepper-item active">
                        <div class="step-counter">1</div>
                        <div class="step-name">Akademis</div>
                    </div>
                    <div class="stepper-item">
                        <div class="step-counter">2</div>
                        <div class="step-name">Aktivitas</div>
                    </div>
                    <div class="stepper-item">
                        <div class="step-counter">3</div>
                        <div class="step-name">Prestasi</div>
                    </div>
                    <div class="stepper-item">
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
                    <form method="POST" action="/akademik" enctype="multipart/form-data">
                        @csrf
                        <div class="quiz-form__quiz">
                            <p class="quiz-form__question">
                                1. Apakah sekolahmu menggunakan sistem ranking?
                            </p>
                            {{-- <input type="hidden" name="id_guest" value="{{ Session::get('id_guest') }}" /> --}}
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
@section('script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $("input[type=radio]").each(function() {
            $(this).on('change', function() {
                // alert($(this).val());

                $.ajax({
                    type: "post",
                    url: "{{ URL::to('/akademiksession') }}",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        answer: $(this).val(),
                        id_guest: $('input[name="id_guest"]').val(),
                        questions_number: $('input[name="questions_number"]').val(),
                        category: $('input[name="category"]').val(),
                    },
                    success: function(result) {
                        console.log(result);
                    },
                    error: function(data, textStatus, errorThrown) {
                        console.log(data);

                    },

                });
            })
        })
    </script>
@endsection
{{-- <script>
    $("input[type=radio]").each(function() {
        $(this).on('change', function() {
            alert($(this).val())
        })
    })

    // $.ajaxSetup({
                //     headers: {
                //         'X-CSSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                //     }
                // });
</script> --}}



{{-- <script>
    $("input[type=radio]").each(function() {
        $(this).on('change', function() {
            alert($(this).val());
            $.ajax({
                type: "post",
                url: "{{ URL::to('/akademiksession') }}",
                data: {
                    category: $(this).val(),
                    id_guest: $('input[name="id_guest"]').val(),
                    questions_number: $('input[name="questions_number"]').val(),
                    answer: $('input[name="answer"]').val(),
                },
                success: function(result) {
                    console.log(result);
                }
            });
        })
    })
</script> --}}
