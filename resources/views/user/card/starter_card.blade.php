<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $settings = getSetting();
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $settings->site_name }}</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet" />
    <link href="{{ asset('assets/css/smart_wizard.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/adminlte.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/toastr.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/dashboard-style.css?v=1') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/dashboard-responsive.css?v=1') }}" rel="stylesheet">
    {{--
    <link rel="stylesheet" href="{{ asset('assets/css/croppie.css') }}" /> --}}
    <link type="image/png" href="{{ asset($settings->favicon) }}" rel="icon" sizes="32x32">
    <link type="text/css" href="{{ asset('assets/css/slim.min.css') }}" rel="stylesheet" />

    <style>
        .loading-spinner {
            display: none;
        }

        .loading-spinner.active {
            display: inline-block;
        }

        .preview_logo_div .slim {
            width: 120px;
            height: 120px;
            margin: 0 auto;
            border-radius: 50%;
        }
    </style>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/smartWizard.min.js') }}"></script>
    {{-- <script type="text/javascript" src="{{ asset('assets/js/croppie.js') }}"></script> --}}
    <script type="text/javascript" src="{{ asset('assets/js/card.js') }}"></script>
</head>
<?php
$tabIndex = 1;
?>

<body style="background-image: url({{ asset('assets/img/site-bg.jpg') }});">
    <div class="card_starter_wrapper">
        <div class="container-fluid p-0">
            <div class="row no-gutters align-items-center">
                <div class="col-lg-6 col-xl-5">
                    <!-- card step form -->
                    <div class="card_step_form">
                        <div id="smartwizard">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#step-1">
                                        <div class="num">{{ __('1') }}</div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#step-2">
                                        <span class="num">{{ __('2') }}</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#step-3">
                                        <span class="num">{{ __('3') }}</span>
                                    </a>
                                </li>
                                {{--
                                <li class="nav-item">
                                    <a class="nav-link " href="#step-4">
                                        <span class="num">{{ __('4') }}</span>
                                    </a>
                                </li>
                                --}}
                            </ul>
                            <form class="needs-validation mt-md-5 pt-md-5" id="cerate-first-card" id="cardCreateFrom"
                                action="{{ route('user.card.store-first-card') }}" method="POST"
                                enctype="multipart/form-data" novalidate="novalidate">
                                @csrf
                                <input name="issubmit" type='hidden' value="1">
                                <div class="tab-content">
                                    <!-- step 1 -->
                                    <div class="tab-pane" id="step-1" role="tabpanel" aria-labelledby="step-1">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-sm-8 col-lg-12 col-xl-8">
                                                <div class="form-group">
                                                    <label class="form-label"
                                                        for="name">{{ __('Name') }}</label>
                                                    <input class="form-control cin @error('name') is-invalid @enderror"
                                                        id="name" name="name" data-preview="preview_name"
                                                        type="text" value="{{ Auth::user()->name }}"
                                                        tabindex="{{ $tabIndex++ }}"
                                                        placeholder="{{ __('Name') }}" required>
                                                    {{-- <div class="invalid-feedback" id="msg_name"> {{ __('Enter your
                                                        name') }}</div> --}}
                                                    @if ($errors->has('name'))
                                                        <span
                                                            class="help-block text-danger">{{ $errors->first('name') }}</span>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label"
                                                        for="phone_number">{{ __('Phone Number') }}</label>
                                                    <input
                                                        class="form-control cin @error('phone_number') is-invalid @enderror"
                                                        id="phone_number" name="phone_number"
                                                        data-preview="preview_phone_number" type="number"
                                                        value="{{ Auth::user()->billing_phone }}"
                                                        tabindex="{{ $tabIndex++ }}"
                                                        placeholder="{{ __('ex:+15162973389') }}" required>
                                                    {{-- <div class="invalid-feedback">{{ __('Enter your phone number') }}</div> --}}
                                                    @if ($errors->has('phone_number'))
                                                        <span
                                                            class="help-block text-danger">{{ $errors->first('phone_number') }}</span>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <span>{{ __('Adding a phone number allows people to connect with you
                                                                                                                                                                                                                                                                        by text message or phone call') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- step 2 -->
                                    <div class="tab-pane" id="step-2" role="tabpanel" aria-labelledby="step-2">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-sm-8 col-lg-12 col-xl-8">
                                                <div class="form-group">
                                                    <label class="form-label"
                                                        for="designation">{{ __('Job') }}</label>
                                                    <input
                                                        class="form-control cin_desig_comp @error('designation') is-invalid @enderror"
                                                        id="designation" name="designation"
                                                        data-preview="desig_comp_show" type="text"
                                                        tabindex="{{ $tabIndex++ }}"
                                                        placeholder="{{ __('Designation') }}">
                                                    {{-- <div class="invalid-feedback">{{ __('Enter your job title') }}</div> --}}
                                                    @if ($errors->has('designation'))
                                                        <span
                                                            class="help-block text-danger">{{ $errors->first('designation') }}</span>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label"
                                                        for="company_name">{{ __('Company') }}</label>
                                                    <input
                                                        class="form-control cin_desig_comp @error('company_name') is-invalid @enderror"
                                                        id="company_name" name="company_name"
                                                        data-preview="desig_comp_show" type="text"
                                                        tabindex="{{ $tabIndex++ }}"
                                                        placeholder="{{ __('Company') }}">
                                                    {{-- <div class="invalid-feedback">{{ __('Enter your company name') }} </div> --}}
                                                    @if ($errors->has('company_name'))
                                                        <span
                                                            class="help-block text-danger">{{ $errors->first('company_name') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- step 3 -->
                                    <div class="tab-pane" id="step-3" role="tabpanel" aria-labelledby="step-3">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-sm-8 col-lg-12 col-xl-8">
                                                <div class="text-center">
                                                    <div class="upload_photo">
                                                        <div class="preview_logo_div">
                                                            <input id="photo" name="photo" type="file">
                                                            {{-- <img id="preview"
                                                                src="{{ asset('assets/img/default.png') }}"
                                                                alt="preview image"> --}}
                                                        </div>
                                                    </div>
                                                    <div class="upload_photo_text">
                                                        <p>{{ __('Make your card more personalized by adding a profile
                                                                                                                                                                                                                                                                                            picture') }}
                                                        </p>
                                                        {{-- <input type="file" class="d-none"
                                                            onchange="loadFile(event)" name="photo" id="photo" required
                                                            tabindex="{{ $tabIndex++ }}"> --}}
                                                        {{-- <label for="photo">{{ __('Upload photo') }}</label>
                                                        <div class="invalid-feedback">{{ __('Select your profile photo')
                                                            }}</div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- step 4 -->
                                    {{--
                                    <div id="step-4" class="tab-pane" role="tabpanel" aria-labelledby="step-4">
                                        <form id="form-4">
                                        </form>
                                    </div> --}}
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-7">
                    <!-- card preview -->
                    <div class="card_preview_wrapper">
                        <div class="header mb-4 text-center">
                            <h5>{{ __('Profile Live Preview') }}</h5>
                        </div>
                        <div class="card_preview">
                            <div class="card_wrapper">
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
                                        <div class="clock">2:39</div>
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
                                                    stroke-width="0.67734">
                                                </rect>
                                                <path opacity="0.4"
                                                    d="M16.3906 3.22412V5.93348C16.9357 5.70401 17.2902 5.17021 17.2902 4.5788C17.2902 3.98739 16.9357 3.45359 16.3906 3.22412Z"
                                                    fill="black"></path>
                                                <rect x="2.16797" y="2.09521" width="12.1921" height="4.96716"
                                                    rx="0.90312" fill="black"></rect>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <!-- banner -->
                                <div class="card_banner mt-3 mb-5"
                                    style="background-image: url({{ getCover() }})">
                                    <div class="profile_image">
                                        <img class="profile_image_src" src="{{ getProfile() }}" alt="image"
                                            width="100" height="100">
                                    </div>
                                </div>
                                <div class="card_content text-center">
                                    <div class="profile_name mt-2">
                                        <h3 id="preview_name">{{ Auth::user()->name ?? 'Rabin Mia' }}</h3>
                                        <h5 id="desig_comp_show">{{ __('Manager at MtgPro') }}</h5>
                                    </div>
                                    <div class="save_contact mt-4 mb-4">
                                        <a href="javascript:void(0)">{{ __('Save Contact') }}</a>
                                    </div>
                                    <div class="social_icon">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-4">
                                                <a href="mailto:rabin1@gmail.com" target="_blank">
                                                    <svg class="icon-shadow" width="54" height="54"
                                                        viewBox="0 0 80 80" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g filter="url(#filterc9)">
                                                            <path
                                                                d="M18.0952 0H61.9048C71.9048 0 80 8.09524 80 18.0952V61.9048C80 71.9048 71.9048 80 61.9048 80H18.0952C8.09524 80 0 71.9048 0 61.9048V18.0952C0 8.09524 8.09524 0 18.0952 0Z"
                                                                fill="url(#paint0_linearc9)"></path>
                                                            <path
                                                                d="M66.0163 22H14.4268C13.9581 22 13.5169 22.1379 13.1309 22.3585L13.6823 22.9099L36.8163 46.0714C38.6913 47.9464 41.7519 47.9464 43.6269 46.0714L67.3399 22.386C66.9538 22.1379 66.4851 22 66.0163 22Z"
                                                                fill="white"></path>
                                                            <path
                                                                d="M68.4695 24.454C68.4695 23.9853 68.3316 23.5441 68.111 23.1581L51.0156 40.4189L68.1662 57.5143C68.3592 57.1559 68.4695 56.7423 68.4695 56.3287V24.454Z"
                                                                fill="white"></path>
                                                            <path
                                                                d="M12 24.454C12 23.9853 12.1379 23.5441 12.3585 23.1581L29.4539 40.4189L12.3033 57.5143C12.1103 57.1559 12 56.7423 12 56.3287V24.454Z"
                                                                fill="white"></path>
                                                            <path
                                                                d="M50.1066 41.2185L44.1232 47.2019C41.9725 49.3526 38.4431 49.3526 36.2924 47.2019L30.309 41.2461L13.1309 58.3967C13.5169 58.6173 13.9305 58.7551 14.3992 58.7551H65.9888C66.4575 58.7551 66.8987 58.6173 67.2571 58.3967L66.2369 57.3765L50.1066 41.2185Z"
                                                                fill="white"></path>
                                                        </g>
                                                        <defs>
                                                            <filter id="filterc9" x="0" y="-1"
                                                                width="80" height="81"
                                                                filterUnits="userSpaceOnUse"
                                                                color-interpolation-filters="sRGB">
                                                                <feFlood flood-opacity="0"
                                                                    result="BackgroundImageFix">
                                                                </feFlood>
                                                                <feBlend mode="normal" in="SourceGraphic"
                                                                    in2="BackgroundImageFix" result="shape"></feBlend>
                                                                <feColorMatrix type="matrix"
                                                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                    in="SourceAlpha" result="hardAlpha">
                                                                </feColorMatrix>
                                                                <feOffset dy="-1"></feOffset>
                                                                <feGaussianBlur stdDeviation="0.5"></feGaussianBlur>
                                                                <feComposite in2="hardAlpha" operator="arithmetic"
                                                                    k2="-1" k3="1"></feComposite>
                                                                <feColorMatrix type="matrix"
                                                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0"
                                                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0"
                                                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0"
                                                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0">
                                                                </feColorMatrix>
                                                                <feBlend mode="normal" in2="shape"
                                                                    result="effect1_innerShadow"></feBlend>
                                                            </filter>
                                                            <linearGradient id="paint0_linearc9" x1="40"
                                                                y1="0" x2="40" y2="80"
                                                                gradientUnits="userSpaceOnUse">
                                                                <stop stop-color="#1E51EE"></stop>
                                                                <stop offset="1" stop-color="#19E4FF"></stop>
                                                            </linearGradient>
                                                        </defs>
                                                    </svg>
                                                    <span>{{ __('Email') }}</span>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="javascript:void(0)" target="_blank">
                                                    <svg class="icon-shadow" width="54" height="54"
                                                        viewBox="0 0 80 80" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g filter="url(#filterc8)">
                                                            <path
                                                                d="M18.0952 0H61.9048C71.9048 0 80 8.09524 80 18.0952V61.9048C80 71.9048 71.9048 80 61.9048 80H18.0952C8.09524 80 0 71.9048 0 61.9048V18.0952C0 8.09524 8.09524 0 18.0952 0Z"
                                                                fill="url(#paint0_linearc8)"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M40 61.1864C56.0163 61.1864 69 50.6234 69 37.5932C69 24.563 56.0163 14 40 14C23.9837 14 11 24.563 11 37.5932C11 46.2476 16.7276 53.8136 25.2671 57.9193C25.3744 59.7932 24.641 63.5944 20.8305 65.1186C23.2461 65.2797 28.9855 63.6996 32.4483 60.3785C34.8561 60.9054 37.3877 61.1864 40 61.1864Z"
                                                                fill="white"></path>
                                                        </g>
                                                        <defs>
                                                            <filter id="filterc8" x="0" y="-1"
                                                                width="80" height="81"
                                                                filterUnits="userSpaceOnUse"
                                                                color-interpolation-filters="sRGB">
                                                                <feFlood flood-opacity="0"
                                                                    result="BackgroundImageFix">
                                                                </feFlood>
                                                                <feBlend mode="normal" in="SourceGraphic"
                                                                    in2="BackgroundImageFix" result="shape"></feBlend>
                                                                <feColorMatrix type="matrix"
                                                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                    in="SourceAlpha" result="hardAlpha">
                                                                </feColorMatrix>
                                                                <feOffset dy="-1"></feOffset>
                                                                <feGaussianBlur stdDeviation="0.5"></feGaussianBlur>
                                                                <feComposite in2="hardAlpha" operator="arithmetic"
                                                                    k2="-1" k3="1"></feComposite>
                                                                <feColorMatrix type="matrix"
                                                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0"
                                                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0"
                                                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0"
                                                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0">
                                                                </feColorMatrix>
                                                                <feBlend mode="normal" in2="shape"
                                                                    result="effect1_innerShadow"></feBlend>
                                                            </filter>
                                                            <linearGradient id="paint0_linearc8" x1="40"
                                                                y1="0" x2="40" y2="80"
                                                                gradientUnits="userSpaceOnUse">
                                                                <stop stop-color="#8BFB6B"></stop>
                                                                <stop offset="1" stop-color="#19DB1C"></stop>
                                                            </linearGradient>
                                                        </defs>
                                                    </svg>
                                                    <span>{{ __('Phone') }}</span>
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
        </div>
    </div>
    <script src="{{ asset('assets/js/toastr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/slim.kickstart.min.js') }}"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(function() {
            // Smart Wizard
            $('#smartwizard').smartWizard({
                onLeaveStep: leaveAStepCallback,
                onFinish: onFinishCallback,
                enableFinishButton: true,
                transition: {
                    animation: 'slideSwing',
                },
                toolbar: {
                    //    showNextButton: true, // show/hide a Next button
                    //    showPreviousButton: true, // show/hide a Previous button
                    //    position: 'bottom', // none/ top/ both bottom
                    extraHtml: `<button class="btn btn-success sw-btn d-none" id="btnFinish" disabled>{{ __('Finish') }}</button>`
                }
            });


            // Step show event
            $("#smartwizard").on("showStep", function(e, anchorObject, stepIndex, stepDirection, stepPosition) {
                // console.log(stepDirection);
                // console.log(stepPosition);
                $("#prev-btn").removeClass('disabled').prop('disabled', false);
                $("#next-btn").removeClass('disabled').prop('disabled', false);

                if (stepDirection === 'forward') {}
                if (stepDirection === 'backward') {
                    $("#btnFinish").addClass('d-none');
                }
                if (stepPosition === 'first') {
                    $("#prev-btn").addClass('disabled').prop('disabled', true);
                } else if (stepPosition === 'last') {
                    $("#next-btn").addClass('disabled').prop('disabled', true);

                } else {
                    $("#prev-btn").removeClass('disabled').prop('disabled', false);
                    $("#next-btn").removeClass('disabled').prop('disabled', false);
                }
                // Get step info from Smart Wizard
                //  let stepInfo = $('#smartwizard').smartWizard("getStepInfo");
                //  $("#sw-current-step").text(stepInfo.currentStep + 1);
                //  $("#sw-total-step").text(stepInfo.totalSteps);

                if (stepPosition == 'last') {
                    //   showConfirm();
                    //  $(".sw-btn-next").addClass('d-none');
                    $("#btnFinish").removeClass('d-none');
                    $("#btnFinish").prop('disabled', false);
                } else {
                    $("#btnFinish").prop('disabled', true);
                }
                // Focus first name
                if (stepIndex == 1) {
                    setTimeout(() => {
                        $('#name').focus();
                    }, 0);
                }
            });

            function leaveAStepCallback(obj) {
                var step_num = obj.attr('rel');
                console.log(step_num);
                return validateSteps(step_num);
            }

            function onFinishCallback() {
                if (validateAllSteps()) {
                    $('#cerate-first-card').submit();
                }
            }

        });

        function validateAllSteps() {
            var isStepValid = true;

            if (validateStep1() == false) {
                isStepValid = false;
                $('#smartwizard').smartWizard('setError', {
                    stepnum: 1,
                    iserror: true
                });
            } else {
                $('#smartwizard').smartWizard('setError', {
                    stepnum: 1,
                    iserror: false
                });
            }
            if (validateStep2() == false) {
                isStepValid = false;
                $('#smartwizard').smartWizard('setError', {
                    stepnum: 2,
                    iserror: true
                });
            } else {
                $('#smartwizard').smartWizard('setError', {
                    stepnum: 2,
                    iserror: false
                });
            }
            if (!isStepValid) {
                $('#smartwizard').smartWizard('showMessage', 'Please correct the errors in the steps and continue');
            }

            return isStepValid;
        }

        function validateSteps(step) {
            var isStepValid = true;
            // validate step 1
            if (step == 1) {
                if (validateStep1() == false) {
                    isStepValid = false;
                    $('#smartwizard').smartWizard('showMessage', 'Please correct the errors in step' + step +
                        ' and click next.');
                    $('#smartwizard').smartWizard('setError', {
                        stepnum: step,
                        iserror: true
                    });
                } else {
                    $('#smartwizard').smartWizard('hideMessage');
                    $('#smartwizard').smartWizard('setError', {
                        stepnum: step,
                        iserror: false
                    });
                }
            }

            // validate step2
            if (step == 2) {
                if (validateStep2() == false) {
                    isStepValid = false;
                    $('#smartwizard').smartWizard('showMessage', 'Please correct the errors in step' + step +
                        ' and click next.');
                    $('#smartwizard').smartWizard('setError', {
                        stepnum: step,
                        iserror: true
                    });
                } else {
                    $('#smartwizard').smartWizard('hideMessage');
                    $('#smartwizard').smartWizard('setError', {
                        stepnum: step,
                        iserror: false
                    });
                }
            }

            return isStepValid;
        }

        function validateStep1() {
            var isValid = true;
            // Validate Username
            var name = $('#name').val();
            if (!name && name.length <= 0) {
                isValid = false;
                $('#msg_name').html('Please fill name').show();
            } else {
                $('#msg_name').html('').hide();
            }
            var pw = $('#phone_number').val();
            if (!pw && pw.length <= 0) {
                isValid = false;
                $('#msg_phone_number').html('Please fill phone number').show();
            } else {
                $('#msg_phone_number').html('').hide();
            }
            return isValid;
        }

        function validateStep2() {
            var isValid = true;
            var designation = $('#designation').val();
            if (!designation && designation.length <= 0) {
                isValid = false;
                $('#msg_name').html('Please fill name').show();
            } else {
                $('#msg_name').html('').hide();
            }
            var company_name = $('#company_name').val();
            if (!company_name && company_name.length <= 0) {
                isValid = false;
                $('#msg_company_name').html('Please fill company name').show();
            } else {
                $('#msg_company_name').html('').hide();
            }
            return isValid;
        }

        var cropper = new Slim(document.getElementById('photo'), {
            ratio: '1:1',
            minSize: {
                width: 20,
                height: 20,
            },
            size: {
                width: 600,
                height: 600,
            },
            willSave: function(data, ready) {
                $('#preview').attr('src', data.output.image);
                $('.profile_image_src').attr('src', data.output.image);
                ready(data);
            },
            meta: {
                viewid: 1
            },
            download: false,
            instantEdit: true,
            label: 'Click here or drag an image onto it',
            // buttonConfirmLabel: 'Crop',
            // buttonConfirmTitle: 'Crop',
            // buttonCancelLabel: 'Cancel',
            // buttonCancelTitle: 'Cancel',
            // buttonEditTitle: 'Edit',
            // buttonRemoveTitle: 'Remove',
            // buttonDownloadTitle: 'Download',
            // buttonRotateTitle: 'Rotate',
            // buttonUploadTitle: 'Upload',
            statusImageTooSmall: 'This photo is too small. The minimum size is 360 * 240 pixels.'
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
    </script>
</body>
