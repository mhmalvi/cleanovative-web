@extends('pages.service_details')

@section('banner')
    @include('components.service_details.banner', ['banner_title' => 'Strata Cleaning'])
@endsection

@section('service_title', 'Strata Cleaning')

@section('service_content')
    <p>
        Strata is one of the major maintenance industries for real-estate. At Cleanovative, we make sure our professional team keeps your housing clean and spotless, making a safe and hygienic environment for all tenants in the building. We work with the construction & building committee and site managers to keep all pub areas and amenities clean and hygenic. Cleanovative provides a top class standard to all strata properties.
    </p>

    <p>
        Please call us on 180 xxx xxx to discuss maintenance on your strata property.
    </p>

    <a class="main-btn booking-btn main-btn-3 mt-50 mb-50" href="#">
        Book Now
        <i class="fal fa-plus"></i>
    </a>
@endsection
