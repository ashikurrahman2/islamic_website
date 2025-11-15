@extends('frontend.app')

@section('title', 'Free consultation')

@section('content')
  {{-- Breadcumb --}}
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('/') }}frontend/assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Free Consultation</h1>
                <ul class="breadcumb-menu">
                    <li><a href="/">Home</a></li>
                    <li>Free Consultation</li>
                </ul>
            </div>
        </div>
    </div>

    {{-- Consultation --}}
  <div class="container my-5">
        <!-- Header Text -->
        <div class="row mb-5">
            <div class="col-12">
                <p class="text-center fs-5 lh-lg px-md-5">
                    Experience As-Sunnah Travels free consultation which can assist you with Hajj, Umrah, and visa needs.
                    We simplify the process, provide expert advice, and guide you every step of the way according to
                    Sunnah. Schedule an appointment today and start your sacred journey with confidence.
                </p>
            </div>
        </div>

        <!-- Service Cards -->
        <div class="row g-4">
            <!-- Hajj Guidance Card -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 text-center p-4 border-success">
                    <div class="card-body">
                        <div class="mb-4">
                            <i class="fa-solid fa-kaaba text-success" style="font-size: 3rem;"></i>
                        </div>
                        <h3 class="card-title text-success fw-bold mb-4">Hajj Guidance</h3>
                        <p class="card-text text-dark lh-lg">
                            Get personalized advice on Hajj planning, allowing you to focus on your spiritual journey without the stress.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Umrah Support Card -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 text-center p-4 border-success">
                    <div class="card-body">
                        <div class="mb-4">
                            <i class="fa-solid fa-mosque text-success" style="font-size: 3rem;"></i>
                        </div>
                        <h3 class="card-title text-success fw-bold mb-4">Umrah Support</h3>
                        <p class="card-text text-dark lh-lg">
                            Our experts will help you navigate the Umrah process, ensuring a fulfilling experience tailored to your needs.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Visa Assistance Card -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 text-center p-4 border-success">
                    <div class="card-body">
                        <div class="mb-4">
                            <i class="fa-solid fa-passport text-success" style="font-size: 3rem;"></i>
                        </div>
                        <h3 class="card-title text-success fw-bold mb-4">Visa Assistance</h3>
                        <p class="card-text text-dark lh-lg">
                            Receive guidance on visa requirements and application processes to make your travel preparations smoother.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection