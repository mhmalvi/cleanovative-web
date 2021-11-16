@extends('layouts.app')

@section('title', 'Service Details | Cleanovative')

@section('content')

    @yield('banner')

    @include('components.services.pricing')

    <!--====== SERVICE DETAILS PART START ======-->
    <section class="service-details-wrap pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="pt-100 pb-50">
                        @yield('service_content')
                    </div>
                </div>
            </div>
        </div>

        @yield('checklist')

        <div class="mt-5 mb-0">
            @include('components.booking-banner')
        </div>

    </section>
    <!--====== SERVICE AREA STOP ======-->
@endsection
