<?php
$setting = getSetting();
?>
<header class="header_section sticky-top">
    <!-- Header top -->
    {{-- <div class="header_top">
        <div class="container">
            <div class="warning_text text-center">
                <h3><a href="">{{ __('Get a free traial of ContactSolutions') }}</a></h3>
            </div>
        </div>
    </div> --}}
    <!-- header -->
    <div class="header">
        <!-- container -->
        <div class="container">
            <nav class="navbar navbar-expand-lg p-0">
                <div class="container-fluid">
                    <!-- logo -->
                    <a class="navbar-brand p-0" href="{{ route('home') }}">
                        <img src="{{ getPhoto($setting->site_logo) }}" alt="{{ $setting->site_name }}">
                    </a>
                    <!-- toggle bar -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" href="#offcanvasExample"
                        role="button" aria-controls="offcanvasExample">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- desktop menu -->
                    <div class="collapse navbar-collapse d-none d-lg-block" id="navbarNav">
                        <ul class="navbar-nav mt-4 mt-lg-0 ms-auto align-items-center">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">{{ __('Home') }}</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('shop') }}">{{ __('Shop') }}</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('about-us') }}">{{ __('About Us') }}</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('pricing') }}">{{ __('Pricing') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('contact-us') }}">{{ __('Contact') }}</a>
                            </li>

                            @auth
                                <div class="dropdown user_dropdown">
                                    <button class="dropdown-toggle d-flex" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="avatar">
                                            @if (Auth::check())
                                                <img src="{{ getAvatar(Auth::user()->profile_image) }}"
                                                    class="rounded-circle" width="40" alt="{{ auth::user()->name }}">
                                            @endif
                                        </span>
                                        <div class="ps-2">
                                            <div>{{ Auth::user()->name }}</div>
                                            <div class=" small text-muted">{{ Auth::user()->email }}</div>
                                        </div>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        @if (Auth::user()->user_type == 1)
                                            <li><a class="dropdown-item" href="{{ route('dashboard') }}"
                                                    title="{{ __('Dashboard') }}">{{ __('Dashboard') }}</a></li>
                                        @else
                                            <li><a class="dropdown-item" href="{{ route('user.card') }}"
                                                    title="{{ __('Card') }}">{{ __('Card') }}</a></li>
                                            <li><a class="dropdown-item" href="{{ route('dashboard') }}"
                                                    title="{{ __('My account') }}">{{ __('My account') }}</a></li>
                                        @endif


                                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();"
                                                title="{{ __('Logout') }}">{{ __('Logout') }}</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                            viewBox="0 0 24 24" fill="none" stroke="#c62f00" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="bevel">
                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="9" cy="7" r="4"></circle>
                                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                        </svg>
                                        {{ __('Sign In') }}
                                    </a>
                                </li>
                            @endauth

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('cart') }}">
                                    <span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                                    @if (session('cart'))
                                        <span id="cartCounter">({{ count(session('cart')) }})</span>
                                    @else
                                        <span id="cartCounter"></span>
                                    @endif
                                </a>
                            </li>


                        </ul>
                    </div>
                    <!-- mobile menu -->
                    <div class="mobile_menu d-block d-lg-none offcanvas offcanvas-start" tabindex="-1"
                        id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                        <div class="offcanvas-header">
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body mt-3">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home') }}">{{ __('Home') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('about-us') }}">{{ __('About Us') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('pricing') }}">{{ __('Pricing') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('contact-us') }}">{{ __('Contact') }}</a>
                                </li>
                                @auth
                                    <li class="nav-item">
                                        <div class="dropdown">
                                            <div id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"
                                                class="nav-link d-flex p-0">
                                                <span class="avatar">
                                                    @if (Auth::check())
                                                        <img src="{{ Auth::user()->profile_image }}"
                                                            class="rounded-circle" width="40"
                                                            alt="{{ auth::user()->name }}">
                                                    @endif
                                                </span>
                                                <div class="ps-2">
                                                    <div>{{ Auth::user()->name }}</div>
                                                    <div class=" small text-muted">{{ Auth::user()->email }}</div>
                                                </div>
                                                <svg class="svg-iconstyled__Svg-app__sc-1nwmz4s-0 gbXkHP user-menustyled__MenuToggleIcon-app__sc-1evcoxz-4 gJGrXh"
                                                    aria-hidden="true" focusable="false"
                                                    style="fill:currentColor;height:1em;overflow:visible;width:1em"
                                                    viewBox="0 0 8 13" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g transform="rotate(90 4 6.5)">
                                                        <path
                                                            d="M1.33333 13L8 6.5L1.33333 0L0 1.3L5.33333 6.5L0 11.7L1.33333 13Z">
                                                        </path>
                                                    </g>
                                                </svg>
                                            </div>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                                                {{-- <li>
                                                <a class="dropdown-item" href="{{ route('user.card') }}">{{ __('Card')
                                                    }}</a>
                                            </li> --}}

                                                @if (Auth::user()->user_type == 1)
                                                    <li><a class="dropdown-item" href="{{ route('dashboard') }}"
                                                            title="{{ __('Dashboard') }}">{{ __('Dashboard') }}</a></li>
                                                @else
                                                    <li><a class="dropdown-item" href="{{ route('user.card') }}"
                                                            title="{{ __('Card') }}">{{ __('Card') }}</a></li>
                                                    <li><a class="dropdown-item" href="{{ route('dashboard') }}"
                                                            title="{{ __('Settings') }}">{{ __('Settings') }}</a></li>
                                                @endif
                                                <li><a class="dropdown-item" href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();"
                                                        title="{{ __('Logout') }}">{{ __('Logout') }}</a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                        class="d-none">
                                                        @csrf
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                                viewBox="0 0 24 24" fill="none" stroke="#c62f00" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="bevel">
                                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="9" cy="7" r="4"></circle>
                                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                            </svg>
                                            {{ __('Sign In') }}
                                        </a>
                                    </li>
                                @endauth
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- container -->
    </div>
</header>
