<!-- sidebar menu -->
<?php
$settings = getSetting();

?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('user.card') }}" class="brand-link">
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
                    <a href="{{ url('/') }}" target="_blank" class="nav-link">
                        <span class="icon">
                            <img src="{{ asset('assets/img/icon/website.svg') }}" alt="{{ __('WebSite') }}">
                        </span>
                        {{ __('WebSite') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('user.card') }}" class="nav-link @yield('dashboard')">
                        <span class="icon">
                            <img src="{{ asset('assets/img/icon/user.svg') }}" alt="{{ __('My Cards') }}">
                        </span>
                        {{ __('My Cards') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('user.connections') }}" class="nav-link @yield('connections')">
                        <span class="icon">
                            <svg width="16" height="16" fill="none" viewBox="0 0 16 15"><rect x="1.5" y="3.58136" width="13" height="10.0437" rx="2" stroke="#BDBDBD" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></rect><path fill-rule="evenodd" clip-rule="evenodd" d="M12.9511 1.72704H2.58203V1.375C2.58203 0.822715 3.02975 0.375 3.58203 0.375H11.9511C12.5034 0.375 12.9511 0.822715 12.9511 1.375V1.72704Z" fill="#BDBDBD"></path><path d="M8.00223 9.10522C8.77149 9.10522 9.39509 8.43071 9.39509 7.59866C9.39509 6.76661 8.77149 6.0921 8.00223 6.0921C7.23298 6.0921 6.60938 6.76661 6.60938 7.59866C6.60938 8.43071 7.23298 9.10522 8.00223 9.10522Z" stroke="#BDBDBD" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path><path d="M4.98438 13.6251C4.98438 12.1988 6.1425 11.1142 7.57111 11.1142H8.43335C9.86197 11.1142 11.0201 12.1988 11.0201 13.6251" stroke="#BDBDBD" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        </span>
                        {{ __('Connections') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('user.review') }}" class="nav-link @yield('review')">
                        <span class="icon">
                            <img src="{{ asset('assets/img/icon/user.svg') }}" alt="{{ __('My Review') }}">
                        </span>
                        {{ __('My Review') }}
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
                @if (isAnnualPlan(Auth::user()->id))
                <li class="nav-item">
                    <a href="{{ route('user.free-marketing-material') }}" class="nav-link @yield('Free Marketing Material')">
                        <span class="icon">
                            <img src="{{ asset('assets/img/icon/insights.svg') }}" alt="{{ __('Free Marketing Material') }}">
                        </span>
                        {{ __('Free Marketing Material') }}
                    </a>
                </li>
                @endif

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
                <a href="{{ route('user.setting') }}">
                    <img src="{{ getAvatar(Auth::user()->profile_image) }}" class="img-circle elevation-2" alt="{{ Auth::user()->name }}">
                </a>
            </div>
            <div class="info">
                <a href="{{ route('user.setting') }}" class="d-block" title="{{ Auth::user()->name }}">{{ Auth::user()->name }}</a>
                <span>{{ __('User') }}</span>
            </div>
        </div>
        <!-- upgrade plan -->
        <div class="plan_upgrade text-center mb-5">
            <a href="{{ route('user.plans') }}">{{ __('Upgrade now') }}</a>
        </div>
    </div>
</aside>
