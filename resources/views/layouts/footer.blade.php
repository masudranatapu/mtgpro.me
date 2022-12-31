    <!-- ======================= Footer  =========================== -->
    <footer class="footer">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row gy-4">
                <div class="col-md-6 col-lg-6">
                    <div class="footer_widget pe-lg-5">
                        <div class="widget_title mb-4">
                            <h3>{{ __('ContactSolutions') }}</h3>
                        </div>
                        <div class="footer_article">
                            <p>{{ __('Lorem ipsum dolor sit, amet consectetur adipisicing, elit. Cum aliquid, nam sint voluptates et aliquam') }}</p>
                        </div>
                        <div class="social_media">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-pinterest"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
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
                                <li><a href="{{ route('user.dashboard') }}">{{ __('Cards') }}</a></li>
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
                                <li><a href="{{ route('login') }}">{{ __('User Login') }}</a></li>
                                <li><a href="#">{{ __('Blog') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row -->
            <div class="copyright text-center mt-4">
                <p>&copy; {{ __('Copyright') }} {{ date('Y') }}. {{ __('All Rights Reserved') }}. Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</p>
            </div>
        </div>
        <!-- container -->
    </footer>
