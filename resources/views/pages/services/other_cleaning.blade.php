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
    <img class="main-thumb" src="{{ asset('images/service-details.jpg') }}" alt="Image">
    <h2 class="sub-title text-center py-3">Why Choose Our Services</h2>
    <ul class="service-list">
        <li class="d-flex align-items-center">
            <span class="icon"><i class="far fa-check"></i></span>
            <p>
                Satisfaction guaranteed – If you are unhappy with the clean, simply contact us within 48 hours and we will re-do it. If your still unhappy we will provide a refund.
            </p>
        </li>
        <li class="d-flex align-items-center">
            <span class="icon"><i class="far fa-check"></i></span>
            <p>
                We are insured, so your always covered!
            </p>
        </li>
        <li class="d-flex align-items-center">
            <span class="icon"><i class="far fa-check"></i></span>
            <p>
                We are simple, and so is our booking system.
            </p>
        </li>
        <li class="d-flex align-items-center">
            <span class="icon"><i class="far fa-check"></i></span>
            <p>
                We are honest and straightforward. The price quoted is our final price. There are no hidden charges.
            </p>
        </li>
        <li class="d-flex align-items-center">
            <span class="icon"><i class="far fa-check"></i></span>
            <p>
                We care about the satisfaction and happiness of everyone involved with our service.
            </p>
        </li>
    </ul>
@endsection
