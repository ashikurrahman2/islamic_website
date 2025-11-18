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

        <!-- Consultation Cards -->
      <div class="row g-4">
    @foreach($consults as $consult)
        <div class="col-lg-4 col-md-6">
            <div class="card h-100 text-center p-4 border-success shadow-sm hover:shadow-lg transition-shadow duration-300">
                <div class="card-body">
                    <div class="mb-4">
                        <i class="fa-solid {{ $consult->icon }} text-success" style="font-size: 3rem;"></i>
                    </div>
                    <h3 class="card-title text-success fw-bold mb-4">
                        {{ $consult->title }}
                    </h3>
                    <p class="card-text text-dark lh-lg">
                        {{ $consult->description }}
                    </p>
                </div>
            </div>
        </div>
    @endforeach
</div>
    </div>

@endsection