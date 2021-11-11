@extends('layouts.app')

@section('title', "About Us | Cleanovative")

@section('content')

    <!--====== BREADCRUMB PART START ======-->
    <section class="breadcrumb-area" style="background-image: url({{ asset('images/breadcrumb.jpg') }});">
        <div class="container">
            <div class="breadcrumb-text text-center">
                <h1 class="page-title text-dark">About Us</h1>
                <ul>
                    <li><a class="text-dark" href="{{ route('home') }}">Home</a></li>
                    <li class="sep text-dark"><i class="fal fa-angle-double-right"></i></li>
                    <li class="text-dark">About Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!--====== BREADCRUMB PART END ======-->
    <!--====== ABOUT PART START ======-->
    <section class="about-section pt-130 pb-100">
        <div class="container">
            <!-- About Text -->
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6">
                    <div class="about-img text-center wow fadeInLeft" data-wow-delay=".3s">
                        <img src="{{ asset('images/about-img.jpg') }}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-text">
                        <div class="section-title left-border mb-40">
                            <h2>Who We Are</h2>
                            <p class="title-tag">About Company</p>
                        </div>
                        <p>
                            We constantly pursue perfection to better improve our
                            efficacy and retain consistency with our service.
                            Our focus is to maintain exceptional and responsive
                            customer service every time.
                        </p>

                        <h4 class="my-2">Why We Are Different</h4>
                        <ul class="list-group">
                            <li class="list-group-item">
                                Satisfaction guaranteed – If you are unhappy with the clean, simply contact us within 48 hours
                                and we will re-do it. If your still unhappy we will provide a refund.
                            </li>
                            <li class="list-group-item">
                                We are insured, so your always covered!
                            </li>
                            <li class="list-group-item">
                                We are simple, and so is our booking system
                            </li>
                            <li class="list-group-item">
                                We are honest and straightforward. The price quoted is our final price.
                                There are no hidden charges
                            </li>
                            <li class="list-group-item">
                                We care about the satisfaction and happiness of everyone involved with our service.
                            </li>
                        </ul>

                        <a class="main-btn main-btn-3 mt-50" href="{{ route('about_us') }}">Learn More<i
                                class="fal fa-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== ABOUT PART END ======-->

    @include('components.booking_steps')

    <!--====== STATISTICS PART START ======-->
    @include('components.booking-banner')
    <!--====== STATISTICS PART END ======-->

    <!--====== EXPERIENCE PART START ======-->
    <section class="experience-section-two pt-130 pb-130">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay=".3s">
                    <div class="experience-img text-center">
                        <img src="{{ asset('images/experience-3.jpg') }}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay=".3s">
                    <div class="experience-content">
                        <h3>We Are A Professional Cleaning Service Agency</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam,
                            eaque ipsa quae ab illo inventore veritatis et quasi architecto</p>
                        <ul class="experience-list">
                            <li>
                                <span class="icon">
                                    <i class="flaticon-tag"></i>
                                </span>
                                <h4>Best Offers & Support</h4>
                                <p>Sedut perspiciatis unde omnis iste natus voluptaem
                                    accusantium doloremque laudantium totame</p>
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="flaticon-avatar"></i>
                                </span>
                                <h4>Product & Team Member</h4>
                                <p>Quis autem vel eum iure repreheanderiin eavelit esse
                                    quam nihil molestiae consequatur velillum</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== EXPERIENCE PART END ======-->

    @include('components.testimonials')

    @include('components.brands')

@endsection
