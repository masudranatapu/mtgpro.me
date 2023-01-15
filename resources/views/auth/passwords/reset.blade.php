@extends('layouts.app')
@section('title') {{ __('Reset Password') }} @endsection
@section('content')
<div class="login_sec section" style="margin:35px 0px;">
    <div class="container">
        <div class="login_wrapper">
            <div class="row d-flex justify-content-center">
                <div class="col-11 col-sm-8 col-md-7 col-lg-6 col-xl-4">
                    <div class="login_form">
                        <div class="login_title mb-4 text-center">
                            <h3>{{ __('Reset Password') }}</h3>
                        </div>
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                <input type="text" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                @if($errors->has('email'))
                                <span class="help-block text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" tabindex="2" placeholder="{{ __('Password') }}" required autocomplete="new-password">
                                @if($errors->has('password'))
                                <span class="help-block text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" tabindex="4" placeholder="{{ __('Confirm Password') }}" required autocomplete="new-password">
                                @if($errors->has('password_confirmation'))
                                <span class="help-block text-danger">{{ $errors->first('password_confirmation') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">{{ __('Reset Password') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
