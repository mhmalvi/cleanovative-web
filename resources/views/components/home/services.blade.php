<!--====== SERVICE PART START ======-->
<section class="service-section" style="background-image: url({{ asset('images/service-bg.png') }});">
    <div class="container">
        <div class="section-title white-color text-center both-border mb-50">
            <h2>
                Are you looking for the right company <br> to make your home or office look <br> as good as new?
            </h2>
            <p class="title-tag">Company Services</p>
        </div>
        <div class="row service-loop">
            <div class="col-lg-3 col-md-6 wow fadeInLeft" data-wow-delay=".3s">
                <div class="single-service">
                    <div class="service-bg">
                        <img src="{{ asset('images/service-1.jpg') }}" alt="service" class="img-fluid rounded-top">
                        <a href="{{ route('services.details', ['service' => 'house-residential-cleaning']) }}"
                            class="service-link">
                            <img src="{{asset('images/icons/mop.png')}}" alt="">
                        </a>
                    </div>
                    <div class="service-content rounded-bottom">
                        <h6>Strata Cleaning</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                <div class="single-service active">
                    <div class="service-bg">
                        <img src="{{ asset('images/service-2.jpg') }}" alt="service" class="img-fluid rounded-top">
                        <a href="{{ route('services.details', ['service' => 'end-of-lease-cleaning']) }}"
                            class="service-link">
                            <img src="{{asset('images/icons/sanitizer.png')}}" alt="">
                        </a>
                    </div>
                    <div class="service-content rounded-bottom">
                        <h6>End of Lease Cleaning</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mx-auto wow fadeInRight" data-wow-delay=".7s">
                <div class=" single-service">
                    <div class="service-bg">
                        <img src="{{ asset('images/service-3.jpg') }}" alt="service" class="img-fluid rounded-top">
                        <a href="{{ route('services.details', ['service' => 'office-commercial-cleaning']) }}"
                            class="service-link">
                            <img src="{{asset('images/icons/street.png')}}" alt="">
                        </a>
                    </div>
                    <div class="service-content rounded-bottom">
                        <h6>Construction Cleaning</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mx-auto wow fadeInRight" data-wow-delay=".7s">
                <div class=" single-service">
                    <div class="service-bg">
                        <img src="{{ asset('images/service-4.jpg') }}" alt="service" class="img-fluid rounded-top">
                        <a href="{{ route('services.details', ['service' => 'party-event-cleaning']) }}"
                            class="service-link">
                            <img src="{{asset('images/icons/cleaning-cart.png')}}" alt="">
                        </a>
                    </div>
                    <div class="service-content rounded-bottom">
                        <h6>Party-Event Cleaning</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mx-auto wow fadeInRight" data-wow-delay=".7s">
                <div class=" single-service">
                    <div class="service-bg">
                        <img src="{{ asset('images/service-5.jpg') }}" alt="service" class="img-fluid rounded-top">
                        <a href="{{ route('services.details', ['service' => 'construction-cleaning']) }}"
                            class="service-link">
                            <img src="{{asset('images/icons/cleaning.png')}}" alt="">
                        </a>
                    </div>
                    <div class="service-content rounded-bottom">
                        <h6>Office Cleaning</h6>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mx-auto wow fadeInRight" data-wow-delay=".7s">
                <div class=" single-service">
                    <div class="service-bg">
                        <img src="{{ asset('images/service-6.jpg') }}" alt="service" class="img-fluid rounded-top">
                        <a href="{{ route('services.details', ['service' => 'strata-cleaning']) }}"
                            class="service-link">
                            <img src="{{asset('images/icons/house.png')}}" alt="">
                        </a>
                    </div>
                    <div class="service-content rounded-bottom">
                        <h6>Residential Cleaning</h6>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mx-auto wow fadeInRight" data-wow-delay=".7s">
                <div class=" single-service">
                    <div class="service-bg">
                        <img src="{{ asset('images/service-7.jpg') }}" alt="service" class="img-fluid rounded-top">
                        <a href="{{ route('services.details', ['service' => 'other-commercial-cleaning']) }}"
                            class="service-link">
                            <img src="{{asset('images/icons/spray-bottle.png')}}" alt="">
                        </a>
                    </div>
                    <div class="service-content rounded-bottom">
                        <h6>Other Cleaning</h6>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mx-auto wow fadeInRight" data-wow-delay=".7s">
                <div class=" single-service">
                    <div class="service-bg">
                        <img src="{{ asset('images/service-8.jpg') }}" alt="service" class="img-fluid rounded-top">
                        <a href="{{ route('services.details', ['service' => 'other-commercial-cleaning']) }}"
                            class="service-link">
                            <img src="{{asset('images/icons/carpet-cleaner.png')}}" alt="">
                        </a>
                    </div>
                    <div class="service-content rounded-bottom">
                        <h6>Deep Cleaning</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== SERVICE PART END ======-->
