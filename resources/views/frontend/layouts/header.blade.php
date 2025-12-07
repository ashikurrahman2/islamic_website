<header class="th-header header-layout1 header-absolute">
    @php
        $setting = \App\Models\Settings::first();
    @endphp
    
    <div class="header-top bg-success">
        <div class="container">
            <div class="row justify-content-center justify-content-md-between align-items-center">
                <div class="col-auto d-none d-md-block">
                    <div class="header-links">
                        <ul class="info-list">
                            {{-- English Date --}}
                            <li>
                                <i class="fa-solid fa-calendar-days"></i>
                                <span>
                                    @if($hijriDate)
                                        {{ $hijriDate['gregorian_day'] }} {{ $hijriDate['gregorian_month'] }} {{ $hijriDate['gregorian_year'] }}
                                    @else
                                        {{ now()->format('d F Y') }}
                                    @endif
                                </span>
                            </li>
                            {{-- Arabic/Hijri Date --}}
                            <li>
                                <i class="fa-solid fa-calendar-days"></i>
                                <span>
                                    @if($hijriDate)
                                        {{ $hijriDate['hijri_day'] }} {{ $hijriDate['hijri_month'] }} {{ $hijriDate['hijri_year'] }}
                                    @else
                                        6 Rajab 1446
                                    @endif
                                </span>
                            </li>    
                            {{-- Weather section --}}
                            @if($weather && isset($weather['current']))
                                <li class="weather-item">
                                    <img src="{{ $weather['current']['condition']['icon'] }}" 
                                        alt="Weather" 
                                        style="width: 20px; height: 20px; vertical-align: middle;">
                                    <span>{{ round($weather['current']['temp_c']) }}°C, {{ $weather['current']['condition']['text'] }}</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-location-dot"></i>
                                    <span>{{ $weather['location']['name'] }}, {{ $weather['location']['country'] }}</span>
                                </li>
                            @else
                                <li>
                                    <i class="fa-solid fa-cloud-slash"></i>
                                    <span>Weather unavailable</span>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="header-links">
                        <ul>
                            <li class="">
                                <img src="{{ asset('/') }}frontend/assets/img/icon/light.svg" alt="">
                                <span>Sunrise At: 
                                    <span class="fw-medium">
                                        @if($astronomy && isset($astronomy['astronomy']['astro']['sunrise']))
                                            {{ $astronomy['astronomy']['astro']['sunrise'] }}
                                        @else
                                            6:20 AM
                                        @endif
                                    </span>
                                </span>
                            </li>
                            <li class="">
                                <img src="{{ asset('/') }}frontend/assets/img/icon/sunrise.svg" alt="">
                                <span>Sunset At: 
                                    <span class="fw-medium">
                                        @if($astronomy && isset($astronomy['astronomy']['astro']['sunset']))
                                            {{ $astronomy['astronomy']['astro']['sunset'] }}
                                        @else
                                            5:20 PM
                                        @endif
                                    </span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="sticky-wrapper">
        <!-- Main Menu Area -->
        <div class="container">
            <div class="menu-area">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="{{ url('/') }}">
                                @if($setting && $setting->web_logo)
                                    <img src="{{ asset('storage/' . $setting->web_logo) }}" alt="Mosque Logo">
                                @else
                                    <img src="{{ asset('/') }}frontend/assets/img/logo.svg" alt="Tawba">
                                @endif
                            </a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <ul>
                                <li>
                                    <a href="/">Home</a>
                                </li>

                                <li class="menu-item-has-children">
                                    <a href="#">ABOUT</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('abouts') }}">About Us</a></li>
                                        <li><a href="{{ route('gel') }}">Gallery</a></li>
                                        <li><a href="{{ route('ramadan.timing') }}">Sahri & Iftar Time</a></li>
                                    </ul>
                                </li>
                                
                                <li class="menu-item-has-children">
                                    <a href="#">HAJJ</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('pre.reg') }}">Pre-registration</a></li>
                                        <li><a href="{{ route('visa.req') }}">VISA Requirement</a></li>
                                        <li><a href="{{ route('hajj.pack') }}">Package</a></li>
                                        <li><a href="{{ route('sign.req') }}">Significance</a></li>
                                    </ul>
                                </li>

                                <li class="menu-item-has-children">
                                    <a href="#">UMRAH</a>
                                    <ul class="sub-menu">
                                        <li><a href="courses-details.html">VISA Requirement</a></li>
                                        <li><a href="{{ route('umrah.pack') }}">Package</a></li>
                                        <li><a href="{{ route('umrahsign.req') }}">Significance</a></li>
                                    </ul>
                                </li>

                                <li class="menu-item-has-children">
                                    <a href="#">ASSISTANCE</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('sult.pack') }}">Free Consultation</a></li>
                                        <li><a href="{{ route('visa.pro') }}">VISA Processing</a></li>
                                    </ul>
                                </li>

                                <li><a href="{{ route('cont.pack') }}">Contact Us</a></li>
                            </ul>
                        </nav>
                        <div class="header-button">
                            <button type="button" class="th-menu-toggle d-inline-block d-lg-none"><i class="far fa-bars"></i></button>
                        </div>
                    </div>
                    <div class="col-auto d-none d-xl-block">
                        <div class="header-button">
                            <a href="{{ route('cont.pack') }}" class="th-btn th-icon"><span class="btn-text" data-back="Donate Now" data-front="Donate Now"></span> </a>
                            <button type="button" class="icon-btn searchBoxToggler"><i class="far fa-search"></i></button>
                            <a href="#" class="icon-btn sideMenuToggler d-none d-lg-block"><img src="{{ asset('/') }}frontend/assets/img/icon/grid.svg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="th-menu-wrapper">
        <div class="th-menu-area text-center">
            <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="{{ url('/') }}">
                    @if($setting && $setting->web_logo)
                        <img src="{{ asset('storage/' . $setting->web_logo) }}" alt="Mosque Logo">
                    @else
                        <img src="{{ asset('/') }}frontend/assets/img/logo.svg" alt="Tawba">
                    @endif
                </a>
            </div>
            <div class="th-mobile-menu">
                <ul>
                    <li>
                        <a href="/">Home</a>
                    </li>

                    <li class="menu-item-has-children">
                        <a href="#">ABOUT</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('abouts') }}">About Us</a></li>
                            <li><a href="{{ route('gel') }}">Gallery</a></li>
                            <li><a href="{{ route('ramadan.timing') }}">Sahri & Iftar Time</a></li>
                        </ul>
                    </li>
                    
                    <li class="menu-item-has-children">
                        <a href="#">HAJJ</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('pre.reg') }}">Pre-registration</a></li>
                            <li><a href="{{ route('visa.req') }}">VISA Requirement</a></li>
                            <li><a href="{{ route('hajj.pack') }}">Package</a></li>
                            <li><a href="{{ route('sign.req') }}">Significance</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children">
                        <a href="#">UMRAH</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('umrah.pack') }}">Package</a></li>
                            <li><a href="{{ route('umrahsign.req') }}">Significance</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children">
                        <a href="#">ASSISTANCE</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('sult.pack') }}">Free Consultation</a></li>
                            <li><a href="{{ route('visa.pro') }}">VISA Processing</a></li>
                        </ul>
                    </li>

                    <li><a href="{{ route('cont.pack') }}">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>

