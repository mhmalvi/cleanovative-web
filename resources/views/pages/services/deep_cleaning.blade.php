@extends('pages.service_details')

@section('banner')
    @include('components.service_details.banner', ['banner_title' => 'Deep Cleaning'])
@endsection

@section('service_title', 'Deep Cleaning')

@section('service_content')
    <p>
        What better way to get your house looking its absolute best than with a thorough, professional deep clean? 
        Imagine a house that is spotless from top to bottom, every room neat and tidy with nothing left out of place; 
        if it sounds a dream, Maid For You is here to make that dream come true! Our deep cleaning services are guaranteed 
        to leave you thoroughly satisfied with A++ cleaning results that leave no ‘missed spots’ in your home. Thanks to a 
        team of trusted and dedicated cleaners, customers can expect nothing short of top quality service from beginning to end.
    </p>

    <p>
        Deep cleaning of your home is one of the most important things you can do to maintain its condition and, in turn, increase the resale value of your property. Of course, 
        for anyone who is simply concerned with keeping a neat and sanitary home, Maid For You’s deep cleaning services are the way to go!
    </p>

    <a class="main-btn booking-btn main-btn-3 mt-50 mb-50" href="#">
        Book Now
        <i class="fal fa-plus"></i>
    </a>
@endsection
