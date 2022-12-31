<!DOCTYPE html>
<html>
<head>
    <title>Add social share button in Laravel 8 with Laravel Share</title>
    <!-- Meta -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    {{-- <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet"> --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" /> --}}
    <!-- jQuery -->
    {{-- <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script> --}}
    <!-- Share JS -->
    <script src="{{ asset('assets/js/share.js') }}"></script>

    <style>
        #social-links ul {
            padding-left: 0;
        }

        #social-links ul li {
            display: inline-block;
        }
        #social-links ul li a {
            padding: 3px;
            border-radius: 5px;
            margin: 1px;
            font-size: 25px;
        }

        #social-links .fa-facebook-square {
            background-color: #3B5998;
            color: #fff;
            padding: 10px;
            border: 1px solid;
            border-radius: 50%;
            font-size: 18px;
        }

        #social-links .fa-twitter {
            background-color: #00ACED;
            color: #fff;
            padding: 10px;
            border: 1px solid;
            border-radius: 50%;
            font-size: 18px;
        }

        #social-links .fa-linkedin {
            background-color: #007FB1;
            color: #fff;
            padding: 10px;
            border: 1px solid;
            border-radius: 50%;
            font-size: 18px;
        }

        #social-links .fa-whatsapp {
            background-color: #25D366;
            color: #fff;
            padding: 8px;
            border: 1px solid;
            border-radius: 50% 55% 54% 56%;
            font-size: 22px;
        }

        #social-links .fa-reddit {
            background-color: #FF4500;
            color: #fff;
            padding: 10px;
            border: 1px solid;
            border-radius: 50%;
            font-size: 18px;
        }

        #social-links .fa-telegram {
            background-color: #0088cc;
            color: #fff;
            padding: 10px;
            border: 1px solid;
            border-radius: 50%;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class='container text-center'>
        <h2 class="mb-5 text-center">{{ __('Share Your Card')}}</h2>
        {!! $shareComponent !!}
    </div>
</body>
</html>
