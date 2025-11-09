@extends('frontend.app')

@section('title', 'Service')

@section('content')
    <section class="overflow-hidden space" data-bg-src="{{ asset('/') }}frontend/assets/img/bg/service_bg_1.jpg">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title-img"><img src="{{ asset('/') }}frontend/assets/img/theme-img/title_shape.svg" alt="shape"></span>
                <h2 class="sec-title text-anime-style-3">services we offer</h2>
                <span class="title-img"><img src="{{ asset('/') }}frontend/assets/img/theme-img/title_shape2.svg" alt="shape"></span>
            </div>
            <div class="slider-wrap text-center">
                <div class="swiper th-slider serviceSlide has-shadow" id="serviceSlide" data-slider-options='{"paginationType":"fraction","breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1400":{"slidesPerView":"4"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="service-card">
                                <div class="box-content">
                                    <div class="box-icon">
                                        <img src="{{ asset('/') }}frontend/assets/img/icon/service_1_1.svg" alt="Icon">
                                    </div>
                                    <h3 class="box-title"><a href="{{ route('service.details') }}">Health Check Up</a></h3>
                                    <p class="box-text">Islamic philosophy is not merely a historical phenomenon but a dynamic evolving intellectual tradition.</p>
                                    <a href="service.html" class="line-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-card">
                                <div class="box-content">
                                    <div class="box-icon">
                                        <img src="{{ asset('/') }}frontend/assets/img/icon/service_1_2.svg" alt="Icon">
                                    </div>
                                    <h3 class="box-title"><a href="service-details.html">Quran Teaching</a></h3>
                                    <p class="box-text">The story of Islam begins with the birth of Muhammad ibn Abdullah in Mecca, a city in the Arabian Peninsula</p>
                                    <a href="service.html" class="line-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-card">
                                <div class="box-content">
                                    <div class="box-icon">
                                        <img src="{{ asset('/') }}frontend/assets/img/icon/service_1_3.svg" alt="Icon">
                                    </div>
                                    <h3 class="box-title"><a href="service-details.html">Mosque renovation</a></h3>
                                    <p class="box-text">Islamic philosophy is not merely a historical phenomenon but a dynamic evolving intellectual tradition.</p>
                                    <a href="service.html" class="line-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-card">
                                <div class="box-content">
                                    <div class="box-icon">
                                        <img src="{{ asset('/') }}frontend/assets/img/icon/service_1_4.svg" alt="Icon">
                                    </div>
                                    <h3 class="box-title"><a href="service-details.html">umrah & hajj</a></h3>
                                    <p class="box-text">Islamic philosophy is not merely a historical phenomenon but a dynamic evolving intellectual tradition.</p>
                                    <a href="service.html" class="line-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-card">
                                <div class="box-content">
                                    <div class="box-icon">
                                        <img src="{{ asset('/') }}frontend/assets/img/icon/service_1_1.svg" alt="Icon">
                                    </div>
                                    <h3 class="box-title"><a href="service-details.html">Health Check Up</a></h3>
                                    <p class="box-text">Islamic philosophy is not merely a historical phenomenon but a dynamic evolving intellectual tradition.</p>
                                    <a href="service.html" class="line-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-card">
                                <div class="box-content">
                                    <div class="box-icon">
                                        <img src="{{ asset('/') }}frontend/assets/img/icon/service_1_2.svg" alt="Icon">
                                    </div>
                                    <h3 class="box-title"><a href="service-details.html">Quran Teaching</a></h3>
                                    <p class="box-text">The story of Islam begins with the birth of Muhammad ibn Abdullah in Mecca, a city in the Arabian Peninsula</p>
                                    <a href="service.html" class="line-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-controller">
                        <button data-slider-prev="#serviceSlider" class="slider-arrow default slider-prev"><i class="fa-thin fa-arrow-left-long"></i></button>
                        <div class="slider-pagination white-color" data-slider-id="#serviceSlider"></div>
                        <button data-slider-next="#serviceSlider" class="slider-arrow default  slider-next"><i class="fa-thin fa-arrow-right-long"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
       {{-- Namaz timing section --}}
      <div class="space">
        <div class="container">
            <div class="row gy-4 justify-content-center">
                <div class="namaz-timing-wrapp">
                    <div class="namaz-timing wow fadeInUp" data-wow-delay=".2s">
                        <div class="title-area mb-0">
                            <span class="sub-title sub-title8 style1"> SALTAT TIMING</span>
                            <h2 class="sec-title">our namaz timings</h2>
                        </div>
                    </div>
                    <div class="prayer-item style2 wow fadeInUp" data-wow-delay=".3s">
                        <div class="box-icon">
                            <img src="{{ asset('/') }}frontend/assets/img/icon/prayer_1_1.svg" alt="">
                        </div>
                        <h3 class="box-title">Fajr</h3>
                        <div class="prayer-meta">
                            <span>Begins: 6:10 AM</span>
                            <span>Iqamah: 7:00 AM</span>
                        </div>
                    </div>
                    <div class="prayer-item style2 wow fadeInUp" data-wow-delay=".4s">
                        <div class="box-icon">
                            <img src="{{ asset('/') }}frontend/assets/img/icon/prayer_1_1.svg" alt="">
                        </div>
                        <h3 class="box-title">Zuhr</h3>
                        <div class="prayer-meta">
                            <span>Begins: 6:10 AM</span>
                            <span>Iqamah: 7:00 AM</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="namaz-timing-wrapp style2">
                    <div class="prayer-item wow fadeInUp" data-wow-delay=".5s">
                        <div class="box-icon">
                            <img src="{{ asset('/') }}frontend/assets/img/icon/prayer_1_1.svg" alt="">
                        </div>
                        <h3 class="box-title">asr</h3>
                        <div class="prayer-meta">
                            <span>Begins: 3:45 PM</span>
                            <span>Iqamah: 4:15 PM</span>
                        </div>
                    </div>
                    <div class="prayer-item wow fadeInUp" data-wow-delay=".6s">
                        <div class="box-icon">
                            <img src="{{ asset('/') }}frontend/assets/img/icon/prayer_1_1.svg" alt="">
                        </div>
                        <h3 class="box-title">magib</h3>
                        <div class="prayer-meta">
                            <span>Begins: 5:00 PM</span>
                            <span>Iqamah: 5:35 PM</span>
                        </div>
                    </div>
                    <div class="prayer-item wow fadeInUp" data-wow-delay=".7s">
                        <div class="box-icon">
                            <img src="{{ asset('/') }}frontend/assets/img/icon/prayer_1_1.svg" alt="">
                        </div>
                        <h3 class="box-title">isha</h3>
                        <div class="prayer-meta">
                            <span>Begins: 7:00 PM</span>
                            <span>Iqamah: 7:30 PM</span>
                        </div>
                    </div>
                    <div class="prayer-item wow fadeInUp" data-wow-delay=".8s">
                        <div class="box-icon">
                            <img src="{{ asset('/') }}frontend/assets/img/icon/prayer_1_1.svg" alt="">
                        </div>
                        <h3 class="box-title">jummah</h3>
                        <div class="prayer-meta">
                            <span>Begins: 12:30 AM</span>
                            <span>Iqamah: 1:30 AM</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection