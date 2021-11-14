@extends('layouts.app')

@section('title', 'Service Details | Cleanovative')

@section('content')

    @yield('banner')

    <!--====== SERVICE DETAILS PART START ======-->
    <section class="service-details-wrap pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="pt-100 pb-100">
                        @yield('service_content')
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5 mb-50">
            @include('components.booking-banner')
        </div>

        @yield('checklist')

        <!--====== PRICING BOX PART START ======-->
        <section class="pricing-boxes pt-10 pb-30">
            <div class="container">
                <div class="section-title text-center both-border mb-80">
                    <h2>Our Best Pricing Plan For <br>
                        Cleaning Services</h2>
                    <p class="title-tag">Pricing Plan</p>
                </div>
                <!-- Pricing Loop -->
                <div class="row pricing-loop">
                    <!-- Single box -->
                    <div class="col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay=".3s">
                        <div class="pricing-box mb-30">
                            <h2 class="pricing-title">
                                Regular <br> Package
                            </h2>
                            <span class="price-tag">25.49</span>
                            <p>But must explain to you how all this mistaken idea of denouncin pleasure and praising
                                pain
                                was born</p>
                            <p>Denouncin pleasure and praisin pain was born and will give complete</p>
                            <a class="main-btn" href="#">Chose Plan <i class="fal fa-plus"></i></a>
                            <span class="pricing-icon"><img src="assets/img/pricing-icon.png" alt="Icon"></span>
                        </div>
                    </div>
                    <!-- Single box -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="pricing-box mb-30 active">
                            <h2 class="pricing-title">
                                Standard <br> Package
                            </h2>
                            <span class="price-tag">45.49</span>
                            <p>Sed ut perspicias unde omnis natus error sit voluptatem accu laudantium totam rem aperiam
                                eaque ipsa</p>
                            <p>Lorem ipsum dolor sit amet contetue adipiscing elit, sed do eiusmod</p>
                            <a class="main-btn" href="#">Chose Plan <i class="fal fa-plus"></i></a>
                            <span class="pricing-icon"><img src="assets/img/pricing-icon.png" alt="Icon"></span>
                        </div>
                    </div>
                    <!-- Single box -->
                    <div class="col-lg-4 col-md-6 mx-auto wow fadeInRight" data-wow-delay=".7s">
                        <div class="pricing-box mb-30">
                            <h2 class="pricing-title">
                                Golden <br> Package
                            </h2>
                            <span class="price-tag">99.99</span>
                            <p>Duis aute irue dolor in reprehenderit in voluptate velit esseu fugia pariatur sint
                                occaecat cupidatat none</p>
                            <p>Must explain to you how all mistaken denouncing pleasure praising</p>
                            <a class="main-btn" href="#">Chose Plan <i class="fal fa-plus"></i></a>
                            <span class="pricing-icon"><img src="assets/img/pricing-icon.png" alt="Icon"></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== PRICING BOX PART END ======-->
    </section>
    <!--====== SERVICE AREA STOP ======-->
@endsection
