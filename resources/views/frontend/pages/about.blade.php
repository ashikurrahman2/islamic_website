@extends('frontend.app')

@section('title', 'About')

@section('content')
   <div class="breadcumb-wrapper " data-bg-src="{{ asset('/') }}frontend/assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title mt-5">About page</h1>
                <ul class="breadcumb-menu">
                    <li><a href="/">Home</a></li>
                    <li>About</li>
                </ul>
            </div>
        </div>

    </div>
@if($about && $about->is_active)
<div class="about-area space-bottom" id="about-sec">
    <div class="container">
        <div class="row gy-4">
            <div class="col-xl-6">
                <div class="">
                    <div class="title-area about-title-area">
                        <span class="sub-title-img">
                            <img src="{{ asset('/') }}frontend/assets/img/theme-img/title_shape.svg" alt="shape">
                        </span>
                        <h2 class="sec-title text-anime-style-3">welcome to tawba</h2>
                        <span class="title-img">
                            <img src="{{ asset('/') }}frontend/assets/img/theme-img/title_shape2.svg" alt="shape">
                        </span>
                    </div>
                    
                    {{-- Dynamic About Paragraph --}}
                    @if($about->about_paragraph)
                    <p class="mt-n2 fs-18 wow fadeInUp" data-wow-delay=".2s">
                        {{ $about->about_paragraph }}
                    </p>
                    @endif

                    <div class="about-feature-wrap">
                        {{-- Dynamic Mission --}}
                        @if($about->mission)
                        <div class="about-feature wow fadeInUp" data-wow-delay=".4s">
                            <div class="box-icon">
                                <img src="{{ asset('/') }}frontend/assets/img/icon/about_1_1.svg" alt="Icon">
                            </div>
                            <div class="media-body">
                                <h3 class="box-title">Our Mission</h3>
                                <p class="box-text">{{ $about->mission }}</p>
                            </div>
                        </div>
                        @endif

                        {{-- Dynamic Vision --}}
                        @if($about->vision)
                        <div class="about-feature wow fadeInUp" data-wow-delay=".5s">
                            <div class="box-icon">
                                <img src="{{ asset('/') }}frontend/assets/img/icon/about_1_2.svg" alt="Icon">
                            </div>
                            <div class="media-body">
                                <h3 class="box-title">Our Vision</h3>
                                <p class="box-text">{{ $about->vision }}</p>
                            </div>
                        </div>
                        @endif
                    </div>

                    {{-- <div class="btn-group justify-content-between align-items-start wow fadeInUp" data-wow-delay=".6s">
                        <a href="#" class="th-btn style2 th-icon">
                            <span class="btn-text" data-back="Read More History" data-front="Read More History"></span>
                        </a>
                    </div> --}}
                </div>
            </div>

            <div class="col-xl-6 mb-30 mb-xl-0">
                <div class="img-box1 wow fadeInRight" data-wow-delay=".6s">
                    <div class="img1" data-bg-src="{{ asset('/') }}frontend/assets/img/shape/shape-2.png">
                        {{-- Dynamic About Image --}}
                        @if($about->about_image)
                            <img src="{{ asset('storage/' . $about->about_image) }}" alt="About Tawba">
                        @else
                            <img src="{{ asset('/') }}frontend/assets/img/normal/about_1_1.jpg" alt="About">
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="shape-mockup" data-top="0%" data-right="0%">
        <img src="{{ asset('/') }}frontend/assets/img/shape/about-shape.png" alt="shape">
    </div>
</div>
@else
{{-- Message when status is inactive or no data --}}
<div class="about-area space-bottom" id="about-sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="alert alert-info text-center p-5 wow fadeInUp" data-wow-delay=".2s">
                    <div class="mb-3">
                        <img src="{{ asset('/') }}frontend/assets/img/icon/info-icon.svg" alt="Info" style="width: 60px; height: 60px;">
                    </div>
                    <h4 class="mb-3">About Content Currently Unavailable</h4>
                    <p class="mb-0">We're updating our about section. Please check back soon for more information about our services.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection