<!--====== SERVICE PART START ======-->
<section class="service-section" style="background-image: url({{ asset('images/service-bg.png') }});">
    <div class="container-fluid">
        <div class="section-title white-color text-center both-border mb-50">
            <h2>
                Are you looking for the right company <br> to make your home or office look <br> as good as new?
            </h2>
            <p class="title-tag">Company Services</p>
        </div>
        <div class="row service-loop">
            <div class="col-lg-3 col-md-6 wow fadeInLeft" data-wow-delay=".3s">
                <div class="single-service">
                    <div class="service-bg" style="background-image: url({{ asset('images/service-1.jpg') }});">
                        <a href="{{ route('service.house_cleaning') }}"
                            class="service-link"><i class="fal fa-long-arrow-right"></i></a>
                    </div>
                    <div class="service-content">
                        <h6>House Cleaning</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                <div class="single-service active">
                    <div class="service-bg" style="background-image: url({{ asset('images/service-2.jpg') }});">
                        <a href="{{ route('service.deep_cleaning') }}"
                            class="service-link"><i class="fal fa-long-arrow-right"></i></a>
                    </div>
                    <div class="service-content">
                        <h6>Deep Cleaning</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mx-auto wow fadeInRight" data-wow-delay=".7s">
                <div class=" single-service">
                    <div class="service-bg" style="background-image: url({{ asset('images/service-3.jpg') }});">
                        <a href="{{ route('service.end_of_lease_cleaning') }}"
                            class="service-link"><i class="fal fa-long-arrow-right"></i></a>
                    </div>
                    <div class="service-content">
                        <h6>End of Lease Cleaning</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mx-auto wow fadeInRight" data-wow-delay=".7s">
                <div class=" single-service">
                    <div class="service-bg" style="background-image: url({{ asset('images/service-4.jpg') }});">
                        <a href="{{ route('service.party_event_cleaning') }}"
                            class="service-link"><i class="fal fa-long-arrow-right"></i></a>
                    </div>
                    <div class="service-content">
                        <h6>Party-Event Cleaning</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mx-auto wow fadeInRight" data-wow-delay=".7s">
                <div class=" single-service">
                    <div class="service-bg" style="background-image: url({{ asset('images/service-5.jpg') }});">
                        <a href="{{ route('service.office_cleaning') }}"
                            class="service-link"><i class="fal fa-long-arrow-right"></i></a>
                    </div>
                    <div class="service-content">
                        <h6>Office Cleaning</h6>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mx-auto wow fadeInRight" data-wow-delay=".7s">
                <div class=" single-service">
                    <div class="service-bg" style="background-image: url({{ asset('images/service-6.jpg') }});">
                        <a href="{{ route('service.construction_cleaning') }}"
                            class="service-link"><i class="fal fa-long-arrow-right"></i></a>
                    </div>
                    <div class="service-content">
                        <h6>Construction Cleaning</h6>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mx-auto wow fadeInRight" data-wow-delay=".7s">
                <div class=" single-service">
                    <div class="service-bg" style="background-image: url({{ asset('images/service-7.jpg') }});">
                        <a href="{{ route('service.strata_cleaning') }}"
                            class="service-link"><i class="fal fa-long-arrow-right"></i></a>
                    </div>
                    <div class="service-content">
                        <h6>Strata Cleaning</h6>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mx-auto wow fadeInRight" data-wow-delay=".7s">
                <div class=" single-service">
                    <div class="service-bg" style="background-image: url({{ asset('images/service-8.jpg') }});">
                        <a href="{{ route('service.other_cleaning') }}"
                            class="service-link"><i class="fal fa-long-arrow-right"></i></a>
                    </div>
                    <div class="service-content">
                        <h6>Other Cleaning</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== SERVICE PART END ======-->
