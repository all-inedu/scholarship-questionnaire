@extends('utama.header')
@section('content')
    <div class="wrapper" style="background: #FFFFFF">
        <div class="inner">
            <form method="POST" action="/guest">
                @csrf
                <h3>Scholarship Questionnaire</h3>
                <h5>Registration Form</h5>
                <div class="">
                    <div class="form-wrapper">
                        <label for="">Full Name:</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-account-o"></i>
                            <input type="text" name="full_name" @error('full_name') is-invalid @enderror
                                class="form-control" value="{{ old('full_name', $guest->full_name ?? null) }}">
                        </div>
                        @error('full_name')
                            <div class="invalid-feedback" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-wrapper">
                        <label for="">Email:</label>
                        <div class="form-holder">
                            <i style="font-style: normal; font-size: 15px;">@</i>
                            <input type="text" name="email" @error('email') is-invalid @enderror class="form-control"
                                value="{{ old('email') }}">
                        </div>
                        @error('email')
                            <div class="invalid-feedback" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-wrapper">
                        <label for="">School Name:</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-graduation-cap"></i>
                            <input type="text" @error('school_name') is-invalid @enderror name="school_name"
                                class="form-control" value="{{ old('school_name') }}">
                        </div>
                        @error('school_name')
                            <div class="invalid-feedback" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-wrapper">
                        <label for="">Grade:</label>
                        <div class="form-holder select">
                            <select name="grade" id="" @error('grade') is-invalid @enderror
                                value="{{ old('grade') }}" class="form-control">
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

                <div class="form-end">
                    <div class="button-holder">
                        <button>Register Now</button>
                    </div>
                </div>
            </form>
            {{-- <div id="openModal-about" class="modalDialog">
                <div>
                    <a href="#close" title="Close" class="close">X</a>
                    <h2>Modal</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                        with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                        publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
                <div class="form-end">
                    <div class="button-holder">
                        <button>Register Now</button>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
@endsection
