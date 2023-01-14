@extends('layouts.app')

@section('content')
    <!-- ======================= Sign Up  =========================== -->
    <div class="login_sec section" style="margin:35px 0px;">
        <!-- container -->
        <div class="container">
            <div class="login_wrapper">
                <!-- row -->
                <div class="row d-flex justify-content-center">
                    <div class="col-11 col-sm-8 col-md-7 col-lg-6 col-xl-4">
                        <div class="login_form">
                            <div class="login_title mb-4 text-center">
                                <h3>{{ __('Sign Up') }}</h3>
                            </div>
                            <form method="POST" action="{{ route('post-register') }}">
                                @csrf
                                <div class="social_login mb-2 mt-2 text-center">
                                    <a href="{{ route('social.login', 'facebook') }}" class="fa_facebook"><i class="fab fa-facebook"></i></a>
                                    <a href="{{ route('social.login', 'google') }}" class="fa_google"><i class="fab fa-google"></i></a>
                                    {{-- <a href="{{ route('social.login', 'twitter') }}" class="fa_twitter"><i class="fab fa-twitter"></i></a> --}}
                                </div>
                                <div class="divider mb-3 text-center">
                                    <span>{{ __('Or') }}</span>
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">{{ __('Full Name') }}</label>
                                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" tabindex="1" placeholder="{{ __('Full Name') }}" required>
                                    @if($errors->has('name'))
                                    <span class="help-block text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" tabindex="2" placeholder="{{ __('Email address') }}" required>
                                    @if($errors->has('email'))
                                    <span class="help-block text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="username" class="form-label">{{ __('Username') }}</label>
                                    <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" tabindex="2" placeholder="{{ __('Username') }}" required>
                                    @if($errors->has('username'))
                                    <span class="help-block text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">{{ __('Password') }}</label>
                                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" tabindex="3" placeholder="{{ __('Password') }}" required>
                                    @if($errors->has('password'))
                                    <span class="help-block text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" tabindex="4" placeholder="{{ __('Confirm Password') }}" required>
                                    @if($errors->has('password_confirmation'))
                                    <span class="help-block text-danger">{{ $errors->first('password_confirmation') }}</span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">{{ __('Sign Up') }}</button>
                                </div>
                                <div class="bottom text-center">
                                    <p>{{ __('Already have an account?') }} <a href="{{ route('login') }}" title="{{ __('Sign In') }}">{{ __('Sign In') }}</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


