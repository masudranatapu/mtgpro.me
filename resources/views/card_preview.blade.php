<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $cardinfo = $cardinfo ?? [];
    $user_plan = getPlan($cardinfo->user_id);
    $settings = getSetting();
    $tabindex = 1;
    $twitter_id = '';
    $description = [];
    $user_name = $cardinfo->title . ' ' . $cardinfo->title2;
    if (isset($cardinfo->designation)) {
        $description = $cardinfo->designation . ' @ ' . $cardinfo->company_name;
    } else {
        $description = $cardinfo->card_email;
    }
    if ($cardinfo->profile) {
        $settings->favicon = $cardinfo->profile;
    }
    
    if (isFreePlan($cardinfo->user_id)) {
        $title = $user_name . ' - ' . $settings->site_name;
    } else {
        $title = $user_name;
    }
    $android = stripos($_SERVER['HTTP_USER_AGENT'], 'android');
    $iphone = stripos($_SERVER['HTTP_USER_AGENT'], 'iphone');
    $ipad = stripos($_SERVER['HTTP_USER_AGENT'], 'ipad');
    $phone_number = $email = null;
    
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} </title>
    <link type="image/png" href="{{ asset($settings->favicon) }}" rel="icon" sizes="32x32">
    @if (!empty($twitter_id))
        <meta name="twitter:site" content="{{ '@' . $twitter_id }}" />
        <meta name="twitter:creator" content="{{ '@' . $twitter_id }}" />
    @endif
    <meta name="description" content="{{ $description }}" />
    <meta property="og:title" content="{{ $user_name }}" />
    <meta property="og:description" content="{{ $description }}" />
    <meta property="og:image" content="{{ asset($cardinfo->profile) }}" />
    <meta property="og:image:alt" content="{{ $user_name }}'s profile picture" />
    <meta property="og:site_name" content="{{ $settings->site_name }}" />
    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:type" content="profile" />
    <meta property="profile:first_name" content="{{ $cardinfo->title }}" />
    @if (!empty($cardinfo->title2))
        <meta property="profile:last_name" content="{{ $cardinfo->title2 }}" />
    @endif

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="{{ $user_name }}" />
    <meta name="twitter:description" content="{{ $description }}" />
    <meta name="twitter:image" content="{{ asset($cardinfo->profile) }}" />
    <meta name="twitter:image:alt" content="{{ $user_name }}'s profile picture" />
    <meta property="twitter:url" content="{{ Request::url() }}" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css" rel="stylesheet">
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <link href="{{ asset('assets/css/toastr.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/card-style.css') }}?v=2" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
        rel="stylesheet" />
    @if ($cardinfo->theme_color)
        <style>
            .save_contact a {
                background: {{ $cardinfo->theme_color }}
            }

            .offcanvas_btn a {
                background: {{ $cardinfo->theme_color }}
            }
        </style>
    @endif

    <style>
        table.table-condensed td {
            padding: 5px 11px;
            font-size: 13px;
        }

        .authorization_modal .modal-content {
            border: none;
            border-radius: 0px;
        }

        .authorization_modal .modal-header h1 {
            text-align: center;
            display: block;
            width: 100%;
            font-size: 18px !important;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .authorization_modal .modal-header {
            border: none;
            display: inherit;
            margin-bottom: 24px;
        }

        .authorization_modal .modal-body p {
            font-size: 13px;
            margin-bottom: 15px;
            line-height: 24px;
            color: #666;
        }

        .authorization_modal .modal-body p {
            font-size: 13px;
            margin-bottom: 15px;
            line-height: 24px;
            color: #666;
        }

        .authorization_modal .input-group-text {
            border: none !important;
            padding: 0 !important;
            background: transparent !important;
            font-size: 13px;
            font-weight: 600;
            margin-right: 5px;
            text-decoration: underline;
            margin-bottom: 0;
            height: 31px;
        }

        .authorization_modal .form-control {
            outline: none !important;
            box-shadow: none !important;
            border: none;
            border-bottom: 2px solid #e4e4e4;
            border-radius: 0;
            height: 23px;
            background: #fff !important;
            padding: 0;
        }

        .authorization_modal h4 {
            font-size: 15px;
            margin: 0;
            font-weight: 600;
            color: #070707;
        }

        .modal-header .btn-close {
            outline: none !important;
            box-shadow: none !important;
        }

        .authorization_modal .btn-primary {
            background: #c62f00;
            color: #fff;
            padding: 7px 34px;
            font-size: 16px;
            font-family: 'Inter', sans-serif;
            border: none;
            font-weight: 600;
            border-radius: 3px;
            transition: all 0.3s ease;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            box-shadow: rgb(99 99 99 / 20%) 0px 2px 8px 0px;
        }

        @media screen and (max-width:575px) {
            .authorization_modal .input-group {
                display: block;
                position: inherit;
            }

            .authorization_modal .input-group-text {
                display: block;
                text-align: left;
            }

            .authorization_modal .form-control,
            .authorization_modal .form-floating,
            .authorization_modal .form-select {
                width: 100%;
            }

            .authorization_modal .input-group-text {
                height: 22px;
            }

            .authorization_modal .modal-content {
                padding: 10px !important;
            }
        }

        .form-label {
            font-size: 14px;
            font-weight: 600;
        }

        .custome_modal .form-control::placeholder {
            color: #BBB;
            font-size: 14px;
        }

        .custome_modal .form-check {
            display: inline-block;
            margin-right: 21px;
        }

        .custome_modal .form-check label {
            cursor: pointer;
            font-size: 12px;
            font-weight: 600;
            color: #555;
        }

        .custome_modal .form-check input {
            cursor: pointer;
            box-shadow: none !important;
        }

        .form-check-input:checked {
            background-color: #c62f00;
            border: none !important;
        }
    </style>
</head>

<body>
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    @if (checkPackageValidity($cardinfo->user_id) == false)
        @include('_plan_expired_error')
    @else
        <div class="template">
            <div class="card_view_wrapper" style="background: #C6E4D2; min-height: 936px;">
                <div class="card_cover">
                    <div class="cover_img" data-aos="zoom-in">
                        <img src="{{ getCover($cardinfo->cover) }}" alt="image">
                    </div>
                    <div class="card_profile" data-aos="zoom-in">
                        <img class="profile_pic" src="{{ getProfile($cardinfo->profile) }}" alt="image">
                        <img class="logo" src="{{ getLogo($cardinfo->logo) }}" alt="image">
                    </div>
                </div>
                <div class="card_view_body">
                    <div class="content text-center">
                        <div class="profile_info mt-4">
                            <h2>{{ $cardinfo->title }} {{ $cardinfo->title2 }}</h2>

                            <h4>{{ $cardinfo->designation ?? 'Manager' }} at
                                {{ $cardinfo->company_name ?? 'MTGPRO.ME' }}</h4>

                            @if (!empty($cardinfo->location))
                                <h6>{{ $cardinfo->location }}</h6>
                            @endif
                            @if (!empty($cardinfo->bio))
                                <p>{{ $cardinfo->bio }}</p>
                            @endif
                            @if (isset($user->nmls_id))
                                @if ($user->nmls_view == '1')
                                    <p>{{ __('NMLS ID') }} : {{ $user->nmls_id }}</p>
                                @endif
                            @endif
                        </div>
                        <div class="save_contact mt-5 mb-5">
                            <a class="text-decoration-none save-contact d-inline-block"
                                href="{{ route('download.vCard', $cardinfo->card_id) }}">{{ __('Save Contact') }}</a>

                            <a class="text-decoration-none d-inline-block btn-secondary" data-bs-toggle="modal"
                                data-bs-target="#shareModal" href="javascript:void(0)">
                                {{ __('Share') }}
                            </a>
                        </div>
                        <div class="social_media">
                            <div class="row justify-content-center">

                                <div class="col-4 col-md-3 mb-3">
                                    <a data-bs-toggle="offcanvas" data-bs-target="#offcanvasCalculator"
                                        href="javascript:void(0)" aria-controls="offcanvasCalculator">
                                        <img class="img-fluid d-block mb-1"
                                            src="{{ asset('assets/img/icon/calendar-symbol.svg') }}" alt=""
                                            style="border-radius: 15px; margin:0 auto; @if ($cardinfo->color_link == 1) background:{{ $cardinfo->theme_color }} @else background:#A93998 @endif "
                                            width="75" height="75">
                                        <span>Mortgage Calculator</span>
                                    </a>
                                </div>

                                @if (!empty($cardinfo->contacts))
                                    @foreach ($cardinfo->contacts as $contact)
                                        @if ($contact)
                                            @if (isset($user->userPlan) && $user->userPlan->is_free == 1 && $contact->is_paid == 1)
                                            @else
                                                @php
                                                    if ($cardinfo->color_link == 1) {
                                                        $icon_color = $cardinfo->theme_color;
                                                    } else {
                                                        $icon_color = $contact->icon_color;
                                                    }
                                                    
                                                    //link,mail,mobile,number,text,username,file,address
                                                    
                                                @endphp

                                                @if ($contact->type == 'address')
                                                    <div class="col-4 col-md-3 mb-3">
                                                        <a class="text-decoration-none"
                                                            href="{{ 'https://www.google.com/maps?q=' . $contact->content }}"
                                                            title="{{ $contact->label }}" target="_blank">
                                                            <img class="img-fluid d-block mb-1"
                                                                src="{{ getIcon($contact->icon_image) }}"
                                                                alt="{{ $contact->label }}"
                                                                style="border-radius: 15px; margin:0 auto; background:{{ $icon_color }}"
                                                                width="75" height="75">
                                                            <span>{{ $contact->label }}</span>
                                                        </a>
                                                    </div>
                                                @elseif ($contact->type == 'username')
                                                    @php
                                                        $make_link = $contact->main_link . $contact->content;
                                                    @endphp

                                                    @if ($contact->icon_name == 'snapchat')
                                                        <div class="col-4 col-md-3 mb-3">
                                                            <a class="text-decoration-none"
                                                                href="{{ $contact->main_link }}add/{{ $contact->content }}"
                                                                title="{{ $contact->label }}" target="__blank">
                                                                <img class="img-fluid d-block mb-1"
                                                                    src="{{ getIcon($contact->icon_image) }}"
                                                                    alt="{{ $contact->label }}"
                                                                    style="border-radius: 15px; margin:0 auto; background:{{ $icon_color }}"
                                                                    width="75" height="75">
                                                                <span>{{ $contact->label }}</span>
                                                            </a>
                                                        </div>
                                                    @else
                                                        <div class="col-4 col-md-3 mb-3">
                                                            <a class="text-decoration-none"
                                                                href="{{ makeUrl($make_link) }}"
                                                                title="{{ $contact->label }}" target="__blank">
                                                                <img class="img-fluid d-block mb-1"
                                                                    src="{{ getIcon($contact->icon_image) }}"
                                                                    alt="{{ $contact->label }}"
                                                                    style="border-radius: 15px; margin:0 auto; background:{{ $icon_color }}"
                                                                    width="75" height="75">
                                                                <span>{{ $contact->label }}</span>
                                                            </a>
                                                        </div>
                                                    @endif
                                                @elseif ($contact->type == 'mail')
                                                    <div class="col-4 col-md-3 mb-3">
                                                        <a class="text-decoration-none"
                                                            href="mailto:{{ $contact->content }}"
                                                            title="{{ $contact->label }}">
                                                            <img class="img-fluid d-block mb-1"
                                                                src="{{ getIcon($contact->icon_image) }}"
                                                                alt="{{ $contact->label }}"
                                                                style="border-radius: 15px; margin:0 auto; background:{{ $icon_color }}"
                                                                width="75" height="75">
                                                            <span>{{ $contact->label }}</span>
                                                        </a>
                                                    </div>
                                                    @php
                                                        $email = $contact->content;
                                                    @endphp
                                                @elseif ($contact->type == 'mobile')
                                                    @if ($contact->icon_name == 'facetime')
                                                        <div class="col-4 col-md-3 mb-3">
                                                            <a class="text-decoration-none"
                                                                href="facetime:{{ $contact->content }}"
                                                                title="{{ $contact->label }}"
                                                                data="{{ $contact->content }}">
                                                                <img class="img-fluid d-block mb-1"
                                                                    src="{{ getIcon($contact->icon_image) }}"
                                                                    alt="{{ $contact->label }}"
                                                                    style="border-radius: 15px; margin:0 auto; background:{{ $icon_color }}"
                                                                    width="75" height="75">
                                                                <span>{{ $contact->label }}</span>
                                                            </a>
                                                        </div>
                                                    @else
                                                        <div class="col-4 col-md-3 mb-3">
                                                            <a class="text-decoration-none"
                                                                href="tel:{{ $contact->content }}"
                                                                title="{{ $contact->label }}">
                                                                <img class="img-fluid d-block mb-1"
                                                                    src="{{ getIcon($contact->icon_image) }}"
                                                                    alt="{{ $contact->label }}"
                                                                    style="border-radius: 15px; margin:0 auto; background:{{ $icon_color }}"
                                                                    width="75" height="75">
                                                                <span>{{ $contact->label }}</span>
                                                            </a>
                                                        </div>
                                                        @php
                                                            $phone_number = $contact->content;
                                                        @endphp
                                                    @endif
                                                @elseif ($contact->type == 'file')
                                                    <div class="col-4 col-md-3 mb-3">
                                                        <a class="text-decoration-none"
                                                            href="{{ $contact->content }}"
                                                            title="{{ $contact->label }}" target="__blank">
                                                            <img class="img-fluid d-block mb-1"
                                                                src="{{ getIcon($contact->icon_image) }}"
                                                                alt="{{ $contact->label }}"
                                                                style="border-radius: 15px; margin:0 auto; background:{{ $icon_color }}"
                                                                width="75" height="75">
                                                            <span>{{ $contact->label }}</span>
                                                        </a>
                                                    </div>
                                                @elseif ($contact->type == 'number')
                                                    <div class="col-4 col-md-3 mb-3">
                                                        @if ($contact->icon_name == 'wechat' || $contact->icon_name == 'zelle')
                                                            <a class="text-decoration-none copy_btn"
                                                                data-content="{{ $contact->content }}"
                                                                data-icon_name="{{ $contact->icon_name }}"
                                                                href="javascript:void(0)"
                                                                title="{{ $contact->label }}">
                                                                <img class="img-fluid d-block mb-1"
                                                                    src="{{ getIcon($contact->icon_image) }}"
                                                                    alt="{{ $contact->label }}"
                                                                    style="border-radius: 15px; margin:0 auto; background:{{ $icon_color }}"
                                                                    width="75" height="75">
                                                                <span>{{ $contact->label }}</span>
                                                            </a>
                                                        @elseif ($contact->icon == 'whatsapp')
                                                            @if ($android !== false || $ipad !== false || $iphone !== false)
                                                                <a class="text-decoration-none"
                                                                    href="https://api.whatsapp.com/send?phone={{ $contact->content }}"
                                                                    title="{{ $contact->label }}" target="__blank">
                                                                    <img class="img-fluid d-block mb-1"
                                                                        src="{{ getIcon($contact->icon_image) }}"
                                                                        alt="{{ $contact->label }}"
                                                                        style="border-radius: 15px; margin:0 auto; background:{{ $icon_color }}"
                                                                        width="75" height="75">
                                                                    <span>{{ $contact->label }}</span>
                                                                </a>
                                                            @else
                                                                <a class="text-decoration-none"
                                                                    href="https://web.whatsapp.com/send?phone={{ $contact->content }}"
                                                                    title="{{ $contact->label }}" target="__blank">
                                                                    <img class="img-fluid d-block mb-1"
                                                                        src="{{ getIcon($contact->icon_image) }}"
                                                                        alt="{{ $contact->label }}"
                                                                        style="border-radius: 15px; margin:0 auto; background:{{ $icon_color }}"
                                                                        width="75" height="75">
                                                                    <span>{{ $contact->label }}</span>
                                                                </a>
                                                            @endif
                                                        @else
                                                            <a class="text-decoration-none"
                                                                href="tel:{{ $contact->content }}"
                                                                title="{{ $contact->label }}">
                                                                <img class="img-fluid d-block mb-1"
                                                                    src="{{ getIcon($contact->icon_image) }}"
                                                                    alt="{{ $contact->label }}"
                                                                    style="border-radius: 15px; margin:0 auto; background:{{ $icon_color }}"
                                                                    width="75" height="75">
                                                                <span>{{ $contact->label }}</span>
                                                            </a>
                                                        @endif
                                                    </div>
                                                @elseif ($contact->type == 'text')
                                                    @if ($contact->icon_name == 'textSection')
                                                        <div class="col-12 col-md-12 mb-3">
                                                            <div class="text-box">
                                                                <h6>{{ $contact->label }}</h6>
                                                                <p>{!! $contact->content !!}</p>
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="col-4 col-md-3 mb-3">
                                                            <a class="text-decoration-none"
                                                                href="sms:{{ $contact->content }}"
                                                                title="{{ $contact->label }}" target="_blank">
                                                                <img class="img-fluid d-block mb-1"
                                                                    src="{{ getIcon($contact->icon_image) }}"
                                                                    alt="{{ $contact->label }}"
                                                                    style="border-radius: 15px; margin:0 auto; background:{{ $icon_color }}"
                                                                    width="75" height="75">
                                                                <span>{{ $contact->label }}</span>
                                                            </a>
                                                        </div>
                                                    @endif
                                                @elseif ($contact->type == 'link' && $contact->icon_name == 'embeddedvideo')
                                                    <div class="col-12 col-md-8 mb-3 ratio ratio-16x9 mx-auto">
                                                        <p>{{ $contact->label }}</p>
                                                        <iframe src="{{ $contact->content }}"
                                                            title="{{ $contact->label }}"
                                                            style="left:5%; width:90%;" frameborder="0"
                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                            allowfullscreen></iframe>
                                                    </div>
                                                @else
                                                    <div class="col-4 col-md-3 mb-3">
                                                        <a class="text-decoration-none"
                                                            href="{{ makeUrl($contact->content) }}"
                                                            title="{{ $contact->label }}" target="_blank">
                                                            <img class="img-fluid d-block mb-1"
                                                                src="{{ getIcon($contact->icon_image) }}"
                                                                alt="{{ $contact->label }}"
                                                                style="border-radius: 15px; margin:0 auto; background:{{ $icon_color }}"
                                                                width="75" height="75">
                                                            <span>{{ $contact->label }}</span>
                                                        </a>
                                                    </div>
                                                @endif
                                            @endif
                                        @endif
                                    @endforeach
                                @endif

                                <?php
                                if ($cardinfo->color_link == 1) {
                                    $icon_bg = $cardinfo->theme_color;
                                } else {
                                    $icon_bg = '#A93998';
                                }
                                ?>

                                @if (isset($user->user_disclaimer))
                                    @if ($user->disclaimer_view == '1')
                                        <div class="col-4 col-md-3 mb-3">
                                            <a data-bs-toggle="modal" data-bs-target="#disclaimerModal"
                                                href="javascript:void(0)" aria-controls="false">
                                                <img class="img-fluid d-block mb-1"
                                                    src="{{ asset('assets/img/icon/notes-note.svg') }}"
                                                    alt=""
                                                    style="border-radius: 15px; margin:0 auto; background:{{ $icon_bg }}"
                                                    width="70" height="70">
                                                <span>Disclaimer</span>
                                            </a>
                                        </div>
                                    @endif
                                @endif

                                @if ($user->housing_logo_view == '1')
                                    <div class="col-4 col-md-3 mb-3">
                                        <a href="https://nmlsconsumeraccess.org" target="_blank">
                                            <img class="img-fluid d-block mb-1"
                                                src="{{ asset('assets/img/house.png') }}" alt=""
                                                style="border-radius: 15px; margin:0 auto; padding:10px;  background:{{ $icon_bg }}"
                                                width="75" height="75">
                                            <span>Equal Housing Opportunity</span>
                                        </a>
                                    </div>
                                @endif
                                @if ($user->credit_authorization == '1')
                                    <div class="col-4 col-md-3 mb-3">
                                        <a data-bs-toggle="modal" data-bs-target="#craditAuthorization"
                                            href="javascript:void(0)" target="_blank">
                                            <img class="img-fluid d-block mb-1"
                                                src="{{ asset('assets/img/icon/craditauthorization.svg') }}"
                                                alt=""
                                                style="border-radius: 15px; margin:0 auto; padding:10px;  background:{{ $icon_bg }}"
                                                width="75" height="75">
                                            <span>Credit Authorization</span>
                                        </a>
                                    </div>
                                @endif
                                @if ($user->quick_application == '1')
                                    <div class="col-4 col-md-3 mb-3">
                                        <a data-bs-toggle="modal" data-bs-target="#quickApplication"
                                            href="javascript:void(0)" target="_blank">
                                            <img class="img-fluid d-block mb-1"
                                                src="{{ asset('assets/img/icon/rules.svg') }}" alt=""
                                                style="border-radius: 15px; margin:0 auto; padding:10px;  background:{{ $icon_bg }}"
                                                width="75" height="75">
                                            <span>Quick Applications</span>
                                        </a>
                                    </div>
                                @endif

                            </div>
                        </div>

                        <div class="copyright_article">
                            <p> @ {{ date('Y') }} <a
                                    href="{{ route('home') }}">{{ $settings->site_name }}</a>All rights reserved.
                            </p>
                        </div>
                        @if ($settings->site_disclaimer)
                            <div class="site_disclaimer" style="padding: 8px; margin: 8px; border: 1px solid #222;">
                                {!! $settings->site_disclaimer !!}
                            </div>
                        @endif

                    </div>
                </div>
                <!-- offcanvas contact button -->
                <div class="offcanvas_btn">
                    <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasContact" role="button"
                        aria-controls="offcanvasContact">
                        {{ __('Connect with Me') }}
                    </a>
                </div>
                <!-- offcanvas contact button -->
            </div>
        </div>
    @endif

    <!-- Share modal -->
    <div class="share_modal modal_one">
        <div class="modal fade" id="shareModal" data-bs-backdrop="static" data-bs-keyboard="false"
            aria-labelledby="staticBackdropLabel" aria-hidden="true" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-bs-dismiss="modal" type="button" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal_body">
                        <div class="text-center mb-5">
                            <h5>{{ __('Send Card') }}</h5>
                            <div class="py-2 mb-4 qrcode_share">
                                <div class="qrcode-wrapper mb-5">
                                    <div class="qr-background">
                                        <svg viewBox="0 0 213 213" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M198.487 1.30047C198.767 1.30047 199.044 1.30933 199.32 1.32677C199.671 1.34901 199.973 1.07647 199.995 0.718043C200.016 0.359617 199.749 0.0510287 199.398 0.0287923C199.097 0.00968878 198.793 0 198.487 0H198.162C197.811 0 197.526 0.291121 197.526 0.650236C197.526 1.00935 197.811 1.30047 198.162 1.30047H198.487ZM201.322 0.931063C201.235 1.27895 201.441 1.6332 201.781 1.7223C202.323 1.86386 202.85 2.03952 203.363 2.24689C203.69 2.37924 204.06 2.21591 204.189 1.88207C204.319 1.54824 204.159 1.17031 203.832 1.03796C203.27 0.810483 202.691 0.617789 202.097 0.462492C201.757 0.37339 201.41 0.583177 201.322 0.931063ZM205.387 2.5066C205.198 2.8096 205.285 3.21149 205.582 3.40426C206.051 3.70896 206.5 4.04302 206.927 4.40391C207.197 4.63303 207.599 4.5946 207.823 4.31807C208.048 4.04154 208.01 3.63163 207.739 3.40251C207.272 3.0071 206.78 2.64101 206.266 2.30703C205.969 2.11426 205.575 2.20361 205.387 2.5066ZM208.774 5.28913C208.503 5.51813 208.465 5.92802 208.689 6.20465C209.043 6.64037 209.369 7.09903 209.668 7.57811C209.856 7.88118 210.25 7.9707 210.547 7.77805C210.843 7.5854 210.931 7.18354 210.742 6.88047C210.416 6.35537 210.057 5.85275 209.67 5.37537C209.446 5.09874 209.045 5.06013 208.774 5.28913ZM211.158 9.00082C210.831 9.13308 210.671 9.51095 210.8 9.84483C211.003 10.368 211.175 10.9071 211.314 11.4599C211.401 11.8078 211.748 12.0176 212.088 11.9286C212.429 11.8396 212.635 11.4854 212.547 11.1375C212.396 10.5311 212.207 9.93971 211.984 9.3659C211.855 9.03202 211.485 8.86857 211.158 9.00082ZM212.297 13.2845C211.946 13.3067 211.679 13.6153 211.701 13.9737C211.718 14.2549 211.726 14.5384 211.726 14.8241C211.726 15.1832 212.012 15.4744 212.363 15.4744C212.715 15.4744 213 15.1832 213 14.8241C213 14.5116 212.991 14.2012 212.972 13.8933C212.95 13.5348 212.648 13.2623 212.297 13.2845Z">
                                            </path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M14.5131 1.30047C14.2334 1.30047 13.9557 1.30933 13.6804 1.32677C13.3294 1.34901 13.0272 1.07647 13.0054 0.718043C12.9836 0.359617 13.2505 0.0510287 13.6015 0.0287923C13.9031 0.00968878 14.207 0 14.5131 0H14.8376C15.1893 0 15.4744 0.291121 15.4744 0.650236C15.4744 1.00935 15.1893 1.30047 14.8376 1.30047H14.5131ZM11.6776 0.931063C11.7649 1.27895 11.5594 1.6332 11.2187 1.7223C10.6775 1.86386 10.1496 2.03952 9.63731 2.24689C9.31039 2.37924 8.94029 2.21591 8.81068 1.88207C8.68107 1.54824 8.84102 1.17031 9.16795 1.03796C9.72985 0.810483 10.309 0.617789 10.9028 0.462492C11.2434 0.37339 11.5904 0.583177 11.6776 0.931063ZM7.61344 2.5066C7.80222 2.8096 7.71471 3.21149 7.41799 3.40426C6.94897 3.70896 6.49994 4.04302 6.07339 4.40391C5.80258 4.63303 5.40116 4.5946 5.17679 4.31807C4.95241 4.04154 4.99005 3.63163 5.26086 3.40251C5.72821 3.0071 6.22028 2.64101 6.73437 2.30703C7.03109 2.11426 7.42466 2.20361 7.61344 2.5066ZM4.22625 5.28913C4.49715 5.51813 4.53496 5.92802 4.3107 6.20465C3.95748 6.64037 3.63052 7.09903 3.33229 7.57811C3.14363 7.88118 2.7501 7.9707 2.4533 7.77805C2.15651 7.5854 2.06885 7.18354 2.25751 6.88047C2.58438 6.35537 2.94268 5.85275 3.32968 5.37537C3.55394 5.09874 3.95535 5.06013 4.22625 5.28913ZM1.84213 9.00082C2.16909 9.13308 2.32916 9.51095 2.19965 9.84483C1.99672 10.368 1.82483 10.9071 1.68631 11.4599C1.59912 11.8078 1.25225 12.0176 0.911548 11.9286C0.570846 11.8396 0.365329 11.4854 0.452514 11.1375C0.604468 10.5311 0.793016 9.93971 1.0156 9.3659C1.14512 9.03202 1.51517 8.86857 1.84213 9.00082ZM0.703119 13.2845C1.05413 13.3067 1.32104 13.6153 1.29928 13.9737C1.28221 14.2549 1.27355 14.5384 1.27355 14.8241C1.27355 15.1832 0.988454 15.4744 0.636774 15.4744C0.285093 15.4744 0 15.1832 0 14.8241C0 14.5116 0.00947945 14.2012 0.0281704 13.8933C0.0499273 13.5348 0.352112 13.2623 0.703119 13.2845Z">
                                            </path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M198.487 211.7C198.767 211.7 199.044 211.691 199.32 211.673C199.671 211.651 199.973 211.924 199.995 212.282C200.016 212.64 199.749 212.949 199.398 212.971C199.097 212.99 198.793 213 198.487 213H198.162C197.811 213 197.526 212.709 197.526 212.35C197.526 211.991 197.811 211.7 198.162 211.7H198.487ZM201.322 212.069C201.235 211.721 201.441 211.367 201.781 211.278C202.323 211.136 202.85 210.96 203.363 210.753C203.69 210.621 204.06 210.784 204.189 211.118C204.319 211.452 204.159 211.83 203.832 211.962C203.27 212.19 202.691 212.382 202.097 212.538C201.757 212.627 201.41 212.417 201.322 212.069ZM205.387 210.493C205.198 210.19 205.285 209.789 205.582 209.596C206.051 209.291 206.5 208.957 206.927 208.596C207.197 208.367 207.599 208.405 207.823 208.682C208.048 208.958 208.01 209.368 207.739 209.597C207.272 209.993 206.78 210.359 206.266 210.693C205.969 210.886 205.575 210.796 205.387 210.493ZM208.774 207.711C208.503 207.482 208.465 207.072 208.689 206.795C209.043 206.36 209.369 205.901 209.668 205.422C209.856 205.119 210.25 205.029 210.547 205.222C210.843 205.415 210.931 205.816 210.742 206.12C210.416 206.645 210.057 207.147 209.67 207.625C209.446 207.901 209.045 207.94 208.774 207.711ZM211.158 203.999C210.831 203.867 210.671 203.489 210.8 203.155C211.003 202.632 211.175 202.093 211.314 201.54C211.401 201.192 211.748 200.982 212.088 201.071C212.429 201.16 212.635 201.515 212.547 201.863C212.396 202.469 212.207 203.06 211.984 203.634C211.855 203.968 211.485 204.131 211.158 203.999ZM212.297 199.716C211.946 199.693 211.679 199.385 211.701 199.026C211.718 198.745 211.726 198.462 211.726 198.176C211.726 197.817 212.012 197.526 212.363 197.526C212.715 197.526 213 197.817 213 198.176C213 198.488 212.991 198.799 212.972 199.107C212.95 199.465 212.648 199.738 212.297 199.716Z">
                                            </path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M14.5131 211.7C14.2334 211.7 13.9557 211.691 13.6804 211.673C13.3294 211.651 13.0272 211.924 13.0054 212.282C12.9836 212.64 13.2505 212.949 13.6015 212.971C13.9031 212.99 14.207 213 14.5131 213H14.8376C15.1893 213 15.4744 212.709 15.4744 212.35C15.4744 211.991 15.1893 211.7 14.8376 211.7H14.5131ZM11.6776 212.069C11.7649 211.721 11.5594 211.367 11.2187 211.278C10.6775 211.136 10.1496 210.96 9.63731 210.753C9.31039 210.621 8.94029 210.784 8.81068 211.118C8.68107 211.452 8.84102 211.83 9.16795 211.962C9.72985 212.19 10.309 212.382 10.9028 212.538C11.2434 212.627 11.5904 212.417 11.6776 212.069ZM7.61344 210.493C7.80222 210.19 7.71471 209.789 7.41799 209.596C6.94897 209.291 6.49994 208.957 6.07339 208.596C5.80258 208.367 5.40116 208.405 5.17679 208.682C4.95241 208.958 4.99005 209.368 5.26086 209.597C5.72821 209.993 6.22028 210.359 6.73437 210.693C7.03109 210.886 7.42466 210.796 7.61344 210.493ZM4.22625 207.711C4.49715 207.482 4.53496 207.072 4.3107 206.795C3.95748 206.36 3.63052 205.901 3.33229 205.422C3.14363 205.119 2.7501 205.029 2.4533 205.222C2.15651 205.415 2.06885 205.816 2.25751 206.12C2.58438 206.645 2.94268 207.147 3.32968 207.625C3.55394 207.901 3.95535 207.94 4.22625 207.711ZM1.84213 203.999C2.16909 203.867 2.32916 203.489 2.19965 203.155C1.99672 202.632 1.82483 202.093 1.68631 201.54C1.59912 201.192 1.25225 200.982 0.911548 201.071C0.570846 201.16 0.365329 201.515 0.452514 201.863C0.604468 202.469 0.793016 203.06 1.0156 203.634C1.14512 203.968 1.51517 204.131 1.84213 203.999ZM0.703119 199.716C1.05413 199.693 1.32104 199.385 1.29928 199.026C1.28221 198.745 1.27355 198.462 1.27355 198.176C1.27355 197.817 0.988454 197.526 0.636774 197.526C0.285093 197.526 0 197.817 0 198.176C0 198.488 0.00947945 198.799 0.0281704 199.107C0.0499273 199.465 0.352112 199.738 0.703119 199.716Z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="qr-code">
                                        {!! QrCode::size(200)->color(74, 74, 74, 80)->generate(url($cardurl)) !!}
                                    </div>
                                </div>

                                <div class="mt-4">

                                    <div class="row g-3">
                                        <div class="col-6 col-sm-4">
                                            <a class="download_btn w-100 btn btn-primary mx-1"
                                                href="{{ route('qr', $cardinfo->card_id) }}"
                                                title="{{ __('Download QR code') }}">
                                                <i class="fa fa-download"></i>{{ __('Download QR code') }}
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-4">
                                            <a class="btn btn-primary w-100 mx-1" data-bs-toggle="modal"
                                                data-bs-target="#SocialModal" href="#"
                                                title="{{ __('Social Media') }}">
                                                <img class="img-fluid"
                                                    src="{{ asset('assets/img/icons/connections.svg') }}"
                                                    alt="">
                                                {{ __('Social Media') }}
                                            </a>
                                        </div>

                                        @if ($phone_number != null)
                                            <div class="col-6 col-sm-4 mb-0 mb-sm-3">
                                                <a class="download_btn w-100 btn btn-primary mx-1"
                                                    href="sms:{{ $phone_number }}?body=Hi there! Please click this link to check out my professional business card {{ route('home') }}/{{ $user->username }}"
                                                    title="{{ __('Text') }}">
                                                    <i class="fa fa-download"></i>{{ __('Text') }}
                                                </a>
                                            </div>
                                        @endif

                                        @if ($email != null)
                                            <div class="col-6 col-sm-4 m-sm-auto">
                                                <a class="btn btn-primary w-100 mx-1"
                                                    href="mailto:{{ $email }}?subject=&body=Hi there! Please click this link to check out my professional business card {{ route('home') }}/{{ $user->username }}"
                                                    title="{{ __('Email') }}">
                                                    <img class="img-fluid"
                                                        src="{{ asset('assets/img/icons/connections.svg') }}"
                                                        alt="">
                                                    {{ __('Email') }}
                                                </a>
                                            </div>
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
    <!-- Disclaimer modal -->
    <div class="disclaimer_modal modal_one">
        <div class="modal fade" id="disclaimerModal" data-bs-backdrop="static" data-bs-keyboard="false"
            aria-labelledby="staticBackdropLabel" aria-hidden="true" tabindex="-1">
            <div class="modal-dialog modal-md modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Disclaimer</h5>
                        <button class="close" data-bs-dismiss="modal" type="button" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {!! $user->user_disclaimer ?? '' !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Disclaimer modal -->
    <div class="nmls_modal modal_one">
        <div class="modal fade" id="nmlsModal" data-bs-backdrop="static" data-bs-keyboard="false"
            aria-labelledby="staticBackdropLabel" aria-hidden="true" tabindex="-1">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">User Nmls ID</h5>
                        <button class="close" data-bs-dismiss="modal" type="button" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {!! $user->nmls_id ?? '' !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Disclaimer modal -->
    <div class="nmls_modal modal_one">
        <div class="modal fade" id="equalHouse" data-bs-backdrop="static" data-bs-keyboard="false"
            aria-labelledby="staticBackdropLabel" aria-hidden="true" tabindex="-1">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">User Equal House</h5>
                        <button class="close" data-bs-dismiss="modal" type="button" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Social Modal modal -->
    <div class="share_modal email_modal">
        <div class="modal animate__animated animate__fadeIn" id="SocialModal" data-bs-backdrop="static"
            aria-labelledby="exampleModalLabel" aria-hidden="true" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-bs-dismiss="modal" type="button" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal_body">
                        <h5 class="mb-5 text-center">{{ __('Share Your Card') }}</h5>
                        <div id="social-links">
                            <div class="row">
                                <div class="col-12 col-sm-12">
                                    <ul class="text-center">
                                        <li class="list-inline-item">
                                            <a class="social_share"
                                                data-url="https://www.facebook.com/sharer/sharer.php?u={{ Request::url() }}"
                                                href="javascript:void(0)" title="{{ __('Share on Facebook') }}">
                                                <img class="img-fluid"
                                                    src="{{ asset('assets/img/icons/facebook.svg') }}"
                                                    alt="{{ __('Share on facebook') }}">
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social_share"
                                                data-url="https://twitter.com/intent/tweet?text=Hello%21+This+is+my+vCard.&amp;url={{ Request::url() }}
                                            "
                                                href="javascript:void(0)" title="{{ __('Share on Twitter') }}">
                                                <img class="img-fluid"
                                                    src="{{ asset('assets/img/icons/twitter.svg') }}"
                                                    alt="">
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social_share"
                                                data-url="https://telegram.me/share/url?url={{ Request::url() }}&text="
                                                href="javascript:void(0)" title="{{ __('Share on Telegram') }}">
                                                <img class="img-fluid"
                                                    src="{{ asset('assets/img/icons/telegram.svg') }}"
                                                    alt="">
                                            </a>
                                        </li>

                                        @if ($android !== false || $ipad !== false || $iphone !== false)
                                            <li class="list-inline-item">
                                                <a class="whatsapp" data-action="share/whatsapp/share"
                                                    href="whatsapp://send?text={{ Request::url() }}"
                                                    title="{{ __('Share on Whatsapp') }}">
                                                    <img class="img-fluid"
                                                        src="{{ asset('assets/img/icons/whatsapp.svg') }}"
                                                        alt="">
                                                </a>
                                            </li>
                                        @else
                                            <li class="list-inline-item">
                                                <a class="whatsapp" data-action="share/whatsapp/share"
                                                    href="https://web.whatsapp.com/send?text={{ Request::url() }}"
                                                    title="{{ __('Share on Whatsapp') }}" target="__blank">
                                                    <img class="img-fluid"
                                                        src="{{ asset('assets/img/icons/whatsapp.svg') }}"
                                                        alt="">
                                                </a>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Offcanvas form -->
    <div class="contact_modal offcanvas offcanvas-bottom" id="offcanvasContact"
        aria-labelledby="offcanvasContactLabel" tabindex="-1">
        <div class="offcanvas-header">
            <button id="offcanvas_close" data-bs-dismiss="offcanvas" type="button" aria-label="Close">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24"
                        fill="none" stroke="#000000" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="bevel">
                        <path d="M12 5v13M5 12l7 7 7-7"></path>
                    </svg>
                </span>
            </button>
        </div>
        <div class="offcanvas-body">

            <div class="contact_body">
                <form id="connect-form" action="{{ route('getConnect') }}" method="post">
                    @csrf
                    <input id="card_id" name="card_id" type="hidden" value="{{ $cardinfo->id }}" />
                    <div class="heading mb-4 text-center">
                        @if ($cardinfo->connection_title)
                            <h4>{{ $cardinfo->connection_title }}</h4>
                        @else
                            <h4>{{ __('Share your info back with') }} {{ $cardinfo->title }}</h4>
                        @endif

                    </div>
                    <div class="mb-3">
                        <input class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                            type="text" value="{{ old('name') }}" tabindex="{{ $tabindex++ }}"
                            placeholder="{{ __('Name') }}" required>
                        @if ($errors->has('name'))
                            <span class="help-block text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <input class="form-control @error('email') is-invalid @enderror" id="email"
                            name="email" type="email" value="{{ old('email') }}"
                            tabindex="{{ $tabindex++ }}" placeholder="{{ __('Email') }}" required>
                        @if ($errors->has('email'))
                            <span class="help-block text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <input class="form-control @error('phone') is-invalid @enderror" id="phone"
                            name="phone" type="tel" value="{{ old('phone') }}"
                            tabindex="{{ $tabindex++ }}" placeholder="{{ __('Phone Number') }}" required>
                        @if ($errors->has('phone'))
                            <span class="help-block text-danger">{{ $errors->first('phone') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <input class="form-control @error('title') is-invalid @enderror" id="job_title"
                            name="title" type="text" value="{{ old('title') }}"
                            tabindex="{{ $tabindex++ }}" placeholder="{{ __('Job Title (Optional)') }}">
                        @if ($errors->has('title'))
                            <span class="help-block text-danger">{{ $errors->first('title') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <input class="form-control @error('company_name') is-invalid @enderror" id="company_name"
                            name="company_name" type="text" value="{{ old('company_name') }}"
                            tabindex="{{ $tabindex++ }}" placeholder="{{ __('Company (Optional)') }}">
                        @if ($errors->has('company_name'))
                            <span class="help-block text-danger">{{ $errors->first('company_name') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message"
                            value="{{ old('message') }}" tabindex="{{ $tabindex++ }}" style="height:80px;" cols="30"
                            rows="5" placeholder="{{ __('Questions, Comments or Important Details') }}" required></textarea>
                        @if ($errors->has('message'))
                            <span class="help-block text-danger">{{ $errors->first('message') }}</span>
                        @endif
                    </div>
                    <button class="btn btn-primary w-100" type="submit">
                        <i class="loading-spinner contact-spinner fa-lg fas fa-spinner fa-spin"></i>
                        <span class="btn-txt">{{ __('Connect') }}</span>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class="offcanvas offcanvas-bottom" id="offcanvasCalculator" aria-labelledby="offcanvasCalculatorLabel"
        tabindex="-1">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasCalculator"></h5>
            <button class="btn-close text-reset" data-bs-dismiss="offcanvas" type="button"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="container">
                <div class="d-flex justify-content-start align-items-center">
                    <img class="" src="{{ getProfile($cardinfo->profile) }}" alt="image"
                        style="width: 100px ;height:100px;border-radius: 5%;" /> &emsp;
                    <span class="ml-3">
                        <h2 class="fw-bolder">Welcome to {{ $cardinfo->title }} {{ $cardinfo->title2 }}'s Mortgage.
                        </h2>
                    </span>
                </div>
            </div>
            <hr>
            <iframe
                src="https://www.mortgagecalculator.org/webmasters/?downpayment=50000&homevalue=300000&loanamount=250000&interestrate=4&loanterm=30&propertytax=2400&pmi=1&homeinsurance=1000&monthlyhoa=0"
                style="width: 100%; height: 1200px; border: 0;">
            </iframe>
            <hr>
            <div class="container">
                <form action="{{ route('user.morgaged.email') }}" method="post">
                    <div class="row">

                        @csrf
                        <input id="" name="reciver" type="hidden" value="{{ $user->email }}">
                        <div class="mb-3 col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 ">
                            <input class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" type="text" value="{{ old('name') }}"
                                placeholder="{{ __('Name') }}" required>

                            @if ($errors->has('name'))
                                <span class=" help-block text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3">
                            <input class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" type="email" value="{{ old('email') }}"
                                placeholder="{{ __('Email') }}" required>

                            @if ($errors->has('email'))
                                <span class=" help-block text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3">
                            <input class="form-control @error('phone') is-invalid @enderror" id="phone"
                                name="phone" type="tel" value="{{ old('phone') }}"
                                placeholder="{{ __('Phone Number') }}" required>

                            @if ($errors->has('phone'))
                                <span class=" help-block text-danger">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3">
                            <input class="form-control @error('company') is-invalid @enderror" id="company"
                                name="company" type="text" value="{{ old('company') }}"
                                placeholder="{{ __('Company') }}" required>

                            @if ($errors->has('company'))
                                <span class=" help-block text-danger">{{ $errors->first('company') }}</span>
                            @endif
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3">
                            <input class="form-control @error('job_title') is-invalid @enderror" id="job_title"
                                name="job_title" type="text" value="{{ old('job_title') }}"
                                placeholder="{{ __('Job Title') }}" required>

                            @if ($errors->has('job_title'))
                                <span class=" help-block text-danger">{{ $errors->first('job_title') }}</span>
                            @endif
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3">
                            <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" type="text"
                                placeholder="{{ __('Message') }}" required>{{ old('message') }}</textarea>
                            @if ($errors->has('message'))
                                <span class=" help-block text-danger">{{ $errors->first('message') }}</span>
                            @endif
                        </div>

                        <div class="text-center">

                            <button class="btn btn-primary w-25" type="submit">
                                <i class="loading-spinner contact-spinner fa-lg fas fa-spinner fa-spin"></i>
                                <span class="btn-txt">{{ __('Send Message') }}</span>
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- Credit Report Authorization Form -->
    <div class="authorization_modal modal fade" id="craditAuthorization" aria-labelledby="craditAuthorizationLabel"
        aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="craditAuthorizationLabel">
                        Credit Report Authorization Form
                    </h1>
                    <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('credit-report') }}" method="post">
                        @csrf
                        <input name="card_id" type="hidden" value="{{ $cardinfo->id }}" />
                        <div class="row">
                            <div class="col-12 mb-4">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <label class="form-label" for="">By my signature below I,</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <input class="form-control" name="name" type="text"
                                            value="@if (Auth::user() && $user->id != Auth::id()) {{ Auth::user()->name }} @endif"
                                            autocomplete="off" required>
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="form-label" for="">Authorize
                                            {{ $user->name }}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <p>
                                    This authorization is valid for purposes of verifiying infomation given pursuant to
                                    employment,leasing, rental, business negotiations, or any other lawful purpose
                                    covered under the Fair Credit Reporting Act (FCRA)
                                </p>
                                <p>
                                    The Background Check may contain information available in the Public Domain but may
                                    not include interviews with persons other than previous employers their agents.
                                </p>
                                <p>
                                    By my signature below, I hereby authrize all corporatinos, former employres, credit
                                    agencies, educational institutions, law enforcement agencies, city, state, country
                                    and federal courts and agencies, military services and personas to release all
                                    information they may have about me including criminal and driving history. This
                                    authorization shall be valid in original or copy form
                                </p>
                            </div>
                            <div class="col-12 mb-4">
                                <div class="input-group">
                                    <label class="form-label input-group-text" for="applicant_name">Applicant's
                                        Name:</label>
                                    <input class="form-control" id="applicant_name" name="applicant_name"
                                        type="text" required />
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="input-group">
                                    <label class="form-label input-group-text" for="social_security_number">Social
                                        Security
                                        Number:</label>
                                    <input class="form-control" id="social_security_number"
                                        name="social_security_number" type="text" required>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="input-group">
                                    <label class="form-label input-group-text" for="date_of_birth">Date of
                                        Birth:</label>
                                    <input class="form-control datepicker" id="date_of_birth" name="date_of_birth"
                                        type="text" required>
                                </div>
                            </div>
                            <div class="col-12 mb-4">
                                <h4>Provide Address for the last 7 Years</h4>
                            </div>
                            <div class="col-lg-8 mb-4">
                                <div class="input-group">
                                    <label class="form-label input-group-text" for="current_street">Current Street
                                        Addresss:</label>
                                    <input class="form-control" id="current_street" name="current_street"
                                        type="text" required />
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <div class="input-group">
                                    <label class="form-label input-group-text" for="current_city">City:</label>
                                    <input class="form-control" id="current_city" name="current_city" type="text"
                                        required />
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="input-group">
                                    <label class="form-label input-group-text" for="current_state">State:</label>
                                    <input class="form-control" id="current_state" name="current_state"
                                        type="text" required />
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="input-group">
                                    <label class="form-label input-group-text" for="current_date">Move In
                                        Date:</label>
                                    <input class="form-control datepicker" id="current_date" name="current_date"
                                        type="text" required />
                                </div>
                            </div>
                            <div class="col-lg-8 mb-4">
                                <div class="input-group">
                                    <label class="form-label input-group-text" for="prior_address">Prior Street
                                        Address:</label>
                                    <input class="form-control" id="prior_address" name="prior_address"
                                        type="text" required />
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <div class="input-group">
                                    <label class="form-label input-group-text" for="prior_city">City:</label>
                                    <input class="form-control" id="prior_city" name="prior_city" type="text"
                                        required />
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <div class="input-group">
                                    <label class="form-label input-group-text" for="prior_state">State:</label>
                                    <input class="form-control" id="prior_state" name="prior_state" type="text"
                                        required />
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <div class="input-group">
                                    <label class="form-label input-group-text" for="prior_start_date">Move In
                                        Date:</label>
                                    <input class="form-control datepicker" id="prior_start_date"
                                        name="prior_start_date" type="text" required />
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <div class="input-group">
                                    <label class="form-label input-group-text" for="prior_end_date">Move Out
                                        Date:</label>
                                    <input class="form-control datepicker" id="prior_end_date" name="prior_end_date"
                                        type="text" required />
                                </div>
                            </div>
                            <div class="col-lg-8 mb-4">
                                <div class="input-group">
                                    <label class="form-label input-group-text" for="license">Driver's
                                        License#</label>
                                    <input class="form-control " id="license" name="license" type="text"
                                        required />
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <div class="input-group">
                                    <label class="form-label input-group-text" for="license_state">State</label>
                                    <input class="form-control" id="license_state" name="license_state"
                                        type="text" required />
                                </div>
                            </div>
                            <div class="col-lg-8 mb-4">
                                <div class="input-group">
                                    <label class="form-label input-group-text" for="signature">Signature</label>
                                    <input class="form-control" id="signature" name="signature" type="text"
                                        required />
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <div class="input-group">
                                    <label class="form-label input-group-text" for="signature_date">Date</label>
                                    <input class="form-control datepicker" id="signature_date" name="signature_date"
                                        type="text" value="{{ date('m/d/Y') }}" required />
                                </div>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Quick from  --}}

    <div class="authorization_modal modal fade custome_modal " id="quickApplication"
        aria-labelledby="quickApplicationLabel" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="loadApplicationModalLabel">
                        Your Loan Application
                    </h1>
                    <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('quick-report') }}" method="post">
                        @csrf
                        <input name="card_id" type="hidden" value="{{ $cardinfo->id }}" />

                        <div class="row">
                            <div class="col-12 mb-4">
                                <div class="mb-0">
                                    <label class="form-label" for="">Purpose of Mortgage or Loan</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input qa_purpose" id="purpose_id" name="purpose"
                                        type="radio" value="Purchase" checked>
                                    <label class="form-check-label" for="purpose_id">
                                        Purchase
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input qa_purpose" id="refinance_id" name="purpose"
                                        type="radio" value="Refinance">
                                    <label class="form-check-label" for="refinance_id">
                                        Refinance
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 mb-4">
                                <div class="form-group">
                                    <label class="form-label" id="price_lbl" for="price">Purchase Price</label>
                                    <input class="form-control" id="price" name="price" type="number"
                                        placeholder="Purchase Price">
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4 purchase_field">
                                <div class="form-group">
                                    <label class="form-label down_amount_lbl" for="down_amount">Down Payment</label>
                                    <input class="form-control down_amount_input" name="down_amount" type="number"
                                        placeholder="Down Payment">
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4 refinance_field" style="display:none;">
                                <div class="form-group">
                                    <label class="form-label" for="estimated_value">Estimated Value</label>
                                    <input class="form-control" name="estimated_value" type="number"
                                        placeholder="Estimated Value">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 mb-4">
                                <div class="form-group">
                                    <label class="form-label d-block" for="amount">Type of Property</label>
                                    <div class="form-check">
                                        <input class="form-check-input" id="property_1" name="property_type"
                                            type="radio" value="Single Family House" checked>
                                        <label class="form-check-label" for="property_1">Single Family House</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="property_2" name="property_type"
                                            type="radio" value="2+ Unit House">
                                        <label class="form-check-label" for="property_2">2+ Unit House</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="property_3" name="property_type"
                                            type="radio" value="Conodo / Co-Op">
                                        <label class="form-check-label" for="property_3">Conodo / Co-Op</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 mb-4">
                                <div class="form-group">
                                    <label class="form-label" for="location">Property Location</label>
                                    <input class="form-control" name="location" type="text"
                                        placeholder="location" required>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-4 refinance_field" style="display:none;">
                                <div class="form-group">
                                    <label class="form-label" for="company">Current Mortgage Company</label>
                                    <input class="form-control" name="company" type="text"
                                        placeholder="Mortgage Company">
                                </div>
                            </div>

                            <div class="col-lg-12 mb-4 purchase_field">
                                <div class="form-group">
                                    <label class="form-label" for="amount">Would you like a Referral to a Real
                                        Estate Agent?</label>
                                    <div class="form-check">
                                        <input class="form-check-input" id="agent_1" name="agent" type="radio"
                                            value="1" checked>
                                        <label class="form-check-label" for="agent_1">Yes</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="agent_2" name="agent" type="radio"
                                            value="0">
                                        <label class="form-check-label" for="agent_2"> No</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 mb-4">
                                <div class="form-group">
                                    <label class="form-label" for="occupation">Occupation</label>
                                    <input class="form-control" name="occupation" type="text"
                                        placeholder="Occupation" required>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-4">
                                <div class="form-group">
                                    <label class="form-label" for="current_employer">How long have your been employed
                                        by your current emmployer?</label>
                                    <input class="form-control" name="current_employer" type="text"
                                        placeholder="ex: 90 Days" required>
                                </div>
                            </div>

                            <div class="col-lg-6 mb-4">
                                <div class="form-group">
                                    <label class="form-label" for="annual_income">Annual Income</label>
                                    <input class="form-control" name="annual_income" type="number"
                                        placeholder="Annual Income" required>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="form-group">
                                    <label class="form-label" for="credit_score">Credit Score</label>
                                    <input class="form-control" name="credit_score" type="number"
                                        placeholder="Credit Score" required>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="form-group">
                                    <label class="form-label" for="contact_name">Name</label>
                                    <input class="form-control" id="contact_name" name="contact_name" type="text"
                                        required />
                                </div>
                            </div>

                            <div class="col-md-4 mb-4">
                                <div class="form-group">
                                    <label class="form-label" for="contact_email">Email</label>
                                    <input class="form-control" id="contact_email" name="contact_email"
                                        type="email" required />
                                </div>
                            </div>

                            <div class="col-md-4 mb-4">
                                <div class="form-group">
                                    <label class="form-label" for="contact_phone">Phone</label>
                                    <input class="form-control" id="contact_phone" name="contact_phone"
                                        type="text" required />
                                </div>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('assets/js/toastr.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <script>
        AOS.init();
        $('.social_share').click(function() {
            var url = $(this).data('url');
            window.open(url, '', 'window settings');
        });

        $(document).on('submit', "#connect-form", function(e) {
            e.preventDefault();
            var form = $("#connect-form");
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
                    $('.contact-spinner').toggleClass('active');
                    $(this).find('.contact-spinner').prop('disabled', true);
                    $(".btn-txt").text("Processing ...");
                },
                success: function(response) {
                    if (response.status == 1) {
                        $('#connect-form')[0].reset();
                        // $('.contact_modal').addClass('d-none');
                        toastr.success(response.msg);
                        $('.contact-spinner').removeClass('active');
                        $('.contact-spinner').attr("disabled", false);
                        $(".btn-txt").text("Connect");
                        closeMenu();
                    } else {
                        toastr.error(response.msg);
                    }
                },
                error: function(jqXHR, exception) {
                    toastr.error('Something wrong');
                },
                complete: function(response) {
                    $("body").css("cursor", "default");
                    $('.contact-spinner').removeClass('active');
                    $('.contact-spinner').attr("disabled", false);
                    $(".btn-txt").text("Connect");
                }
            });
        });

        function closeMenu() {
            $('#offcanvas_close').click()
        }
        toastr.options = {
            "positionClass": "toast-top-center",
        };

        $(document).on('click', '.copy_btn', function(e) {
            e.preventDefault();

            var content = $(this).data('content');
            var icon_name = $(this).data('icon_name');
            var textarea = document.createElement("textarea");
            textarea.textContent = content;
            textarea.style.position = "fixed";
            document.body.appendChild(textarea);
            textarea.select();
            document.execCommand("copy");
            document.body.removeChild(textarea);
            if (icon_name == 'zelle') {
                toastr.success("Zelle Phone Number copied!", 'Success', {
                    // closeButton: true,
                    // progressBar: true,
                });
            }

            if (icon_name == 'wechat') {
                toastr.success("WeChat ID copied!", 'Success', {
                    // closeButton: true,
                    // progressBar: true,
                });
            }


        });

        // $(document).on('click', '#calculator_btn', function(e) {
        //     var table =$($("table").get(0)).html();;
        //      console.log(table);
        // });
    </script>
    {!! Toastr::message() !!}

    @if ($cardinfo->theme_color)
        <script>
            function hexToRGBA(hex, opacity) {
                return 'rgba(' + (hex = hex.replace('#', '')).match(new RegExp('(.{' + hex.length / 3 + '})', 'g')).map(
                    function(l) {
                        return parseInt(hex.length % 2 ? l + l : l, 16)
                    }).concat(isFinite(opacity) ? opacity : 1).join(',') + ')';
            }
            var bg = hexToRGBA('{{ $cardinfo->theme_color }}', 0.1);
            $('.card_view_wrapper').css('background', bg);
        </script>
    @endif

    <script>
        $(function() {
            $('.datepicker').datepicker({
                dateFormat: 'dd-mm-yy',
                changeMonth: true,
                changeYear: true,
                numberOfMonths: 1,
                onSelect: function(selectedDate) {
                    // we can write code here
                }
            });
        });
    </script>

    <script>
        //Quick from
        // var purpose = $('input[name="purpose"]:checked').val();
    </script>

    <script>
        $(function() {
            $('.qa_purpose').change(function() {
                var purpose = $('input[name="purpose"]:checked').val();
                if (purpose == 'Purchase') {
                    $('#price').attr('placeholder', 'Purchase price');
                    $('#price_lbl').text('Price');
                    $('.refinance_field').hide();
                    $('.purchase_field').show();

                } else {
                    $('#price').attr('placeholder', 'Loan Amount');
                    $('#price_lbl').text('Loan Amount');
                    $('.purchase_field').hide();
                    $('.refinance_field').show();

                }
            });


        });
    </script>

</body>

</html>
