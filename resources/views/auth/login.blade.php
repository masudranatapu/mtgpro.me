@extends('layouts.app')
@section('title') {{ __('Login') }} @endsection
@section('content')
 <!-- ======================= Sign In  =========================== -->
<div class="login_sec section" style="margin:35px 0px;">
    <!-- container -->
    <div class="container">
        <div class="login_wrapper">
            <!-- row -->
            <div class="row d-flex justify-content-center">
                <div class="col-11 col-sm-8 col-md-7 col-lg-6 col-xl-4">
                    <div class="login_form">
                        <div class="login_title mb-4 text-center">
                            <h3>{{ __('Sign In') }}</h3>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="social_login mb-2 mt-2 text-center">
                                <a href="{{ route('social.login', 'facebook') }}" class="fa_facebook"><i class="fab fa-facebook"></i></a>
                                <a href="{{ route('social.login', 'google') }}" class="fa_google"><i class="fab fa-google"></i></a>
                                {{-- <a href="{{ route('social.login', 'twitter') }}" class="fa_twitter"><i class="fab fa-twitter"></i></a> --}}
                            </div>
                            <div class="divider mb-3 text-center">
                                <span>Or</span>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Username or Email Address') }}</label>
                                <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" tabindex="1" placeholder="{{ __('Username or Email address') }}" required>
                                @if($errors->has('email'))
                                <span class="help-block text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" tabindex="2" placeholder="{{ __('Password') }}" required>
                                @if($errors->has('password'))
                                <span class="help-block text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">{{ __('Sign In') }}</button>
                            </div>

                            <div class="forgot_pass text-center">
                                <a href="{{ route('password.request') }}" title="{{ __('Forgot password') }}" class="text-dark">{{ __('Forgot password') }}?</a>
                            </div>

                            <div class="bottom text-center">
                                <p>{{ __("Don't have an account?") }} <a href="{{ route('register') }}" title="{{ __('Sign Up') }}">{{ __('Sign Up') }}</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
    </div>
    <!-- container -->
</div>
@endsection
