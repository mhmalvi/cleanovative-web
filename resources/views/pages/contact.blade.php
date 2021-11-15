@extends('layouts.app')

@section('title', 'Contact | Cleanovative')

@section('content')
    <!--====== BREADCRUMB PART START ======-->
    <section class="breadcrumb-area contact-breadcrumb-area" style="background-image: url({{ asset('images/breadcrumb.jpg') }});">
        <div class="container">
            <div class="breadcrumb-text text-center">
                <h1 class="page-title text-dark">Contact Us</h1>
            </div>
        </div>
    </section>
    <!--====== BREADCRUMB PART END ======-->
    <!--====== CONTACT PART START ======-->
    <section class="contact-wrap">
        <div class="container">
            <!-- Contact Info boxes -->
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="contact-info-boxes">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Single Boxes -->
                                <div class="card pt-25 pb-25 text-center mt-25">
                                    <div class="card-body">
                                        <span class="icon h2">
                                            <img src="{{ asset('images/icons/contact.png') }}" alt="phone">
                                        </span>
                                        <h6 class="title py-2">Phone Number</h6>
                                        <p class="info"><a href="tel:0401396554">0401396554</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Single Boxes -->
                                <div class="card pt-25 pb-25 text-center mt-25">
                                    <div class="card-body">
                                    <span class="icon h2">
                                        <img src="{{ asset('images/icons/mail.png') }}" alt="email">
                                    </span>
                                    <h6 class="title py-2">Email Address</h6>
                                    <p class="info">
                                        <a href="mailto:info.cleanovative@gmail.com">
                                            info.cleanovative@gmail.com
                                        </a>
                                    </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Conatact Form -->
                    <div class="row pb-60 pt-5">
                        <div class="col-md-6 pt-50 pb-5">
                            <div class="section-title left-border mb-30">
                                <h2>Say Hello</h2>
                                <p class="title-tag">Leave A Message</p>
                            </div>
                            <form action="#">
                                <div class="row">
                                    <div class="form-group col-12">
                                        <input type="text" class="form-control" placeholder="Your Name*" required>
                                    </div>
                                    <div class="form-group col-12">
                                        <input type="text" class="form-control" placeholder="Your Business name">
                                    </div>
                                    <div class="form-group col-12">
                                        <input type="tel" class="form-control" placeholder="Your Phone Number*">
                                    </div>
                                    <div class="form-group col-12">
                                        <input type="email" class="form-control" placeholder="Your Email*">
                                    </div>
                                    <div class="form-group col-12">
                                        <textarea class="form-control" placeholder="Brief comment about your enquiry"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="main-btn"> Send <i class="fal fa-plus"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6 pt-50 pb-15 order-first order-md-last">
                            <img src="{{asset('images/contact-us.jpg')}}" alt="contact us" class="img-thumbnail">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact map -->
        <div class="contact-maps">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d300144.19500548753!2d150.89996767325184!3d-33.78246478597199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney%20NSW%2C%20Australia!5e0!3m2!1sen!2sbd!4v1636882319928!5m2!1sen!2sbd"
                style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </section>
    <!--====== CONTACT PART END ======-->

@endsection
