<?php
$setting  = getSetting();
?>
<!-- ======================= Footer  =========================== -->
<footer class="footer">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row gy-4">
            <div class="col-md-6 col-lg-6">
                <div class="footer_widget pe-lg-5">
                    <div class="widget_title mb-4">
                        <h3>{{ $settings->site_name }}</h3>
                    </div>
                    <div class="footer_article">
                        <p>{{ $settings->main_motto }}</p>
                    </div>
                    <div class="social_media">
                        <ul>
                            @if($settings->facebook_url)
                            <li>
                                <a href="{{ $settings->facebook_url }}">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </li>
                            @endif
                            @if($settings->twitter_url)
                            <li>
                                <a href="{{ $settings->twitter_url }}">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            @endif
                            @if($settings->linkedin_url)
                            <li>
                                <a href="{{ $settings->linkedin_url }}">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                            @endif
                            @if($settings->pinterest_url)
                            <li>
                                <a href="{{ $settings->pinterest_url }}">
                                    <i class="fab fa-pinterest"></i>
                                </a>
                            </li>
                            @endif
                            @if($settings->instagram_url)
                            <li>
                                <a href="{{ $settings->instagram_url }}">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            @endif
                            @if($settings->youtube_url)
                            <li>
                                <a href="{{ $settings->youtube_url }}">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                            @endif

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="footer_widget">
                    <div class="widget_title mb-4">
                        <h3>{{ __('Quick Links') }}</h3>
                    </div>
                    <div class="footer_menu">
                        <ul>
                            <li><a href="{{ route('user.card') }}">{{ __('Cards') }}</a></li>
                            <li><a href="{{ route('privacy-policy') }}">{{ __('Privacy Policy') }}</a>
                            </li>
                            <li><a href="{{ route('terms-conditions') }}">{{ __('Terms & Conditions')
                                    }}</a></li>
                            <li><a href="{{ route('data-deletion-instructions') }}">{{ __('Data
                                    deletion instructions') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="footer_widget">
                    <div class="widget_title mb-4">
                        <h3>{{ __('Pages') }}</h3>
                    </div>
                    <div class="footer_menu">
                        <ul>
                            <li><a target="__blank" href="{{ route('tutorials') }}">{{ __('Tutorials') }}</a></li>
                            <li><a target="__blank" href="{{ route('disclaimer') }}">{{ __('Disclaimer ') }}</a></li>
                            <li><a target="__blank" href="{{ route('help') }}">{{ __('Help') }}</a></li>
                            @guest
                            <li><a href="{{ route('login') }}">{{ __('User Login') }}</a></li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="copyright text-center mt-4">
            <p>
                {{ __('Copyright') }} &copy; <span id="year"></span>
                <a href="{{ route('home') }}" class="link-secondary">{{ $settings->site_name }}</a>.
                {{ __('All rights reserved.') }}
            </p>
        </div>
    </div>
    <!-- container -->
</footer>
