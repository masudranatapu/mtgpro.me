<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $cardinfo =  $cardinfo ?? [];
        $icons = $icons ?? [];
        $shareComponent = $shareComponent ?? [];
        $settings = getSetting();
        $tabindex = 1;
        $twitter_id = '';
        $description = [];
        $carddetails = DB::table('business_fields')->where('card_id', $cardinfo->id)->first();
        $user_name = $cardinfo->title.' '.$cardinfo->title2;
        if(!empty($carddetails)) {
            $arr_card_fields = json_decode($carddetails->content, true);
            if(isset($arr_card_fields['twitter'][0])){
                $twitter_id = Str::afterLast($arr_card_fields['twitter'][0], '/');
            }
        } else {
            $arr_card_fields = [];
        }
        if(isset($cardinfo->designation)){
            $description = $cardinfo->designation.' @ '.$cardinfo->company_name;
        }
        else{
            $description = $cardinfo->card_email;
        }
        ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $user_name }} - {{ $settings->site_name }}</title>
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
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/toastr.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/card-style.css') }}">
</head>

<body>
    <div class="template">
        <div class="card_view_wrapper" style="background: #C6E4D2;">
            <div class="card_cover">
                <div class="cover_img" data-aos="zoom-in">
                    <img src="{{ getCover() }}" alt="image">
                </div>
                <div class="card_profile" data-aos="zoom-in">
                    <img class="profile_pic" src="{{ getProfile($cardinfo->profile) }}" alt="image">
                    <img class="logo" src="{{ getLogo($cardinfo->profile) }}" alt="image">
                </div>
            </div>
            <div class="card_view_body">
                <div class="content text-center">
                    <div class="profile_info mt-4">
                        <h2>{{ $cardinfo->title }}</h2>
                        <h4>{{ $cardinfo->designation }} at {{ $cardinfo->company_name }}</h4>
                        <h6>Dhaka</h6>
                        <p>Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Asperiores iusto, nulla. Voluptatibus dolores ab culpa molestiae sunt ipsam deserunt perferendis, eius nam quia laboriosam assumenda officia exercitationem nihil? Veritatis, voluptas.</p>
                    </div>
                    <div class="save_contact mt-5 mb-5">
                        <a href="javascript:void(0)" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#contactModal">Save Contact</a>
                    </div>
                    <div class="social_media">
                         <ul>
                            <li>
                                <a class="text-decoration-none" href="#" target="_blank">
                                     <svg width="75" height="75" fill="#1877F2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80"><g clip-path="url(#facebook_monochrome_svg__facebook)" filter="url(#facebook_monochrome_svg__filter0_i)"><path d="M18.095 0h43.81C71.905 0 80 8.095 80 18.095v43.81C80 71.905 71.905 80 61.905 80h-43.81C8.095 80 0 71.905 0 61.905v-43.81C0 8.095 8.095 0 18.095 0z"></path><path d="M55.924 51.531l1.797-11.734H46.482v-7.615c0-3.21 1.57-6.34 6.604-6.34h5.11v-9.99s-4.637-.793-9.071-.793c-9.257 0-15.306 5.62-15.306 15.794v8.944h-10.29V51.53h10.29v28.86l6.331.001h6.332v-28.86h9.442z" fill="#fff"></path></g><defs><clipPath id="facebook_monochrome_svg__facebook"><path fill="#fff" d="M0 0h80v80H0z"></path></clipPath><filter id="facebook_monochrome_svg__filter0_i" x="0" y="-1" width="80" height="81" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood><feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend><feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix><feOffset dy="-1"></feOffset><feGaussianBlur stdDeviation="0.5"></feGaussianBlur><feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"></feComposite><feColorMatrix values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.42 0"></feColorMatrix><feBlend in2="shape" result="effect1_innerShadow"></feBlend></filter></defs></svg>
                                    <span>Facebook</span>
                                </a>
                            </li>
                            <li>
                                <a class="text-decoration-none" href="#" target="_blank">
                                     <svg width="75" height="75" fill="#0077B5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80"><g filter="url(#linkedin_monochrome_svg__filter0_i)"><path d="M18.095 0h43.81C71.905 0 80 8.095 80 18.095v43.81C80 71.905 71.905 80 61.905 80h-43.81C8.095 80 0 71.905 0 61.905v-43.81C0 8.095 8.095 0 18.095 0z"></path><path d="M15.898 31.635h10.551V64.94H15.898V31.635zm5.278-16.576c1.21 0 2.394.352 3.4 1.012a6.028 6.028 0 012.253 2.694 5.896 5.896 0 01.347 3.468 5.967 5.967 0 01-1.676 3.073 6.155 6.155 0 01-3.134 1.642 6.227 6.227 0 01-3.535-.344 6.093 6.093 0 01-2.744-2.213 5.921 5.921 0 01-1.028-3.336 5.945 5.945 0 011.793-4.24 6.179 6.179 0 014.324-1.756zM32 31.86h10.127V36.4h.14c1.411-2.6 4.853-5.342 9.992-5.342 10.699-.023 12.682 6.83 12.682 15.715V64.94H54.377V48.846c0-3.832-.07-8.766-5.49-8.766-5.419 0-6.34 4.179-6.34 8.516v16.345H32V31.86z" fill="#fff"></path></g><defs><filter id="linkedin_monochrome_svg__filter0_i" x="0" y="-1" width="80" height="81" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood><feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend><feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix><feOffset dy="-1"></feOffset><feGaussianBlur stdDeviation="0.5"></feGaussianBlur><feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"></feComposite><feColorMatrix values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.42 0"></feColorMatrix><feBlend in2="shape" result="effect1_innerShadow"></feBlend></filter></defs></svg>
                                    <span>Linkedin</span>
                                </a>
                            </li>
                            <li>
                                <a class="text-decoration-none" href="#" target="_blank">
                                     <svg width="75" height="75" fill="#F41314" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80"><g clip-path="url(#facebook_monochrome_svg__facebook)" filter="url(#facebook_monochrome_svg__filter0_i)"><path d="M18.095 0h43.81C71.905 0 80 8.095 80 18.095v43.81C80 71.905 71.905 80 61.905 80h-43.81C8.095 80 0 71.905 0 61.905v-43.81C0 8.095 8.095 0 18.095 0z"></path><path d="M55.924 51.531l1.797-11.734H46.482v-7.615c0-3.21 1.57-6.34 6.604-6.34h5.11v-9.99s-4.637-.793-9.071-.793c-9.257 0-15.306 5.62-15.306 15.794v8.944h-10.29V51.53h10.29v28.86l6.331.001h6.332v-28.86h9.442z" fill="#fff"></path></g><defs><clipPath id="facebook_monochrome_svg__facebook"><path fill="#fff" d="M0 0h80v80H0z"></path></clipPath><filter id="facebook_monochrome_svg__filter0_i" x="0" y="-1" width="80" height="81" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood><feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend><feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix><feOffset dy="-1"></feOffset><feGaussianBlur stdDeviation="0.5"></feGaussianBlur><feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"></feComposite><feColorMatrix values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.42 0"></feColorMatrix><feBlend in2="shape" result="effect1_innerShadow"></feBlend></filter></defs></svg>
                                    <span>Youtube</span>
                                </a>
                            </li>
                            <li>
                                <a class="text-decoration-none" href="#" target="_blank">
                                     <svg width="75" height="75" fill="#C92591" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80"><g filter="url(#instagram_monochrome_svg__filter0_i_3117_2479911)"><path d="M18.095 0h43.81C71.905 0 80 8.095 80 18.095v43.81C80 71.905 71.905 80 61.905 80h-43.81C8.095 80 0 71.905 0 61.905v-43.81C0 8.095 8.095 0 18.095 0z"></path><path d="M38.762 10.476H50.19c2.381 0 4.858.19 7.239.857 4.19 1.143 7.428 3.524 9.619 7.238 1.333 2.286 1.904 4.762 2.19 7.334.19 2.285.286 4.571.286 6.857v16.952c0 2.572-.19 5.143-.857 7.715-1.429 5.142-4.572 8.761-9.524 10.666-2.381.953-4.953 1.238-7.524 1.334-6.286.095-12.571.19-18.857.19-2.667 0-5.429-.095-8-.476-3.714-.476-6.953-1.905-9.62-4.667-2.475-2.571-3.809-5.714-4.285-9.238-.571-4.762-.476-9.524-.476-14.38 0-4 .095-7.906.095-11.906.095-2.762.286-5.524 1.333-8.19 1.905-4.953 5.43-8 10.572-9.429 2.38-.666 4.857-.762 7.333-.857h9.048zm25.524 29.62c0-2.287.095-4.477 0-6.763-.096-2.762-.19-5.619-.477-8.38a9.298 9.298 0 00-2.285-5.239c-2.19-2.571-5.048-3.714-8.286-3.905-3.143-.19-6.38-.285-9.524-.285-5.714 0-11.428.095-17.143.285-2.095.096-4.095.572-5.904 1.715-2.953 1.81-4.477 4.571-4.762 7.904-.286 2.858-.381 5.715-.476 8.572 0 5.524 0 10.952.095 16.476 0 1.905.286 3.905.667 5.714.57 2.477 2 4.477 4.095 5.905 2.095 1.429 4.571 1.905 7.047 2 2.953.095 5.81.19 8.762.19 5.62 0 11.238-.095 16.857-.19C55.333 64 57.62 63.43 59.524 62c2.38-1.714 3.81-4.095 4.19-6.953.286-2.095.381-4.19.477-6.285.095-2.857.095-5.715.095-8.667z" fill="#fff"></path><path d="M54.954 40c0 8.476-6.762 15.143-15.238 15.143-8.286 0-15.048-6.857-15.048-15.238 0-8.286 6.857-15.143 15.238-15.143 8.286.095 15.048 6.857 15.048 15.238zm-25.048 0c0 5.524 4.476 10 10 10s10-4.476 10-10c0-5.428-4.476-9.905-10-9.905-5.619 0-10 4.381-10 9.905zM55.618 20.762c2 0 3.524 1.524 3.524 3.428 0 1.905-1.524 3.524-3.429 3.524-1.904 0-3.523-1.523-3.523-3.428 0-2 1.523-3.524 3.428-3.524z" fill="#fff"></path></g><defs><filter id="instagram_monochrome_svg__filter0_i_3117_2479911" x="0" y="-1" width="80" height="81" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood><feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend><feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix><feOffset dy="-1"></feOffset><feGaussianBlur stdDeviation="0.5"></feGaussianBlur><feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"></feComposite><feColorMatrix values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.42 0"></feColorMatrix><feBlend in2="shape" result="effect1_innerShadow"></feBlend></filter></defs></svg>
                                    <span>Instagram</span>
                                </a>
                            </li>
                            <li>
                                <a class="text-decoration-none" href="#" target="_blank">
                                    <svg class="icon-shadow" width="75" height="75" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g filter="url(#filterc8)">
                                            <path d="M18.0952 0H61.9048C71.9048 0 80 8.09524 80 18.0952V61.9048C80 71.9048 71.9048 80 61.9048 80H18.0952C8.09524 80 0 71.9048 0 61.9048V18.0952C0 8.09524 8.09524 0 18.0952 0Z" fill="url(#paint0_linearc8)"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M40 61.1864C56.0163 61.1864 69 50.6234 69 37.5932C69 24.563 56.0163 14 40 14C23.9837 14 11 24.563 11 37.5932C11 46.2476 16.7276 53.8136 25.2671 57.9193C25.3744 59.7932 24.641 63.5944 20.8305 65.1186C23.2461 65.2797 28.9855 63.6996 32.4483 60.3785C34.8561 60.9054 37.3877 61.1864 40 61.1864Z" fill="white"></path>
                                        </g>
                                        <defs>
                                            <filter id="filterc8" x="0" y="-1" width="80" height="81" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                                <feOffset dy="-1"></feOffset>
                                                <feGaussianBlur stdDeviation="0.5"></feGaussianBlur>
                                                <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"></feComposite>
                                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0"></feColorMatrix>
                                                <feBlend mode="normal" in2="shape" result="effect1_innerShadow"></feBlend>
                                            </filter>
                                            <linearGradient id="paint0_linearc8" x1="40" y1="0" x2="40" y2="80" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#8BFB6B"></stop>
                                                <stop offset="1" stop-color="#19DB1C"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <span>Phone</span>
                                </a>
                            </li>
                            <li>
                                <a class="text-decoration-none" href="mailto:rabin1@gmail.com" target="_blank">
                                    <svg class="icon-shadow" width="75" height="75" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g filter="url(#filterc9)">
                                            <path d="M18.0952 0H61.9048C71.9048 0 80 8.09524 80 18.0952V61.9048C80 71.9048 71.9048 80 61.9048 80H18.0952C8.09524 80 0 71.9048 0 61.9048V18.0952C0 8.09524 8.09524 0 18.0952 0Z" fill="url(#paint0_linearc9)"></path>
                                            <path d="M66.0163 22H14.4268C13.9581 22 13.5169 22.1379 13.1309 22.3585L13.6823 22.9099L36.8163 46.0714C38.6913 47.9464 41.7519 47.9464 43.6269 46.0714L67.3399 22.386C66.9538 22.1379 66.4851 22 66.0163 22Z" fill="white"></path>
                                            <path d="M68.4695 24.454C68.4695 23.9853 68.3316 23.5441 68.111 23.1581L51.0156 40.4189L68.1662 57.5143C68.3592 57.1559 68.4695 56.7423 68.4695 56.3287V24.454Z" fill="white"></path>
                                            <path d="M12 24.454C12 23.9853 12.1379 23.5441 12.3585 23.1581L29.4539 40.4189L12.3033 57.5143C12.1103 57.1559 12 56.7423 12 56.3287V24.454Z" fill="white"></path>
                                            <path d="M50.1066 41.2185L44.1232 47.2019C41.9725 49.3526 38.4431 49.3526 36.2924 47.2019L30.309 41.2461L13.1309 58.3967C13.5169 58.6173 13.9305 58.7551 14.3992 58.7551H65.9888C66.4575 58.7551 66.8987 58.6173 67.2571 58.3967L66.2369 57.3765L50.1066 41.2185Z" fill="white"></path>
                                        </g>
                                        <defs>
                                            <filter id="filterc9" x="0" y="-1" width="80" height="81" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                                <feOffset dy="-1"></feOffset>
                                                <feGaussianBlur stdDeviation="0.5"></feGaussianBlur>
                                                <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"></feComposite>
                                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0"></feColorMatrix>
                                                <feBlend mode="normal" in2="shape" result="effect1_innerShadow"></feBlend>
                                            </filter>
                                            <linearGradient id="paint0_linearc9" x1="40" y1="0" x2="40" y2="80" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#1E51EE"></stop>
                                                <stop offset="1" stop-color="#19E4FF"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <span>Email</span>
                                </a>
                            </li>
                            <li>
                                <a class="text-decoration-none" href="#" target="_blank">
                                     <svg width="75" height="75" fill="#1877F2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80"><g clip-path="url(#facebook_monochrome_svg__facebook)" filter="url(#facebook_monochrome_svg__filter0_i)"><path d="M18.095 0h43.81C71.905 0 80 8.095 80 18.095v43.81C80 71.905 71.905 80 61.905 80h-43.81C8.095 80 0 71.905 0 61.905v-43.81C0 8.095 8.095 0 18.095 0z"></path><path d="M55.924 51.531l1.797-11.734H46.482v-7.615c0-3.21 1.57-6.34 6.604-6.34h5.11v-9.99s-4.637-.793-9.071-.793c-9.257 0-15.306 5.62-15.306 15.794v8.944h-10.29V51.53h10.29v28.86l6.331.001h6.332v-28.86h9.442z" fill="#fff"></path></g><defs><clipPath id="facebook_monochrome_svg__facebook"><path fill="#fff" d="M0 0h80v80H0z"></path></clipPath><filter id="facebook_monochrome_svg__filter0_i" x="0" y="-1" width="80" height="81" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood><feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend><feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix><feOffset dy="-1"></feOffset><feGaussianBlur stdDeviation="0.5"></feGaussianBlur><feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"></feComposite><feColorMatrix values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.42 0"></feColorMatrix><feBlend in2="shape" result="effect1_innerShadow"></feBlend></filter></defs></svg>
                                    <span>Facebook</span>
                                </a>
                            </li>
                            <li>
                                <a class="text-decoration-none" href="#" target="_blank">
                                     <svg width="75" height="75" fill="#0077B5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80"><g filter="url(#linkedin_monochrome_svg__filter0_i)"><path d="M18.095 0h43.81C71.905 0 80 8.095 80 18.095v43.81C80 71.905 71.905 80 61.905 80h-43.81C8.095 80 0 71.905 0 61.905v-43.81C0 8.095 8.095 0 18.095 0z"></path><path d="M15.898 31.635h10.551V64.94H15.898V31.635zm5.278-16.576c1.21 0 2.394.352 3.4 1.012a6.028 6.028 0 012.253 2.694 5.896 5.896 0 01.347 3.468 5.967 5.967 0 01-1.676 3.073 6.155 6.155 0 01-3.134 1.642 6.227 6.227 0 01-3.535-.344 6.093 6.093 0 01-2.744-2.213 5.921 5.921 0 01-1.028-3.336 5.945 5.945 0 011.793-4.24 6.179 6.179 0 014.324-1.756zM32 31.86h10.127V36.4h.14c1.411-2.6 4.853-5.342 9.992-5.342 10.699-.023 12.682 6.83 12.682 15.715V64.94H54.377V48.846c0-3.832-.07-8.766-5.49-8.766-5.419 0-6.34 4.179-6.34 8.516v16.345H32V31.86z" fill="#fff"></path></g><defs><filter id="linkedin_monochrome_svg__filter0_i" x="0" y="-1" width="80" height="81" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood><feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend><feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix><feOffset dy="-1"></feOffset><feGaussianBlur stdDeviation="0.5"></feGaussianBlur><feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"></feComposite><feColorMatrix values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.42 0"></feColorMatrix><feBlend in2="shape" result="effect1_innerShadow"></feBlend></filter></defs></svg>
                                    <span>Linkedin</span>
                                </a>
                            </li>
                            <li>
                                <a class="text-decoration-none" href="#" target="_blank">
                                     <svg width="75" height="75" fill="#F41314" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80"><g clip-path="url(#facebook_monochrome_svg__facebook)" filter="url(#facebook_monochrome_svg__filter0_i)"><path d="M18.095 0h43.81C71.905 0 80 8.095 80 18.095v43.81C80 71.905 71.905 80 61.905 80h-43.81C8.095 80 0 71.905 0 61.905v-43.81C0 8.095 8.095 0 18.095 0z"></path><path d="M55.924 51.531l1.797-11.734H46.482v-7.615c0-3.21 1.57-6.34 6.604-6.34h5.11v-9.99s-4.637-.793-9.071-.793c-9.257 0-15.306 5.62-15.306 15.794v8.944h-10.29V51.53h10.29v28.86l6.331.001h6.332v-28.86h9.442z" fill="#fff"></path></g><defs><clipPath id="facebook_monochrome_svg__facebook"><path fill="#fff" d="M0 0h80v80H0z"></path></clipPath><filter id="facebook_monochrome_svg__filter0_i" x="0" y="-1" width="80" height="81" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood><feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend><feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix><feOffset dy="-1"></feOffset><feGaussianBlur stdDeviation="0.5"></feGaussianBlur><feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"></feComposite><feColorMatrix values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.42 0"></feColorMatrix><feBlend in2="shape" result="effect1_innerShadow"></feBlend></filter></defs></svg>
                                    <span>Youtube</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Contact Modal -->
    <div class="contact_modal modal fade" id="contactModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal_logo">
                        <img src="{{ getProfile($cardinfo->profile) }}" alt="image">
                    </div>
                </div>
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
                            <input type="text" name="job_title" id="job_title" value="{{ old('job_title') }}" class="form-control @error('job_title') is-invalid @enderror" placeholder="{{ __('Job Title') }}" required tabindex="{{$tabindex++}}">
                            @if($errors->has('job_title'))
                            <span class="help-block text-danger">{{ $errors->first('job_title') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <input type="text" name="company" id="company" value="{{ old('company') }}" class="form-control @error('company') is-invalid @enderror" placeholder="{{ __('Company') }}" required tabindex="{{$tabindex++}}">
                            @if($errors->has('company'))
                            <span class="help-block text-danger">{{ $errors->first('company') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <textarea name="note" id="note" cols="30" rows="5" value="{{ old('note') }}" class="form-control @error('note') is-invalid @enderror" placeholder="{{ __('Notes on this interaction') }}" tabindex="{{$tabindex++}}"></textarea>
                            @if($errors->has('note'))
                            <span class="help-block text-danger">{{ $errors->first('note') }}</span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary w-100" style="background: #111 !important;">{{ __('Connect') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{asset('assets/js/toastr.js')}}"></script>

    <script>
      AOS.init();
    </script>
    {!! Toastr::message() !!}

</body>
</html>
