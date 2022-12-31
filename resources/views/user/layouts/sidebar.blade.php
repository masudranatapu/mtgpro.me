<!-- sidebar menu -->
<?php
$settings = getSetting();

?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('user.dashboard') }}" class="brand-link">
        <span class="brand-text font-weight-light">
        @if (!empty($settings->site_logo))
        <img src="{{ asset($settings->site_logo) }}" width="150" alt="logo">
        @else
        <img src="{{ asset('assets/img/logo.png') }}" width="150" alt="logo">
        @endif
        </span>
    </a>
    <div class="sidebar">
        <nav class="mt-4">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('user.dashboard') }}" class="nav-link @yield('dashboard')">
                        <span class="icon">
                            <img src="{{ asset('assets/img/icon/user.svg') }}" alt="{{ __('My Cards') }}">
                        </span>
                        {{ __('My Cards') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('user.insights') }}" class="nav-link @yield('insights')">
                        <span class="icon">
                            <img src="{{ asset('assets/img/icon/insights.svg') }}" alt="{{ __('Insights') }}">
                        </span>
                        {{ __('Insights') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('user.setting') }}" class="nav-link @yield('settings')">
                        <span class="icon">
                            <img src="{{ asset('assets/img/icon/settings.svg') }}" alt="{{ __('Settings') }}">
                        </span>
                        {{ __('Settings') }}
                    </a>
                </li>
            </ul>
        </nav>
        <!-- user profile -->
        <div class="user-panel align-items-center mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <a href="#">
                    @if (Auth::user()->profile_image)
                    <img src="{{ Auth::user()->profile_image }}" class="img-circle elevation-2" alt="{{ Auth::user()->name }}">
                    @else
                    <img src="{{ asset('assets/img/user.jpg') }}" class="img-circle elevation-2" alt="{{ Auth::user()->name }}">
                    @endif
                </a>
            </div>
            <div class="info">
                <a href="#" class="d-block" title="{{ Auth::user()->name }}">{{ Auth::user()->name }}</a>
                <span>{{ __('User') }}</span>
            </div>
        </div>
        <!-- upgrade plan -->
        <div class="plan_upgrade text-center mb-5">
            <a href="#">{{ __('Upgrade now') }}</a>
        </div>
    </div>
</aside>
