<?php
$settings = getSetting();

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
                            <h3>{{ __('Contact Solutions') }}</h3>
                        </div>
                        <div class="footer_article">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing, elit. Cum aliquid, nam sint voluptates et aliquam</p>
                        </div>
                        <div class="social_media">
                            <ul>
                                @if (!empty($settings->facebook_url))
                                <li>
                                    <a href="{{ $settings->facebook_url }}" target="__blank">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </li>
                                @endif
                                @if (!empty($settings->twitter_url))
                                <li>
                                    <a href="{{ $settings->facebook_url }}" target="__blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                @endif
                                @if (!empty($settings->linkedin_url))
                                <li>
                                    <a href="{{ $settings->facebook_url }}" target="__blank">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </li>
                                @endif
                                @if (!empty($settings->pinterest_url))
                                <li>
                                    <a href="{{ $settings->facebook_url }}" target="__blank">
                                        <i class="fab fa-pinterest"></i>
                                    </a>
                                </li>
                                @endif
                                @if (!empty($settings->instagram_url))
                                <li>
                                    <a href="{{ $settings->facebook_url }}" target="__blank">
                                        <i class="fab fa-instagram"></i>
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
                                <li><a href="#">{{ __('Data Protection') }}</a></li>
                                <li><a href="{{ route('privacy-policy') }}">{{ __('Privacy Policy') }}</a></li>
                                <li><a href="{{ route('terms-conditions') }}">{{ __('Terms & Conditions') }}</a></li>
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
                                <li><a href="#">{{ __('Tutorials') }}</a></li>
                                <li><a href="#">{{ __('Help') }}</a></li>
                                @guest
                                <li><a href="{{ route('login') }}">{{ __('User Login') }}</a></li>
                                @endguest
                                <li><a href="{{ route('blog') }}">{{ __('Blog') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row -->

            <div class="copyright text-center mt-4">
                <p>{!! $settings->copyright_text !!}</p>
            </div>
        </div>
        <!-- container -->
    </footer>
