@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <h3 class="card-header">{{ __('Sign up with') }}</h3>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->

                        <div class="form-group mb-3 focused">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                <span for="fname" class="input-group-text"><i class="icon style1 fa-user"></i></span>
                                </div>
                                <input type="text" id="fname" name="fname" placeholder="{{ __('First Name') }}" class="form-control @error('fname') is-invalid @enderror"  value="{{ old('fname') }}" required autocomplete="fname" autofocus>
                            </div>
                            @error('fname')
                                <span class="alert alert-danger invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3 focused">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                <span for="lname" class="input-group-text"><i class="icon style1 fa-user"></i></span>
                                </div>
                                <input type="text" id="lname" name="lname" placeholder="{{ __('Last Name') }}" class="form-control @error('lname') is-invalid @enderror"  value="{{ old('lname') }}" required autocomplete="lname">
                            </div>
                            @error('lname')
                                <span class="alert alert-danger invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3 focused">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                <span for="phone" class="input-group-text"><i class="icon style1 fa-user"></i></span>
                                </div>
                                <input type="phone" id="tel" name="phone" placeholder="{{ __('Phone Number') }}" class="form-control @error('phone') is-invalid @enderror"  value="{{ old('phone') }}" required autocomplete="phone">
                            </div>
                            @error('phone')
                                <span class="alert alert-danger invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3 focused">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="icon style1 fa-user"></i></span>
                                </div>
                                <input type="email" id="email" name="email" placeholder="{{ __('E-Mail Address') }}" class="form-control @error('email') is-invalid @enderror"  value="{{ old('email') }}" required autocomplete="email">
                            </div>
                            @error('email')
                                <span class="alert alert-danger invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="icon style1 fa-user"></i></span>
                                </div>
                                <input id="password" type="password" placeholder="{{ __('Password') }}" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            </div>
                            @error('password')
                                <span class="alert alert-danger invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                <span for="password-confirm" class="input-group-text"><i class="icon style1 fa-user"></i></span>
                                </div>
                                <input id="password-confirm" type="password" placeholder="{{ __('Confirm Password') }}" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            @error('password')
                                <span class="alert alert-danger invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-0">
                            <div class="col-md-12-none">
                                <button type="submit" class="btn btn-sm btn-dark btn-block">
                                    {{ __('Sign Up') }}
                                </button>
                                <a class="btn btn-link " href="{{ route('login') }}" style="color: #e58d4b">
                                    {{ __("Already have an account? Signin") }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
