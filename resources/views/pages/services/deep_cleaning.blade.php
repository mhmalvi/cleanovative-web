@extends('pages.service_details')

@section('banner')
    @php
        $content =
            "
            <p>
                What better way to get your house looking its absolute best than with a thorough, professional deep clean?
                Imagine a house that is spotless from top to bottom, every room neat and tidy with nothing left out of place.
            </p>
            ";
    @endphp
    @include('components.service_details.banner', ['banner_title' => 'Deep Cleaning', 'content' => $content])
@endsection

@section('service_title', 'Deep Cleaning')

@section('service_content')
    <div class="row">
        <div class="col-md-6">
            <img class="main-thumb" src="{{ asset('images/service-details.jpg') }}" alt="Image">
        </div>
        <div class="col-md-6">
            <p>
                At Cleanovative our professional and certified cleaners will make sure your new property is safe, breathable and spotless when you walk in, so you and your loved ones can actually feel like it's brand new.
            </p>
            <br>
            <p>
                Please call us on 180 xxx xxx to discuss a construction cleaning service on your property
            </p>
        </div>
    </div>
@endsection

@section('checklist')
    <div class="container mt-30 mb-70">
        <h2 class="sub-title text-md-center mb-85">
            What is included in our deep cleaning service?
        </h2>
        <ul class="nav nav-pills service-nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link service-nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Standard</a>
            </li>
        </ul>

        <p class="text-center mt-25 mb-25">
            Our standard cleaning service is a more frequent cleaning option for a home that is already well kept
        </p>

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row mt-25">
                    <div class="col-md-4 py-3">
                        <h6 class="text-uppercase">BEDROOMS, LIVING ROOMS AND ALL COMMON AREAS</h6>

                        <ul class="service-checklist">
                            <li>
                                <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Clean switches &amp; doorknobs<br>
                                <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Clean hallways &amp; staircases<br>
                                <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Vacuum &amp; mop all floors<br>
                                <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Dust &amp; wipe down all surfaces<br>
                                <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Empty Bins<br>
                                <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Make Beds (upon request)<br>
                                <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Dust furniture<br>
                                <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Clean window ledges<br>
                                <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Quick de-clutter of floors<br>
                                <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Clean cobwebs<br>
                                <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Wipe down electronics<br>
                                <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Clean Mirrors<br>
                                <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Detail skirting boards<br>
                                <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Detail all doors &amp; door frames<br>
                                <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Clean ceiling fans &amp; A.C vents<br>
                                <span class="wrong"><i class="fas fa-times-circle mr-2"></i></span>Clean inside cabinets, drawers &amp; shelves<br>
                                <span class="wrong"><i class="fas fa-times-circle mr-2"></i></span>Inside windows + Window Tracks
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 py-3">
                        <h6 class="text-uppercase">BATHROOM & LAUNDRY</h6>

                        <ul class="service-checklist">
                            <li>
                                <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Clean floors<br>
                                <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Scrub toilets<br>
                                <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Clean outside of cabinets &amp; drawers<br>
                                <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Clean bathtub &amp; shower<br>
                                <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Clean sink &amp; taps<br>
                                <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Clean mirrors<br>
                                <span class="correct"><i class="fas fa-check-circle mr-2 icon-color-red"></i></span>Clean inside of cabinets &amp; drawers
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 py-3">
                        <h6 class="text-uppercase">KITCHEN</h6>

                        <ul class="service-checklist">
                            <li><span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Stack &amp; run dishwasher (upon request)<br>
                                <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Wipe down outside of appliances<br>
                                <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Wet wipe outside of fridge<br>
                                <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Wet wipe outside of oven<br>
                                <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Clean outside of cabinets &amp; drawers<br>
                                <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Clean all surfaces<br>
                                <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Clean sink<br>
                                <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Clean stove<br>
                                <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Vacuum &amp; mop floors<br>
                                <span class="correct"><i class="fas fa-check-circle mr-2 icon-color-red"></i></span>Clean inside oven<br>
                                <span class="correct"><i class="fas fa-check-circle mr-2 icon-color-red"></i></span>Clean range hood &amp; filters<br>
                                <span class="correct"><i class="fas fa-check-circle mr-2 icon-color-red"></i></span>Clean inside cabinets, shelves &amp; drawers
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-85">
            <a class="main-btn booking-btn main-btn-3" href="{{ route('book_now') }}" target="_blank">
                Book Now
                <i class="fal fa-plus"></i>
            </a>
        </div>
    </div>
@endsection
