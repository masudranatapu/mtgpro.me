<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <?php
            $settings  = getSetting();
        ?>
        @if( env('APP_MODE') == 'DEVELOPMENT')
            <meta name="robots" content="noindex">
        @endif
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>{{ $settings->site_name }} - @yield('title')</title>
        <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset($settings->favicon) }}">
        {{-- <link rel="manifest" href="{{ asset('manifest.json') }}"> --}}
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
        <meta name="twitter:site" content="{{Str::afterLast('@'.$settings->twitter_url, '/')}}"/>
        <meta name="twitter:creator" content="{{Str::afterLast('@'.$settings->twitter_url, '/')}}"/>
        <meta property="og:logo" content="{{asset($settings->site_logo)}}">
        <meta property="og:title" content="@yield('title')">
        <meta name="Developed By" content="Arobil Ltd" />
        <meta name="Developer" content="Arobil Team" />
        <meta name="distribution" content="Global">
        <meta http-equiv="Content-Language" content="en"/>
        <meta name="facebook-domain-verification" content="" />
        <meta property="fb:pages" content="" />
        <meta property="fb:app_id" content="" />
        <meta property="fb:admins" content=""/>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard-style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard-responsive.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/toastr.css')}}">

    <!-- Scripts -->
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <style>
        .fa-exclamation-circle{color: #ccc;}
        .paid_scin{padding: 5px 20px;}
    </style>
    @stack('custom_css')
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    @stack('top_js')
    <input type="hidden" name="base_url" id="base_url" value="{{url('/')}}">

    </head>

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <!-- top bar menu -->
            @include('user.layouts.header')
            @include('user.layouts.sidebar')
            @yield('content')
        </div>
    <script src="{{ asset('assets/js/bootstrap4.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
    <script src="{{ asset('assets/js/adminlte.min.js') }}"></script>
    <script src="{{asset('assets/js/toastr.js')}}"></script>
    {!! Toastr::message() !!}

    <script>
    // preview icon
    // var loadFile = function(event) {
    //     var image = document.getElementById('previewIcon');
    //     image.src = URL.createObjectURL(event.target.files[0]);
    // };
    // preview profile photo
    // var profileloadFile = function(event) {
    //     var profile = document.getElementById('profilePic');
    //     profile.src = URL.createObjectURL(event.target.files[0]);
    // };

    // preview company logo
    // var companyloadFile = function(event) {
    //     var logo = document.getElementById('showlogo');
    //     logo.src = URL.createObjectURL(event.target.files[0]);
    // };

    // preview cover photo
    // var coverFile = function(event) {
    //     var cover  = document.getElementById('coverpic');
    //     cover.src  = URL.createObjectURL(event.target.files[0]);
    // };

    // drag and drop
    // const dropItems = document.getElementById('drop-items')
    // new Sortable(dropItems, {
    //     animation: 350,
    //     chosenClass: "sortable-chosen",
    //     dragClass: "sortable-drag"
    // });

    // social content modal
    $('.onclickIcon').on('click', function() {
        $('.first_modal').addClass('d-none');
        $('.second_modal').removeClass('d-none');
    });
    $('.backfirstModal').on('click', function() {
        $('.first_modal').removeClass('d-none');
        $('.second_modal').addClass('d-none');
    });
    $('.modalClose').on('click', function() {
        $('.first_modal').removeClass('d-none');
        $('.second_modal').addClass('d-none');
    });

    // edit social content
    $('.editLink').on('click', function() {
        $('.tab_body .back').removeClass('d-none');
        $('.tab_body .edit_social_form').removeClass('d-none');
        $('.tab_body .add_link').addClass('d-none');
        $('.tab_body .social_media_list').addClass('d-none');
    });
    $('.tab_body .back').on('click', function() {
        $('.tab_body .back').addClass('d-none');
        $('.tab_body .edit_social_form').addClass('d-none');
        $('.tab_body .add_link').removeClass('d-none');
        $('.tab_body .social_media_list').removeClass('d-none');
    });

    // color change
    function changeColor(color){
        var element = document.getElementById("clrBg");
        element.style.backgroundColor = color;
    }
    $(document).on('input','#colorPicker',function(){
        let color = $(this).val();
        var element = document.getElementById("clrBg");
        element.style.backgroundColor = color;
    })
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
    </script>
 @stack('custom_js')
</body>
</html>
