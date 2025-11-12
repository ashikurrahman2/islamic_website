@extends('frontend.app')

@section('title', 'Umrah Significance')

@section('content')
{{-- Breadcumb --}}
<div class="breadcumb-wrapper" data-bg-src="{{ asset('/') }}frontend/assets/img/bg/breadcumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title mt-5">Umrah Significance</h1>
            <ul class="breadcumb-menu">
                <li><a href="/">Home</a></li>
                <li>Umrah Significance</li>
            </ul>
        </div>
    </div>
</div>
 <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h1 class="text-dark">{{ $significance->title }}</h1>
                    <p>{{ $significance->description_one }}</p>
                    <p>{{ $significance->description_two }}</p>
                </div>
                <div class="col-lg-6">
                    <div class="hajj-guide-card">
                        <h2 class="guide-title">{!! nl2br(e($significance->guide_title)) !!}</h2>
                        <div class="guide-path">
                            <!-- Kaaba Center -->
                            <div class="kaaba-center">🕋</div>

                            <!-- All Steps -->
                             @foreach($significance->activeSteps as $step)
                            <div class="guide-step step-{{ $step->step_number }}">
                                <div class="step-number">{{ $step->step_number }}</div>
                                <div class="step-icon">🕋</div>
                                <div class="step-label">{!! nl2br(e($step->step_label)) !!}</div>
                            </div>
                         @endforeach

                            {{-- <div class="guide-step step-2">
                                <div class="step-number">2</div>
                                <div class="step-icon">🕋</div>
                                <div class="step-label">Tawaf<br>Al-Qudoom</div>
                            </div> --}}

                            {{-- <div class="guide-step step-3">
                                <div class="step-number">3</div>
                                <div class="step-icon">🏃</div>
                                <div class="step-label">Sa'i between<br>Safa & Marwa</div>
                            </div> --}}

                            {{-- <div class="guide-step step-4">
                                <div class="step-number">4</div>
                                <div class="step-icon">⛺</div>
                                <div class="step-label">Go to Mina</div>
                            </div> --}}

                            {{-- <div class="guide-step step-5">
                                <div class="step-number">5</div>
                                <div class="step-icon">⛰️</div>
                                <div class="step-label">Spend Time<br>in Arafat</div>
                            </div> --}}
{{-- 
                            <div class="guide-step step-6">
                                <div class="step-number">6</div>
                                <div class="step-icon">🌙</div>
                                <div class="step-label">Spend night<br>in Muzdalifah<br>& collect pebbles</div>
                            </div> --}}

                            {{-- <div class="guide-step step-7">
                                <div class="step-number">7</div>
                                <div class="step-icon">🪨</div>
                                <div class="step-label">Pelt only<br>Jamarah<br>al-Aqaba</div>
                            </div> --}}

                            {{-- <div class="guide-step step-8">
                                <div class="step-number">8</div>
                                <div class="step-icon">🐑</div>
                                <div class="step-label">Sacrifice<br>Animal</div>
                            </div> --}}

                            {{-- <div class="guide-step step-9">
                                <div class="step-number">9</div>
                                <div class="step-icon">✂️</div>
                                <div class="step-label">Shave/<br>Trim Hair</div>
                            </div> --}}

                            {{-- <div class="guide-step step-10">
                                <div class="step-number">10</div>
                                <div class="step-icon">🕋</div>
                                <div class="step-label">Tawaf<br>Al-Ifadha</div>
                            </div> --}}

                            {{-- <div class="guide-step step-11">
                                <div class="step-number">11</div>
                                <div class="step-icon">🪨</div>
                                <div class="step-label">Pelt all Jamarah<br>al-Ula, al-Wusta,<br>al-Aqaba</div>
                            </div> --}}

                            {{-- <div class="guide-step step-12">
                                <div class="step-number">12</div>
                                <div class="step-icon">👋</div>
                                <div class="step-label">Farewell<br>Tawaf</div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Step by Step Guide Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title">{{ $significance->section_title }}</h2>
            <p class="text-center mb-5" style="font-size: 1.1rem;">
            {{ $significance->section_description }}
            </p>

            <div class="row">
                <div class="col-12">
                         @foreach($significance->activeSteps as $step)
                  <div class="step-detail-card">
                    <h3>{{ $step->detail_title }}</h3>
                    <p>{{ $step->detail_description }}</p>
                </div>
                  @endforeach
                </div>
            </div>
        </div>
        <div>
            <h2 class="text-center ml-2 text-success">{{ $significance->congratulation_message }}</h2>
        </div>
    </section>
@endsection