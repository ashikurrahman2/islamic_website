@extends('frontend.app')

@section('title', 'Pre Ragistration')

@section('content')
{{-- Breadcumb --}}
<div class="breadcumb-wrapper" data-bg-src="{{ asset('/') }}frontend/assets/img/bg/breadcumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Pre Registration</h1>
            <ul class="breadcumb-menu">
                <li><a href="/">Home</a></li>
                <li>Pre Registration</li>
            </ul>
        </div>
    </div>
</div>

{{-- Pre registration --}}
@if($hajjDocument)
<div class="container-fluid py-5">
    <div class="row g-4">
        <!-- Left Column - Documents -->
        <div class="col-lg-6">
            <div class="px-4">
                <h1 class="main-title">{{ $hajjDocument->title }}</h1>
                
                <p class="gov-fee">Government Fee: {{ $hajjDocument->currency }} {{ number_format($hajjDocument->government_fee, 0) }}/person</p>
                
                <div>
                    @foreach($hajjDocument->categories as $index => $category)
                        <p class="section-title">{{ $index + 1 }}. {{ $category->category_title }}</p>
                        <ul class="doc-list">
                            @foreach($category->items as $item)
                                <li>{{ $item->item_text }}</li>
                            @endforeach
                        </ul>
                    @endforeach
                    
                    @foreach($hajjDocument->notes as $note)
                        <p class="note-text">NOTE: {{ $note->note_text }}</p>
                    @endforeach
                </div>
            </div>
        </div>
        
        <!-- Right Column - Image -->
        <div class="col-lg-6">
            <div class="px-4">
                @if($hajjDocument->kaaba_image)
                    <img src="{{ asset('storage/' . $hajjDocument->kaaba_image) }}" 
                         alt="Masjid al-Haram and Kaaba" 
                         class="kaaba-img">
                @else
                    <img src="https://images.unsplash.com/photo-1591604129939-f1efa4d9f7fa?w=800&q=80" 
                         alt="Masjid al-Haram and Kaaba" 
                         class="kaaba-img">
                @endif
            </div>
        </div>
    </div>
</div>

<!-- Bottom Notice -->
@if($hajjDocument->bottom_notice_line1 || $hajjDocument->bottom_notice_line2)
<div class="bottom-notice">
    <div class="container">
        @if($hajjDocument->bottom_notice_line1)
            <p><strong>{{ $hajjDocument->bottom_notice_line1 }}</strong></p>
        @endif
        @if($hajjDocument->bottom_notice_line2)
            <p><strong>{{ $hajjDocument->bottom_notice_line2 }}</strong></p>
        @endif
    </div>
</div>
@endif
@else
<div class="container py-5">
    <div class="alert alert-info">
        No Hajj document information available at this time.
    </div>
</div>
@endif

@endsection