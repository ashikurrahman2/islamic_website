@extends('frontend.app')

@section('title', 'About')

@section('content')
  <div class="about-area space-bottom" id="about-sec">
        <div class="container">
            <div class="row gy-4">
                <div class="col-xl-6">
                    <div class="">
                        <div class="title-area about-title-area">
                            <span class="sub-title-img"><img src="{{ asset('/') }}frontend/assets/img/theme-img/title_shape.svg" alt="shape"></span>
                            <h2 class="sec-title text-anime-style-3">welcome to tawba</h2>
                            <span class="title-img"><img src="{{ asset('/') }}frontend/assets/img/theme-img/title_shape2.svg" alt="shape"></span>
                        </div>
                        <p class="mt-n2 fs-18 wow fadeInUp" data-wow-delay=".2s">Islamic history is a vast and dynamic
                            narrative that spans over 1,400 years,
                            encompassing the rise of a global civilization, profound cultural and scientific contributions,
                            and the development of one of the world’s largest religious traditions. Rooted in the teachings
                            of the Prophet Muhammad (peace be upon him) and the revelation of the Qur'an, Islamic history
                            unfolds across continents, influencing diverse cultures and societies.</p>
                        <p class="mt-n2 mb-40 fs-18 wow fadeInUp" data-wow-delay=".3s">The story of Islam begins with the
                            birth of Muhammad ibn Abdullah in Mecca, a
                            city in the Arabian Peninsula. Orphaned at a young age, he grew up under the care of his uncle
                            and became known for his honesty and trustworthiness.</p>
                        <div class="about-feature-wrap">
                            <div class="about-feature wow fadeInUp" data-wow-delay=".4s">
                                <div class="box-icon">
                                    <img src="{{ asset('/') }}frontend/assets/img/icon/about_1_1.svg" alt="Icon">
                                </div>
                                <div class="media-body">
                                    <h3 class="box-title">Our Mission</h3>
                                    <p class="box-text">Islamic history continues to evolve, marked by debates over
                                        modernity, the role of religion in governance.</p>
                                </div>
                            </div>
                            <div class="about-feature wow fadeInUp" data-wow-delay=".5s">
                                <div class="box-icon">
                                    <img src="{{ asset('/') }}frontend/assets/img/icon/about_1_2.svg" alt="Icon">
                                </div>
                                <div class="media-body">
                                    <h3 class="box-title">Our Vision</h3>
                                    <p class="box-text">Rooted in the teachings of the Prophet Muhammad (peace be upon him)
                                        and the revelation of the Qur'an.</p>
                                </div>
                            </div>
                        </div>
                        <div class="btn-group justify-content-between align-items-start wow fadeInUp" data-wow-delay=".6s">
                            <a href="about.html" class="th-btn style2 th-icon"><span class="btn-text" data-back="Read More History" data-front="Read More History"></span> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 mb-30 mb-xl-0">
                    <div class="img-box1 wow fadeInRight" data-wow-delay=".6s">
                        <div class="img1" data-bg-src="{{ asset('/') }}frontend/assets/img/shape/shape-2.png">
                            <img src="{{ asset('/') }}frontend/assets/img/normal/about_1_1.jpg" alt="About">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup" data-top="0%" data-right="0%">
            <img src="{{ asset('/') }}frontend/assets/img/shape/about-shape.png" alt="shape">
        </div>
    </div>
@endsection