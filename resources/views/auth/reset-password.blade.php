<?php
$settings  = getSetting();
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
        <link rel="stylesheet" href="{{asset('assets/css/toastr.css')}}">

    </head>
    <body>
        <div class="login_section pt-5 pb-5">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-sm-9 col-md-7 col-lg-5 col-xl-4">
                        <div class="login_content">
                            <div class="login_header mb-5 text-center">
                                <a href="{{ route('home') }}"><img src="{{ asset($settings->site_logo) }}" class="img-fluid" alt="{{ $settings->site_name }}" title="{{ $settings->site_name }}"></a>
                                <h6>{{ __('Set new password.')}}</h6>
                            </div>
                            <div class="login_form">
                                <form action="{{ route('user.reset.new.password') }}" method="post">
                                    @csrf
                                    <input id="email" type="hidden" class="form-control" name="email" value="{{ $email }}" required>
                                    <input id="token" type="hidden" class="form-control" name="token" value="{{ $token }}" required>
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label for="password" class="col-form-label text-md-right">{{ __('New Password') }}</label>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="current-password">

                                            @if($errors->has('password'))
                                            <span class="help-block text-danger">{{ $errors->first('password') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="mt-4 mb-3">
                                            <button type="submit" class="btn btn-primary w-100">{{ __('Save Password')}}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{asset('assets/js/toastr.js')}}"></script>
        {!! Toastr::message() !!}
    </body>
</html>
