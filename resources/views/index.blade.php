@extends('utama.header')
@section('content')
    <div style="background: #252c4a">
        <div class="inner">
            <form method="POST" action="/guest">
                @csrf
                <div class="row" style="justify-content: center;margin-bottom:1rem">
                    <img src="{{ asset('frontend') }}/images/all_in.webp" style="width: 30%" alt="">
                </div>
                <h3 class="title-register">Scholarship Readiness Quiz</h3>
                <h5 class="sub-title-register">Start Now!</h5>

                <div class="row">
                    <div class="col-md-12">

                        <div class="form-wrapper">
                            <label for="">Full Name:</label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-account-o"></i>
                                <input type="text" name="full_name" @error('full_name') is-invalid @enderror
                                    class="form-control-satu" value="{{ old('full_name', $guest->full_name ?? null) }}"
                                    required>
                            </div>
                            @error('full_name')
                                <div class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-wrapper">
                                            <label for="">Email:</label>
                                            <div class="form-holder">
                                                <i style="font-style: normal; font-size: 15px;">@</i>
                                                <input type="text" name="email" @error('email') is-invalid @enderror
                                                    class="form-control-satu"
                                                    value="{{ old('full_name', $guest->email ?? null) }}" required>
                                            </div>
                                            @error('email')
                                                <div class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-wrapper">
                                            <label for="">Whatsapp Number:</label>
                                            <div class="form-holder">
                                                <i class="zmdi zmdi-phone-end"></i>
                                                <input type="text" name="phone_number"
                                                    @error('phone_number') is-invalid @enderror class="form-control-satu"
                                                    value="{{ old('phone_number', $guest->phone_number ?? null) }}"
                                                    required>
                                            </div>
                                            @error('phone_number')
                                                <div class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-wrapper">
                                            <label for="">School Name:</label>
                                            <div class="form-holder">
                                                <i class="zmdi zmdi-graduation-cap"></i>
                                                <input type="text" @error('school_name') is-invalid @enderror
                                                    name="school_name" class="form-control-satu"
                                                    value="{{ old('school_name') }}" required>
                                            </div>
                                            @error('school_name')
                                                <div class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-wrapper">
                                            <label for="">Grade:</label>
                                            <div class="form-holder select">
                                                <select name="grade" id="" @error('grade') is-invalid @enderror
                                                    value="{{ old('grade') }}" class="form-control-satu" required>
                                                    <option selected disabled value="">Choose...</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                </select>
                                                <i class="zmdi zmdi-flag"></i>
                                            </div>
                                            @error('grade')
                                                <div class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="form-end">
                    <div class="button-holder">
                        <button class="button-register">Register Now</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
