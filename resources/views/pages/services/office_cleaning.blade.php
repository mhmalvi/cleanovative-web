@extends('pages.service_details')

@section('banner')
    @php
        $content =
            "
                <p>
                    It is critical to maintain the cleanliness of the office in order to instil pride in the workplace, impress clients, and preserve hygiene.
                     We believe that everyone, including you, your employees, and your customers, deserves to come to work in a clean atmosphere.
                     We take pride in providing high-quality cleaning services at a fair price that are personalised to your individual or company needs.
                </p>
            ";
    @endphp
    @include('components.service_details.banner', ['banner_title' => 'Office Cleaning', 'content' => $content])
@endsection

@section('service_title', 'Office Cleaning')

@section('service_content')
    <div class="text-center pt-50 pb-50">
        <img class="main-thumb" src="{{ asset('images/services/office.jpg') }}" alt="Image" class="img-fluid">
    </div>
@endsection

@section('checklist')
    <div class="container mt-100 mb-50">
        <h2 class="sub-title text-md-center mb-85">
            What is included in our office cleaning service?
        </h2>
        <ul class="nav nav-pills service-nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link service-nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Standard</a>
            </li>
        </ul>

        <p class="text-center mt-25 mb-25">
            Our office cleaning service is perfect for preparing the homes for new tenants/owners, homes needing extra care, or getting your bond money back.
        </p>

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row mt-25">
                    <div class="col-md-6">
                        <h6 class="text-uppercase mb-3">Standard Services</h6>

                        <ul class="service-checklist">
                            <li><span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Vacuum all carpeted areas.<br>
                                <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Empty rubbish bins.<br>
                                <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Wipe clean kitchen benchtop, sink and taps.<br>
                                <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Wipe clean microwave ovens and kitchen appliances.<br>
                                <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Spot clean kitchen cabinet doors.<br>
                                <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Mop all hard surface floors.<br>
                                <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Clean, sanitise and deodorise restrooms including: clean and polish mirrors, disinfect toilets, empty rubbish bins and mop floors with disinfectant.<br>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-6">
                        <img src="{{ asset('images/services/office-1.jpg') }}" class="rounded">
                    </div>
                </div>

                <div class="row mt-25">
                    <div class="col-md-6">
                        <img src="{{ asset('images/services/office-2.jpg') }}" class="rounded">
                    </div>
                    <div class="col-md-6">
                        <h6 class="text-uppercase mb-3">Optional Services</h6>

                        <ul class="service-checklist">
                            <li>
                                <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Refill of biodegradable toilet paper, soap dispenser and paper towel.<br>
                                <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Computer, printer and telephone sanitizing and cleaning.<br>
                                <span class="correct"><i class="fas fa-check-circle mr-2"></i></span>Office’s can vary greatly and so can your requirements to the clean. If there are special requests you can give us a call.<br>
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

@section('custom_form')
    @include('components.service_details.commercial_booking_form')
@endsection
