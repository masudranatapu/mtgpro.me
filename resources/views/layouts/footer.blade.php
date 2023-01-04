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
                            <h3>{{ $setting->site_name  }}</h3>
                        </div>
                        <div class="footer_article">
                            <p>{{ $setting->main_motto }}</p>
                        </div>
                        <div class="social_media">
                            <ul>
                                @if($setting->facebook_url)
                                <li>
                                    <a href="{{ $setting->facebook_url }}">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </li>
                                @endif

                                @if($setting->twitter_url)
                                <li>
                                    <a href="{{ $setting->twitter_url }}">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                @endif

                                @if($setting->linkedin_url)
                                <li>
                                    <a href="{{ $setting->linkedin_url }}">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </li>
                                @endif

                                @if($setting->pinterest_url)
                                <li>
                                    <a href="{{ $setting->pinterest_url }}">
                                        <i class="fab fa-pinterest"></i>
                                    </a>
                                </li>
                                @endif

                                @if($setting->instagram_url)
                                <li>
                                    <a href="{{ $setting->instagram_url }}">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                @endif

                                @if($setting->youtube_url)
                                <li>
                                    <a href="{{ $setting->youtube_url }}">
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
                                <li><a href="{{ route('privacy-policy') }}">{{ __('Privacy Policy') }}</a></li>
                                <li><a href="{{ route('terms-conditions') }}">{{ __('Terms & Conditions') }}</a></li>
                                <li><a href="{{ route('data-deletion-instructions') }}">{{ __('Data deletion instructions') }}</a></li>
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
                                <li><a href="{{ route('login') }}">{{ __('User Login') }}</a></li>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row -->
            <div class="copyright text-center mt-4">
                <p>&copy; {{ __('Copyright') }} {{ date('Y') }}. {{ __('All Rights Reserved') }}.

                </p>
            </div>
        </div>
        <!-- container -->
    </footer>
