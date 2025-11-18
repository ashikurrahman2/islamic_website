@extends('frontend.app')

@section('title', 'Gallary')

@section('content')
   <div class="breadcumb-wrapper " data-bg-src="{{ asset('/') }}frontend/assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Gallery page</h1>
                <ul class="breadcumb-menu">
                    <li><a href="/">Home</a></li>
                    <li>Gallery</li>
                </ul>
            </div>
        </div>

    </div>
{{-- Gallery --}}
  {{-- Gallery --}}
<div class="overflow-hidden space">
    <div class="container">
        @if($galleries->isNotEmpty())
            <div class="row gy-4 filter-active load-more-active">
                @foreach($galleries as $index => $gallery)
                    <div class="col-md-6 col-xxl-auto filter-item {{ $index >= 7 ? 'd-none' : '' }}">
                        <div class="gallery-card style2">
                            <div class="box-img global-img">
                                @if($gallery->gallery_image)
                                    <img src="{{ asset('storage/' . $gallery->gallery_image) }}" alt="{{ $gallery->title ?? 'gallery image' }}">
                                @else
                                    <img src="{{ asset('frontend/assets/img/gallery/default.jpg') }}" alt="gallery image">
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            
            {{-- Load More Button --}}
            @if($galleries->count() > 7)
                <div class="text-center mt-4">
                    <button class="th-btn load-more-btn">Load More<i class="fa-duotone fa-spinner ms-2"></i></button>
                </div>
            @endif
        @else
            <div class="row">
                <div class="col-12 text-center py-5">
                    <div class="alert alert-info d-inline-block">
                        <i class="fas fa-info-circle me-2"></i>
                        <strong>No Gallery Images Available</strong>
                        <p class="mb-0 mt-2">Gallery images will be available soon.</p>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
@endsection