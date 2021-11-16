@extends('layouts.app')

@section('title', "About Us | Cleanovative")

@section('content')

    <!--====== BREADCRUMB PART START ======-->
    <section class="breadcrumb-area" style="background-image: url({{ asset('images/breadcrumb.jpg') }});">
        <div class="container">
            <div class="breadcrumb-text text-center">
                <h1 class="page-title text-dark">About Us</h1>
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
                            We wanted to support ourselves by doing something that makes a difference in people’s lives. 
                            That’s why have created an innovative platform to provide trustworthy and reliable professional cleaners. 
                            Our top-quality services, affordable prices, and the cleaner’s years of service industry experience here in 
                            Cleanovative makes all our clients trust us as we take their needs into account, truly becoming their partners-in-clean.
                        </p>
                        <p>
                            We bring together the best professionals in the industry and our management team with client service excellence together in one dedicated team.
                        </p>
                        <p>
                            At Cleanovative we are driven by our core values and seek only to have like-minded, passionate and driven individuals join our team. 
                            From head office, our field cleaning teams, trainers and all other supportive teams – we all have one mission: To care for our clients by 
                            providing industry leading customer service experiences and great quality cleaning.
                        </p>
                        <p>
                           Our cleaners are rewarded above industry rates and infinite company perks as we truly value their hard work and dedication. Yet our goal remains to provide our 
                           cleaning services at the most affordable prices as we believe home and other industry cleaning can be easily accessible. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== ABOUT PART END ======-->

    <!--====== STATISTICS PART START ======-->
    @include('components.booking-banner')
    <!--====== STATISTICS PART END ======-->

    <!--====== EXPERIENCE PART START ======-->
    <section class="experience-section-two pt-130 pb-130">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 wow fadeInRight" data-wow-delay=".3s">
                    <div class="experience-content">
                        <h3>Why Cleanovative?</h3>
                        <ul class="experience-list">
                            <li>
                                <span class="icon">
                                    <i class="flaticon-tag"></i>
                                </span>
                                <h4>Because we care.</h4>
                                <p>
                                    Yes, Dysons vacuums are great, though they rarely make you fall back in love with your home – but we can!

                                    With our detailed checklists and verified cleaners, we will leave you and your home happy, relaxed and like never before.
                                    Our mission is to bring ‘that spark’ back to your home. Our team is bonded, reliable, fully insured and background checked for
                                    your security and comfort.

                                    Because at the end of the day, we’re not just cleaning – we’re taking care of your biggest asset.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay=".3s">
                    <div class="experience-img text-center">
                        <img src="{{ asset('images/experience.jpg') }}" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== EXPERIENCE PART END ======-->

    @include('components.home.statistics')   


    <!--====== EXPERIENCE PART START ======-->
    <section class="experience-section-two pt-130 pb-130">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay=".3s">
                    <div class="experience-img text-center">
                        <img src="{{ asset('images/mission.jpg') }}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay=".3s">
                    <div class="experience-content">
                        <h3>Our Mission </h3>
                        <ul class="experience-list">
                            <li>
                                <span class="icon">
                                    <img src="{{asset('images/icons/target.png')}}" alt="">
                                </span>
                                <p>
                                    Our mission is very simple! Working a 9-5 job can be exhausting, and the last thing you want to do when you get home is clean. We aren’t here to judge. 
                                    Instead, we live to get those pesky yet crucial tasks off your to-do list, so you can spend that precious time doing the things you enjoy.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== EXPERIENCE PART END ======-->

    @include('components.home.call_to_action')

@endsection
