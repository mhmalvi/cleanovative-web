@extends('pages.service_details')

@section('banner')
    @php
        $content =
            "
            <p>
                Planning on having a party or an event? Worried about the mess after? At Cleanovative we cater for every after party cleaning services. 
                While you grab a coffee and enjoy the memories of your crazy night, our experienced team will help you clean your entire house or event with 
                quality products and make it spotless. Our areas of focus are pool, lounge, back deck and other areas where the fun happens. 
            </p>
            "
    @endphp
    @include('components.service_details.banner', ['banner_title' => 'Party-Event Cleaning', 'content' => $content])
@endsection

@section('service_title', 'Party-Event Cleaning')

@section('service_content')
    <div class="text-center pt-50 pb-50">
        <img class="main-thumb" src="{{ asset('images/service-details.jpg') }}" alt="Image" class="img-fluid">
    </div>
@endsection

@section('custom_form')
    @include('components.service_details.commercial_booking_form')
@endsection
