@extends('pages.service_details')

@section('banner')
    @php
        $content =
            "
            <p>
                Apart from the specialist industry-based cleaning, cleanovative can also provide generalist building cleaning services for all types of sydney businesses.
            </p>
            ";
    @endphp
    @include('components.service_details.banner', ['banner_title' => 'Other Cleaning', 'content' => $content])
@endsection

@section('service_title', 'Other Cleaning')

@section('service_content')
    <div class="row">
        <div class="col-md-6">
            <img class="main-thumb" src="{{ asset('images/service-details.jpg') }}" alt="Image">
        </div>
        <div class="col-md-6">
            <p>
                We can clean Schools, Childcare, Offices, Industrial, Warehouses, Restaurants/cafes, Leisure/sport centres, Gyms, Hotels, Retreats, Showrooms & Retail outlets , Stadium, bank branches and many more
            </p>

            <br>
            <p>
                Please call us on 0401396554 to discuss our services on your site.
            </p>
        </div>
    </div>
@endsection
