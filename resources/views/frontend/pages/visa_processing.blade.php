@extends('frontend.app')

@section('title', 'Visa Processing')

@section('content')
{{-- Breadcumb --}}
<div class="breadcumb-wrapper" data-bg-src="{{ asset('/') }}frontend/assets/img/bg/breadcumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title mt-5">Visa Processing</h1>
            <ul class="breadcumb-menu">
                <li><a href="/">Home</a></li>
                <li>Visa Processing</li>
            </ul>
        </div>
    </div>
</div>

@if($visaStats->isNotEmpty())
    @foreach($visaStats as $stat)
        <!-- Hero Section -->
        <section class="bg-light py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="text-center lead px-3 px-md-5 mx-auto" style="max-width: 1400px;">
                            {{ $stat->header_description }}
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="bg-white py-5">
            <div class="container">
                <div class="row g-4 text-center">
                    <!-- Stat 1 -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="h-100 d-flex flex-column justify-content-center border-end border-secondary border-opacity-25">
                            <h2 class="display-3 fw-bold text-success mb-2">{{ number_format($stat->applicants) }}</h2>
                            <p class="text-uppercase mb-0 fw-semibold">VISA APPLICANTS</p>
                        </div>
                    </div>

                    <!-- Stat 2 -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="h-100 d-flex flex-column justify-content-center border-end border-secondary border-opacity-25">
                            <h2 class="display-3 fw-bold text-success mb-2">{{ $stat->serving_countries }}</h2>
                            <p class="text-uppercase mb-0 fw-semibold">SERVING COUNTRIES</p>
                        </div>
                    </div>

                    <!-- Stat 3 -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="h-100 d-flex flex-column justify-content-center border-end border-secondary border-opacity-25">
                            <h2 class="display-3 fw-bold text-success mb-2">{{ $stat->satisfied_clients }}</h2>
                            <p class="text-uppercase mb-0 fw-semibold">SATISFIED CLIENT'S</p>
                        </div>
                    </div>

                    <!-- Stat 4 -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="h-100 d-flex flex-column justify-content-center">
                            <h2 class="display-3 fw-bold text-success mb-2">{{ $stat->experience_year }}</h2>
                            <p class="text-uppercase mb-0 fw-semibold">YEARS OF EXPERIENCE</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Expert Guidance Section -->
        <section class="bg-light py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center display-5 fw-normal text-success mb-4">Get Your Visa with Our Expert Guidance</h2>
                        <p class="text-center lead px-3 px-md-5 mx-auto" style="max-width: 1400px;">
                            {{ $stat->guidence_description ?? 'As-Sunnah Travels boasts a team of seasoned experts whose deep understanding of Bangladesh\'s intricate visa landscape sets them apart.' }}
                        </p>
                    </div>
                </div>
            </div>
        </section>
    @endforeach
@else
    <!-- No Active Stats Message -->
    <section class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="lead">No visa statistics available at the moment.</p>
                </div>
            </div>
        </div>
    </section>
@endif

@endsection