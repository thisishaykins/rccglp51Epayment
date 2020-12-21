@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
            <div class="card">
                <h3 class="card-header">{{ __('Sign in with') }}</h3>

                <div class="card-body">
                    <form method="POST" class="form form-horizontal" action="{{ route('login') }}">
                        @csrf

                        {{ $message ?? '' }}

                        <div class="form-group mb-3 focused">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="icon style1 fa-user"></i></span>
                                </div>
                                <input type="email" id="email" name="email" placeholder="{{ __('E-Mail Address') }}" class="form-control @error('email') is-invalid @enderror"  value="{{ old('email') }}" required autocomplete="email" autofocus>
                            </div>
                            @error('email')
                                <span class="alert alert-danger invalid-feedback show" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="icon style1 fa-user"></i></span>
                                </div>
                                <input id="password" type="password" placeholder="{{ __('Password') }}" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            </div>
                            @error('password')
                                <span class="alert alert-danger invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <small class="form-group row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </small>

                        <div class="form-group mb-0">
                            <div class="col-md-12-none">
                                <button type="submit" class="btn btn-sm btn-dark btn-block">
                                    {{ __('Login') }}
                                </button>
                                <!-- <div class="row" style="padding: 0 4px;"> -->
                                <div class="pulse" style="margin: 0 -12px">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                    <a class="btn btn-link right pull-right" href="{{ route('register') }}" style="float: right; color: #e58d4b">
                                        {{ __("Register") }}
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
