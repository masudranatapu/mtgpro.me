<?php
$settings = getSetting();
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $settings->site_name }}</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    </head>
    <body>
        <div class="login_section pt-5 pb-5 min-height">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-sm-9 col-md-7 col-lg-5 col-xl-4">
                        <div class="login_content">
                            <div class="login_header mb-5 text-center">
                                <a href="{{ route('home') }}"><img src="{{ asset($settings->site_logo) }}" class="img-fluid" title="{{ $settings->site_name }}" alt="{{ $settings->site_name }}"></a>
                                <h6>{{ __("Enter your account email and we'll send you a link to reset your password.")}}</h6>
                            </div>
                            <div class="login_form">
                                @include('common.flash')
                                <form action="#" method="post">
                                    <div class="form-floating mb-3">
                                    <input type="email" class="form-control @error('password') is-invalid @enderror" id="email" placeholder="name@example.com" required>
                                        <label for="email">{{ __('Email address')}}</label>
                                    </div>
                                <div class="mt-4 mb-3">
                                        <button type="submit" class="btn btn-primary w-100">{{ __('Send Reset Link')}}</button>
                                </div>
                                </form>
                            </div>
                            <div class="back_login text-center">
                                <a href="{{ url('login') }}" title="{{ __('Back to Log In')}}">{{ __('Back to Log In')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    </body>
</html>
