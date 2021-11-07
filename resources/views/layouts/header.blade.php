<header class="header-area">
    <div class="container">
        <div class="welome-text">
            <p>Email: example@email.com</p>
            <p>Contact: +2635112344</p>
        </div>
    </div>
    <div class="header-nav">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="navigation">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand logo-mt-neg main-logo" href="{{URL::to('/')}}">
                                <img src="{{asset('images/logos/logo01.png')}}" alt="Safem" />
                            </a>
                            <a class="navbar-brand sticky-logo" href="{{URL::to('/')}}">
                                <img src="{{asset('images/logos/logo02.png')}}" alt="Safem">
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
                                        <a class="nav-link" href="projects.html">Project
                                            <i class="fal fa-plus"></i>
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="projects.html">Project</a>
                                                <a href="projects-details.html">Project Details</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="blog.html">Pages
                                            <i class="fal fa-plus"></i></a>
                                        <ul class="sub-menu">

                                            <li>
                                                <a href="about.html">About Us </a>
                                            </li>
                                            <li>
                                                <a href="team.html">Team Member </a>
                                            </li>
                                            <li>
                                                <a href="pricing.html">Pricing Plan </a>
                                            </li>
                                            <li>
                                                <a href="faq.html">FAQ </a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="blog.html">Blog
                                            <i class="fal fa-plus"></i>
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="blog.html">Blog</a>
                                                <a href="blog-details.html">Blog Details</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.html">Contact
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
