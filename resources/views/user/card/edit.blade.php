@extends('user.layouts.app')
@section('title') {{ __('Edit card') }} @endsection
@push('custom_css')
    <link type="text/css" href="{{ asset('assets/css/slim.min.css') }}" rel="stylesheet" />
    <style>
        div#social_icon_up .slim {
            width: 70px;
            height: 70px;
            border-radius: 10px;
            margin-right: 10px;
        }

        .deactivate {
            opacity: .5;
        }

        .switch-wrapper {
            position: relative;
            display: inline-flex;
            border-radius: 20px;
            background: white;
        }

        .switch-wrapper [type="radio"] {
            position: absolute;
            left: -9999px;
        }

        .switch-wrapper [type="radio"]:checked#yes~label[for="yes"],
        .switch-wrapper [type="radio"]:checked#no~label[for="no"] {
            color: #fff;
        }

        .switch-wrapper [type="radio"]:checked#yes~label[for="yes"]:hover,
        .switch-wrapper [type="radio"]:checked#no~label[for="no"]:hover {
            background: transparent;
        }

        .switch-wrapper [type="radio"]:checked#yes+label[for="no"]~.highlighter {
            transform: none;
        }

        .switch-wrapper [type="radio"]:checked#no+label[for="yes"]~.highlighter {
            transform: translateX(100%);
        }

        .switch-wrapper [type="radio"]:checked#disclaimer_show~label[for="disclaimer_show"],
        .switch-wrapper [type="radio"]:checked#disclaimer_hide~label[for="disclaimer_hide"] {
            color: #fff;
        }

        .switch-wrapper [type="radio"]:checked#disclaimer_show~label[for="disclaimer_show"]:hover,
        .switch-wrapper [type="radio"]:checked#disclaimer_hide~label[for="disclaimer_hide"]:hover {
            background: transparent;
        }

        .switch-wrapper [type="radio"]:checked#disclaimer_show+label[for="disclaimer_hide"]~.highlighter {
            transform: none;
        }

        .switch-wrapper [type="radio"]:checked#disclaimer_hide+label[for="disclaimer_show"]~.highlighter {
            transform: translateX(100%);
        }

        .switch-wrapper [type="radio"]:checked#nmls_show~label[for="nmls_show"],
        .switch-wrapper [type="radio"]:checked#nmls_hide~label[for="nmls_hide"] {
            color: #fff;
        }

        .switch-wrapper [type="radio"]:checked#nmls_show~label[for="nmls_show"]:hover,
        .switch-wrapper [type="radio"]:checked#nmls_hide~label[for="nmls_hide"]:hover {
            background: transparent;
        }

        .switch-wrapper [type="radio"]:checked#nmls_show+label[for="nmls_hide"]~.highlighter {
            transform: none;
        }

        .switch-wrapper [type="radio"]:checked#nmls_hide+label[for="nmls_show"]~.highlighter {
            transform: translateX(100%);
        }

        .switch-wrapper [type="radio"]:checked#credit_auth_show~label[for="credit_auth_show"],
        .switch-wrapper [type="radio"]:checked#credit_auth_hide~label[for="credit_auth_hide"] {
            color: #fff;
        }

        .switch-wrapper [type="radio"]:checked#credit_auth_show~label[for="credit_auth_show"]:hover,
        .switch-wrapper [type="radio"]:checked#credit_auth_hide~label[for="credit_auth_hide"]:hover {
            background: transparent;
        }

        .switch-wrapper [type="radio"]:checked#credit_auth_show+label[for="credit_auth_hide"]~.highlighter {
            transform: none;
        }

        .switch-wrapper [type="radio"]:checked#credit_auth_hide+label[for="credit_auth_show"]~.highlighter {
            transform: translateX(100%);
        }

        .switch-wrapper [type="radio"]:checked#quick_application_show~label[for="quick_application_show"],
        .switch-wrapper [type="radio"]:checked#quick_application_hide~label[for="quick_application_hide"] {
            color: #fff;
        }

        .switch-wrapper [type="radio"]:checked#quick_application_show~label[for="quick_application_show"]:hover,
        .switch-wrapper [type="radio"]:checked#quick_application_hide~label[for="quick_application_hide"]:hover {
            background: transparent;
        }

        .switch-wrapper [type="radio"]:checked#quick_application_show+label[for="quick_application_hide"]~.highlighter {
            transform: none;
        }

        .switch-wrapper [type="radio"]:checked#quick_application_hide+label[for="quick_application_show"]~.highlighter {
            transform: translateX(100%);
        }

        .switch-wrapper label {
            font-size: 14px;
            z-index: 1;
            cursor: pointer;
            border-radius: 20px;
            transition: color 0.25s ease-in-out;
            margin: 0;
            font-family: 'Inter', sans-serif;
            line-height: 44px;
            padding: 0px 36px 30px 30px;
            height: 47px;
            width: 83px;
            display: block;
            text-align: center;
        }

        .switch-wrapper .highlighter {
            position: absolute;
            top: 4px;
            left: 4px;
            width: calc(49% - 2px);
            height: calc(100% - 8px);
            border-radius: 20px;
            background: #212121;
            transition: transform 0.25s ease-in-out;
        }

        .card_preview_wrapper .save_contact a {
            padding: 9px 0px;
        }

        .sp {
            padding: 10px 20px;
            min-width: 100px;
        }
    </style>
@endpush

@php
    $icon_group = Config::get('app.icon_group');
    $settings = getSetting();
@endphp
@section('tab_content', 'active')
@section('content')
    <!-- main content -->
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">
                            <a class="back_btn" href="{{ route('user.card') }}" title="Tooltip on top"><i
                                    class="fa fa-angle-left"></i></a>
                            <img class="img-circle mr-2" src="{{ getProfile($user->profile_image) }}"
                                alt="{{ $card->title }}" width="50">
                            {{ $card->card_for }}
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="account_setting create_card_wrapper">
                    <div class="row align-item-center">
                        <div class="col-xl-8">
                            <div class="row">
                                <!-- tabs button -->
                                <div class="col-md-4 col-xl-3">
                                    <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist"
                                        aria-orientation="vertical">
                                        <!-- content -->
                                        <a class="nav-link @yield('tab_content')" id="vert-tabs-home-tab" data-toggle="pill"
                                            href="#vert-tabs-home" role="tab" aria-controls="vert-tabs-home"
                                            aria-selected="true">
                                            <img src="{{ asset('assets/img/icon/bar.svg') }}" alt="icon">
                                            {{ __('Content') }}
                                        </a>
                                        <!-- about -->
                                        <a class="nav-link @yield('tab_about')" id="vert-tabs-profile-tab" data-toggle="pill"
                                            href="#vert-tabs-profile" role="tab" aria-controls="vert-tabs-profile"
                                            aria-selected="false">
                                            <img src="{{ asset('assets/img/icon/user.svg') }}" alt="icon">
                                            {{ __('About') }}
                                        </a>
                                        <a class="nav-link @yield('tab_housing')" id="vert-tabs-housing-tab"
                                            data-toggle="pill" href="#vert-tabs-housing" role="tab"
                                            aria-controls="vert-tabs-housing" aria-selected="false">
                                            {{-- <img src="{{ asset('assets/img/icon/house.svg') }}" alt="icon"> --}}
                                            <span>
                                                <i class="fas fa-home" style="color:#c4c4c4;"></i>&nbsp;
                                                {{ __('Equal Housing Logo') }}
                                            </span>
                                        </a>
                                        <a class="nav-link @yield('tab_disclaimer')" id="vert-tabs-disclaimer-tab"
                                            data-toggle="pill" href="#vert-tabs-disclaimer" role="tab"
                                            aria-controls="vert-tabs-disclaimer" aria-selected="false">
                                            {{-- <img src="{{ asset('assets/img/icon/user.svg') }}" alt="icon">
                                        --}}
                                            <span>
                                                <i class="far fa-sticky-note" style="color:#c4c4c4;"></i>&nbsp;
                                                {{ __('User Disclaimer') }}
                                            </span>
                                        </a>
                                        <a class="nav-link @yield('tab_nmls')" id="vert-tabs-nmls-tab" data-toggle="pill"
                                            href="#vert-tabs-nmls" role="tab" aria-controls="vert-tabs-nmls"
                                            aria-selected="false">
                                            {{-- <img src="{{ asset('assets/img/icon/user.svg') }}" alt="icon">
                                        --}}
                                            <span>
                                                <i class="fas fa-id-card" style="color:#c4c4c4;"></i>&nbsp;
                                                {{ __('User NMLS ID') }}
                                            </span>
                                        </a>
                                        <a class="nav-link @yield('tab_credit_auth')" id="vert-tabs-credit_auth-tab"
                                            data-toggle="pill" href="#vert-tabs-credit_auth" role="tab"
                                            aria-controls="vert-tabs-credit_auth" aria-selected="false">
                                            {{-- <img src="{{ asset('assets/img/icon/user.svg') }}" alt="icon">
                                        --}}
                                            <span>
                                                <i class="fas fa-hand-holding-dollar" style="color:#c4c4c4;"></i>&nbsp;

                                                {{ __('Form') }}
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8 col-xl-9">
                                    <div class="tab-content" id="vert-tabs-tabContent">
                                        <!-- content -->
                                        <div class="tab-pane text-left fade active show" id="vert-tabs-home"
                                            role="tabpanel" aria-labelledby="vert-tabs-home-tab">
                                            <div class="tab_body">
                                                <!-- back button -->
                                                <div class="back d-none mb-4 float-left">
                                                    <a href="javascript:void(0)">
                                                        <i class="fa fa-angle-left"></i>{{ __('Back') }}
                                                    </a>
                                                </div>
                                                <!-- add link button -->
                                                <div class="add_link mb-4 float-right">
                                                    <a class="btn btn-primary" data-toggle="modal"
                                                        data-target="#socialMedia" href="javascript:void(0)">
                                                        <i class="fa fa-plus"></i> {{ __('Add Links and Contact Info') }}
                                                    </a>
                                                </div>
                                                <!-- social media link -->
                                                <div class="social_media_list" id="drop-items">
                                                    @if (isset($card->business_card_fields) && count($card->business_card_fields) > 0)
                                                        @foreach ($card->business_card_fields as $key => $icon)
                                                            <div class="single_list media position-relative sicon_single_list_{{ $icon->id }}"
                                                                data-id="{{ $icon->id }}"
                                                                data-card_id="{{ $card->id }}">
                                                                <a class="editLink" data-id="{{ $icon->id }}"
                                                                    href="javascript:void(0)">
                                                                    <div class="drag_drap">
                                                                        <img src="{{ asset('assets/img/icon/bar-2.svg') }}"
                                                                            alt="icon">
                                                                    </div>
                                                                    <div class="social_media_name">
                                                                        <img src="{{ getIcon($icon->icon_image) }}"
                                                                            alt="{{ $icon->icon }}"
                                                                            style="background: {{ $icon->sicon->icon_color ?? '#000' }}">
                                                                        <span>{{ $icon->label }}</span>
                                                                    </div>
                                                                </a>
                                                                <div class="media_btn float-right">
                                                                    <div class="custom-control custom-switch d-inline">
                                                                        <input class="custom-control-input sicon_control"
                                                                            id="{{ $icon->icon . '_' . $icon->id }}"
                                                                            type="checkbox" value="{{ $icon->id }}"
                                                                            {{ $icon->status == 1 ? 'checked' : '' }}>
                                                                        <label class="custom-control-label"
                                                                            for="{{ $icon->icon . '_' . $icon->id }}"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                </div>
                                                <!-- edit social link form -->

                                                <div class="edit_social_form add_form_wrap d-none"
                                                    style="padding-top:14px;">
                                                    <div class="social_add_form" id="social_edit_form">
                                                        <!-- dynamic content push here -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- about -->
                                        <div class="tab-pane fade" id="vert-tabs-profile" role="tabpanel"
                                            aria-labelledby="vert-tabs-profile-tab">
                                            <div class="tab_body about_user">
                                                <form class="card_validation"
                                                    action="{{ route('user.card.update', $card->id) }}" method="post"
                                                    enctype="multipart/form-data" novalidate="novalidate">
                                                    @csrf
                                                    <input name="mode" type="hidden" value="edit" />
                                                    <input name="id" type="hidden" value="{{ $card->id }}" />
                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            <div class="form-group">
                                                                <label class="form-label"
                                                                    for="card_for">{{ __('Card Title') }}</label>
                                                                <input class="form-control" id="card_for"
                                                                    name="card_for" type="text"
                                                                    value="{{ $card->card_for }}"
                                                                    placeholder="{{ __('Card Title') }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="row">
                                                                <div class="col-md-3 col-sm-6">
                                                                    <div class="form-group profile_group">
                                                                        <label
                                                                            class="form-label">{{ __('Profile picture') }}
                                                                            <i class="fa fa-exclamation-circle"
                                                                                data-toggle="tooltip"
                                                                                data-placement="right"
                                                                                title="Ideal dimensions: 540px x 540px (1:1)"
                                                                                aria-hidden="true"></i></label>
                                                                        <div class="slim" data-ratio="1:1"
                                                                            data-size="540,540" data-max-file-size="100">
                                                                            <img src="{{ getProfile($card->profile) }}"
                                                                                alt="" />
                                                                            <input id="profile_pic" name="profile_pic"
                                                                                type="file">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-sm-6 text-center">
                                                                    <div class="form-group cover_group">
                                                                        <label class="form-label">{{ __('Cover photo') }}
                                                                            <i class="fa fa-exclamation-circle"
                                                                                data-toggle="tooltip"
                                                                                data-placement="right"
                                                                                title="Ideal dimensions: 780px x 300px (2.6:1)"
                                                                                aria-hidden="true"></i></label><br />
                                                                        <div class="slim cover_group" data-ratio="3:1"
                                                                            data-size="780,300" data-max-file-size="100">
                                                                            <img src="{{ getCover($card->cover) }}"
                                                                                alt="" />
                                                                            <input id="cover_pic" name="cover_pic"
                                                                                type="file" hidden>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-md-3 col-sm-6 text-lg-center company_group">
                                                                    <label class="form-label">{{ __('Company Logo') }} <i
                                                                            class="fa fa-exclamation-circle"
                                                                            data-toggle="tooltip" data-placement="right"
                                                                            title="Ideal dimensions: 440px x 440px (1:1)"
                                                                            aria-hidden="true"></i></label>
                                                                    <div class="slim" data-force-min-size="false"
                                                                        data-min-size="1,1" data-ratio="1:1"
                                                                        data-size="440,400" data-max-file-size="100"
                                                                        data-min-file-size="1">
                                                                        <img src="{{ getLogo($card->logo) }}"
                                                                            alt="" />
                                                                        <input id="company_logo" name="company_logo"
                                                                            type="file" hidden>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 color_group">
                                                            <div class="form-group colorform">
                                                                <div class="bg_btn">
                                                                    <label
                                                                        class="form-label">{{ __('Card Color') }}</label><br />
                                                                    <!-- color -->
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" id="color1"
                                                                            name="bgcolor" type="radio" value="#fff"
                                                                            onclick="changeColor('white','#fff')"
                                                                            {{ $card->theme_color == '#fff' ? 'checked' : '' }}>
                                                                        <label class="colorOne" for="color1"></label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" id="color2"
                                                                            name="bgcolor" type="radio" value="#000"
                                                                            onclick="changeColor('rgb(0, 0, 0)','#000')"
                                                                            {{ $card->theme_color == '#000' ? 'checked' : '' }}>
                                                                        <label class="colorTwo" for="color2"></label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" id="color3"
                                                                            name="bgcolor" type="radio" value="#EB5757"
                                                                            onclick="changeColor('rgba(235, 87, 87, 0.1)','#EB5757')"
                                                                            {{ $card->theme_color == '#EB5757' ? 'checked' : '' }}>
                                                                        <label class="colorThree" for="color3"></label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" id="color4"
                                                                            name="bgcolor" type="radio" value="#F2994A"
                                                                            onclick="changeColor('rgba(242, 153, 74, 0.1)','#F2994A')"
                                                                            {{ $card->theme_color == '#F2994A' ? 'checked' : '' }}>
                                                                        <label class="colorFour" for="color4"></label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" id="color5"
                                                                            name="bgcolor" type="radio" value="#F2C94C"
                                                                            onclick="changeColor('rgba(242, 201, 76, 0.1)','#F2C94C')"
                                                                            {{ $card->theme_color == '#F2C94C' ? 'checked' : '' }}>
                                                                        <label class="colorFive" for="color5"></label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" id="color6"
                                                                            name="bgcolor" type="radio" value="#219653"
                                                                            onclick="changeColor('rgba(33, 150, 83, 0.1)','#219653')"
                                                                            {{ $card->theme_color == '#219653' ? 'checked' : '' }}>
                                                                        <label class="colorSix" for="color6"></label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" id="color7"
                                                                            name="bgcolor" type="radio" value="#2F80ED"
                                                                            onclick="changeColor('rgba(47, 128, 237, 0.1)','#2F80ED')"
                                                                            {{ $card->theme_color == '#2F80ED' ? 'checked' : '' }}>
                                                                        <label class="colorSeven" for="color7"></label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" id="color8"
                                                                            name="bgcolor" type="radio" value="#9B51E0"
                                                                            onclick="changeColor('rgba(155, 81, 224, 0.1)','#9B51E0')"
                                                                            {{ $card->theme_color == '#9B51E0' ? 'checked' : '' }}>
                                                                        <label class="colorEight" for="color8"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group color_link_group">
                                                                <div class="row">
                                                                    <div class="col-6">
                                                                        <div class="color_link">
                                                                            <span>{{ __('Color Links Icons') }}</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div
                                                                            class="custom-control custom-switch d-inline float-right">
                                                                            <input
                                                                                class="custom-control-input sicon_control"
                                                                                id="color_link_icon" name="color_link"
                                                                                data-id="{{ $card->id }}"
                                                                                type="checkbox"
                                                                                value="{{ $card->color_link }}"
                                                                                @if ($card->color_link == 1) checked @endif>
                                                                            <label class="custom-control-label"
                                                                                for="color_link_icon"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label"
                                                                    for="name">{{ __('Name') }}</label>
                                                                <input class="form-control cin" name="name"
                                                                    data-preview="name_show" type="text"
                                                                    value="{{ $card->title }}"
                                                                    placeholder="{{ __('name') }}" required>
                                                                @if ($errors->has('name'))
                                                                    <span
                                                                        class="help-block text-danger">{{ $errors->first('name') }}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label"
                                                                    for="location">{{ __('Location') }}</label>
                                                                <input class="form-control cin" name="location"
                                                                    data-preview="location_show" type="text"
                                                                    value="{{ $card->location }}"
                                                                    placeholder="{{ __('location') }}">
                                                                @if ($errors->has('location'))
                                                                    <span
                                                                        class="help-block text-danger">{{ $errors->first('location') }}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label"
                                                                    for="designation">{{ __('Job
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        Title') }}</label>
                                                                <input class="form-control cin_desig_comp"
                                                                    id="designation" name="designation"
                                                                    data-preview="desig_comp_show" type="text"
                                                                    value="{{ $card->designation }}"
                                                                    placeholder="{{ __('job') }}">
                                                                @if ($errors->has('designation'))
                                                                    <span
                                                                        class="help-block text-danger">{{ $errors->first('designation') }}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label"
                                                                    for="company_name">{{ __('Company') }}</label>
                                                                <input class="form-control cin_desig_comp"
                                                                    id="company_name" name="company_name"
                                                                    data-preview="desig_comp_show" type="text"
                                                                    value="{{ $card->company_name }}"
                                                                    placeholder="{{ __('company') }}">
                                                                @if ($errors->has('company_name'))
                                                                    <span
                                                                        class="help-block text-danger">{{ $errors->first('company_name') }}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label class="form-label"
                                                                    for="bio">{{ __('Bio') }}</label>
                                                                <textarea class="form-control cin" id="bio" name="bio" data-preview="bio_show" cols="30"
                                                                    rows="10" placeholder="{{ __('Bio') }}">{{ $card->bio }}</textarea>
                                                                @if ($errors->has('bio'))
                                                                    <span
                                                                        class="help-block text-danger">{{ $errors->first('bio') }}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="float-right">
                                                                <button class="btn btn-primary save-card" type="submit">
                                                                    <i
                                                                        class="loading-spinner save-card-spinner fa-lg fas fa-spinner fa-spin"></i>
                                                                    <span class="btn-txt">{{ __('Update') }}</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- Equal Housing Logo -->
                                        <div class="tab-pane fade" id="vert-tabs-housing" role="tabpanel"
                                            aria-labelledby="vert-tabs-housing-tab">
                                            <div class="tab_body about_user">
                                                <div class="plan_type switchBtn text-center mb-4 mt-3">
                                                    <div class="text-left">{{ __('Equal Housing Logo Show') }}
                                                        <div class="switch-wrapper"
                                                            style="width:170px !important;background: #f7f7f7;
                                                    border: 1px solid #EEE;">

                                                            <input class="switcher_" id="yes" name="housingLogo"
                                                                type="radio" value="1"
                                                                @if (Auth::user()->housing_logo_view == '1') checked @endif>

                                                            <input class="switcher_" id="no" name="housingLogo"
                                                                type="radio" value="0"
                                                                @if (Auth::user()->housing_logo_view == '0') checked @endif>

                                                            <label for="yes">Yes</label>
                                                            <label for="no"
                                                                style="padding-right: 54px !important;">No</label>
                                                            <span class="highlighter"></span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- User Disclaimer  -->
                                        <div class="tab-pane fade" id="vert-tabs-disclaimer" role="tabpanel"
                                            aria-labelledby="vert-tabs-disclaimer-tab">
                                            <div class="tab_body about_user">
                                                <div class="plan_type switchBtn text-center mb-4 mt-3">
                                                    <div class="text-left">{{ __('User Disclaimer Show') }}
                                                        <div class="switch-wrapper"
                                                            style="width:170px !important;background: #f7f7f7;
                                                    border: 1px solid #EEE;">

                                                            <input class="switcher_" id="disclaimer_show"
                                                                name="disclaimer" type="radio" value="1"
                                                                @if (Auth::user()->disclaimer_view == '1') checked @endif>

                                                            <input class="switcher_" id="disclaimer_hide"
                                                                name="disclaimer" type="radio" value="0"
                                                                @if (Auth::user()->disclaimer_view == '0') checked @endif>

                                                            <label for="disclaimer_show">Yes</label>
                                                            <label for="disclaimer_hide"
                                                                style="padding-right: 54px !important;">No</label>
                                                            <span class="highlighter"></span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- User nmls  -->
                                        <div class="tab-pane fade" id="vert-tabs-nmls" role="tabpanel"
                                            aria-labelledby="vert-tabs-nmls-tab">
                                            <div class="tab_body about_user">
                                                <div class="plan_type switchBtn text-center mb-4 mt-3">
                                                    <div class="text-left">{{ __('User nmls Show') }}
                                                        <div class="switch-wrapper"
                                                            style="width:170px !important;background: #f7f7f7;
                                                    border: 1px solid #EEE;">

                                                            <input class="switcher_" id="nmls_show" name="nmls"
                                                                type="radio" value="1"
                                                                @if (Auth::user()->nmls_view == '1') checked @endif>

                                                            <input class="switcher_" id="nmls_hide" name="nmls"
                                                                type="radio" value="0"
                                                                @if (Auth::user()->nmls_view == '0') checked @endif>

                                                            <label for="nmls_show">Yes</label>
                                                            <label for="nmls_hide"
                                                                style="padding-right: 54px !important;">No</label>
                                                            <span class="highlighter"></span>

                                                        </div>
                                                    </div>
                                                </div>
                                                <form action="{{ route('user.nmls.add') }}" method="post">
                                                    @csrf
                                                    <div class="col-12">

                                                        <label class="form-label text-left" for="">NMLS
                                                            ID</label>
                                                        <input
                                                            class="form-control required @error('nmls_id')
                                                            border-danger
                                                        @enderror"
                                                            name="nmls_id" type="text"
                                                            value="{{ old('nmls_id') ?? Auth::user()->nmls_id }}"
                                                            required>

                                                        @error('nmls_id')
                                                            <span class="text-danger">
                                                                {{ $message }}
                                                            </span>
                                                        @enderror
                                                        <div class="col-12 float-end">

                                                            <button class="btn btn-primary mt-2 text-end">Save</button>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                        <!-- User form  -->
                                        <div class="tab-pane fade" id="vert-tabs-credit_auth" role="tabpanel"
                                            aria-labelledby="vert-tabs-credit_auth-tab">
                                            <div class="tab_body about_user">
                                                <div class="plan_type switchBtn text-center mb-4 mt-3">
                                                    <div class="text-left">{{ __('Credit Authorization') }}
                                                        <div class="switch-wrapper"
                                                            style="width:170px !important;background: #f7f7f7;
                                                    border: 1px solid #EEE;">

                                                            <input class="switcher_" id="credit_auth_show"
                                                                name="credit_auth" type="radio" value="1"
                                                                @if (Auth::user()->credit_authorization == '1') checked @endif>

                                                            <input class="switcher_" id="credit_auth_hide"
                                                                name="credit_auth" type="radio" value="0"
                                                                @if (Auth::user()->credit_authorization == '0') checked @endif>

                                                            <label for="credit_auth_show">Yes</label>
                                                            <label for="credit_auth_hide"
                                                                style="padding-right: 54px !important;">No</label>
                                                            <span class="highlighter"></span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="plan_type switchBtn text-center mb-4 mt-3">
                                                    <div class="text-left">{{ __('Quick Application') }}
                                                        <div class="switch-wrapper"
                                                            style="width:170px !important;background: #f7f7f7;
                                                    border: 1px solid #EEE;">

                                                            <input class="switcher_" id="quick_application_show"
                                                                name="quick_application" type="radio" value="1"
                                                                @if (Auth::user()->quick_application == '1') checked @endif>

                                                            <input class="switcher_" id="quick_application_hide"
                                                                name="quick_application" type="radio" value="0"
                                                                @if (Auth::user()->quick_application == '0') checked @endif>

                                                            <label for="quick_application_show">Yes</label>
                                                            <label for="quick_application_hide"
                                                                style="padding-right: 54px !important;">No</label>
                                                            <span class="highlighter"></span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <!-- card preview -->
                            <div class="card_preview_wrapper">
                                <div class="card_preview">
                                    <div class="card_wrapper" id="clrBg">
                                        <div class="card_header text-center">
                                            <div class="card_header_top">
                                                <!-- icon -->
                                                <div class="shape_icon">
                                                    <svg width="145" height="20" fill="none"
                                                        viewBox="0 0 145 20">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M144.516 0H0C2.49419 0 4.51613 2.02194 4.51613 4.51613C4.17977 13.0429 10.8623 19.8833 19.5482 20L20 20H124.516L124.962 20C133.526 19.8833 140.211 13.0429 140 4.51613C140 2.02194 142.022 0 144.516 0Z"
                                                            fill="#E0E0E0"></path>
                                                    </svg>
                                                </div>
                                                <!-- time -->
                                                <div class="clock">{{ date('H:i') }}</div>
                                                <!-- mobile icon -->
                                                <div class="mobile_icon">
                                                    <svg width="16" height="9" fill="none"
                                                        viewBox="0 0 12 9">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M10.9742 0.966309H10.2968C9.92273 0.966309 9.61948 1.26956 9.61948 1.64365V7.51393C9.61948 7.88801 9.92273 8.19127 10.2968 8.19127H10.9742C11.3482 8.19127 11.6515 7.88801 11.6515 7.51393V1.64365C11.6515 1.26956 11.3482 0.966309 10.9742 0.966309ZM7.13634 2.54688H7.81368C8.18776 2.54688 8.49102 2.85013 8.49102 3.22422V7.51404C8.49102 7.88812 8.18776 8.19138 7.81368 8.19138H7.13634C6.76225 8.19138 6.459 7.88812 6.459 7.51404V3.22422C6.459 2.85013 6.76225 2.54688 7.13634 2.54688ZM4.65188 4.12712H3.97454C3.60045 4.12712 3.2972 4.43037 3.2972 4.80446V7.51382C3.2972 7.8879 3.60045 8.19116 3.97454 8.19116H4.65188C5.02596 8.19116 5.32922 7.8879 5.32922 7.51382V4.80446C5.32922 4.43037 5.02596 4.12712 4.65188 4.12712ZM1.4914 5.4818H0.814059C0.439974 5.4818 0.136719 5.78505 0.136719 6.15914V7.51382C0.136719 7.8879 0.439974 8.19116 0.814059 8.19116H1.4914C1.86548 8.19116 2.16874 7.8879 2.16874 7.51382V6.15914C2.16874 5.78505 1.86548 5.4818 1.4914 5.4818Z"
                                                            fill="black"></path>
                                                    </svg>
                                                    <svg width="11" height="8" fill="none">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M5.23227 2.28614C6.73917 2.2862 8.18845 2.86473 9.28056 3.90214C9.3628 3.98223 9.49425 3.98122 9.57525 3.89987L10.3614 3.10716C10.4024 3.0659 10.4253 3.01001 10.4249 2.95186C10.4246 2.89372 10.4011 2.8381 10.3596 2.79732C7.49312 0.0525852 2.97098 0.0525852 0.104532 2.79732C0.0630094 2.83807 0.0394501 2.89367 0.0390672 2.95182C0.0386844 3.00997 0.0615095 3.06587 0.102492 3.10716L0.888847 3.89987C0.969791 3.98134 1.10134 3.98235 1.18353 3.90214C2.27578 2.86466 3.72523 2.28613 5.23227 2.28614ZM5.23206 4.86522C6.06 4.86516 6.8584 5.17265 7.47212 5.72791C7.55512 5.80672 7.68588 5.80501 7.7668 5.72406L8.55202 4.93135C8.59338 4.88977 8.61632 4.83336 8.61572 4.77475C8.61513 4.71614 8.59104 4.66021 8.54885 4.61948C6.67996 2.8825 3.78574 2.8825 1.91685 4.61948C1.87464 4.66021 1.85055 4.71616 1.85 4.7748C1.84945 4.83343 1.87247 4.88983 1.91391 4.93135L2.6989 5.72406C2.77982 5.80501 2.91058 5.80672 2.99359 5.72791C3.6069 5.17301 4.40466 4.86556 5.23206 4.86522ZM6.80446 6.60047C6.80566 6.65925 6.78254 6.71592 6.74054 6.7571L5.38227 8.12668C5.34246 8.16693 5.28817 8.18958 5.23153 8.18958C5.17489 8.18958 5.1206 8.16693 5.08079 8.12668L3.72229 6.7571C3.68032 6.71589 3.65724 6.6592 3.65848 6.60043C3.65973 6.54165 3.68519 6.48599 3.72886 6.44659C4.59631 5.71352 5.86675 5.71352 6.7342 6.44659C6.77784 6.48602 6.80326 6.5417 6.80446 6.60047Z"
                                                            fill="black"></path>
                                                    </svg>
                                                    <svg width="17" height="8" fill="none">
                                                        <rect opacity="0.35" x="1.15117" y="1.07939"
                                                            width="14.2241" height="6.99918" rx="1.46757"
                                                            stroke="black" stroke-width="0.67734"></rect>
                                                        <path opacity="0.4"
                                                            d="M16.3906 3.22412V5.93348C16.9357 5.70401 17.2902 5.17021 17.2902 4.5788C17.2902 3.98739 16.9357 3.45359 16.3906 3.22412Z"
                                                            fill="black"></path>
                                                        <rect x="2.16797" y="2.09521" width="12.1921"
                                                            height="4.96716" rx="0.90312" fill="black"></rect>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card_overflow">
                                            <!-- cover image -->
                                            <div class="card_banner mb-5" id="coverpic_2"
                                                style="background-image: url('{{ getCover($card->cover) }}');">
                                                <!-- profile image -->
                                                <div class="profile_image">
                                                    <img id="profilePic_2" src="{{ getProfile($card->profile) }}"
                                                        alt="{{ $card->title }}" height="100" width="100">
                                                    <!-- logo -->
                                                    <img class="logo" id="showlogo_2" src="{{ getLogo($card->logo) }}"
                                                        alt="{{ $card->title }}">
                                                </div>
                                            </div>
                                            <div class="card_content text-center">
                                                <div class="profile_name mt-2">
                                                    <h3 id="name_show">{{ $card->title }}</h3>
                                                    <h5 id="desig_comp_show">
                                                        {{ getDesigComp($card->designation, $card->company_name) }}</h5>
                                                    <h6 id="location_show">{{ $card->location }}</h6>
                                                    <p id="bio_show">{{ $card->bio }}</p>
                                                </div>
                                                <div class="save_contact mt-4 mb-4">
                                                    <div class="d-flex" style="justify-content: space-evenly;">
                                                        <div class="">
                                                            <a class="sp text-decoration-none d-inline-block btn-secondary"
                                                                href="javascript:void(0)">{{ __('Save Contact') }}</a>
                                                        </div>
                                                        <div class="">
                                                            <a class="sp text-decoration-none d-inline-block btn-secondary"
                                                                href="javascript:void(0)">
                                                                {{ __('Share') }}
                                                            </a>
                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="social_icon">

                                                    <div class="row icon_append">
                                                        <div class="col-4 mb-2">
                                                            <a data-bs-toggle="offcanvas"
                                                                data-bs-target="#offcanvasCalculator"
                                                                href="javascript:void(0)"
                                                                aria-controls="offcanvasCalculator">
                                                                <img class="img-fluid d-block mb-1 social_logo"
                                                                    src="{{ asset('assets/img/icon/calendar-symbol.svg') }}"
                                                                    alt=""
                                                                    style="border-radius: 15px; margin:0 auto; @if ($card->color_link == 1) background:{{ $card->theme_color }} @else background:#A93998 @endif"
                                                                    width="75" height="75">
                                                                <span>Mortgage Calculator</span>
                                                            </a>
                                                        </div>

                                                        @if (isset($card->business_card_fields) && count($card->business_card_fields) > 0)
                                                            @foreach ($card->business_card_fields as $key => $icon)
                                                                <?php
                                                                if ($card->color_link == 1) {
                                                                    $icon_bg = $card->theme_color;
                                                                } else {
                                                                    $icon_bg = $icon->sicon->icon_color;
                                                                }
                                                                ?>
                                                                <div class="col-4 mb-2">
                                                                    <div class="sicon_{{ $icon->id }} @if ($icon->status == 0) deactivate @endif"
                                                                        style="">
                                                                        <a class="social_link"
                                                                            href="{{ makeUrl($icon->content) }}"
                                                                            target="_blank">
                                                                            <img class="social_logo"
                                                                                data-bg="{{ $icon->sicon->icon_color }}"
                                                                                src="{{ getIcon($icon->icon_image) }}"
                                                                                alt="{{ $icon->icon }}"
                                                                                style="background:{{ $icon_bg }}">
                                                                            <span
                                                                                class="icon_label">{{ $icon->label }}</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @endif

                                                    </div>

                                                    <?php
                                                    if ($card->color_link == 1) {
                                                        $icon_bg = $card->theme_color;
                                                    } else {
                                                        $icon_bg = '#A93998';
                                                    }
                                                    ?>

                                                    <div class="row">
                                                        <div class="col-4 mb-2" id="icon_houseing"
                                                            style="display: {{ Auth::user()->housing_logo_view == 0 ? 'none' : 'block' }}">
                                                            <div class="sicon_houseing" style="">
                                                                <a class="house_link" href="#" target="_blank">
                                                                    <img class="p-2 social_logo" data-bg=""
                                                                        src="{{ asset('assets/img/house.png') }}"
                                                                        alt=""
                                                                        style="border-radius: 15px; margin:0 auto; padding:10px; border: 1px solid #6ecddb; background:{{ $icon_bg }}"
                                                                        width="75" height="75">
                                                                    <span class="icon_label">Equal Housing
                                                                        Opportunity</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-4 mb-2" id="icon_disclaimer"
                                                            style="display: {{ Auth::user()->disclaimer_view == 0 ? 'none' : 'block' }}">
                                                            <div class="sicon_disclaimer" style="">
                                                                <a class="house_link" href="#" target="_blank">
                                                                    <img class="p-1 social_logo" data-bg=""
                                                                        src="{{ getPhoto('assets/img/icon/notes-note.svg') }}"
                                                                        alt=""
                                                                        style="background:{{ $icon_bg }}">
                                                                    <span class="icon_label">User Disclaimer</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-4 mb-2" id="icon_credit_auth"
                                                            style="display: {{ Auth::user()->credit_authorization == 0 ? 'none' : 'block' }}">
                                                            <div class="sicon_disclaimer" style="">
                                                                <a class="house_link" href="#" target="_blank">
                                                                    <img class="p-1 social_logo" data-bg=""
                                                                        src="{{ getPhoto('assets/img/icon/craditauthorization.svg') }}"
                                                                        alt=""
                                                                        style="background:{{ $icon_bg }}">
                                                                    <span class="icon_label">Credit Authorization</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-4 mb-2" id="icon_quick_application"
                                                            style="display: {{ Auth::user()->quick_application == 0 ? 'none' : 'block' }}">
                                                            <div class="sicon_disclaimer" style="">
                                                                <a class="house_link" href="#" target="_blank">
                                                                    <img class="p-1 social_logo" data-bg=""
                                                                        src="{{ getPhoto('assets/img/icon/rules.svg') }}"
                                                                        alt=""
                                                                        style="background:{{ $icon_bg }}">
                                                                    <span class="icon_label">Quick Applications</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="copyright_article col-12 mb-2">
                                                            <p> @ {{ date('Y') }} <a
                                                                    href="{{ route('home') }}">{{ $settings->site_name }}</a>All
                                                                rights reserved. </p>
                                                        </div>
                                                        @if ($settings->site_disclaimer)
                                                            <div class="site_disclaimer col-12 mb-2 "
                                                                style="border: 1px solid #222;">
                                                                {!! $settings->site_disclaimer !!}
                                                            </div>
                                                        @endif

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="view_btn text-center mt-3">
                                    <a href="{{ route('card.preview', $card->card_url) }}" target="_blank">
                                        <img src="{{ asset('assets/img/icon/website.svg') }}" alt="WebSite">
                                        <span>{{ __('View Card') }}</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Add content social media modal -->
    <div class="add_content_modal">
        <div class="modal fade" id="socialMedia" data-bs-backdrop="static" data-bs-keyboard="false"
            aria-labelledby="staticBackdropLabel" aria-hidden="true" tabindex="-1">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <!-- modal header -->
                    <div class="modal-header mb-4">
                        <div class="first_modal">
                            <h5>{{ __('Add content') }}</h5>
                            <p>{{ __('Select from our wide variety of links and contact info below.') }} <span
                                    id="filter-count">({{ $icons->count() ?? 0 }})</span> </p>
                            <form onsubmit="return false;">
                                <div class="input-group">
                                    <input class="form-control" id="filter" name="search" type="text"
                                        placeholder="Search Content" required>
                                    <button class="input-type-text btn btn-dark" type="submit"><i
                                            class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="second_modal d-none">
                            <h5><a class="backfirstModal" href="javascript:void(0)"><i class="fa fa-angle-left"></i>
                                    Back</a></h5>
                        </div>
                        <button class="close modalClose" data-dismiss="modal" type="button" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!-- modal body -->
                    <div class="modal_body">
                        <div class="add_list_wrap first_modal">
                            @if (isset($icon_group) && count($icon_group) > 0)
                                @foreach ($icon_group as $key => $igroup)
                                    <div class="heading mb-3">
                                        <h3>{{ $igroup }}</h3>
                                    </div>
                                    <div class="row align-item-center">
                                        @if (isset($icons) && count($icons) > 0)
                                            @foreach ($icons as $key2 => $icon)
                                                @php
                                                    if ($card->theme_color == null) {
                                                        $icon_color = $icon->icon_color;
                                                    } else {
                                                        $icon_color = $card->theme_color;
                                                    }
                                                    
                                                @endphp

                                                @if ($icon->icon_group == $igroup)
                                                    <div class="col-sm-6 col-lg-4 icon_each"
                                                        data-name="{{ $icon->icon_name }}">
                                                        <a class="onclickIcon" data-name="{{ $icon->icon_name }}"
                                                            data-title="{{ $icon->icon_title }}"
                                                            data-image="{{ getIcon($icon->icon_image) }}"
                                                            data-id="{{ $icon->id }}"
                                                            data-type="{{ $icon->type }}"
                                                            data-color="{{ $icon_color }}"
                                                            data-card="{{ $card->id }}" href="javascript:void(0)">
                                                            <div class="icon_wrap media position-relative mb-3">
                                                                <div class="icon_info">
                                                                    <img src="{{ getIcon($icon->icon_image) }}"
                                                                        alt="{{ $icon->icon }}"
                                                                        style="background:{{ $icon->icon_color }}" />
                                                                    <span>{{ $icon->icon_title }}</span>
                                                                </div>
                                                                @if ($icon->is_paid == '1')
                                                                    <div title="Paid link" style="padding: 5px 20px;">
                                                                        <img src="{{ asset('assets/img/logo/pro.png') }}"
                                                                            alt="" width="22" />
                                                                    </div>
                                                                @endif
                                                                <div class="icon float-right">
                                                                    <i class="fa fa-plus"></i>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                @endif
                                            @endforeach
                                        @endif
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <!-- add content form -->
                        <div class="add_form_wrap second_modal d-none">
                            <div class="row no-gutters">
                                <div class="col-lg-8">
                                    <div class="social_add_form" id="social_add_form">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <!-- card preview on modal -->
                                    <div class="live_preview">
                                        <div class="card_preview_wrapper">
                                            <div class="card_preview">
                                                <div class="card_wrapper">
                                                    <div class="card_header text-center">
                                                        <div class="card_header_top">
                                                            <!-- icon -->
                                                            <div class="shape_icon">
                                                                <svg width="145" height="20" fill="none"
                                                                    viewBox="0 0 145 20">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M144.516 0H0C2.49419 0 4.51613 2.02194 4.51613 4.51613C4.17977 13.0429 10.8623 19.8833 19.5482 20L20 20H124.516L124.962 20C133.526 19.8833 140.211 13.0429 140 4.51613C140 2.02194 142.022 0 144.516 0Z"
                                                                        fill="#E0E0E0"></path>
                                                                </svg>
                                                            </div>
                                                            <!-- time -->
                                                            <div class="clock">{{ date('H:i') }}</div>
                                                            <!-- mobile icon -->
                                                            <div class="mobile_icon">
                                                                <svg width="16" height="9" fill="none"
                                                                    viewBox="0 0 12 9">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M10.9742 0.966309H10.2968C9.92273 0.966309 9.61948 1.26956 9.61948 1.64365V7.51393C9.61948 7.88801 9.92273 8.19127 10.2968 8.19127H10.9742C11.3482 8.19127 11.6515 7.88801 11.6515 7.51393V1.64365C11.6515 1.26956 11.3482 0.966309 10.9742 0.966309ZM7.13634 2.54688H7.81368C8.18776 2.54688 8.49102 2.85013 8.49102 3.22422V7.51404C8.49102 7.88812 8.18776 8.19138 7.81368 8.19138H7.13634C6.76225 8.19138 6.459 7.88812 6.459 7.51404V3.22422C6.459 2.85013 6.76225 2.54688 7.13634 2.54688ZM4.65188 4.12712H3.97454C3.60045 4.12712 3.2972 4.43037 3.2972 4.80446V7.51382C3.2972 7.8879 3.60045 8.19116 3.97454 8.19116H4.65188C5.02596 8.19116 5.32922 7.8879 5.32922 7.51382V4.80446C5.32922 4.43037 5.02596 4.12712 4.65188 4.12712ZM1.4914 5.4818H0.814059C0.439974 5.4818 0.136719 5.78505 0.136719 6.15914V7.51382C0.136719 7.8879 0.439974 8.19116 0.814059 8.19116H1.4914C1.86548 8.19116 2.16874 7.8879 2.16874 7.51382V6.15914C2.16874 5.78505 1.86548 5.4818 1.4914 5.4818Z"
                                                                        fill="black"></path>
                                                                </svg>
                                                                <svg width="11" height="8" fill="none">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M5.23227 2.28614C6.73917 2.2862 8.18845 2.86473 9.28056 3.90214C9.3628 3.98223 9.49425 3.98122 9.57525 3.89987L10.3614 3.10716C10.4024 3.0659 10.4253 3.01001 10.4249 2.95186C10.4246 2.89372 10.4011 2.8381 10.3596 2.79732C7.49312 0.0525852 2.97098 0.0525852 0.104532 2.79732C0.0630094 2.83807 0.0394501 2.89367 0.0390672 2.95182C0.0386844 3.00997 0.0615095 3.06587 0.102492 3.10716L0.888847 3.89987C0.969791 3.98134 1.10134 3.98235 1.18353 3.90214C2.27578 2.86466 3.72523 2.28613 5.23227 2.28614ZM5.23206 4.86522C6.06 4.86516 6.8584 5.17265 7.47212 5.72791C7.55512 5.80672 7.68588 5.80501 7.7668 5.72406L8.55202 4.93135C8.59338 4.88977 8.61632 4.83336 8.61572 4.77475C8.61513 4.71614 8.59104 4.66021 8.54885 4.61948C6.67996 2.8825 3.78574 2.8825 1.91685 4.61948C1.87464 4.66021 1.85055 4.71616 1.85 4.7748C1.84945 4.83343 1.87247 4.88983 1.91391 4.93135L2.6989 5.72406C2.77982 5.80501 2.91058 5.80672 2.99359 5.72791C3.6069 5.17301 4.40466 4.86556 5.23206 4.86522ZM6.80446 6.60047C6.80566 6.65925 6.78254 6.71592 6.74054 6.7571L5.38227 8.12668C5.34246 8.16693 5.28817 8.18958 5.23153 8.18958C5.17489 8.18958 5.1206 8.16693 5.08079 8.12668L3.72229 6.7571C3.68032 6.71589 3.65724 6.6592 3.65848 6.60043C3.65973 6.54165 3.68519 6.48599 3.72886 6.44659C4.59631 5.71352 5.86675 5.71352 6.7342 6.44659C6.77784 6.48602 6.80326 6.5417 6.80446 6.60047Z"
                                                                        fill="black"></path>
                                                                </svg>
                                                                <svg width="17" height="8" fill="none">
                                                                    <rect opacity="0.35" x="1.15117" y="1.07939"
                                                                        width="14.2241" height="6.99918" rx="1.46757"
                                                                        stroke="black" stroke-width="0.67734"></rect>
                                                                    <path opacity="0.4"
                                                                        d="M16.3906 3.22412V5.93348C16.9357 5.70401 17.2902 5.17021 17.2902 4.5788C17.2902 3.98739 16.9357 3.45359 16.3906 3.22412Z"
                                                                        fill="black"></path>
                                                                    <rect x="2.16797" y="2.09521" width="12.1921"
                                                                        height="4.96716" rx="0.90312" fill="black">
                                                                    </rect>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="card_overflow">
                                                        <div class="card_banner mb-5"
                                                            style="background-image: url('{{ getCover($card->cover) }}');">
                                                            <!-- profile image -->
                                                            <div class="profile_image">
                                                                <img src="{{ getProfile($card->profile) }}"
                                                                    alt="{{ $card->title }}" height="100"
                                                                    width="100">
                                                                <!-- logo -->
                                                                <img class="logo" src="{{ getLogo($card->logo) }}"
                                                                    alt="{{ $card->title }}">
                                                            </div>
                                                        </div>
                                                        <div class="card_content text-center">
                                                            <div class="profile_name mt-2">
                                                                <h3>{{ $card->title }} 1111</h3>
                                                                <h5>{{ getDesigComp($card->designation, $card->company_name) }}
                                                                </h5>
                                                                <h6>{{ $card->location }}</h6>
                                                                <p>{{ $card->bio }}</p>
                                                            </div>
                                                            <div class="save_contact mt-4 mb-4">
                                                                <div class="d-flex"
                                                                    style="justify-content: space-evenly;">
                                                                    <div class="">
                                                                        <a class="sp text-decoration-none d-inline-block btn-secondary"
                                                                            href="javascript:void(0)">{{ __('Save Contact') }}</a>
                                                                    </div>
                                                                    <div class="">
                                                                        <a class="sp text-decoration-none d-inline-block btn-secondary"
                                                                            href="javascript:void(0)">
                                                                            {{ __('Share') }}
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="social_icon">
                                                            <div class="row icon_append" id="icon_append">
                                                                {{-- @dd($card->business_card_fields); --}}
                                                                @if (isset($card->business_card_fields) && count($card->business_card_fields) > 0)
                                                                    @foreach ($card->business_card_fields as $key => $icon)
                                                                        <div class="col-4 mb-2">
                                                                            <div class="sicon_{{ $icon->id }} @if ($icon->status == 0) deactivate @endif"
                                                                                style="">
                                                                                <a class="social_link"
                                                                                    href="{{ makeUrl($icon->content) }}"
                                                                                    target="_blank">
                                                                                    <img class="social_logo"
                                                                                        src="{{ getIcon($icon->icon_image) }}"
                                                                                        alt="{{ $icon->icon }}"
                                                                                        style="background: {{ $icon->icon_color }}">
                                                                                    <span
                                                                                        class="icon_label link_title_show">{{ $icon->label }}</span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection

@push('custom_js')
    @if ($card->theme_color)
        <style>
            .card_preview_wrapper .save_contact a {
                background-color: {{ $card->theme_color }}
            }
        </style>
        <script>
            function hexToRGBA(hex, opacity) {
                return 'rgba(' + (hex = hex.replace('#', '')).match(new RegExp('(.{' + hex.length / 3 + '})', 'g')).map(
                    function(l) {
                        return parseInt(hex.length % 2 ? l + l : l, 16)
                    }).concat(isFinite(opacity) ? opacity : 1).join(',') + ')';
            }

            var bg = hexToRGBA('{{ $card->theme_color }}', 0.1);
            $('#clrBg').css('background', bg);
        </script>
    @endif

    @if ($card->theme_color == '#fff')
        <style>
            .card_preview_wrapper .save_contact a {
                color: #000;
                border-color: #000;
                background-color: #fff;
            }
        </style>
    @elseif ($card->theme_color == '#000')
        <style>
            .card_preview_wrapper .save_contact a {
                color: #fff;
                border-color: #fff;
                background-color: #000;
            }
        </style>
    @endif

    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/slim.kickstart.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/card.js') }}?v=1"></script>
    <script>
        // drag and drop
        const dropItems = document.getElementById('drop-items');
        var get_url = $('#base_url').val();
        new Sortable(dropItems, {
            animation: 350,
            chosenClass: "sortable-chosen",
            dragClass: "sortable-drag",
            onEnd: function( /**Event*/ evt) {
                var itemEl = evt.item;
                var id = $(itemEl).data('id');
                var card_id = $(itemEl).data('card_id');
                var position_new = evt.newIndex + 1;
                $.ajax({
                    type: 'get',
                    url: get_url + '/user/card/sicon_sorting/',
                    data: {
                        id,
                        card_id,
                        position_new
                    },
                    async: true,
                    beforeSend: function() {
                        $("body").css("cursor", "progress");
                    },
                    success: function(response) {
                        toastr.success(response.message);
                    },
                    complete: function(data) {
                        $("body").css("cursor", "default");
                    }
                });
            }
        });
        // social content modalchangeColor('rgba(47, 128, 237, 0.1)','#2F80ED')
        $('.onclickIcon').on('click', function() {
            // $('.first_modal').modal('hide');
            var icon_id = $(this).attr('data-id');
            var card_id = $(this).attr('data-card');
            // var icon_name = $(this).attr('data-image');
            // var icon_bg = $(this).attr('data-color');
            // $('#content_icon').css({'background-color': icon_bg});
            // $('#icon_id').val(icon_id);
            // var id = icon_id;


            $.ajax({
                url: `{{ route('user.card.sicon_create') }}`,
                type: "get",
                data: {
                    'icon_id': icon_id,
                    'card_id': card_id,
                },
                success: function(data) {
                    if (data.success) {
                        $('#social_add_form').html(data.data.html);
                        $('.second_modal').modal('show');
                    } else {
                        toastr.warning('Please reload and try again');
                    }
                },
                error: function(jqXHR, exception) {},
                complete: function(response) {}
            });



        });
        $('.backfirstModal').on('click', function() {
            $('.first_modal').removeClass('d-none');
            $('.second_modal').addClass('d-none');
            $('#filter').val('');
            $('.icon_each').css('display', 'block');

        });
        $('.modalClose').on('click', function() {
            $('.first_modal').removeClass('d-none');
            $('.second_modal').modal('hide');
        });

        // Show content for edit
        $('.editLink').on('click', function() {
            $('.tab_body .back').removeClass('d-none');
            $('.tab_body .edit_social_form').removeClass('d-none');
            $('.tab_body .add_link').addClass('d-none');
            $('.tab_body .social_media_list').addClass('d-none');
            var id = $(this).data('id');
            $.ajax({
                url: `{{ route('user.card.sicon_edit') }}`,
                type: "get",
                data: {
                    id
                },
                success: function(data) {
                    if (data.success) {
                        $('#social_edit_form').html(data.data.html);
                    } else {
                        toastr.warning('Please reload and try again');
                    }
                },
                error: function(jqXHR, exception) {},
                complete: function(response) {}
            });
        });

        //Icon content remove
        $(document).on('click', '.scion_remove', function() {
            var url = $(this).data('url');
            var id = $(this).data('id');
            $.ajax({
                url: url,
                type: "post",
                data: {
                    "id": id,
                    "_token": "{{ csrf_token() }}",
                },
                success: function(data) {
                    if (data.success) {
                        console.log(data);
                        $('.tab_body .back').addClass('d-none');
                        $('.tab_body .edit_social_form').addClass('d-none');
                        $('.tab_body .add_link').removeClass('d-none');
                        $('.tab_body .social_media_list').removeClass('d-none');
                        $('.sicon_single_list_' + id).hide();
                        toastr.success(data.message);
                    } else {
                        toastr.warning('Please reload and try again');
                    }
                },
                error: function(jqXHR, exception) {},
                complete: function(response) {}
            });

        });

        $('.tab_body .back').on('click', function() {
            $('.tab_body .back').addClass('d-none');
            $('.tab_body .edit_social_form').addClass('d-none');
            $('.tab_body .add_link').removeClass('d-none');
            $('.tab_body .social_media_list').removeClass('d-none');
        });

        // color change
        function changeColor(bgcolor, color) {
            var element = $("#clrBg");
            element.css("background-color", bgcolor);
            $('.social_logo').css("background", color);
            if (color == '#fff') {
                $('.save_contact a').css("color", '#000');
                $('.save_contact a').css("border-color", '#000');
                $('.save_contact a').css("background-color", '#fff');
            } else if (color == '#000') {
                $('.save_contact a').css("color", '#fff');
                $('.save_contact a').css("border-color", '#fff');
                $('.save_contact a').css("background-color", '#000');
            } else {
                $('.save_contact a').css("color", '#fff');
                $('.save_contact a').css("border-color", color);
                $('.save_contact a').css("background-color", color);
            }
            $('#color_link_icon').prop('checked', true);

            if ($('#color_link_icon').is(':checked')) {
                $('#color_link_icon').val('1');
            } else {
                $('#color_link_icon').val('0');
            }
        }
        $(document).on('input', '#colorPicker', function() {
            let color = $(this).val();
            var element = document.getElementById("clrBg");
            element.style.backgroundColor = color;
        })
        //Active/Inactive Content
        $("input:checkbox.sicon_control").click(function() {
            var id = $(this).val();
            var status = '';
            if (!$(this).is(":checked")) {
                $('.sicon_' + id).addClass('deactivate');
                status = 'unchecked';
            } else {
                $('.sicon_' + id).removeClass('deactivate');
                status = 'checked';
            }
            $.ajax({
                url: `{{ route('user.card.sicon_update') }}`,
                type: "post",
                data: {
                    "id": id,
                    "status": status,
                    "_token": "{{ csrf_token() }}",
                },
                success: function(data) {},
                error: function(jqXHR, exception) {},
                complete: function(response) {}
            });
        });

        $(document).on('submit', "#iconUpdateForm", function(e) {
            e.preventDefault();
            var form = $("#iconUpdateForm");
            $.ajax({
                url: $(this).attr("action"),
                type: $(this).attr("method"),
                dataType: "JSON",
                data: new FormData(this),
                async: true,
                processData: false,
                contentType: false,
                beforeSend: function() {
                    $("body").css("cursor", "progress");
                },
                success: function(response) {
                    if (response.status == 1) {
                        $('.sicon_' + response.data.id).find('.social_link').attr("href", response.data
                            .content);
                        $('.sicon_' + response.data.id).find('.social_logo').attr("src", response.data
                            .logo);
                        $('.sicon_' + response.data.id).find('.icon_label').html(response.data.label);
                        $('.sicon_single_list_' + response.data.id).find('.social_media_name').find(
                            'img').attr("src", response.data.logo);
                        $('.sicon_single_list_' + response.data.id).find('.social_media_name').find(
                            'span').html(response.data.label);

                        $('.tab_body .back').addClass('d-none');
                        $('.tab_body .edit_social_form').addClass('d-none');
                        $('.tab_body .add_link').removeClass('d-none');
                        $('.tab_body .social_media_list').removeClass('d-none');
                        toastr.success(response.message);
                    } else {
                        toastr.error(response.message);
                    }
                },
                error: function(jqXHR, exception) {
                    toastr.error('Something wrong');
                },
                complete: function(response) {
                    $("body").css("cursor", "default");
                }
            });
        });

        $(document).on('submit', "#iconCreateForm", function(e) {
            e.preventDefault();
            var form = $("#iconUpdateForm");
            $.ajax({
                url: $(this).attr("action"),
                type: $(this).attr("method"),
                dataType: "JSON",
                data: new FormData(this),
                async: true,
                processData: false,
                contentType: false,
                beforeSend: function() {
                    $("body").css("cursor", "progress");
                },
                success: function(response) {
                    if (response.status == 1) {
                        $('#drop-items').append(response.data.html);
                        $('.icon_append').append(response.data.icon_html);
                        $('input[name="logo"]').val('');
                        $('#iconCreateForm')[0].reset();
                        $('.second_modal').modal('hide');
                        // $('.first_modal').modal('hide');
                        $('.first_modal').removeClass('d-none');
                        toastr.success(response.message);
                    } else {
                        toastr.error(response.message);
                    }
                    $('#filter').val('');
                    $('.icon_each').css('display', 'block');
                },
                error: function(jqXHR, exception) {
                    toastr.error('Something wrong');
                },
                complete: function(response) {
                    $("body").css("cursor", "default");
                }
            });
        });

        $(document).on('change', "#upload_icon", function(e) {
            var _URL = window.URL || window.webkitURL;
            var icon_id = $('#icon_id').val();
            var file = this.files[0],
                img;
            if (Math.round(file.size / (1024 * 1024)) > 1) {
                toastr.error('Please select image size less than 1 MB');
                return false;
            }
            if (file) {
                img = new Image();
                img.onload = function() {
                    $('#icon-save-btn').prop('disabled', false);
                    $(".error_line").fadeOut();
                    $('#content_icon').attr('src', URL.createObjectURL(file));
                    $('.sicon_' + icon_id).find('.social_logo').attr("src", URL.createObjectURL(file));
                    return true;
                };
                img.onerror = function() {
                    $('#icon-save-btn').prop('disabled', true);
                    $(".error_line").fadeIn();
                    return false;
                };
                img.src = _URL.createObjectURL(file);
            }
        });

        $(document).on('change', '#color_link_icon', function(e) {
            var card_id = $(this).data('id');
            var checked = $(this).is(':checked');
            var current_bg = $('input[name="bgcolor"]:checked').val();
            if (checked == true) {
                $('.social_logo').css('background-color', current_bg)
            } else {
                $(".social_logo").each(function() {
                    var image_bg = $(this).attr("data-bg");
                    $(this).css('background-color', image_bg)
                });
            }
            $.ajax({
                url: `{{ route('user.card.color-highlighter') }}`,
                type: "get",
                data: {
                    "card_id": card_id,
                    "_token": "{{ csrf_token() }}",
                },
                beforeSend: function() {
                    $("body").css("cursor", "progress");
                },
                success: function(response) {
                    if (response.status == 1) {} else {
                        toastr.error(response.message);
                    }
                },
                error: function(jqXHR, exception) {
                    toastr.error('Something wrong');
                },
                complete: function(response) {
                    $("body").css("cursor", "default");
                }
            });
        });

        $("input[name='housingLogo']").change(function(event) {
            let state = event.target.value;
            console.log(state);

            if (state == "1") {
                $('#icon_houseing').css('display', 'block')
            } else {
                $('#icon_houseing').css('display', 'none')

            }
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: "{{ route('user.equal.housing.update') }}",
                data: {
                    status: state
                },
                success: function(data) {
                    const {
                        status
                    } = data;
                    console.log(status == "1");
                    if (status == "1") {
                        toastr.success("Equal housing info showed");
                    } else {
                        toastr.error("Equal housing info hide");
                    }
                }
            });



        })
        $("input[name='disclaimer']").change(function(event) {
            let state = event.target.value;
            console.log(state);

            if (state == "1") {
                $('#icon_disclaimer').css('display', 'block')
            } else {
                $('#icon_disclaimer').css('display', 'none')

            }
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: "{{ route('user.disclaimer.update') }}",
                data: {
                    status: state
                },
                success: function(data) {
                    const {
                        status
                    } = data;
                    console.log(status == "1");
                    if (status == "1") {
                        toastr.success("User disclaimer info showed");
                    } else {
                        toastr.error("User disclaimer info hide");
                    }
                }
            });



        })
        $("input[name='nmls']").change(function(event) {
            let state = event.target.value;
            console.log(state);

            // if (state == "1") {
            //     $('#icon_houseing').css('display', 'block')
            // } else {
            //     $('#icon_houseing').css('display', 'none')

            // }
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: "{{ route('user.nmls.update') }}",
                data: {
                    status: state
                },
                success: function(data) {
                    const {
                        status
                    } = data;
                    console.log(status == "1");
                    if (status == "1") {
                        toastr.success("User nmls id showed");
                    } else {
                        toastr.error("User nmls id hide");
                    }
                }
            });



        })
        $("input[name='credit_auth']").change(function(event) {
            let state = event.target.value;
            if (state == "1") {
                $('#icon_credit_auth').css('display', 'block')

            } else {
                $('#icon_credit_auth').css('display', 'none')


            }
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: "{{ route('user.credit_auth.update') }}",
                data: {
                    status: state
                },
                success: function(data) {
                    const {
                        status
                    } = data;

                    console.log(status);
                    if (status == "1") {
                        toastr.success("User credit authorization showed");
                    } else {
                        toastr.error("User credit authorization hide");

                    }
                }
            });



        })
        $("input[name='quick_application']").change(function(event) {
            let state = event.target.value;
            console.log(state);

            if (state == "1") {
                $('#icon_quick_application').css('display', 'block')
            } else {
                $('#icon_quick_application').css('display', 'none')

            }
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: "{{ route('user.quick.application.update') }}",
                data: {
                    status: state
                },
                success: function(data) {
                    const {
                        status
                    } = data;

                    console.log(status);
                    if (status == "1") {
                        toastr.success("User quick application showed");
                    } else {
                        toastr.error("User quick application hide");

                    }
                }
            });
        })
    </script>
@endpush
