<header class="header-area">
    <div class="welome-text">
        <p>Welcome to Saafy. Professional Cleaning Service Comapny</p>
    </div>
    <div class="header-nav">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="navigation">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand logo-mt-neg main-logo" href="index.html">
                                <img src="{{asset('assets/img/logo.png')}}" alt="Safem" />
                            </a>
                            <a class="navbar-brand sticky-logo" href="index.html">
                                <img src="{{asset('assets/img/footer-logo-2.png')}}" alt="Safem">
                            </a>
                            <!-- logo -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <!-- navbar toggler -->

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul class="navbar-nav m-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{ route('home') }}">
                                            Cleanovative
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="services.html">Services
                                            <i class="fal fa-plus"></i>
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="{{ route('services') }}">Services</a>
                                                <a href="{{ route('service_details') }}">Services Details</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('about_us') }}">
                                            About Us
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('faq') }}">
                                            FAQ
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            More
                                            <i class="fal fa-plus"></i>
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('terms_and_conditions') }}">
                                                    Terms & Conditions
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('privacy_policy') }}">
                                                    Privacy Policy
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('contact') }}">Contact
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- navbar collapse -->
                            <div class="navbar-btn d-none d-sm-block">
                                <a class="main-btn" href="#">Get a Quote <i class="fal fa-plus"></i></a>
                            </div>
                        </nav>
                    </div>
                    <!-- navigation -->
                </div>
            </div>
        </div>
    </div>
</header>
