<!--====== SERVICE PART START ======-->
<section class="service-section" style="background-image: url({{ asset('images/service-bg.png') }});">
    <div class="container">
        <div class="section-title white-color text-center both-border mb-40">
            <h2 class="pb-0">
                Our Services
            </h2>
        </div>
        <div class="row service-loop">
            <div class="col-lg-3 col-md-6 mx-auto wow fadeInRight" data-wow-delay=".3s">
                <a href="{{ route('service.house_cleaning') }}">
                    <div class="single-service">
                        <div class="service-bg">
                            <img src="{{ asset('images/service-1.jpg') }}" alt="service" class="img-fluid rounded-top img-main-bg">
                            <a href="{{ route('service.house_cleaning') }}"
                                class="service-link">
                                <img src="{{asset('images/icons/house.png')}}" alt="">
                            </a>
                        </div>
                        <div class="service-content rounded-bottom">
                            <h6>House Cleaning</h6>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6 mx-auto wow fadeInRight" data-wow-delay=".3s">
                <a href="{{ route('service.deep_cleaning') }}">
                    <div class=" single-service">
                        <div class="service-bg">
                            <img src="{{ asset('images/service-2.jpg') }}" alt="service" class="img-fluid rounded-top">
                            <a href="{{ route('service.deep_cleaning') }}"
                                class="service-link">
                                <img src="{{asset('images/icons/carpet-cleaner.png')}}" alt="">
                            </a>
                        </div>
                        <div class="service-content rounded-bottom">
                            <h6>Deep Cleaning</h6>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6 wow fadeInRight" data-wow-delay=".5s">
                <a href="{{ route('service.end_of_lease_cleaning') }}"">
                    <div class="single-service active">
                        <div class="service-bg">
                            <img src="{{ asset('images/service-3.jpg') }}" alt="service" class="img-fluid rounded-top">
                            <a href="{{ route('service.end_of_lease_cleaning') }}"
                                class="service-link">
                                <img src="{{asset('images/icons/sanitizer.png')}}" alt="">
                            </a>
                        </div>
                        <div class="service-content rounded-bottom">
                            <h6>End of Lease Cleaning</h6>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6 mx-auto wow fadeInRight" data-wow-delay=".5s">
                <a href="{{ route('service.party_event_cleaning') }}">
                    <div class=" single-service">
                        <div class="service-bg">
                            <img src="{{ asset('images/service-4.jpg') }}" alt="service" class="img-fluid rounded-top">
                            <a href="{{ route('service.party_event_cleaning') }}"
                                class="service-link">
                                <img src="{{asset('images/icons/cleaning-cart.png')}}" alt="">
                            </a>
                        </div>
                        <div class="service-content rounded-bottom">
                            <h6>Party-Event Cleaning</h6>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6 mx-auto wow fadeInUp" data-wow-delay=".7s">
                <a href="{{ route('service.office_cleaning') }}">
                    <div class=" single-service">
                        <div class="service-bg">
                            <img src="{{ asset('images/service-5.jpg') }}" alt="service" class="img-fluid rounded-top">
                            <a href="{{ route('service.office_cleaning') }}"
                                class="service-link">
                                <img src="{{asset('images/icons/cleaning.png')}}" alt="">
                            </a>
                        </div>
                        <div class="service-content rounded-bottom">
                            <h6>Office Cleaning</h6>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6 mx-auto wow fadeInUp" data-wow-delay=".7s">
                <a href="{{ route('service.construction_cleaning') }}">
                    <div class=" single-service">
                        <div class="service-bg">
                            <img src="{{ asset('images/service-6.jpg') }}" alt="service" class="img-fluid rounded-top">
                            <a href="{{ route('service.construction_cleaning') }}"
                                class="service-link">
                                <img src="{{asset('images/icons/street.png')}}" alt="">
                            </a>
                        </div>
                        <div class="service-content rounded-bottom">
                            <h6>Construction Cleaning</h6>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                <a href="{{ route('service.strata_cleaning') }}">
                    <div class="single-service">
                        <div class="service-bg">
                            <img src="{{ asset('images/service-7.jpg') }}" alt="service" class="img-fluid rounded-top">
                            <a href="{{ route('service.strata_cleaning') }}"
                                class="service-link">
                                <img src="{{asset('images/icons/mop.png')}}" alt="">
                            </a>
                        </div>
                        <div class="service-content rounded-bottom">
                            <h6>Strata Cleaning</h6>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6 mx-auto wow fadeInUp" data-wow-delay=".7s">
                <a href="{{ route('service.other_cleaning') }}">
                    <div class=" single-service">
                        <div class="service-bg">
                            <img src="{{ asset('images/service-8.jpg') }}" alt="service" class="img-fluid rounded-top">
                            <a href="{{ route('service.other_cleaning') }}"
                                class="service-link">
                                <img src="{{asset('images/icons/spray-bottle.png')}}" alt="">
                            </a>
                        </div>
                        <div class="service-content rounded-bottom">
                            <h6>Other Cleaning</h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="text-center pt-60 pb-30">
            <a class="main-btn booking-btn main-btn-3 mt-10 mb-0" href="{{ route('book_now') }}" target="_blank">
                Book Now
                <i class="fal fa-plus"></i>
            </a>
        </div>
    </div>
</section>
<!--====== SERVICE PART END ======-->
