@extends('layouts.app')

@section('content')


    <!-- ======================= Sign Up  =========================== -->
    <div class="login_sec section">
        <!-- container -->
        <div class="container">
            <div class="login_wrapper">
                <!-- row -->
                <div class="row d-flex justify-content-center">
                    <div class="col-11 col-sm-8 col-md-7 col-lg-6 col-xl-4">
                        <div class="login_form">
                            <div class="login_title mb-4 text-center">
                                <h3>Sign Up</h3>
                            </div>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="social_login mb-5 mt-5 text-center">
                                    <a href="#" class="fa_facebook"><i class="fab fa-facebook"></i></a>
                                    <a href="#" class="fa_google"><i class="fab fa-google"></i></a>
                                    <a href="#" class="fa_twitter"><i class="fab fa-twitter"></i></a>
                                </div>
                                <div class="divider mb-5 text-center">
                                    <span>Or</span>
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Full Name</label>
                                    <input type="text" name="name" id="name" class="form-control" tabindex="1" placeholder="Full Name" required>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" name="email" id="email" class="form-control" tabindex="2" placeholder=" Email address" required>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" tabindex="3" placeholder="Password" required>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" tabindex="4" placeholder="Confirm Password" required>
                                    @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Sign Up</button>
                                </div>
                                <div class="bottom text-center">
                                    <p>Already have an account? <a href="{{ route('login') }}">Sign In</a></p>
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
