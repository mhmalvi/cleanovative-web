@extends('pages.service_details')

@section('banner')
    @php
        $content =
            "
            <p>
                Worried about the mess made after construction work? A post-construction property becomes hazardous for our tradies and you due to the mess made.
                At Cleanovative our professional and certified cleaners will make sure your new property is safe,
                breathable and spotless when you walk in, so you and your loved ones can actually feel like it's brand new.
            </p>
            ";
    @endphp
    @include('components.service_details.banner', ['banner_title' => 'Construction Cleaning', 'content' => $content])
@endsection

@section('service_content')
<div class="pt-100 pb-50"></div>
@endsection

@section('checklist')
    <div class="container mt-30 mb-70">
        <h2 class="sub-title text-md-center mb-85">
            What is included in our construction cleaning service?
        </h2>

        <p class="text-center mt-25 mb-25">
            Our standard cleaning service is a more frequent cleaning option for a home that is already well kept
        </p>

        <div class="row mt-25">
            <div class="col-md-6">
                <h6 class="text-uppercase mb-3">All Rooms</h6>

                <ul class="service-checklist">
                    <li>
                        <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Clean Interior Glass &amp; Doors<br>
                        <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Remove Trash<br>
                        <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Remove Painters Tape &amp; Masking Tape As Needed<br>
                        <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Wipe Down Window Trims<br>
                        <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Vacuum Carpet<br>
                        <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Mop Hard Surfaces<br>
                        <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Clean &amp; Remove Marks Form Walls<br>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('images/services/construction-1.jpg') }}" alt="">
            </div>
        </div>
        <div class="row mt-25">
            <div class="col-md-6">
                <img src="{{ asset('images/services/construction-2.jpg') }}" alt="">
            </div>
            <div class="col-md-6">
                <h6 class="text-uppercase mb-3">Bathrooms</h6>

                <ul class="service-checklist">
                    <li>
                        <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Scrub &amp; Clean Toilets<br>
                        <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Scrub &amp; Clean Sinks<br>
                        <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Mop / Clean Floors<br>
                        <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Wipe Down Cabinets<br>
                        <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Clean &amp; Remove Marks From Walls<br>
                        <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Clean Mirrors &amp; Glass<br>
                        <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Wipe / Clean Taps
                    </li>
                </ul>
            </div>
        </div>
        <div class="row mt-25">
            <div class="col-md-6">
                <h6 class="text-uppercase mb-3">KITCHEN</h6>

                <ul class="service-checklist">
                    <li><span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Wipe / Clean Countertops<br>
                        <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Empty &amp; Replace Bins<br>
                        <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Wipe / Clean Appliances<br>
                        <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Vacuum / Mop Floors<br>
                        <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Wipe / Clean Cabinets &amp; Handles<br>
                        <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Wipe / Clean Splashback<br>
                        <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Clean Window &amp; Window Sills<br>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('images/services/construction-3.jpg') }}" alt="">
            </div>
        </div>
        <div class="row mt-25">
            <div class="col-md-6">
                <img src="{{ asset('images/services/construction-4.jpg') }}" alt="">
            </div>
            <div class="col-md-6">
                <h6 class="text-uppercase mb-3">Additional servics</h6>

                <ul class="service-checklist">
                    <li><span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Carpet Steam Cleaning<br>
                        <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Pressure Washing<br>
                        <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Car park / Basement Cleaning<br>
                        <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>We can cater to most post construction cleans;
                        give us a call to learn more.
                    </li>
                </ul>
            </div>
        </div>

        <div class="text-center mt-85">
            <a class="main-btn booking-btn main-btn-3" href="#">
                Book Now
                <i class="fal fa-plus"></i>
            </a>
        </div>
    </div>
@endsection

@section('custom_form')
    @include('components.service_details.commercial_booking_form')
@endsection
