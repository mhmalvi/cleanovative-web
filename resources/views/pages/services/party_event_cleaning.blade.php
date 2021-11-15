@extends('pages.service_details')

@section('banner')
    @php
        $content =
            "
            <p>
                Planning on having a party or an event? Worried about the mess after? You’ve come to the right spot, at Cleanovative we cater for every after party cleaning services.
            </p>
            "
    @endphp
    @include('components.service_details.banner', ['banner_title' => 'Party-Event Cleaning', 'content' => $content])
@endsection

@section('service_title', 'Party-Event Cleaning')

@section('service_content')
    <div class="row">
        <div class="col-md-6">
            <img class="main-thumb" src="{{ asset('images/service-details.jpg') }}" alt="Image">
        </div>
        <div class="col-md-6">
            <p>
                While you grab a coffee and enjoy the memories of your crazy night, our experienced team will help you clean your entire house or event with quality products and make it spotless. Our areas of focus are pool, lounge, back deck and other areas where the fun happens. 

            </p>
            <br>
            <p>
                Let us take the stress for you and show you how the professionals does it at Cleanovative, 
            </p>
            <br>
            <p>
                Call us in 1800 xxx xxx and in less than a minute get a quote and book us for your crazy party aftermath.
            </p>
        </div>
    </div>
@endsection
