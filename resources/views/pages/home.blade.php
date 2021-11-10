@extends('layouts.app')

@section('title', 'Cleanovative')

@section('content')

    @include('components.home.slider')

    @include('components.home.why_choose_us')

    @include('components.home.services')

    @include('components.testimonials')

    @include('components.home.statistics')

    @include('components.home.call_to_action')

    @include('components.booking_steps', ['number' => '04'])

    @include('components.home.about_section')

    <section>
        <div class="banner-new">
            <h2 class="banner-title pb-3">We provide whatever you need for cleaning service</h2>
            <p class="banner-para">
                So just grab a coffee and sit back, we will take take care of everything
            </p>
        </div>
    </section>

    @include('components.home.appointment')

@endsection
