@extends('frontend.app')

@section('title', 'Service details')

@section('content')
      <div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Tajweed rules & tafseer</h1>
                <ul class="breadcumb-menu">
                    <li><a href="/">Home</a></li>
                    <li>Services Details</li>
                </ul>
            </div>
        </div>

    </div>

    {{-- Service details --}}

      <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-9 col-lg-8">
                    <div class="page-single">
                        <div class="page-img style1 global-img mb-35">
                            <img src="{{ asset('/') }}frontend/assets/img/service/service_details.jpg" alt="Service Image">
                        </div>
                        <div class="page-content">
                            <div class="blog-meta mb-25">
                                <a class="author" href="blog.html"><i class="fa-solid fa-user"></i>by David Smith</a>
                                <a href="blog.html"><i class="fa-sharp fa-solid fa-clock"></i>February 22,
                                    2025</a>
                                <a href="blog.html"><img src="assets/img/icon/light2.svg" alt="">Skill</a>
                            </div>
                            <p class="blog-text fs-18">On the Questo mobile app, gamified tours in the cities of
                                Belogradchik,
                                Vidin, and Vratsa now take you on a trip to reveal pieces of design and development of solar
                                modules of rich various solar-powered history that just need a little bit of unraveling to
                                be appreciated fully. ‍</p>
                            <p class="blog-text mb-30 fs-18">The Qur'an is the holy book of Islam, believed to be the
                                literal word of God (Allah) as revealed to the Prophet Muhammad (PBUH) over a period of
                                approximately 23 years. It is considered the final and most complete revelation, following
                                earlier scriptures such as the Torah and the Bible. The Qur'an is written in classical
                                Arabic and is divided into 114 chapters (Surahs) and over 6,000 verses (Ayahs).</p>
                            <h4 class="mt-35">Approch</h4>
                            <p class="blog-text mb-30 fs-18">The Qur'an covers a wide range of topics, including theology,
                                morality, guidance for personal conduct, and laws for society. It emphasizes the oneness of
                                God (Tawhid), the importance of worship, compassion, justice, and righteousness. The Qur'an
                                is recited and memorized by Muslims around the world and serves as a spiritual, legal, and
                                ethical guide for life.</p>
                            <div class="checklist">
                                <ul>
                                    <li>Diversity investigation for royal been.</li>
                                    <li>Create a structure where participants will add their information.</li>
                                    <li>Efforts without a focus.</li>
                                    <li>Many contradicting opinions a vision document.</li>
                                    <li>A deliverable for workshop participants.</li>
                                    <li>Create a structure where participants will add their information.</li>

                                </ul>
                            </div>
                            <blockquote>
                                <p>Allah! There is no deity except Him, the Ever-Living, the Sustainer of existence. Neither
                                    drowsiness overtakes Him nor sleep. To Him belongs whatever is in the heavens and
                                    whatever is on the earth. Who is it that can intercede with Him except by His
                                    permission? He knows what is before them and what will be after them, and they encompass
                                    not a thing of His knowledge except for what He wills.</p>
                                <cite>Michel Clarck</cite>
                            </blockquote>
                            <p class="mt-30 mb-55 fs-18">It is also highly regarded for its linguistic beauty, structure,
                                and depth of meaning, often considered a miraculous revelation in both content and form. The
                                Qur'an is not just a religious text but a profound source of spiritual wisdom for Muslims.
                            </p>
                            <div class="row gy-4">
                                <div class="col-sm-auto">
                                    <div class="page-img mb-0 global-img">
                                        <img class="w-100" src="{{ asset('/') }}frontend/assets/img/service/service_inner_1.jpg" alt="service">
                                    </div>
                                </div>
                                <div class="col-sm-auto">
                                    <div class="page-img mb-0 global-img">
                                        <img class="w-100" src="{{ asset('/') }}frontend/assets/img/service/service_inner_2.jpg" alt="service">
                                    </div>
                                </div>
                            </div>
                            <p class="blog-text mt-55 mb-35 fs-18">The Qur'an is the sacred text of Islam, considered by
                                Muslims to be the literal word of God (Allah) as revealed to the Prophet Muhammad (PBUH)
                                over a period of about 23 years. It is written in Arabic and is composed of 114 chapters
                                (called Surahs) that vary in length, each containing verses (Ayahs). The Qur'an serves as a
                                comprehensive guide for all aspects of life, covering theology, morality, law, guidance for
                                personal conduct, and instructions for social justice.</p>
                            <p class="fs-18 mb-20">‍ It is divided into two main themes: the Makki revelations (those
                                revealed in Mecca before the migration) and the Madani revelations (those revealed in Medina
                                after the migration). The Qur'an stresses the oneness of God (Tawhid), the finality of the
                                message of Islam, and the importance of submission to God's will. It teaches about the Day
                                of Judgment, the afterlife, and the moral and ethical responsibilities of individuals.</p>


                        </div>
                    </div>

                </div>
            </div>
            <!--==============================
		Related Product  
		==============================-->
            <div class="space-extra-top mb-30">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-auto">
                        <div class="title-area">
                            <span class="sub-title">OUR SERVICES</span>
                            <h2 class="sec-title">You Might Like This</h2>
                        </div>
                    </div>
                    <div class="col-md-auto d-none d-md-block">
                        <div class="sec-btn">
                            <a href="service.html" class="th-btn style2"><span class="btn-text" data-back="View All Services" data-front="View All Services"></span> </a>
                        </div>
                    </div>
                </div>
                <div class="swiper th-slider has-shadow" id="productSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1300":{"slidesPerView":"3"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="service-box2">
                                <div class="box-img">
                                    <img src="assets/img/service/service_1_1.jpg" alt="Icon">
                                </div>
                                <div class="box-info">
                                    <div class="box-icon">
                                        <img src="assets/img/icon/service_2_1.svg" alt="Icon">
                                    </div>
                                    <h3 class="box-title"><a href="service-details.html">Online Quran Classes</a></h3>
                                </div>
                                <div class="box-content">
                                    <div class="box-wrapp">
                                        <div class="box-icon">
                                            <img src="assets/img/icon/service_2_1.svg" alt="Icon">
                                        </div>
                                        <h3 class="box-title"><a href="service-details.html">Online Quran Classes</a></h3>
                                        <p class="box-text">Our Online Quran Classes provide a comprehensive and flexible learning experience for students of all ages.</p>
                                    </div>
                                    <div class="service-btn">
                                        <a href="service.html" class="simple-btn">Read More <i class="fa-regular fa-arrow-right ms-2"></i> </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-box2">
                                <div class="box-img">
                                    <img src="assets/img/service/service_1_2.jpg" alt="Icon">
                                </div>
                                <div class="box-info">
                                    <div class="box-icon">
                                        <img src="assets/img/icon/service_2_2.svg" alt="Icon">
                                    </div>
                                    <h3 class="box-title"><a href="service-details.html">Tajweed rules & Tafseer</a></h3>
                                </div>
                                <div class="box-content">
                                    <div class="box-wrapp">
                                        <div class="box-icon">
                                            <img src="assets/img/icon/service_2_2.svg" alt="Icon">
                                        </div>
                                        <h3 class="box-title"><a href="service-details.html">Tajweed rules & Tafseer</a></h3>
                                        <p class="box-text">Tajweed refers to the correct pronunciation and articulation of Quranic Arabic letters and words according</p>
                                    </div>
                                    <div class="service-btn">
                                        <a href="service.html" class="simple-btn">Read More <i class="fa-regular fa-arrow-right ms-2"></i> </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-box2">
                                <div class="box-img">
                                    <img src="assets/img/service/service_1_3.jpg" alt="Icon">
                                </div>
                                <div class="box-info">
                                    <div class="box-icon">
                                        <img src="assets/img/icon/service_2_3.svg" alt="Icon">
                                    </div>
                                    <h3 class="box-title"><a href="service-details.html">Hajj & Umran Services</a></h3>
                                </div>
                                <div class="box-content">
                                    <div class="box-wrapp">
                                        <div class="box-icon">
                                            <img src="assets/img/icon/service_2_3.svg" alt="Icon">
                                        </div>
                                        <h3 class="box-title"><a href="service-details.html">Hajj & Umran Services</a></h3>
                                        <p class="box-text">Hajj and Umrah services involve organizing pilgrimages to Makkah, providing essential facilities to pilgrims</p>
                                    </div>
                                    <div class="service-btn">
                                        <a href="service.html" class="simple-btn">Read More <i class="fa-regular fa-arrow-right ms-2"></i> </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-box2">
                                <div class="box-img">
                                    <img src="assets/img/service/service_1_4.jpg" alt="Icon">
                                </div>
                                <div class="box-info">
                                    <div class="box-icon">
                                        <img src="assets/img/icon/service_2_4.svg" alt="Icon">
                                    </div>
                                    <h3 class="box-title"><a href="service-details.html">Arabick Calligraphy Course</a></h3>
                                </div>
                                <div class="box-content">
                                    <div class="box-wrapp">
                                        <div class="box-icon">
                                            <img src="assets/img/icon/service_2_4.svg" alt="Icon">
                                        </div>
                                        <h3 class="box-title"><a href="service-details.html">Arabick Calligraphy Course</a></h3>
                                        <p class="box-text">The story of Islam begins with the birth of Muhammad ibn Abdullah in Mecca, a city in the Arabian Peninsula.</p>
                                    </div>
                                    <div class="service-btn">
                                        <a href="service.html" class="simple-btn">Read More <i class="fa-regular fa-arrow-right ms-2"></i> </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-box2">
                                <div class="box-img">
                                    <img src="assets/img/service/service_1_5.jpg" alt="Icon">
                                </div>
                                <div class="box-info">
                                    <div class="box-icon">
                                        <img src="assets/img/icon/service_2_5.svg" alt="Icon">
                                    </div>
                                    <h3 class="box-title"><a href="service-details.html">Volunteering Services</a></h3>
                                </div>
                                <div class="box-content">
                                    <div class="box-wrapp">
                                        <div class="box-icon">
                                            <img src="assets/img/icon/service_2_5.svg" alt="Icon">
                                        </div>
                                        <h3 class="box-title"><a href="service-details.html">Volunteering Services</a></h3>
                                        <p class="box-text">We provide compassionate and dignified funeral services, ensuring a smooth and respectful process for families</p>
                                    </div>
                                    <div class="service-btn">
                                        <a href="service.html" class="simple-btn">Read More <i class="fa-regular fa-arrow-right ms-2"></i> </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-box2">
                                <div class="box-img">
                                    <img src="assets/img/service/service_1_6.jpg" alt="Icon">
                                </div>
                                <div class="box-info">
                                    <div class="box-icon">
                                        <img src="assets/img/icon/service_2_6.svg" alt="Icon">
                                    </div>
                                    <h3 class="box-title"><a href="service-details.html">Fasting Services</a></h3>
                                </div>
                                <div class="box-content">
                                    <div class="box-wrapp">
                                        <div class="box-icon">
                                            <img src="assets/img/icon/service_2_6.svg" alt="Icon">
                                        </div>
                                        <h3 class="box-title"><a href="service-details.html">Fasting Services</a></h3>
                                        <p class="box-text">We offer comprehensive health checkup services to promote wellness and early detection of health issues.</p>
                                    </div>
                                    <div class="service-btn">
                                        <a href="service.html" class="simple-btn">Read More <i class="fa-regular fa-arrow-right ms-2"></i> </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection