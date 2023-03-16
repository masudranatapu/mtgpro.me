@extends('layouts.app')
@section('title') {{ __('Reset Password') }} @endsection
@section('content')
<div class="login_sec section" style="margin:35px 0px;">
    <div class="container">
        <div class="login_wrapper min-height">
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
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @if($errors->has('email'))
                                    <span class="help-block text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">{{ __('Send Password Reset Link') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
