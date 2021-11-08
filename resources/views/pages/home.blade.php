@extends('layouts.app')

@section('title', 'Cleanovative')

@section('content')

    @include('components.home.slider')

    @include('components.home.features')

    @include('components.home.about_section')

    @include('components.home.services')

    @include('components.home.team')

    @include('components.testimonials')

    @include('components.booking_steps', ['number' => '04'])

    @include('components.home.why_choose_us')

    @include('components.home.statistics')

    @include('components.home.call_to_action')

    @include('components.home.appointment')

    @include('components.brands')

@endsection
