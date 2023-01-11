<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $cardinfo =  $cardinfo ?? [];

        $shareComponent = $shareComponent ?? [];
        $settings = getSetting();
        $tabindex = 1;
        $twitter_id = '';
        $description = [];
        $user_name = $cardinfo->title.' '.$cardinfo->title2;
        if(isset($cardinfo->designation)){
            $description = $cardinfo->designation.' @ '.$cardinfo->company_name;
        }
        else{
            $description = $cardinfo->card_email;
        }
            if($cardinfo->profile){
                $settings->favicon =  $cardinfo->profile;
            }

        if(isFreePlan($cardinfo->user_id)){
            $title = $user_name .' - '. $settings->site_name;
        }else{
            $title = $user_name;
        }

        ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} </title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset($settings->favicon) }}">
    @if(!empty($twitter_id))
    <meta name="twitter:site" content="{{'@'.$twitter_id}}"/>
    <meta name="twitter:creator" content="{{'@'.$twitter_id}}"/>
    @endif
    <meta name="description" content="{{ $description }}" />
    <meta property="og:title" content="{{ $user_name }}" />
    <meta property="og:description" content="{{ $description }}" />
    <meta property="og:image" content="{{ asset($cardinfo->profile) }}" />
    <meta property="og:image:alt" content="{{ $user_name }}'s profile picture" />
    <meta property="og:site_name" content="{{ $settings->site_name }}" />
    <meta property="og:url" content="{{Request::url()}}" />
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
    <meta property="twitter:url" content="{{Request::url()}}" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/toastr.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/card-style.css') }}">
    <style>
        .qrcode-wrapper {
        position: relative;
    }

    .qr-code {
        position: absolute;
        top: 5%;
        left: 28%;
    }

    .qr-background {
        max-width: 230px;
        margin: 0 auto;
    }

    .qr-logo {
        position: absolute;
        top: 40%;
        left: 42%;
    }

    .qr-logo img {
        padding: 0px;
        background: #EBF8FB;
        opacity: 90%;
    }
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
        .card_share ul li i {
            display: block;
            width: 50px;
            height: 50px;
            margin: 0 auto;
            background: #000;
            color: #fff;
            font-size: 26px;
            border-radius: 50px;
            padding-top: 11px;
            margin-bottom: 4px;
        }
    </style>
</head>
<body>
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
                        <h4>{{ $cardinfo->designation }} at {{ $cardinfo->company_name }}</h4>
                        @if (!empty($cardinfo->location))
                        <h6>{{ $cardinfo->location }}</h6>
                        @endif
                        @if (!empty($cardinfo->location))
                        <p>{{ $cardinfo->bio }}</p>
                        @endif
                    </div>
                    <div class="save_contact mt-5 mb-5">
                        <a href="{{ route('download.vCard',$cardinfo->card_id) }}" class="text-decoration-none save-contact w-50 d-inline-block">{{ __('Save Contact') }}</a>

                        {{-- <a href="{{ route('download.vCard',$cardinfo->card_id) }}" class="text-decoration-none save-contact w-50 d-inline-block">
                            {{ __('Save Contact') }}
                        </a> --}}
                        <a href="javascript:void(0)" class="text-decoration-none d-inline-block btn-secondary" data-bs-toggle="modal" data-bs-target="#shareModal">
                            {{ __('Share') }}
                        </a>
                    </div>
                    <div class="social_media">
                         <ul>
                            <?php
                            $android = stripos($_SERVER['HTTP_USER_AGENT'], "android");
                            $iphone = stripos($_SERVER['HTTP_USER_AGENT'], "iphone");
                            $ipad = stripos($_SERVER['HTTP_USER_AGENT'], "ipad");
                              ?>
                            @if (!empty($cardinfo->business_card_fields))
                            @foreach ($cardinfo->business_card_fields as $contact)



                            @if(isset($user->userPlan) && ($user->userPlan->is_free == 1) && ($contact->sicon->is_paid == 1) )

                            @else

                            <li>
                                @if ($contact->type=='address')
                                    <a title="" class="text-decoration-none" href="{{'https://www.google.com/maps?q='.$contact->content }}" target="_blank">
                                @elseif ($contact->type=='email')
                                    <a class="text-decoration-none" href="mailto:{{$contact->content }}" target="_blank">
                                @elseif ($contact->type=='phone')
                                    <a class="text-decoration-none" href="tel:{{$contact->content }}" target="_blank">
                                @elseif ($contact->type=='text')
                                    <a class="text-decoration-none" href="{{ $contact->content }}" target="_blank">
                                @elseif ($contact->type=='whatsapp')
                                @if($android !== false || $ipad !== false || $iphone !== false)
                                    <a class="text-decoration-none" href="https://api.whatsapp.com/send?phone={{ $contact->content }}" target="_blank">
                                @else
                                    <a class="text-decoration-none" href="https://web.whatsapp.com/send?phone={{ $contact->content }}" target="_blank">
                                @endif
                                @else
                                    <a class="text-decoration-none" href="{{ makeUrl($contact->content) }}" target="_blank">
                                @endif
                                    <img class="img-fluid" src="{{ getIcon($contact->icon_image) }}" alt="{{ $contact->label }}" width="75" height="75" >
                                    <span>{{ $contact->label }}</span>
                                </a>
                            </li>
                            @endif
                            @endforeach
                            @endif
                        </ul>
                    </div>


                    <div class="copyright_article">
                        @if (isFreePlan($cardinfo->user_id))
                        <p> Copyright © <a href="{{ route('home') }}">{{ $settings->site_name }}</a> All rights reserved.</p>
                        @else
                        <p> Copyright © <a href="javascript:void(0)">{{ $cardinfo->title }}</a> All rights reserved.</p>
                        @endif
                    </div>

                </div>
            </div>

            <!-- offcanvas contact button -->
            <div class="offcanvas_btn">
                <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                   {{ __('Connect') }}
                </a>
            </div>
            <!-- offcanvas contact button -->
        </div>
    </div>


    <!-- Share modal -->
    <div class="share_modal modal_one">
        <div class="modal fade" id="shareModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
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
                                            {{-- {!! QrCode::size(200)->color(74, 74, 74, 80)
                                            ->mergeString('/public/assets/img/qrlogo.png', .3)
                                            ->generate(url($cardinfo->card_url)) !!} --}}
                                            {!! QrCode::size(200)->color(74, 74, 74, 80)->generate(url($cardinfo->card_url)) !!}
                                        </div>
                                        {{-- <div class="qr-logo">
                                            <img src="{{ asset('assets/img/qrlogo.png') }}" alt="" width="50px">
                                        </div> --}}
                                    </div>

                                    <div class="mt-4">
                                        <a href="{{ route('qr',$cardinfo->card_id) }}" class="download_btn btn btn-primary mr-1" title="{{ __('Download QR code')}}">
                                            <i class="fa fa-download"></i>{{ __('Download QR code')}}
                                        </a>
                                        <a class="btn btn-primary" title="{{ __('Social Media')}}" href="#" data-bs-toggle="modal" data-bs-target="#SocialModal">
                                            <img class="img-fluid" src="{{ asset('assets/img/icon/connections.svg') }}" alt="">
                                            {{ __('Social Media')}}
                                            </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

   <!-- Social Modal modal -->
    <div class="share_modal email_modal">
        <div class="modal animate__animated animate__fadeIn" id="SocialModal" tabindex="-1" data-bs-backdrop="static"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    </div>
                    <div class="modal_body">
                        <h5 class="mb-5 text-center">Share Your Card</h5>
                        <div id="social-links">
                            <div class="row">
                                <div class="col-12 col-sm-12">
                                    <ul class="text-center">
                                        <li>
                                            <a href="#" class="" id="" title="">
                                                <img class="img-fluid" src="{{ asset('assets/img/icon/facebook.svg') }}" alt="">
                                            </a>
                                         </li>
                                         <li>
                                            <a href="#" class="" id="" title="">
                                                <img class="img-fluid" src="{{ asset('assets/img/icon/twitter.svg') }}" alt="">
                                            </a>
                                         </li>
                                         <li>
                                            <a href="#" class="" id="" title="">
                                                <img class="img-fluid" src="{{ asset('assets/img/icon/telegram.svg') }}" alt="">
                                            </a>
                                         </li>
                                         <li>
                                            <a href="#" class="" id="" title="">
                                                <img class="img-fluid" src="{{ asset('assets/img/icon/whatsapp.svg') }}" alt="">
                                            </a>
                                         </li>
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
    <div class="contact_modal offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <button type="button" data-bs-dismiss="offcanvas" aria-label="Close">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="bevel"><path d="M12 5v13M5 12l7 7 7-7"></path></svg>
                </span>
            </button>
        </div>
        <div class="offcanvas-body">
                <div class="contact_body">
                    <form action="{{route('getConnect')}}" method="post">
                    @csrf
                    <input type="hidden" name="card_id" id="card_id" value="{{$cardinfo->id}}" />
                        <div class="heading mb-4 text-center">
                            <h4>{{ __('Share your info back with') }} {{ $user_name }}</h4>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" placeholder="{{ __('Name') }}" required tabindex="{{$tabindex++}}">
                            @if($errors->has('name'))
                            <span class="help-block text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <input type="text" name="email" id="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('Email') }}" required tabindex="{{$tabindex++}}">
                            @if($errors->has('email'))
                            <span class="help-block text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <input type="tel" name="phone" id="phone" value="{{ old('phone') }}" class="form-control @error('phone') is-invalid @enderror" placeholder="{{ __('Phone Number') }}" required tabindex="{{$tabindex++}}">
                            @if($errors->has('phone'))
                            <span class="help-block text-danger">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <input type="text" name="title" id="job_title" value="{{ old('title') }}" class="form-control @error('title') is-invalid @enderror" placeholder="{{ __('Job Title') }}" required tabindex="{{$tabindex++}}">
                            @if($errors->has('title'))
                            <span class="help-block text-danger">{{ $errors->first('title') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <input type="text" name="company_name" id="company_name" value="{{ old('company_name') }}" class="form-control @error('company_name') is-invalid @enderror" placeholder="{{ __('Company') }}" required tabindex="{{$tabindex++}}">
                            @if($errors->has('company_name'))
                            <span class="help-block text-danger">{{ $errors->first('company_name') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <textarea name="message" id="message" cols="30" rows="5" value="{{ old('message') }}" class="form-control @error('message') is-invalid @enderror" placeholder="{{ __('Notes on this interaction') }}" tabindex="{{$tabindex++}}"></textarea>
                            @if($errors->has('message'))
                            <span class="help-block text-danger">{{ $errors->first('message') }}</span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary w-100" style="background: #111 !important;">{{ __('Connect') }}</button>
                    </form>
                </div>
        </div>
    </div>




    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{asset('assets/js/toastr.js')}}"></script>
    <script>
      AOS.init();
    //   $(document).on("click", ".save-contact", function (e) {
    //         e.preventDefault();
    //         var url = $(this).attr('href');
    //             $.ajax({
    //                 type: 'GET',
    //                 url: url,
    //                 contentType:false,
    //                 processData:false,
    //                 success: function (response) {
    //                     if (response.status == 1) {
    //                         const link = document.createElement('a');
    //                         link.setAttribute('href', response.file_path);
    //                         link.setAttribute('download', response.file_name);
    //                         link.click();
    //                     }else{
    //                         toastr.error('Something wrong! please try again');
    //                     }
    //                 },
    //                 error: function (jqXHR, exception) {
    //                     toastr.error('Something wrong! please try again');
    //                 },
    //                 complete: function (data) {
    //                     $("body").css("cursor", "default");
    //                 }
    //             });
    //     });


    </script>
    {!! Toastr::message() !!}
</body>
</html>
