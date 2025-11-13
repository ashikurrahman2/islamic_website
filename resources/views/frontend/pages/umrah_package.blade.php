@extends('frontend.app')

@section('title', 'Umrah Package')

@section('content')

   <div class="breadcumb-wrapper " data-bg-src="{{ asset('/') }}frontend/assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title mt-5">Umrah Package</h1>
                <ul class="breadcumb-menu">
                    <li><a href="/">Home</a></li>
                    <li>Package</li>
                </ul>
            </div>
        </div>

    </div>

<<!-- Header Section -->
<div class="header-section" style="background: rgb(224, 224, 35);">
    <div class="container">
        <h1 class="text-dark">Your Journey to Makkah: Explore As-Sunnah Travels {{ date('Y') }} Umrah Fixed & Shifting Packages</h1>
        <p>Choose the perfect Umrah package for your spiritual journey</p>
    </div>
</div>

<!-- Packages Section -->
<div class="container py-5">
    <div class="row">
        @foreach($packages as $package)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="package-card">
                    <div class="package-icon">
                        <i class="{{ $package->icon_class }}"></i>
                    </div>
                    <h3 class="package-title">{{ $package->title }}</h3>
                    <p class="package-description">{{ $package->description }}</p>

                    <div class="price-section">
                        <span class="currency">BDT</span>
                        <div class="price">{{ number_format($package->price) }}</div>
                        <span class="price-label">Starts From</span>
                    </div>

                    <div class="features">
                        @foreach($package->features as $feature)
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="{{ $feature['icon'] }}"></i>
                                </div>
                                <div class="feature-text">{{ $feature['text'] }}</div>
                            </div>
                        @endforeach
                    </div>

                    <a href="tel:+8801700000000" class="btn btn-call">
                        CALL NOW
                    </a>

                        @if($package->pdf_path)
                            <a href="{{ route('package.download', $package->id) }}" class="btn btn-download">
                            <i class="fas fa-download"></i> DOWNLOAD PACKAGE DETAILS
                    </a>
                    <!-- PREVIEW BUTTON  -->
                    <a href="{{ Storage::url($package->pdf_path) }}" target="_blank" class="btn btn-sm btn-info mt-2">
                        <i class="fas fa-eye"></i> Preview PDF
                    </a>
                @else
                    <button class="btn btn-download" disabled>
                        PDF NOT AVAILABLE
                    </button>
                @endif

                    <p class="terms-text">*Terms & Conditions Applicable</p>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection