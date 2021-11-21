@extends('pages.service_details')

@section('banner')
    @php
        $content =
            "
            <p>
                Apart from the specialist industry-based cleaning, Cleanovative can also provide generalist building cleaning services for all types of Sydney businesses.
                We can clean Schools, Childcare, Offices, Industrial, Warehouses, Restaurants/cafes, Leisure/sport centres, Gyms, Hotels, Retreats, Showrooms & Retail outlets ,
                Stadium, bank branches and many more
            </p>
            ";
    @endphp
    @include('components.service_details.banner', ['banner_title' => 'Other Commercial Cleaning', 'content' => $content])
@endsection

@section('service_title', 'Other Commercial Cleaning')

@section('service_content')
{{-- <div class="pt-100 pb-50"></div> --}}
@endsection

@section('custom_form')
    @include('components.service_details.commercial_booking_form')
@endsection
