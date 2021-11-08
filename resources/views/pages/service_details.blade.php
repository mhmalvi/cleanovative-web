@extends('layouts.app')

@section('title', 'Service Details | Cleanovative')

@section('content')

    @include('components.service_details.banner')

    @include('components.service_details.details', ['data' => $item])

    @include('components.brands')

@endsection
