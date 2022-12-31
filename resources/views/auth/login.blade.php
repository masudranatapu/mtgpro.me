@extends('layouts.app')

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
                            <h3>Sign In</h3>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="social_login mb-2 mt-2 text-center">
                                <a href="{{ route('social.login', 'facebook') }}" class="fa_facebook"><i class="fab fa-facebook"></i></a>
                                <a href="{{ route('social.login', 'google') }}" class="fa_google"><i class="fab fa-google"></i></a>
                                <a href="{{ route('social.login', 'twitter') }}" class="fa_twitter"><i class="fab fa-twitter"></i></a>
                            </div>
                            <div class="divider mb-3 text-center">
                                <span>Or</span>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Username or Email Address</label>
                                <input type="text" name="email" id="email" class="form-control" tabindex="1" placeholder="Username or Email address" required>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password" class="form-control" tabindex="2" placeholder="Password" required>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Sign In</button>
                            </div>
                            <div class="bottom text-center">
                                <p>Don't have an account? <a href="{{ route('register') }}">Sign Up</a></p>
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
