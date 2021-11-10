@extends('layouts.app')

@section('title', 'Contact | Cleanovative')

@section('content')
    <!--====== BREADCRUMB PART START ======-->
    <section class="breadcrumb-area" style="background-image: url({{ asset('images/breadcrumb.jpg') }});">
        <div class="container">
            <div class="breadcrumb-text text-center">
                <h1 class="page-title text-dark">Contact Us</h1>
                <ul>
                    <li><a href="{{ route('home') }}" class="text-dark">Home</a></li>
                    <li class="sep"><i class="text-dark fal fa-angle-double-right"></i></li>
                    <li class="text-dark">Contact Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!--====== BREADCRUMB PART END ======-->
    <!--====== CONTACT PART START ======-->
    <section class="contact-wrap pt-130">
        <div class="container">
            <!-- Contact Info boxes -->
            <div class="contact-info-boxes">
                <div class="row">
                    <div class="col-lg-4">
                        <!-- Single Boxes -->
                        <div class="info-box">
                            <span class="icon"><i class="far fa-phone-plus"></i></span>
                            <h6 class="title">Phone Number</h6>
                            <p class="info"><a href="tel:0401396554">0401396554</a></p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- Single Boxes -->
                        <div class="info-box">
                            <span class="icon"><i class="far fa-envelope-open"></i></span>
                            <h6 class="title">Email Address</h6>
                            <p class="info">
                                <a href="mailto:info.cleanovative@gmail.com">info.cleanovative@gmail.com</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- Single Boxes -->
                        <div class="info-box location">
                            <span class="icon"><i class="far fa-map-marker-alt"></i></span>
                            <h6 class="title">Location</h6>
                            <p class="info">205 South East Road, USA</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Conatact Form -->
            <div class="contact-form pb-130">
                <div class="section-title left-border mb-30">
                    <h2>Don’t Hesited To Contact <br>
                        With Us, Say Hello</h2>
                    <p class="title-tag">Leave A Message</p>
                </div>
                <form action="#">
                    <div class="row">
                        <div class="col-lg-4">
                            <input type="text" placeholder="Your Name">
                        </div>
                        <div class="col-lg-4">
                            <input type="email" placeholder="Your Email">
                        </div>
                        <div class="col-lg-4">
                            <input type="text" placeholder="Your Phone">
                        </div>
                        <div class="col-12">
                            <textarea placeholder="Your Message"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="main-btn"> Send Message <i class="fal fa-plus"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Contact map -->
        <div class="contact-maps">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d194267.6684243399!2d-74.44355162608831!3d40.46569986660184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3c355f06a92a5%3A0x25925506798e230c!2sNew%20Brunswick%2C%20NJ%2C%20USA!5e0!3m2!1sen!2sbd!4v1584294493170!5m2!1sen!2sbd"
                style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </section>
    <!--====== CONTACT PART END ======-->

    @include('components.brands')
@endsection
