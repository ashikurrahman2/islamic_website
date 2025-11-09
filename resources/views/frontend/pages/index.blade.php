@extends('frontend.app')

@section('title', 'Home')

@section('content')

 {{-- <div class="preloader ">
        <button class="th-btn style1 preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <img src="{{ asset('/') }}frontend/assets/img/shape/shape.svg" alt="Rasm">
            <div class="loading-text">
                <span class="letter">L</span>
                <span class="letter">o</span>
                <span class="letter">a</span>
                <span class="letter">d</span>
                <span class="letter">i</span>
                <span class="letter">n</span>
                <span class="letter">g</span>
                <span class="letter">.</span>
                <span class="letter">.</span>
                <span class="letter">.</span>
            </div>
        </div>
    </div>  --}}
{{-- Hero section --}}
    <div class="th-hero-wrapper hero-1" id="hero">
        <div class="swiper th-slider hero-slider-1" id="heroSlide1" data-slider-options='{"effect":"fade"}'>
              <div class="swiper-wrapper">
            @foreach($sliders as $slide)
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <!-- Background Image -->
                        <div class="th-hero-bg" 
                             data-bg-src="{{ asset('storage/' . $slide->slide_image) }}">
                             	{{-- <img class="hero-thumb"
								src="{{ asset('storage/' . $hero->person_image) }}"
								alt="{{ $hero->name ?? 'Banner Image' }}"> --}}
                        </div>

                        <div class="container">
                            <div class="hero-style1">
                                <!-- Sub Title Icon -->
                                <span class="sub-title" data-ani="slideindown" data-ani-delay="0.2s">
                                    <img src="{{ asset('/') }}frontend/assets/img/theme-img/sub-title.svg" alt="Sub Title">
                                </span>

                                <!-- Main Title -->
                                <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">
                                    {{ $slide->slide_title ?? 'A Divine Call to Peace, Unity, and Right Path' }}
                                </h1>

                                <!-- Description -->
                                <p class="hero-text" data-ani="slideinup" data-ani-delay="0.6s">
                                    {{ $slide->slide_subtitle ?? 'The story of Islam begins with the birth of Muhammad ibn Abdullah in Mecca, a city in the Arabian Peninsula. A global civilization, profound cultural and scientific contributions.' }}
                                </p>

                                <!-- Buttons -->
                                <div class="btn-group justify-content-center" data-ani="slideinup" data-ani-delay="0.8s">
                                    <a href="{{ route('service') }}" class="th-btn style2">
                                        <span class="btn-text" data-back="Our Services" data-front="Our Services"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
            <div class="swiper-pagination"></div>
            <button data-slider-prev="#heroSlide1" class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
            <div class="swiper-pagination"></div>
            <button data-slider-next="#heroSlide1" class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
        </div>
        <div class="dropdown-link">
            <a class="dropdown-toggle user-toggle" href="#" role="button" id="dropdownMenuLink1" data-bs-toggle="dropdown" aria-expanded="false"><img src="{{ asset('/') }}frontend/assets/img/icon/clock.svg" alt="img">Fajar- 6:19AM</a>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink1" data-popper-placement="bottom-end">
                <li>
                    <span class="small-logo">
                        <img src="{{ asset('/') }}frontend/assets/img/small-logo.svg" alt="">
                    </span>
                </li>
            @php
                // Auto-detect location from user IP (requires stevebauman/location package)
                $position = \Stevebauman\Location\Facades\Location::get(request()->ip());
                
                // Fallback to Dhaka if detection fails
                $latitude = $position ? $position->latitude : 23.8103;
                $longitude = $position ? $position->longitude : 90.4125;
                $timezone = $position ? $position->timezone : 'Asia/Dhaka';

                // Cache for 24 hours (daily prayer times)
                $cacheKey = 'prayer_times_' . md5($latitude . $longitude . now()->format('Y-m-d'));
                $timings = Cache::remember($cacheKey, now()->addDay(), function () use ($latitude, $longitude) {
                    $date = now()->format('d-m-Y');
                    $url = "https://api.aladhan.com/v1/timings/{$date}?latitude={$latitude}&longitude={$longitude}&method=5"; // Method 5: Egyptian General Authority (accurate for Bangladesh/South Asia)

                    try {
                        $response = \Illuminate\Support\Facades\Http::timeout(5)->get($url);
                        if ($response->successful()) {
                            $data = $response->json('data.timings');
                            return [
                                'Fajr' => $data['Fajr'],
                                'Dhuhr' => $data['Dhuhr'],
                                'Asr' => $data['Asr'],
                                'Maghrib' => $data['Maghrib'],
                                'Isha' => $data['Isha'],
                                'Jummah' => $data['Jumuah'] ?? $data['Dhuhr'], // Jummah typically at Dhuhr time
                            ];
                        }
                    } catch (\Exception $e) {
                        \Log::error('Prayer API Error: ' . $e->getMessage());
                    }

                    // Fallback timings (Dhaka, approximate)
                    return [
                        'Fajr' => '04:57',
                        'Dhuhr' => '11:55',
                        'Asr' => '03:05',
                        'Maghrib' => '05:20',
                        'Isha' => '06:44',
                        'Jummah' => '11:55',
                    ];
                });
            @endphp

            <li>
                <span><img src="{{ asset('/') }}frontend/assets/img/icon/clock.svg" alt="img">ফজর - {{ $timings['Fajr'] }}</span>
            </li>
            <li>
                <span><img src="{{ asset('/') }}frontend/assets/img/icon/clock.svg" alt="img">জোহর - {{ $timings['Dhuhr'] }}</span>
            </li>
            <li>
                <span><img src="{{ asset('/') }}frontend/assets/img/icon/clock.svg" alt="img">আসর - {{ $timings['Asr'] }}</span>
            </li>
            <li>
                <span><img src="{{ asset('/') }}frontend/assets/img/icon/clock.svg" alt="img">মাগরিব - {{ $timings['Maghrib'] }}</span>
            </li>
            <li>
                <span><img src="{{ asset('/') }}frontend/assets/img/icon/clock.svg" alt="img">ইশা - {{ $timings['Isha'] }}</span>
            </li>
            <li>
                <span><img src="{{ asset('/') }}frontend/assets/img/icon/clock.svg" alt="img">জুম্মা - {{ $timings['Jummah'] }}</span>
            </li>
        </ul>
        </div>
    </div>

    <div class="position-relative overflow-hidden space">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
                <div class="col-lg-3">
                    <div class="title-area text-center">
                        <span class="sub-title-img"><img src="{{ asset('/') }}frontend/assets/img/theme-img/title_shape.svg" alt="shape"></span>
                        <h2 class="sec-title text-anime-style-3">pillars of islam</h2>
                        <span class="title-img"><img src="{{ asset('/') }}frontend/assets/img/theme-img/title_shape2.svg" alt="shape"></span>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn wow fadeInUp" data-wow-delay=".3s">
                        <a href="about.html" class="th-btn style2"><span class="btn-text" data-back="Read More" data-front="Read More"></span> </a>
                    </div>
                </div>
            </div> <!-- / Title row -->
            <div class="row gy-4 gx-5">
                <div class="col-xl-3">
                    <div class="pillar-content wow fadeInUp" data-wow-delay=".2s">
                        <div class="testi-quote">
                            <img src="{{ asset('/') }}frontend/assets/img/icon/quote.svg" alt="">
                        </div>
                        <p class="text">The saying fruitful were let for him all fruitful morning. Second may waters set was
                            were there upon his he winged.</p>
                        <div class="author"><img src="{{ asset('/') }}frontend/assets/img/shape/author.png" alt=""></div>
                        <span class="name">Shahariar Mim</span>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="pillar-wrapper">

                        <div class="pillar-card th-ani wow fadeInUp" data-wow-delay=".3s">
                            <div class="box-img">
                                <img src="{{ asset('/') }}frontend/assets/img/normal/pillar_1_1.jpg" alt="Icon">
                            </div>
                            <h3 class="box-title"><a href="service-details.html">Shahadah</a></h3>
                            <h5 class="box-desg">faith</h5>
                            <p class="box-text">To Believe in no God but Allah and that Muhammad is his prophet.</p>
                            <div class="box-shape">
                                <img src="{{ asset('/') }}frontend/assets/img/icon/pillar_1_1.svg" alt="Icon">
                            </div>
                        </div>



                        <div class="pillar-card th-ani wow fadeInUp" data-wow-delay=".4s">
                            <div class="box-img">
                                <img src="{{ asset('/') }}frontend/assets/img/normal/pillar_1_2.jpg" alt="Icon">
                            </div>
                            <h3 class="box-title"><a href="service-details.html">salah</a></h3>
                            <h5 class="box-desg">prayer</h5>
                            <p class="box-text">To Believe in no God but Allah and that Muhammad is his prophet.</p>
                            <div class="box-shape">
                                <img src="{{ asset('/') }}frontend/assets/img/icon/pillar_1_2.svg" alt="Icon">
                            </div>
                        </div>



                        <div class="pillar-card th-ani wow fadeInUp" data-wow-delay=".5s">
                            <div class="box-img">
                                <img src="{{ asset('/') }}frontend/assets/img/normal/pillar_1_3.jpg" alt="Icon">
                            </div>
                            <h3 class="box-title"><a href="service-details.html">sawam</a></h3>
                            <h5 class="box-desg">fasting</h5>
                            <p class="box-text">To Believe in no God but Allah and that Muhammad is his prophet.</p>
                            <div class="box-shape">
                                <img src="{{ asset('/') }}frontend/assets/img/icon/pillar_1_3.svg" alt="Icon">
                            </div>
                        </div>



                        <div class="pillar-card th-ani wow fadeInUp" data-wow-delay=".6s">
                            <div class="box-img">
                                <img src="{{ asset('/') }}frontend/assets/img/normal/pillar_1_4.jpg" alt="Icon">
                            </div>
                            <h3 class="box-title"><a href="service-details.html">zakat</a></h3>
                            <h5 class="box-desg">alms giving</h5>
                            <p class="box-text">To Believe in no God but Allah and that Muhammad is his prophet.</p>
                            <div class="box-shape">
                                <img src="{{ asset('/') }}frontend/assets/img/icon/pillar_1_4.svg" alt="Icon">
                            </div>
                        </div>



                        <div class="pillar-card th-ani wow fadeInUp" data-wow-delay=".7s">
                            <div class="box-img">
                                <img src="{{ asset('/') }}frontend/assets/img/normal/pillar_1_5.jpg" alt="Icon">
                            </div>
                            <h3 class="box-title"><a href="service-details.html">hajj</a></h3>
                            <h5 class="box-desg">plgramage</h5>
                            <p class="box-text">To Believe in no God but Allah and that Muhammad is his prophet.</p>
                            <div class="box-shape">
                                <img src="{{ asset('/') }}frontend/assets/img/icon/pillar_1_5.svg" alt="Icon">
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection