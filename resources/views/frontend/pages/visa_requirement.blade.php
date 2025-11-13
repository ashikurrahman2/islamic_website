@extends('frontend.app')

@section('title', 'VISA Requirement')

@section('content')
{{-- Breadcumb --}}
<div class="breadcumb-wrapper" data-bg-src="{{ asset('/') }}frontend/assets/img/bg/breadcumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title mt-5">Visa Requirement</h1>
            <ul class="breadcumb-menu">
                <li><a href="/">Home</a></li>
                <li>Visa Requirement</li>
            </ul>
        </div>
    </div>
</div>

<div class="container-fluid py-5">
    <div class="row g-4">
        <!-- Left Column - Documents -->
        <div class="col-lg-6">
            <div class="px-4">
                <h1 class="main-title">Required Documents</h1>
                
                <div>
                    @if(isset($visaRequirement) && $visaRequirement->documents)
                        <ul class="doc-list">
                            @foreach($visaRequirement->documents as $document)
                                @if(trim($document))
                                    <li>{!! $document !!}</li>
                                @endif
                            @endforeach
                        </ul>
                    @endif
                    
                    @if(isset($visaRequirement) && $visaRequirement->note)
                        <p class="note-text">NOTE: {!! $visaRequirement->note !!}</p>
                    @endif
                </div>
            </div>
        </div>
        
        <!-- Right Column - Image -->
        <div class="col-lg-6">
            <div class="px-4">
                @if(isset($visaRequirement) && $visaRequirement->image)
                    <img src="{{ Storage::url($visaRequirement->image) }}" 
                         alt="Visa Requirement" 
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
<div class="bottom-notice">
    <div class="container">      
    </div>
</div>

@endsection