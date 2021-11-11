@extends('layouts.app')

@section('title', 'Gift Cards | Cleanovative')

@section('content')
    <!--====== BREADCRUMB PART START ======-->
    <section class="breadcrumb-area" style="background-image: url({{ asset('images/breadcrumb.jpg') }});">
        <div class="container">
            <div class="breadcrumb-text text-center">
                <h1 class="page-title text-dark">Gift Cards</h1>
                <ul>
                    <li><a class="text-dark" href="{{ route('home') }}">Home</a></li>
                    <li class="sep text-dark"><i class="fal fa-angle-double-right"></i></li>
                    <li class="text-dark">Gift Cards</li>
                </ul>
            </div>
        </div>
    </section>
    <!--====== BREADCRUMB PART END ======-->

    <!--====== ABOUT PART START ======-->
    <section class="about-section">
        <div class="container-fluid px-0">
            <iframe src="https://cleanovative.bookingkoala.com/gift-cards/send?embed=true" style="border:none;height:1000px;" width="100%" scrolling="no"></iframe>
            <script src="https://cleanovative.bookingkoala.com/resources/embed.js" defer></script>
        </div>
    </section>
    <!--====== ABOUT PART END ======-->
@endsection
