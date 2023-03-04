<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <?php
    $settings = getSetting();
    ?>
    @if (env('APP_MODE') == 'DEVELOPMENT')
    <meta name="robots" content="noindex">
    @endif
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset($settings->favicon) }}">
    <link rel="manifest" href="{{ asset('manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="">
    <meta name="theme-color" content="#ffffff">
    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index,follow">
    <meta name="google-site-verification" content="" />
    <meta name="ICBM" content="23.777176;90.399452">
    <meta name="geo.position" content="23.777176;90.399452">
    <meta name="geo.region" content="3166-2:BD-C">
    <meta name="geo.placename" content="USA">
    <meta name="twitter:site" content="{{ Str::afterLast('@' . $settings->twitter_url, '/') }}" />
    <meta name="twitter:creator" content="{{ Str::afterLast('@' . $settings->twitter_url, '/') }}" />
    <meta property="og:logo" content="{{ asset($settings->site_logo) }}">
    <meta property="og:title" content="@yield('title')">
    <meta name="Developed By" content="Arobil Ltd" />
    <meta name="Developer" content="Arobil Team" />
    <meta name="distribution" content="Global">
    <meta http-equiv="Content-Language" content="en" />
    <meta name="facebook-domain-verification" content="" />
    <meta property="fb:pages" content="" />
    <meta property="fb:app_id" content="" />
    <meta property="fb:admins" content="" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/toastr.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css?v=5') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    @stack('custom_css')

    <!-- Scripts -->
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <input type="hidden" name="base_url" id="base_url" value="{{ url('/') }}">
</head>

<body>
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/toastr.js') }}"></script>
    @stack('custom_js')
    <script>
        $(document).on('input', '#username', function() {
            var value = $(this).val().replace(/[^A-Z0-9]/gi, '');
            $('#username').val(value);
        })

        // aos animation
        AOS.init({
            once: true,
            offset: 300,
            duration: 800,
        });
        // Review Carousel
        var owl = $('.review_wrapper');
        owl.owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dot: true,
            autoplay: false,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                992: {
                    items: 3
                }
            }
        });
    </script>

    {!! Toastr::message() !!}
    <script>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error('{{ $error }}', 'Error', {
                    closeButton: true,
                    progressBar: true,
                });
            @endforeach
        @endif
        toastr.options = {
            "closeButton": true,
            "debug": false,
            // "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-center",
            // "preventDuplicates": false,
            // "onclick": null,
            // "showDuration": "300",
            // "hideDuration": "1000",
            // "timeOut": "5000",
            // "extendedTimeOut": "1000",
            // "showEasing": "swing",
            // "hideEasing": "linear",
            // "showMethod": "fadeIn",
            // "hideMethod": "fadeOut"
        };

        function addToCart(id) {
            $.ajax({
                type: 'GET',
                enctype: 'multipart/form-data',
                url: "add-to-cart/" + id,
                success: function(data) {
                    if (data.status) {
                        toastr.success('Product added to cart successfully!')
                        $('#cartCounter').html(data.count);
                        $('.product_id_'+id).html('Added')
                    } else {
                        toastr.error('Something Worng..!')
                    }
                },
                error: function(error) {
                    console.log(error);
                }
            });

        }
        function addedToCart(id){
            toastr.error('Already Added to Cart!');
        }
    </script>
</body>

</html>
