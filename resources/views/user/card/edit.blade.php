@extends('user.layouts.app')
@section('title') {{ __('Edit card') }} @endsection
@push('custom_css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slim.min.css') }}" />
<style>
    div#social_icon_up .slim {
        /* width: 100px;
        height: 100px;
        overflow: hidden; */
        width: 70px;
        height: 70px;
        border-radius: 10px;
        margin-right: 10px;
    }
    .deactivate{
        opacity: .5;
    }
</style>
@endpush
@php
$icon_group = Config::get('app.icon_group');
@endphp
@section('tab_content','active')
@section('content')
<!-- main content -->
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">
                        <a href="{{ route('user.card') }}" class="back_btn" title="Tooltip on top"><i
                                class="fa fa-angle-left"></i></a>
                        <img src="{{ getProfile($user->profile_image) }}" width="50" class="img-circle mr-2"
                            alt="{{ $card->title }}">
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
                                    <a class="nav-link @yield('tab_about')" id="vert-tabs-profile-tab"
                                        data-toggle="pill" href="#vert-tabs-profile" role="tab"
                                        aria-controls="vert-tabs-profile" aria-selected="false">
                                        <img src="{{ asset('assets/img/icon/user.svg') }}" alt="icon">
                                        {{ __('About') }}
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-8 col-xl-9">
                                <div class="tab-content" id="vert-tabs-tabContent">
                                    <!-- content -->
                                    <div class="tab-pane text-left fade active show" id="vert-tabs-home" role="tabpanel"
                                        aria-labelledby="vert-tabs-home-tab">
                                        <div class="tab_body">
                                            <!-- back button -->
                                            <div class="back d-none mb-4 float-left">
                                                <a href="javascript:void(0)">
                                                    <i class="fa fa-angle-left"></i>{{ __('Back')}}
                                                </a>
                                            </div>
                                            <!-- add link button -->
                                            <div class="add_link mb-4 float-right">
                                                <a href="javascript:void(0)" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#socialMedia">
                                                    <i class="fa fa-plus"></i> {{ __('Add Links and Contact Info')}}
                                                </a>
                                            </div>
                                            <!-- social media link -->
                                            <div class="social_media_list" id="drop-items">
                                                @if(isset($card->business_card_fields) &&
                                                count($card->business_card_fields)>0)
                                                @foreach ($card->business_card_fields as $key => $icon )
                                                <div class="single_list media position-relative sicon_single_list_{{ $icon->id }}"
                                                    data-id="{{ $icon->id }}" data-card_id="{{ $card->id }}">
                                                    <a href="javascript:void(0)" class="editLink"
                                                        data-id="{{ $icon->id }}">
                                                        <div class="drag_drap">
                                                            <img src="{{ asset('assets/img/icon/bar-2.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="social_media_name">
                                                            <img style="background: {{ $icon->sicon->icon_color ?? '#000' }}"
                                                                src="{{ getIcon($icon->icon_image) }}"
                                                                alt="{{ $icon->icon }}">
                                                            <span>{{ $icon->label }}</span>
                                                        </div>
                                                    </a>
                                                    <div class="media_btn float-right">
                                                        <div class="custom-control custom-switch d-inline">
                                                            <input type="checkbox"
                                                                class="custom-control-input sicon_control"
                                                                id="{{ $icon->icon.'_'.$icon->id }}"
                                                                value="{{ $icon->id }}" {{ $icon->status == 1 ?
                                                            'checked' : '' }} >
                                                            <label class="custom-control-label"
                                                                for="{{ $icon->icon.'_'.$icon->id }}"></label>
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
                                            <form action="{{ route('user.card.update',$card->id) }}" method="post"
                                                enctype="multipart/form-data" novalidate="novalidate"
                                                class="card_validation">
                                                @csrf
                                                <input type="hidden" name="mode" value="edit" />
                                                <input type="hidden" name="id" value="{{ $card->id }}" />
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <div class="form-group">
                                                            <label for="card_for" class="form-label">{{ __('Card Title')
                                                                }}</label>
                                                            <input type="text" name="card_for" id="card_for"
                                                                class="form-control" value="{{ $card->card_for }}"
                                                                placeholder="{{ __('Card Title') }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-md-3 col-sm-6">
                                                                <div class="form-group profile_group">
                                                                    <label class="form-label">{{ __('Profile picture')
                                                                        }} <i class="fa fa-exclamation-circle"
                                                                            aria-hidden="true" data-toggle="tooltip"
                                                                            data-placement="right"
                                                                            title="Ideal dimensions: 540px x 540px (1:1)"></i></label>
                                                                    <div class="slim" data-ratio="1:1"
                                                                        data-size="540,540" data-max-file-size="100">
                                                                        <img src="{{ getProfile($card->profile) }}"
                                                                            alt="" />
                                                                        <input type="file" name="profile_pic"
                                                                            id="profile_pic">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6 text-center">
                                                                <div class="form-group cover_group">
                                                                    <label class="form-label">{{ __('Cover photo') }} <i
                                                                            class="fa fa-exclamation-circle"
                                                                            aria-hidden="true" data-toggle="tooltip"
                                                                            data-placement="right"
                                                                            title="Ideal dimensions: 780px x 300px (2.6:1)"></i></label><br />
                                                                    <div class="slim cover_group" data-ratio="3:1"
                                                                        data-size="780,300" data-max-file-size="100">
                                                                        <img src="{{ getCover($card->cover) }}"
                                                                            alt="" />
                                                                        <input type="file" name="cover_pic"
                                                                            id="cover_pic" hidden>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 text-lg-center company_group">
                                                                <label class="form-label">{{ __('Company Logo') }} <i
                                                                        class="fa fa-exclamation-circle"
                                                                        aria-hidden="true" data-toggle="tooltip"
                                                                        data-placement="right"
                                                                        title="Ideal dimensions: 440px x 440px (1:1)"></i></label>
                                                                <div class="slim" data-force-min-size="false"
                                                                    data-min-size="1,1" data-ratio="1:1"
                                                                    data-size="440,400" data-max-file-size="100"
                                                                    data-min-file-size="1">
                                                                    <img src="{{ getLogo($card->logo) }}" alt="" />
                                                                    <input type="file" hidden name="company_logo"
                                                                        id="company_logo">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 color_group">
                                                        <div class="form-group colorform">
                                                            <div class="bg_btn">
                                                                <label class="form-label">{{ __('Card Color')
                                                                    }}</label><br />
                                                                <!-- color -->
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="bgcolor" id="color1"
                                                                        onclick="changeColor('white','#fff')" {{
                                                                        $card->theme_color == '#fff' ? 'checked' : '' }}
                                                                    value="#fff">
                                                                    <label for="color1" class="colorOne"></label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="bgcolor" id="color2"
                                                                        onclick="changeColor('rgb(0, 0, 0)','#000')" {{
                                                                        $card->theme_color == '#000' ? 'checked' : '' }}
                                                                    value="#000">
                                                                    <label for="color2" class="colorTwo"></label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="bgcolor" id="color3"
                                                                        onclick="changeColor('rgba(235, 87, 87, 0.1)','#EB5757')"
                                                                        {{ $card->theme_color == '#EB5757' ? 'checked' :
                                                                    '' }} value="#EB5757" >
                                                                    <label for="color3" class="colorThree"></label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="bgcolor" id="color4"
                                                                        onclick="changeColor('rgba(242, 153, 74, 0.1)','#F2994A')"
                                                                        {{ $card->theme_color == '#F2994A' ? 'checked' :
                                                                    '' }} value="#F2994A" >
                                                                    <label for="color4" class="colorFour"></label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="bgcolor" id="color5"
                                                                        onclick="changeColor('rgba(242, 201, 76, 0.1)','#F2C94C')"
                                                                        {{ $card->theme_color == '#F2C94C' ? 'checked' :
                                                                    '' }} value="#F2C94C" >
                                                                    <label for="color5" class="colorFive"></label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="bgcolor" id="color6"
                                                                        onclick="changeColor('rgba(33, 150, 83, 0.1)','#219653')"
                                                                        {{ $card->theme_color == '#219653' ? 'checked' :
                                                                    '' }} value="#219653" >
                                                                    <label for="color6" class="colorSix"></label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="bgcolor" id="color7"
                                                                        onclick="changeColor('rgba(47, 128, 237, 0.1)','#2F80ED')"
                                                                        {{ $card->theme_color == '#2F80ED' ? 'checked' :
                                                                    '' }} value="#2F80ED" >
                                                                    <label for="color7" class="colorSeven"></label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="bgcolor" id="color8"
                                                                        onclick="changeColor('rgba(155, 81, 224, 0.1)','#9B51E0')"
                                                                        {{ $card->theme_color == '#9B51E0' ? 'checked' :
                                                                    '' }} value="#9B51E0" >
                                                                    <label for="color8" class="colorEight"></label>
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
                                                                        <input type="checkbox" name="color_link"
                                                                            class="custom-control-input sicon_control"
                                                                            id="color_link_icon" data-id="{{ $card->id }}"
                                                                            @if ($card->color_link==1)
                                                                                checked
                                                                            @endif
                                                                             value="">
                                                                        <label class="custom-control-label"
                                                                            for="color_link_icon"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="name" class="form-label">{{ __('Name')
                                                                }}</label>
                                                            <input type="text" name="name" value="{{ $card->title }}"
                                                                class="form-control cin" placeholder="{{ __('name') }}"
                                                                required data-preview="name_show">
                                                            @if($errors->has('name'))
                                                            <span class="help-block text-danger">{{
                                                                $errors->first('name') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="location" class="form-label">{{ __('Location')
                                                                }}</label>
                                                            <input type="text" name="location"
                                                                value="{{ $card->location }}" class="form-control cin"
                                                                placeholder="{{ __('location') }}"
                                                                data-preview="location_show">
                                                            @if($errors->has('location'))
                                                            <span class="help-block text-danger">{{
                                                                $errors->first('location') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="designation" class="form-label">{{ __('Job
                                                                Title') }}</label>
                                                            <input type="text" name="designation"
                                                                value="{{ $card->designation }}" id="designation"
                                                                class="form-control cin_desig_comp"
                                                                placeholder="{{ __('job') }}" required
                                                                data-preview="desig_comp_show">
                                                            @if($errors->has('designation'))
                                                            <span class="help-block text-danger">{{
                                                                $errors->first('designation') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="company_name" class="form-label">{{
                                                                __('Company') }}</label>
                                                            <input type="text" name="company_name" id="company_name"
                                                                value="{{ $card->company_name }}"
                                                                class="form-control cin_desig_comp"
                                                                placeholder="{{ __('company') }}" required
                                                                data-preview="desig_comp_show">
                                                            @if($errors->has('company_name'))
                                                            <span class="help-block text-danger">{{
                                                                $errors->first('company_name') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="bio" class="form-label">{{ __('Bio') }}</label>
                                                            <textarea name="bio" id="bio" cols="30" rows="10"
                                                                class="form-control cin" placeholder="{{ __('Bio') }}"
                                                                data-preview="bio_show">{{ $card->bio }}</textarea>
                                                            @if($errors->has('bio'))
                                                            <span class="help-block text-danger">{{
                                                                $errors->first('bio') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="float-right">
                                                            <button type="submit" class="btn btn-primary save-card">
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
                                                <svg width="145" height="20" fill="none" viewBox="0 0 145 20">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M144.516 0H0C2.49419 0 4.51613 2.02194 4.51613 4.51613C4.17977 13.0429 10.8623 19.8833 19.5482 20L20 20H124.516L124.962 20C133.526 19.8833 140.211 13.0429 140 4.51613C140 2.02194 142.022 0 144.516 0Z"
                                                        fill="#E0E0E0"></path>
                                                </svg>
                                            </div>
                                            <!-- time -->
                                            <div class="clock">{{ date('H:i') }}</div>
                                            <!-- mobile icon -->
                                            <div class="mobile_icon">
                                                <svg width="16" height="9" fill="none" viewBox="0 0 12 9">
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
                                                    <rect opacity="0.35" x="1.15117" y="1.07939" width="14.2241"
                                                        height="6.99918" rx="1.46757" stroke="black"
                                                        stroke-width="0.67734"></rect>
                                                    <path opacity="0.4"
                                                        d="M16.3906 3.22412V5.93348C16.9357 5.70401 17.2902 5.17021 17.2902 4.5788C17.2902 3.98739 16.9357 3.45359 16.3906 3.22412Z"
                                                        fill="black"></path>
                                                    <rect x="2.16797" y="2.09521" width="12.1921" height="4.96716"
                                                        rx="0.90312" fill="black"></rect>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card_overflow">
                                        <!-- cover image -->
                                        <div class="card_banner mb-5"
                                            style="background-image: url('{{ getCover($card->cover) }}');"
                                            id="coverpic_2">
                                            <!-- profile image -->
                                            <div class="profile_image">
                                                <img src="{{ getProfile($card->profile) }}" height="100" width="100"
                                                    alt="{{ $card->title }}" id="profilePic_2">
                                                <!-- logo -->
                                                <img class="logo" src="{{ getLogo($card->logo) }}"
                                                    alt="{{ $card->title }}" id="showlogo_2">
                                            </div>
                                        </div>
                                        <div class="card_content text-center">
                                            <div class="profile_name mt-2">
                                                <h3 id="name_show">{{ $card->title }}</h3>
                                                <h5 id="desig_comp_show">{{
                                                    getDesigComp($card->designation,$card->company_name) }}</h5>
                                                <h6 id="location_show">{{ $card->location }}</h6>
                                                <p id="bio_show">{{ $card->bio }}</p>
                                            </div>
                                            <div class="save_contact mt-4 mb-4">
                                                <a href="javascript:void(0)">{{ __('Save Contact') }}</a>
                                            </div>
                                            <div class="social_icon">
                                                <div class="row">
                                                    @if(isset($card->business_card_fields) &&
                                                    count($card->business_card_fields)>0)
                                                    @foreach ($card->business_card_fields as $key => $icon )
                                                    <?php
                                                    if ($card->color_link==1) {
                                                        $icon_bg = $card->theme_color;
                                                    }else{
                                                        $icon_bg = $icon->sicon->icon_color;
                                                    }
                                                    ?>
                                                    <div class="col-4 mb-2">
                                                        <div class="sicon_{{ $icon->id }} @if($icon->status == 0) deactivate @endif"
                                                            style="">
                                                            <a class="social_link" href="{{ makeUrl($icon->content) }}"
                                                                target="_blank">
                                                                <img style="background:{{ $icon_bg  }}" data-bg="{{ $icon->sicon->icon_color }}"
                                                                    src="{{ getIcon($icon->icon_image) }}"
                                                                    alt="{{ $icon->icon }}" class="social_logo">
                                                                <span class="icon_label">{{ $icon->label }}</span>
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
                            <div class="view_btn text-center mt-3">
                                <a href="{{ route('card.preview',$card->card_url) }}" target="_blank">
                                    <img src="{{ asset('assets/img/icon/website.svg') }}" alt="WebSite">
                                    <span>{{__('View Card') }}</span>
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
    <div class="modal fade" id="socialMedia" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                                <input type="text" name="search" id="filter" class="form-control"
                                    placeholder="Search Content" required>
                                <button type="submit" class="input-type-text btn btn-dark"><i
                                        class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="second_modal d-none">
                        <h5><a href="javascript:void(0)" class="backfirstModal"><i class="fa fa-angle-left"></i>
                                Back</a></h5>
                    </div>
                    <button type="button" class="close modalClose" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- modal body -->
                <div class="modal_body">
                    <div class="add_list_wrap first_modal">
                        @if(isset($icon_group) && count($icon_group)>0)
                        @foreach($icon_group as $key => $igroup)
                        <div class="heading mb-3">
                            <h3>{{ $igroup }}</h3>
                        </div>
                        <div class="row align-item-center">
                            @if(isset($icons) && count($icons) > 0)
                            @foreach ($icons as $key2 => $icon )

                            @php
                            if($card->theme_color == null){
                            $icon_color = $icon->icon_color;
                            }else{
                            $icon_color = $card->theme_color;
                            }

                            @endphp

                            @if($icon->icon_group == $igroup )
                            <div class="col-sm-6 col-lg-4 icon_each" data-name="{{ $icon->icon_name }}">
                                <a href="javascript:void(0)" class="onclickIcon" data-name="{{ $icon->icon_name }}"
                                    data-title="{{ $icon->icon_title }}" data-image="{{ getIcon($icon->icon_image) }}"
                                    data-id="{{ $icon->id }}" data-type="{{ $icon->type }}"
                                    data-color="{{ $icon_color }}" data-card="{{ $card->id }}">
                                    <div class="icon_wrap media position-relative mb-3">
                                        <div class="icon_info">
                                            <img style="background:{{ $icon->icon_color }}"
                                                src="{{ getIcon($icon->icon_image) }}" alt="{{ $icon->icon }}" />
                                            <span>{{ $icon->icon_title }}</span>
                                        </div>
                                        @if($icon->is_paid == '1')
                                        <div style="padding: 5px 20px;" title="Paid link">
                                            <img src="{{ asset('assets/img/logo/pro.png') }}" alt="" width="22" />
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
                                                            <svg width="16" height="9" fill="none" viewBox="0 0 12 9">
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
                                                            <img src="{{ getProfile($card->profile) }}" height="100"
                                                                width="100" alt="{{ $card->title }}">
                                                            <!-- logo -->
                                                            <img class="logo" src="{{ getLogo($card->logo) }}"
                                                                alt="{{ $card->title }}">
                                                        </div>
                                                    </div>
                                                    <div class="card_content text-center">
                                                        <div class="profile_name mt-2">
                                                            <h3>{{ $card->title }} 1111</h3>
                                                            <h5>{{ getDesigComp($card->designation,$card->company_name)
                                                                }}</h5>
                                                            <h6>{{ $card->location }}</h6>
                                                            <p>{{ $card->bio }}</p>
                                                        </div>
                                                        <div class="save_contact mt-4 mb-4">
                                                            <a href="javascript:void(0)">{{ __('Save Contact') }}</a>
                                                        </div>
                                                        <div class="social_icon">
                                                            <div class="row">
                                                                {{-- @dd($card->business_card_fields); --}}
                                                                @if(isset($card->business_card_fields) &&
                                                                count($card->business_card_fields)>0)
                                                                @foreach ($card->business_card_fields as $key => $icon )
                                                                <div class="col-4 mb-2">
                                                                    <div class="sicon_{{ $icon->id }} @if($icon->status == 0)deactivate @endif"
                                                                        style="">
                                                                        <a class="social_link"
                                                                            href="{{ makeUrl($icon->content) }}"
                                                                            target="_blank">
                                                                            <img src="{{ getIcon($icon->icon_image) }}"
                                                                                alt="{{ $icon->icon }}"
                                                                                class="social_logo"
                                                                                style="background: {{ $icon->icon_color }}">
                                                                            <span class="icon_label link_title_show">{{
                                                                                $icon->label }}</span>
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
@if($card->theme_color )
<style>
    .card_preview_wrapper .save_contact a {
        background: {
                {
                $card->theme_color
            }
        }
    }
</style>
<script>
    function hexToRGBA(hex, opacity) {
        return 'rgba(' + (hex = hex.replace('#', '')).match(new RegExp('(.{' + hex.length/3 + '})', 'g')).map(function(l) { return parseInt(hex.length%2 ? l+l : l, 16) }).concat(isFinite(opacity) ? opacity : 1).join(',') + ')';
    }

    var bg = hexToRGBA('{{ $card->theme_color }}',0.1);
    $('#clrBg').css('background',bg);


</script>

@endif

@if($card->theme_color == '#fff' )
<style>
    .card_preview_wrapper .save_contact a {
        color: #000;
        border-color: #000;
        background-color: #fff;
    }
</style>
@endif

@if($card->theme_color == '#000' )
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
        onEnd: function (/**Event*/evt) {
            var itemEl = evt.item;
            var id = $(itemEl).data('id');
            var card_id = $(itemEl).data('card_id');
            var position_new = evt.newIndex+1;
            $.ajax({
                type: 'get',
                url: get_url + '/user/card/sicon_sorting/',
                data:{id,card_id,position_new},
                async: true,
                beforeSend: function () {
                    $("body").css("cursor", "progress");
                },
                success: function (response) {
                    toastr.success(response.message);
                },
                complete: function (data) {
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
            data:{
                'icon_id':icon_id,
                'card_id':card_id,
            },
            success:function(data)
            {
                if(data.success){
                    $('#social_add_form').html(data.data.html);
                    $('.second_modal').modal('show');
                }else{
                    toastr.warning('Please reload and try again');
                }
            },
            error: function (jqXHR, exception) {
            },
            complete: function (response) {}
        });



    });
    $('.backfirstModal').on('click', function() {
        $('.first_modal').removeClass('d-none');
        $('.second_modal').modal('hide');
        $('#filter').val('');
        $('.icon_each').css('display','block');

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
            data:{id},
            success:function(data)
            {
                if(data.success){
                    $('#social_edit_form').html(data.data.html);
                }else{
                    toastr.warning('Please reload and try again');
                }
            },
            error: function (jqXHR, exception) {
            },
            complete: function (response) {}
        });
    });

    //Icon content remove
    $(document).on('click', '.scion_remove', function() {
        var url = $(this).data('url');
        var id = $(this).data('id');
        $.ajax({
            url: url,
            type: "post",
            data:{"id": id,"_token": "{{ csrf_token() }}",},
            success:function(data)
            {
                if(data.success){
                    console.log(data);
                    $('.tab_body .back').addClass('d-none');
                    $('.tab_body .edit_social_form').addClass('d-none');
                    $('.tab_body .add_link').removeClass('d-none');
                    $('.tab_body .social_media_list').removeClass('d-none');
                    $('.sicon_single_list_'+id).hide();
                    toastr.success(data.message);
                }else{
                    toastr.warning('Please reload and try again');
                }
            },
            error: function (jqXHR, exception) {
            },
            complete: function (response) {}
        });

    });

    $('.tab_body .back').on('click', function() {
        $('.tab_body .back').addClass('d-none');
        $('.tab_body .edit_social_form').addClass('d-none');
        $('.tab_body .add_link').removeClass('d-none');
        $('.tab_body .social_media_list').removeClass('d-none');
    });

    // color change
    function changeColor(bgcolor,color){
        var element = $("#clrBg");
        element.css("background-color", bgcolor);
        $('.social_logo').css("background", color);
        if(color == '#fff'){
            $('.save_contact a').css("color", '#000');
            $('.save_contact a').css("border-color", '#000');
            $('.save_contact a').css("background-color", '#fff');
        }else if(color == '#000'){
            $('.save_contact a').css("color", '#fff');
            $('.save_contact a').css("border-color", '#fff');
            $('.save_contact a').css("background-color", '#000');
        } else {
            $('.save_contact a').css("color", '#fff');
            $('.save_contact a').css("border-color", color);
            $('.save_contact a').css("background-color", color);
        }
        $('#color_link_icon').prop('checked', true);

        if($('#color_link_icon').is(':checked')){
            $('#color_link_icon').val('1');
        }else{
            $('#color_link_icon').val('0');
        }


    }
    $(document).on('input','#colorPicker',function(){
        let color = $(this).val();
        var element = document.getElementById("clrBg");
        element.style.backgroundColor = color;
    })
    //Active/Inactive Content
    $("input:checkbox.sicon_control").click(function() {
        var id = $(this).val();
        var status = '';
        if(!$(this).is(":checked")){
            $('.sicon_'+id).addClass('deactivate');
            status = 'unchecked';
        }else{
            $('.sicon_'+id).removeClass('deactivate');
            status = 'checked';
        }
        $.ajax({
            url: `{{ route('user.card.sicon_update') }}`,
            type: "post",
            data:{
                "id": id,
                "status":status,
                "_token": "{{ csrf_token() }}",
            },
            success:function(data){},
            error: function (jqXHR, exception) {},
            complete: function (response) {}
        });
    });

    $(document).on('submit', "#iconUpdateForm", function (e) {
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
            beforeSend: function () {
                $("body").css("cursor", "progress");
            },
            success: function (response) {
                if (response.status == 1) {
                $('.sicon_' + response.data.id).find('.social_link').attr("href", response.data.content);
                $('.sicon_' + response.data.id).find('.social_logo').attr("src", response.data.logo);
                $('.sicon_' + response.data.id).find('.icon_label').html(response.data.label);
                $('.sicon_single_list_' + response.data.id).find('.social_media_name').find('img').attr("src", response.data.logo);
                $('.sicon_single_list_' + response.data.id).find('.social_media_name').find('span').html(response.data.label);

                $('.tab_body .back').addClass('d-none');
                $('.tab_body .edit_social_form').addClass('d-none');
                $('.tab_body .add_link').removeClass('d-none');
                $('.tab_body .social_media_list').removeClass('d-none');
                    toastr.success(response.message);
                } else {
                    toastr.error(response.message);
                }
            },
            error: function (jqXHR, exception) {
                toastr.error('Something wrong');
            },
            complete: function (response) {
                $("body").css("cursor", "default");
            }
        });
    });

  $(document).on('submit', "#iconCreateForm", function (e) {
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
        beforeSend: function () {
            $("body").css("cursor", "progress");
        },
        success: function (response) {
            if (response.status == 1) {
            $('#drop-items').append(response.data.html);
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
            $('.icon_each').css('display','block');
        },
        error: function (jqXHR, exception) {
            toastr.error('Something wrong');
        },
        complete: function (response) {
            $("body").css("cursor", "default");
        }
    });
});
// function preview() {
//     content_icon.src=URL.createObjectURL(event.target.files[0]);
// }



  $(document).on('change', "#upload_icon", function (e) {
    var _URL = window.URL || window.webkitURL;
    var icon_id =  $('#icon_id').val();
    var file = this.files[0], img;
    if (Math.round(file.size / (1024 * 1024)) > 1) {
       toastr.error('Please select image size less than 1 MB');
       return false;
    }
    if (file) {
      img = new Image();
      img.onload = function() {
        $('#icon-save-btn').prop('disabled', false);
        $(".error_line").fadeOut();
        $('#content_icon').attr('src',URL.createObjectURL(file));
        $('.sicon_' + icon_id).find('.social_logo').attr("src",URL.createObjectURL(file));
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

$(document).on('change','#color_link_icon',function(e){
    var card_id = $(this).data('id');
    var checked =  $(this).is(':checked');
    var current_bg = $('input[name="bgcolor"]:checked').val();
    if(checked==true){
        $('.social_logo').css('background-color',current_bg)
    }else{
        $(".social_logo").each( function () {
          var image_bg = $(this).attr("data-bg");
          $(this).css('background-color',image_bg)
        });
    }
    // $.ajax({
    //         url: `{{ route('user.card.color-highlighter') }}`,
    //         type: "get",
    //         data:{
    //             "card_id": card_id,
    //             "_token": "{{ csrf_token() }}",
    //         },
    //          beforeSend: function () {
    //             $("body").css("cursor", "progress");
    //         },
    //         success: function (response) {
    //             if (response.status == 1) {
    //             } else {
    //                 toastr.error(response.message);
    //             }
    //         },
    //         error: function (jqXHR, exception) {
    //             toastr.error('Something wrong');
    //         },
    //         complete: function (response) {
    //             $("body").css("cursor", "default");
    //         }
    //     });

})
</script>
@endpush
