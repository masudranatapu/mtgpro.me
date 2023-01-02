@extends('user.layouts.app')
@section('content')
@section('title') {{ __('Create Card') }}  @endsection
@push('custom_css')
@endpush

@php
    $icon_group = Config::get('app.icon_group');
    $tabindex = 1;
@endphp

@section('card','active')
        <!-- main content -->
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">
                                <a href="{{ route('dashboard') }}" class="back_btn"><i class="fa fa-angle-left"></i></a>
                                <img src="{{ getProfile() }}" width="50" class="img-circle mr-2" alt="image">
                                <span id="card_for_show">{{ __('Card Name') }}</span>
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
                                        <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                                             <!-- about -->
                                             <a class="nav-link active" id="vert-tabs-profile-tab" data-toggle="pill" href="#vert-tabs-profile" role="tab" aria-controls="vert-tabs-profile" aria-selected="false">
                                                <img src="{{ asset('assets/img/icon/user.svg') }}" alt="icon">
                                                {{ __('About') }}
                                            </a>

                                            <!-- content -->
                                            <a class="nav-link" id="vert-tabs-home-tab" data-toggle="pill" href="#vert-tabs-home" role="tab" aria-controls="vert-tabs-home" aria-selected="true">
                                                <img src="{{ asset('assets/img/icon/bar.svg') }}" alt="icon">
                                                {{ __('Content') }}
                                            </a>

                                        </div>
                                    </div>
                                    <div class="col-md-8 col-xl-9">
                                        <div class="tab-content" id="vert-tabs-tabContent">
                                            <!-- content -->
                                            <div class="tab-pane text-left fade" id="vert-tabs-home" role="tabpanel" aria-labelledby="vert-tabs-home-tab">
                                                <div class="tab_body">
                                                    <!-- back button -->
                                                    <div class="back d-none mb-4 float-left">
                                                        <a href="#">
                                                            <i class="fa fa-angle-left"></i>{{ __('Back') }}
                                                        </a>
                                                    </div>
                                                    <!-- add link button -->
                                                    <div class="add_link mb-4 float-right">
                                                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#socialMedia">
                                                            <i class="fa fa-plus"></i> {{ __('Add Links and Contact Info') }}
                                                        </a>
                                                    </div>
                                                    <!-- social media link -->
                                                    <div class="social_media_list" id="drop-items">
                                                        <div class="edit_social_form add_form_wrap" style="padding-top:14px;">
                                                            <div class="single_list media position-relative sicon_single_list_{{ $user_email->id }}">
                                                                <a href="javascript:void(0)" class="editLink" data-id="{{ $user_email->id }}">
                                                                    <div class="drag_drap">
                                                                        <img src="{{ asset('assets/img/icon/bar-2.svg') }}" alt="icon">
                                                                    </div>
                                                                    <div class="social_media_name">
                                                                        <img src="{{ getIcon($user_email->icon_image) }}" alt="{{ $user_email->icon }}">
                                                                        <span>{{ $user_email->label }}</span>
                                                                    </div>
                                                                </a>
                                                                <div class="media_btn float-right">
                                                                    <div class="custom-control custom-switch d-inline">
                                                                        <input type="checkbox" class="custom-control-input sicon_control" id="{{ $user_email->icon.'_'.$user_email->id }}" value="{{ $user_email->id }}" {{ $user_email->status == 1 ? 'checked' : '' }} >
                                                                        <label class="custom-control-label" for="{{ $user_email->icon.'_'.$user_email->id }}"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                            <!-- about -->
                                            <div class="tab-pane fade active show" id="vert-tabs-profile" role="tabpanel" aria-labelledby="vert-tabs-profile-tab">
                                                <div class="tab_body about_user">
                                                        <form action="{{ route('user.card.store') }}" method="post" id="cardCreate" enctype="multipart/form-data">
                                                            @csrf
                                                        <div class="row">
                                                            <div class="col-xl-6">
                                                                <div class="form-group">
                                                                    <label for="card_title" class="form-label">{{ __('Card Title') }}</label>
                                                                     <input type="text" name="card_for" id="card_title" class="form-control @error('card_title') is-invalid @enderror cin" placeholder="{{ __('Card Title') }}" required data-preview="card_for_show" tabindex="{{ $tabindex++ }}" value="{{ old('card_title') }}">
                                                                     @if($errors->has('card_for'))
                                                                     <span class="help-block text-danger">{{ $errors->first('card_for') }}</span>
                                                                     @endif
                                                                 </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="row">
                                                                    <div class="col-md-3 col-sm-6">
                                                                        <div class="form-group">
                                                                             <label class="form-label">{{ __('Profile picture') }} <i class="fa fa-exclamation-circle" aria-hidden="true" title="Ideal dimensions: 540px x 540px (1:1)"></i> </label>
                                                                             <label id="profile_file" for="profile_pic" class="form-label">
                                                                                <img id="profilePic" src="{{ getProfile() }}" alt="profile image">
                                                                             </label>
                                                                             <input type="file" onchange="profileloadFile(event)" hidden name="profile_pic" id="profile_pic" value="{{ old('profile_pic') }}">
                                                                             @if($errors->has('profile_pic'))
                                                                             <span class="help-block text-danger">{{ $errors->first('profile_pic') }}</span>
                                                                             @endif
                                                                         </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-6 text-center">
                                                                        <div class="form-group">
                                                                             <label class="form-label">{{ __('Cover photo') }} <i class="fa fa-exclamation-circle" aria-hidden="true" title="Ideal dimensions: 780px x 300px (2.6:1)"></i></label><br/>
                                                                             <label for="cover_pic" id="coverfile" class="form-label">
                                                                                  <img id="coverpic" src="{{ getCover() }}" alt="logo">
                                                                             </label>
                                                                             <input type="file" onchange="coverFile(event)" name="cover_pic" id="cover_pic" hidden value="{{ old('cover_pic') }}">
                                                                             @if($errors->has('cover_pic'))
                                                                             <span class="help-block text-danger">{{ $errors->first('cover_pic') }}</span>
                                                                             @endif
                                                                         </div>
                                                                    </div>
                                                                    <div class="col-md-3 col-sm-6 text-lg-center">
                                                                         <label class="form-label">{{ __('Company Logo') }} <i class="fa fa-exclamation-circle" aria-hidden="true" title="Ideal dimensions: 440px x 440px (1:1)"></i> </label>
                                                                         <label id="logofile" for="company_logo">
                                                                             <img id="showlogo" src="{{ getLogo() }}" alt="logo">
                                                                         </label>
                                                                         <input type="file" onchange="companyloadFile(event)" hidden name="company_logo" id="company_logo" value="{{ old('company_logo') }}">
                                                                        @if($errors->has('company_logo'))
                                                                             <span class="help-block text-danger">{{ $errors->first('company_logo') }}</span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 color_group">
                                                                <div class="form-group colorform">
                                                                     <div class="bg_btn">
                                                                        <label class="form-label">{{ __('Card Color') }}</label><br/>
                                                                         {{-- <label for="color" class="colorcode">
                                                                             <img src="{{ asset('assets/img/icon/color.svg') }}" alt="svg">
                                                                             <input type="color" name="color" value="#fff" id="colorPicker">
                                                                         </label> --}}
                                                                         <!-- color -->
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="bgcolor" checked id="color1" onclick="changeColor('white','#fff')" value="#fff">
                                                                            <label for="color1" class="colorOne"></label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="bgcolor" id="color2" onclick="changeColor('rgb(0, 0, 0)','#000')" value="#000">
                                                                            <label for="color2" class="colorTwo"></label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="bgcolor" id="color3" onclick="changeColor('rgba(235, 87, 87, 0.1)','#EB5757')" value="#EB5757">
                                                                            <label for="color3" class="colorThree"></label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="bgcolor" id="color4" onclick="changeColor('rgba(242, 153, 74, 0.1)','#F2994A')" value="#F2994A">
                                                                            <label for="color4" class="colorFour"></label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="bgcolor" id="color5" onclick="changeColor('rgba(242, 201, 76, 0.1)','#F2C94C')" value="#F2C94C">
                                                                            <label for="color5" class="colorFive"></label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="bgcolor" id="color6" onclick="changeColor('rgba(33, 150, 83, 0.1)','#219653')" value="#219653">
                                                                            <label for="color6" class="colorSix"></label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="bgcolor" id="color7" onclick="changeColor('rgba(47, 128, 237, 0.1)','#2F80ED')" value="#2F80ED">
                                                                            <label for="color7" class="colorSeven"></label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="bgcolor" id="color8" onclick="changeColor('rgba(155, 81, 224, 0.1)','#9B51E0')" value="#9B51E0">
                                                                            <label for="color8" class="colorEight"></label>
                                                                        </div>
                                                                    </div>
                                                                 </div>
                                                                {{-- <div class="form-control custom-switch form-group">
                                                                    <input type="checkbox" name="colorlink" id="customSwitch1" class="custom-control-input" id="customSwitch1">
                                                                    <label class="custom-control-label" for="customSwitch1">{{ __('Color Link Icons') }}</label>
                                                                </div> --}}
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="name" class="form-label">{{ __('Name') }}</label>
                                                                    <input type="text" name="name" class="form-control @error('email') is-invalid @enderror cin" placeholder="{{ __('name') }}" required data-preview="name_show" value="{{ old('name') }}">
                                                                    @if($errors->has('name'))
                                                                        <span class="help-block text-danger">{{ $errors->first('name') }}</span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="location" class="form-label">{{ __('Location') }}</label>
                                                                    <input type="text" name="location" class="form-control @error('email') is-invalid @enderror cin" placeholder="{{ __('location') }}" required data-preview="location_show" value="{{ old('location') }}">
                                                                    @if($errors->has('location'))
                                                                        <span class="help-block text-danger">{{ $errors->first('location') }}</span>
                                                                    @endif
                                                                 </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="designation" class="form-label">{{ __('Job Title') }}</label>
                                                                    <input type="text" name="designation" class="form-control @error('designation') is-invalid @enderror cin_desig_comp" placeholder="{{ __('job') }}" required data-preview="desig_comp_show" value="{{ old('designation') }}">
                                                                    @if($errors->has('designation'))
                                                                        <span class="help-block text-danger">{{ $errors->first('designation') }}</span>
                                                                    @endif
                                                                 </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="company_name" class="form-label">{{ __('Company') }}</label>
                                                                    <input type="text" name="company_name" class="form-control @error('company_name') is-invalid @enderror cin_desig_comp" placeholder="{{ __('company') }}" required data-preview="desig_comp_show" value="{{ old('company_name') }}">
                                                                    @if($errors->has('company_name'))
                                                                        <span class="help-block text-danger">{{ $errors->first('company_name') }}</span>
                                                                    @endif
                                                                 </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label for="bio" class="form-label">{{ __('Bio') }}</label>
                                                                    <textarea name="bio" cols="30" rows="10" class="form-control @error('bio') is-invalid @enderror cin" placeholder="{{ __('Bio') }}" data-preview="bio_show">{{ old('bio') }}</textarea>
                                                                    @if($errors->has('bio'))
                                                                        <span class="help-block text-danger">{{ $errors->first('bio') }}</span>
                                                                    @endif
                                                                 </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="float-right">
                                                                     <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
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
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M144.516 0H0C2.49419 0 4.51613 2.02194 4.51613 4.51613C4.17977 13.0429 10.8623 19.8833 19.5482 20L20 20H124.516L124.962 20C133.526 19.8833 140.211 13.0429 140 4.51613C140 2.02194 142.022 0 144.516 0Z" fill="#E0E0E0"></path>
                                                        </svg>
                                                    </div>
                                                    <!-- time -->
                                                    <div class="clock">{{ date('H:i') }}</div>
                                                    <!-- mobile icon -->
                                                    <div class="mobile_icon">
                                                        <svg width="16" height="9" fill="none" viewBox="0 0 12 9">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.9742 0.966309H10.2968C9.92273 0.966309 9.61948 1.26956 9.61948 1.64365V7.51393C9.61948 7.88801 9.92273 8.19127 10.2968 8.19127H10.9742C11.3482 8.19127 11.6515 7.88801 11.6515 7.51393V1.64365C11.6515 1.26956 11.3482 0.966309 10.9742 0.966309ZM7.13634 2.54688H7.81368C8.18776 2.54688 8.49102 2.85013 8.49102 3.22422V7.51404C8.49102 7.88812 8.18776 8.19138 7.81368 8.19138H7.13634C6.76225 8.19138 6.459 7.88812 6.459 7.51404V3.22422C6.459 2.85013 6.76225 2.54688 7.13634 2.54688ZM4.65188 4.12712H3.97454C3.60045 4.12712 3.2972 4.43037 3.2972 4.80446V7.51382C3.2972 7.8879 3.60045 8.19116 3.97454 8.19116H4.65188C5.02596 8.19116 5.32922 7.8879 5.32922 7.51382V4.80446C5.32922 4.43037 5.02596 4.12712 4.65188 4.12712ZM1.4914 5.4818H0.814059C0.439974 5.4818 0.136719 5.78505 0.136719 6.15914V7.51382C0.136719 7.8879 0.439974 8.19116 0.814059 8.19116H1.4914C1.86548 8.19116 2.16874 7.8879 2.16874 7.51382V6.15914C2.16874 5.78505 1.86548 5.4818 1.4914 5.4818Z" fill="black"></path>
                                                        </svg>
                                                        <svg width="11" height="8" fill="none">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.23227 2.28614C6.73917 2.2862 8.18845 2.86473 9.28056 3.90214C9.3628 3.98223 9.49425 3.98122 9.57525 3.89987L10.3614 3.10716C10.4024 3.0659 10.4253 3.01001 10.4249 2.95186C10.4246 2.89372 10.4011 2.8381 10.3596 2.79732C7.49312 0.0525852 2.97098 0.0525852 0.104532 2.79732C0.0630094 2.83807 0.0394501 2.89367 0.0390672 2.95182C0.0386844 3.00997 0.0615095 3.06587 0.102492 3.10716L0.888847 3.89987C0.969791 3.98134 1.10134 3.98235 1.18353 3.90214C2.27578 2.86466 3.72523 2.28613 5.23227 2.28614ZM5.23206 4.86522C6.06 4.86516 6.8584 5.17265 7.47212 5.72791C7.55512 5.80672 7.68588 5.80501 7.7668 5.72406L8.55202 4.93135C8.59338 4.88977 8.61632 4.83336 8.61572 4.77475C8.61513 4.71614 8.59104 4.66021 8.54885 4.61948C6.67996 2.8825 3.78574 2.8825 1.91685 4.61948C1.87464 4.66021 1.85055 4.71616 1.85 4.7748C1.84945 4.83343 1.87247 4.88983 1.91391 4.93135L2.6989 5.72406C2.77982 5.80501 2.91058 5.80672 2.99359 5.72791C3.6069 5.17301 4.40466 4.86556 5.23206 4.86522ZM6.80446 6.60047C6.80566 6.65925 6.78254 6.71592 6.74054 6.7571L5.38227 8.12668C5.34246 8.16693 5.28817 8.18958 5.23153 8.18958C5.17489 8.18958 5.1206 8.16693 5.08079 8.12668L3.72229 6.7571C3.68032 6.71589 3.65724 6.6592 3.65848 6.60043C3.65973 6.54165 3.68519 6.48599 3.72886 6.44659C4.59631 5.71352 5.86675 5.71352 6.7342 6.44659C6.77784 6.48602 6.80326 6.5417 6.80446 6.60047Z" fill="black"></path>
                                                        </svg>
                                                        <svg width="17" height="8" fill="none">
                                                            <rect opacity="0.35" x="1.15117" y="1.07939" width="14.2241" height="6.99918" rx="1.46757" stroke="black" stroke-width="0.67734"></rect>
                                                            <path opacity="0.4" d="M16.3906 3.22412V5.93348C16.9357 5.70401 17.2902 5.17021 17.2902 4.5788C17.2902 3.98739 16.9357 3.45359 16.3906 3.22412Z" fill="black"></path>
                                                            <rect x="2.16797" y="2.09521" width="12.1921" height="4.96716" rx="0.90312" fill="black"></rect>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card_overflow">
                                                <!-- cover image -->
                                                <div class="card_banner mb-5" style="background-image: url('{{ getCover() }}');" id="coverpic_2">
                                                    <!-- profile image -->
                                                    <div class="profile_image">
                                                        <img src="{{ getProfile() }}" width="100" height="100" alt="image" id="profilePic_2">
                                                        <!-- logo -->
                                                        <img class="logo" src="{{ getlogo() }}" alt="image" id="showlogo_2">
                                                    </div>
                                                </div>
                                                <div class="card_content text-center">
                                                    <div class="profile_name mt-2">
                                                        <h3 id="name_show">Rabin Mia</h3>
                                                        <h5 id="desig_comp_show">Developer at Arobil</h5>
                                                        <h6 id="location_show">Dhaka</h6>
                                                        <p id="bio_show">Lorem ipsum, dolor sit, amet consectetur adipisicing elit.</p>
                                                    </div>
                                                    <div class="save_contact mt-4 mb-4">
                                                        <a href="javascript:void(0)">Save Contact</a>
                                                    </div>
                                                    <div class="social_icon">
                                                        <ul id="social_icon_list">

                                                            <li>
                                                                <a href="#" target="_blank">
                                                                    <img src="{{ asset('assets/img/icon/email.svg') }}" alt="email">
                                                                    <span>Email</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="view_btn text-center mt-3">
                                        <a href="card-view.html" target="_blank">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9 2H14V7" stroke="#828282" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M8 8L14.0104 1.98959" stroke="#828282" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M5.5 3H3.5C2.67157 3 2 3.67157 2 4.5V12.5C2 13.3284 2.67157 14 3.5 14H11.5C12.3284 14 13 13.3284 13 12.5V10.5" stroke="#828282" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                            <span>View Card</span>
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
        <div class="modal fade" id="socialMedia" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <!-- modal header -->
                    <div class="modal-header mb-4">
                        <div class="first_modal">
                            <h5>{{ __('Add content') }}</h5>
                            <p>{{ __('Select from our wide variety of links and contact info below.') }} <span id="filter-count">({{ $icons->count() ?? 0 }})</span> </p>
                            <form onsubmit="return false;">
                                <div class="input-group">
                                    <input type="text" name="search" id="filter" class="form-control" placeholder="Search Content" required>
                                    <button type="submit" class="input-type-text btn btn-dark"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="second_modal d-none">
                            <h5><a href="#" class="backfirstModal"><i class="fa fa-angle-left"></i> {{ __('Back') }}</a></h5>
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
                                                @if($icon->icon_group == $igroup )
                                                    <div class="col-sm-6 col-lg-4 icon_each" data-name="{{ $icon->icon_name }}">
                                                        <a href="javascript:void(0)" class="onclickIcon" data-name="{{ $icon->icon_name }}" data-title="{{ $icon->icon_title }}" data-image="{{ getIcon($icon->icon_image) }}">
                                                            <div class="icon_wrap media position-relative mb-3">
                                                                <div class="icon_info">
                                                                    <img src="{{ getIcon($icon->icon_image) }}" alt="{{ $icon->icon_title }}">
                                                                    <span>{{ $icon->icon_title }}</span>
                                                                </div>
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
                                    <div class="social_add_form">
                                        <form onsubmit="alert('Please complete the about section'); return false;">
                                            <div class="form-group">
                                                <label class="imgLabel" for="logo">
                                                    <img id="content_icon" src="{{ getIcon() }}" alt="">
                                                    <input type="file" name="logo" id="logo" hidden>
                                                    <span>Select photo here or drag and drop <br /> one in place of current</span>
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label"><span id="content_link">Facebook profile link</span> <span class="text-dark">*</span></label>
                                                <input type="text" name="content" class="form-control" placeholder="link" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="title" class="form-label">Link title</label>
                                                <input type="text" name="title" class="form-control" placeholder="Title" required id="content_title">
                                            </div>

                                            <div class="form-group text-center float-lg-right">
                                                <button type="button" class="btn btn-secondary backfirstModal mr-2">Cancel</button>
                                                <button type="submit" class="btn btn-primary">Add Link</button>
                                            </div>
                                        </form>
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
                                                                <svg width="145" height="20" fill="none" viewBox="0 0 145 20">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M144.516 0H0C2.49419 0 4.51613 2.02194 4.51613 4.51613C4.17977 13.0429 10.8623 19.8833 19.5482 20L20 20H124.516L124.962 20C133.526 19.8833 140.211 13.0429 140 4.51613C140 2.02194 142.022 0 144.516 0Z" fill="#E0E0E0"></path>
                                                                </svg>
                                                            </div>
                                                            <!-- time -->
                                                            <div class="clock">2:39</div>
                                                            <!-- mobile icon -->
                                                            <div class="mobile_icon">
                                                                <svg width="16" height="9" fill="none" viewBox="0 0 12 9">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.9742 0.966309H10.2968C9.92273 0.966309 9.61948 1.26956 9.61948 1.64365V7.51393C9.61948 7.88801 9.92273 8.19127 10.2968 8.19127H10.9742C11.3482 8.19127 11.6515 7.88801 11.6515 7.51393V1.64365C11.6515 1.26956 11.3482 0.966309 10.9742 0.966309ZM7.13634 2.54688H7.81368C8.18776 2.54688 8.49102 2.85013 8.49102 3.22422V7.51404C8.49102 7.88812 8.18776 8.19138 7.81368 8.19138H7.13634C6.76225 8.19138 6.459 7.88812 6.459 7.51404V3.22422C6.459 2.85013 6.76225 2.54688 7.13634 2.54688ZM4.65188 4.12712H3.97454C3.60045 4.12712 3.2972 4.43037 3.2972 4.80446V7.51382C3.2972 7.8879 3.60045 8.19116 3.97454 8.19116H4.65188C5.02596 8.19116 5.32922 7.8879 5.32922 7.51382V4.80446C5.32922 4.43037 5.02596 4.12712 4.65188 4.12712ZM1.4914 5.4818H0.814059C0.439974 5.4818 0.136719 5.78505 0.136719 6.15914V7.51382C0.136719 7.8879 0.439974 8.19116 0.814059 8.19116H1.4914C1.86548 8.19116 2.16874 7.8879 2.16874 7.51382V6.15914C2.16874 5.78505 1.86548 5.4818 1.4914 5.4818Z" fill="black"></path>
                                                                </svg>
                                                                <svg width="11" height="8" fill="none">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.23227 2.28614C6.73917 2.2862 8.18845 2.86473 9.28056 3.90214C9.3628 3.98223 9.49425 3.98122 9.57525 3.89987L10.3614 3.10716C10.4024 3.0659 10.4253 3.01001 10.4249 2.95186C10.4246 2.89372 10.4011 2.8381 10.3596 2.79732C7.49312 0.0525852 2.97098 0.0525852 0.104532 2.79732C0.0630094 2.83807 0.0394501 2.89367 0.0390672 2.95182C0.0386844 3.00997 0.0615095 3.06587 0.102492 3.10716L0.888847 3.89987C0.969791 3.98134 1.10134 3.98235 1.18353 3.90214C2.27578 2.86466 3.72523 2.28613 5.23227 2.28614ZM5.23206 4.86522C6.06 4.86516 6.8584 5.17265 7.47212 5.72791C7.55512 5.80672 7.68588 5.80501 7.7668 5.72406L8.55202 4.93135C8.59338 4.88977 8.61632 4.83336 8.61572 4.77475C8.61513 4.71614 8.59104 4.66021 8.54885 4.61948C6.67996 2.8825 3.78574 2.8825 1.91685 4.61948C1.87464 4.66021 1.85055 4.71616 1.85 4.7748C1.84945 4.83343 1.87247 4.88983 1.91391 4.93135L2.6989 5.72406C2.77982 5.80501 2.91058 5.80672 2.99359 5.72791C3.6069 5.17301 4.40466 4.86556 5.23206 4.86522ZM6.80446 6.60047C6.80566 6.65925 6.78254 6.71592 6.74054 6.7571L5.38227 8.12668C5.34246 8.16693 5.28817 8.18958 5.23153 8.18958C5.17489 8.18958 5.1206 8.16693 5.08079 8.12668L3.72229 6.7571C3.68032 6.71589 3.65724 6.6592 3.65848 6.60043C3.65973 6.54165 3.68519 6.48599 3.72886 6.44659C4.59631 5.71352 5.86675 5.71352 6.7342 6.44659C6.77784 6.48602 6.80326 6.5417 6.80446 6.60047Z" fill="black"></path>
                                                                </svg>
                                                                <svg width="17" height="8" fill="none">
                                                                    <rect opacity="0.35" x="1.15117" y="1.07939" width="14.2241" height="6.99918" rx="1.46757" stroke="black" stroke-width="0.67734"></rect>
                                                                    <path opacity="0.4" d="M16.3906 3.22412V5.93348C16.9357 5.70401 17.2902 5.17021 17.2902 4.5788C17.2902 3.98739 16.9357 3.45359 16.3906 3.22412Z" fill="black"></path>
                                                                    <rect x="2.16797" y="2.09521" width="12.1921" height="4.96716" rx="0.90312" fill="black"></rect>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card_overflow">
                                                        <!-- cover image -->
                                                        <div class="card_banner mb-5" style="background-image: url('{{ asset('') }}assets/img/card-banner.png');">
                                                            <!-- profile image -->
                                                            <div class="profile_image">
                                                                <img src="{{ getProfile() }}" width="100" height="100" alt="image">
                                                                <!-- logo -->
                                                                <img class="logo" src="{{ getLogo() }}" alt="image" >
                                                            </div>
                                                        </div>
                                                        <div class="card_content text-center">
                                                            <div class="profile_name mt-2">
                                                                <h3>Rabin Mia</h3>
                                                                <h5>Developer at Arobil</h5>
                                                                <h6>Dhaka</h6>
                                                                <p>Lorem ipsum, dolor sit, amet consectetur adipisicing elit.</p>
                                                            </div>
                                                            <div class="save_contact mt-4 mb-4">
                                                                <a href="#">Save Contact</a>
                                                            </div>
                                                            <div class="social_icon">
                                                                <ul>
                                                                    {{-- <li>
                                                                        <a href="#" target="_blank">
                                                                            <img src="{{ asset('assets/img/icon/facebook.svg') }}" alt="facebook">
                                                                            <span>Facebook</span>
                                                                        </a>
                                                                    </li> --}}

                                                                </ul>
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
<script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
<script type="text/javascript" src="{{ asset('assets/js/card.js') }}"></script>
<script>
// preview icon
// var loadFile = function(event) {
//     var image = document.getElementById('previewIcon');
//     image.src = URL.createObjectURL(event.target.files[0]);
// };

// preview profile photo
var profileloadFile = function(event) {
    var profile = document.getElementById('profilePic');
    profile.src = URL.createObjectURL(event.target.files[0]);

    var profile2 = document.getElementById('profilePic_2');
    profile2.src = URL.createObjectURL(event.target.files[0]);
};

// preview company logo
var companyloadFile = function(event) {
    var logo = document.getElementById('showlogo');
    logo.src = URL.createObjectURL(event.target.files[0]);

    var logo2 = document.getElementById('showlogo_2');
    logo2.src = URL.createObjectURL(event.target.files[0]);


};

// preview cover photo
var coverFile = function(event) {
    var cover  = document.getElementById('coverpic');
    cover.src  = URL.createObjectURL(event.target.files[0]);

    var cover2  = document.getElementById('coverpic_2');
    var cover2_url  = URL.createObjectURL(event.target.files[0]);
    cover2.style.backgroundImage = "url("+cover2_url+")";
};


// drag and drop
const dropItems = document.getElementById('drop-items')
new Sortable(dropItems, {
    animation: 350,
    chosenClass: "sortable-chosen",
    dragClass: "sortable-drag"
});

// social content modal
$('.onclickIcon').on('click', function() {
    var name = $(this).data('name');
    var title = $(this).data('title');
    var image = $(this).data('image');
    $('#content_icon').attr('src',image);
    $('#content_link').text(title+ ' profile link');
    $('#content_title').val(title);
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
function changeColor(bgcolor,color){
    // var element = document.getElementById("clrBg");
    // element.style.backgroundColor = bgcolor;

    var element = $("#clrBg");
    element.css("background-color", bgcolor);
    $('.save_contact a').css("background-color", color);


    // .save_contact a
}

$(document).on('input','#colorPicker',function(){
    let color = $(this).val();
    var element = document.getElementById("clrBg");
    element.style.backgroundColor = color;
})

//icon search
$(document).on('keyup', '#filter', function(){
    var filter = $(this).val(), count = 0;
    $(".add_list_wrap .icon_each").each(function(){
        if ($(this).data('name').search(new RegExp(filter, "i")) < 0) {
            $(this).fadeOut();
        } else {
            $(this).show();
            count++;
        }
    });
    var numberItems = count;
    $("#filter-count").text('('+count+')');

});

</script>
@endpush
