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
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/toastr.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/card-style.css') }}">
</head>
<body>
    <div class="template">
        <div class="card_view_wrapper" style="background: #C6E4D2;">
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
                        <h2>{{ $cardinfo->title }}</h2>
                        <h4>{{ $cardinfo->designation }} at {{ $cardinfo->company_name }}</h4>
                        @if (!empty($cardinfo->location))
                        <h6>{{ $cardinfo->location }}</h6>
                        @endif
                        @if (!empty($cardinfo->location))
                        <p>{{ $cardinfo->bio }}</p>
                        @endif
                    </div>
                    <div class="save_contact mt-5 mb-5">
                        <a href="javascript:void(0)" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#contactModal">Save Contact</a>
                    </div>
                    <div class="social_media">
                         <ul>
                            <?php
                            $android = stripos($_SERVER['HTTP_USER_AGENT'], "android");
                            $iphone = stripos($_SERVER['HTTP_USER_AGENT'], "iphone");
                            $ipad = stripos($_SERVER['HTTP_USER_AGENT'], "ipad");
                              ?>
                            @if (!empty($carddetails))
                            @foreach ($carddetails as $contact)
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
                            @endforeach
                            @endif

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
