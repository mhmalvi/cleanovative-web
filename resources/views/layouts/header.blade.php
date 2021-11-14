<header class="header-area">
    <div class="top-bar">
        <div class="container">
            <div class="welome-text">
                <ul class="top-list">
                    <li>
                        <i class="fas fa-mobile-alt"></i>
                        <span class="infos">
                            <a href="tel:0401396554">040 139 6554</a>
                        </span>
                    </li>
                    <li>
                        <i class="far fa-clock"></i>
                        <span class="infos">
                            07.00 am - 07.00 pm
                        </span>
                    </li>
                </ul>

                <ul>
                    <li>
                        <a href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="header-nav">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="navigation">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand logo-mt-neg main-logo" href="{{ URL::to('/') }}">
                                <img src="{{ asset('images/logos/logo02.png') }}" alt="Safem" />
                            </a>
                            <a class="navbar-brand sticky-logo" href="{{ URL::to('/') }}">
                                <img src="{{ asset('images/logos/logo02.png') }}" alt="Safem">
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
                                            Home
                                        </a>
                                    </li>

                                    {{-- <li class="nav-item">
                                        <a class="nav-link" href="{{ route('about_us') }}">
                                            About Us
                                        </a>
                                    </li> --}}

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('services') }}">
                                            Services & Pricing
                                            <i class="fal fa-plus"></i>
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="{{ route('service.house_cleaning') }}">House Cleaning</a>
                                                <a href="{{ route('service.deep_cleaning') }}">Deep Cleaning</a>
                                                <a href="{{ route('service.end_of_lease_cleaning') }}">End of Lease Cleaning</a>
                                                <a href="{{ route('service.office_cleaning') }}">Office Cleaning</a>
                                                <a href="{{ route('service.party_event_cleaning') }}">Party-Event Cleaning</a>
                                                <a href="{{ route('service.construction_cleaning') }}">Construction Cleaning</a>
                                                <a href="{{ route('service.strata_cleaning') }}">Strata Cleaning</a>
                                                <a href="{{ route('service.other_cleaning') }}">Other Cleaning</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('gift_cards') }}" target="_blank">
                                            Gift Cards
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            More
                                            <i class="fal fa-plus"></i>
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('contact') }}">
                                                    Contact
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('faq') }}">
                                                    FAQ
                                                </a>
                                            </li>
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

                                    <li class="nav-item d-sm-none d-xs-block">
                                        <a class="nav-link" href="{{ route('signin') }}" target="_blank">
                                            Sign in
                                        </a>
                                    </li>
                                    <li class="nav-item d-sm-none d-xs-block">
                                        <a class="nav-link" href="{{ route('book_now') }}" target="_blank">
                                            Book Now
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <!-- navbar collapse -->
                            <div class="navbar-btn d-none d-sm-block">
                                <a class="main-btn btn-sm signin-btn text-light" href="{{ route('signin') }}" target="_blank">
                                    Sign in <i class="fal fa-plus"></i>
                                </a>
                                <a class="main-btn btn-sm booking-btn text-light" href="{{ route('book_now') }}" target="_blank">
                                    Book Now <i class="fal fa-plus"></i>
                                </a>
                            </div>
                        </nav>
                    </div>
                    <!-- navigation -->
                </div>
            </div>
        </div>
    </div>
</header>
