<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>
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
    </style>
    @stack('custom_css')
</head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <!-- top bar menu -->
            @include('user.layouts.header')
            @include('user.layouts.sidebar')
            @yield('content')
        </div>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap4.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
    <script src="{{ asset('assets/js/adminlte.min.js') }}"></script>
    <script src="{{asset('assets/js/toastr.js')}}"></script>

    <script>
    // preview icon
    var loadFile = function(event) {
        var image = document.getElementById('previewIcon');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
    // preview profile photo
    var profileloadFile = function(event) {
        var profile = document.getElementById('profilePic');
        profile.src = URL.createObjectURL(event.target.files[0]);
    };

    // preview company logo
    // var companyloadFile = function(event) {
    //     var logo = document.getElementById('showlogo');
    //     logo.src = URL.createObjectURL(event.target.files[0]);
    // };

    // preview cover photo
    var coverFile = function(event) {
        var cover  = document.getElementById('coverpic');
        cover.src  = URL.createObjectURL(event.target.files[0]);
    };

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

    </script>
    @stack('custom_js')
</body>
</html>
