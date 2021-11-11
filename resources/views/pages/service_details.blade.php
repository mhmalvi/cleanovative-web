@extends('layouts.app')

@section('title', 'Service Details | Cleanovative')

@section('content')

    @yield('banner')

    <!--====== SERVICE DETAILS PART START ======-->
    <section class="service-details-wrap pt-130 pb-130">
        <div class="container">
            <div class="row">
                @include('components.service_details._sidebar')
                <div class="col-lg-8 order-1 order-lg-2">
                    <div class="details-content">
                        <h1 class="title">
                            @yield('service_title')
                        </h1>
                        <p>
                            @yield('service_content')
                        </p>
                        <img class="main-thumb" src="{{ asset('images/service-details.jpg') }}" alt="Image">
                        <h2 class="sub-title">Why Choose Our Services</h2>
                        <ul class="service-list">
                            <li class="d-flex align-items-center">
                                <span class="icon"><i class="far fa-check"></i></span>
                                <p>
                                    Satisfaction guaranteed – If you are unhappy with the clean, simply contact us within 48 hours and we will re-do it. If your still unhappy we will provide a refund.
                                </p>
                            </li>
                            <li class="d-flex align-items-center">
                                <span class="icon"><i class="far fa-check"></i></span>
                                <p>
                                    We are insured, so your always covered!
                                </p>
                            </li>
                            <li class="d-flex align-items-center">
                                <span class="icon"><i class="far fa-check"></i></span>
                                <p>
                                    We are simple, and so is our booking system.
                                </p>
                            </li>
                            <li class="d-flex align-items-center">
                                <span class="icon"><i class="far fa-check"></i></span>
                                <p>
                                    We are honest and straightforward. The price quoted is our final price. There are no hidden charges.
                                </p>
                            </li>
                            <li class="d-flex align-items-center">
                                <span class="icon"><i class="far fa-check"></i></span>
                                <p>
                                    We care about the satisfaction and happiness of everyone involved with our service.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5 mb-50">
            @include('components.booking-banner')
        </div>

        @yield('checklist')
    </section>
    <!--====== SERVICE AREA STOP ======-->



    @include('components.brands')

@endsection
