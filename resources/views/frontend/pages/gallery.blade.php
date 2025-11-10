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
    <div class="overflow-hidden space">
        <div class="container">
            <div class="row gy-4 filter-active load-more-active">
                <div class=" col-md-6 col-xxl-auto filter-item cat3 cat4">
                    <div class="gallery-card style2">
                        <div class="box-img global-img">
                            <a target="_blank" href="https://www.instagram.com/" class="simple-btn"><i class="fab fa-instagram"></i></a>
                            <img src="assets/img/gallery/gallery_2_1.jpg" alt="gallery image">
                        </div>
                    </div>
                </div>
                <div class=" col-md-6 col-xxl-auto filter-item cat5 cat4 cat3 cat2">
                    <div class="gallery-card style2">
                        <div class="box-img global-img">
                            <a target="_blank" href="https://www.instagram.com/" class="simple-btn"><i class="fab fa-instagram"></i></a>
                            <img src="assets/img/gallery/gallery_2_2.jpg" alt="gallery image">
                        </div>
                    </div>
                </div>
                <div class=" col-md-6 col-xxl-auto filter-item cat4">
                    <div class="gallery-card style2">
                        <div class="box-img global-img">
                            <a target="_blank" href="https://www.instagram.com/" class="simple-btn"><i class="fab fa-instagram"></i></a>
                            <img src="assets/img/gallery/gallery_2_3.jpg" alt="gallery image">
                        </div>
                    </div>
                </div>
                <div class=" col-md-6 col-xxl-auto filter-item cat3">
                    <div class="gallery-card style2">
                        <div class="box-img global-img">
                            <a target="_blank" href="https://www.instagram.com/" class="simple-btn"><i class="fab fa-instagram"></i></a>
                            <img src="assets/img/gallery/gallery_2_4.jpg" alt="gallery image">
                        </div>
                    </div>
                </div>
                <div class=" col-md-6 col-xxl-auto filter-item cat3">
                    <div class="gallery-card style2">
                        <div class="box-img global-img">
                            <a target="_blank" href="https://www.instagram.com/" class="simple-btn"><i class="fab fa-instagram"></i></a>
                            <img src="assets/img/gallery/gallery_2_5.jpg" alt="gallery image">
                        </div>
                    </div>
                </div>
                <div class=" col-md-6 col-xxl-auto filter-item cat2 cat3 cat4">
                    <div class="gallery-card style2">
                        <div class="box-img global-img">
                            <a target="_blank" href="https://www.instagram.com/" class="simple-btn"><i class="fab fa-instagram"></i></a>
                            <img src="assets/img/gallery/gallery_2_6.jpg" alt="gallery image">
                        </div>
                    </div>
                </div>
                <div class=" col-md-6 col-xxl-auto filter-item cat2 cat4">
                    <div class="gallery-card style2">
                        <div class="box-img global-img">
                            <a target="_blank" href="https://www.instagram.com/" class="simple-btn"><i class="fab fa-instagram"></i></a>
                            <img src="assets/img/gallery/gallery_2_7.jpg" alt="gallery image">
                        </div>
                    </div>
                </div>
                <div class=" col-md-6 col-xxl-auto filter-item d-none cat3 cat4">
                    <div class="gallery-card style2">
                        <div class="box-img global-img">
                            <a target="_blank" href="https://www.instagram.com/" class="simple-btn"><i class="fab fa-instagram"></i></a>
                            <img src="assets/img/gallery/gallery_2_1.jpg" alt="gallery image">
                        </div>
                    </div>
                </div>
                <div class=" col-md-6 col-xxl-auto filter-item d-none cat5 cat4 cat3 cat2">
                    <div class="gallery-card style2">
                        <div class="box-img global-img">
                            <a target="_blank" href="https://www.instagram.com/" class="simple-btn"><i class="fab fa-instagram"></i></a>
                            <img src="assets/img/gallery/gallery_2_2.jpg" alt="gallery image">
                        </div>
                    </div>
                </div>
                <div class=" col-md-6 col-xxl-auto filter-item d-none cat4">
                    <div class="gallery-card style2">
                        <div class="box-img global-img">
                            <a target="_blank" href="https://www.instagram.com/" class="simple-btn"><i class="fab fa-instagram"></i></a>
                            <img src="assets/img/gallery/gallery_2_3.jpg" alt="gallery image">
                        </div>
                    </div>
                </div>
                <div class=" col-md-6 col-xxl-auto filter-item d-none cat3">
                    <div class="gallery-card style2">
                        <div class="box-img global-img">
                            <a target="_blank" href="https://www.instagram.com/" class="simple-btn"><i class="fab fa-instagram"></i></a>
                            <img src="assets/img/gallery/gallery_2_4.jpg" alt="gallery image">
                        </div>
                    </div>
                </div>
                <div class=" col-md-6 col-xxl-auto filter-item d-none cat3">
                    <div class="gallery-card style2">
                        <div class="box-img global-img">
                            <a target="_blank" href="https://www.instagram.com/" class="simple-btn"><i class="fab fa-instagram"></i></a>
                            <img src="assets/img/gallery/gallery_2_5.jpg" alt="gallery image">
                        </div>
                    </div>
                </div>
                <div class=" col-md-6 col-xxl-auto filter-item d-none cat2 cat3 cat4">
                    <div class="gallery-card style2">
                        <div class="box-img global-img">
                            <a target="_blank" href="https://www.instagram.com/" class="simple-btn"><i class="fab fa-instagram"></i></a>
                            <img src="assets/img/gallery/gallery_2_6.jpg" alt="gallery image">
                        </div>
                    </div>
                </div>
                <div class=" col-md-6 col-xxl-auto filter-item d-none cat2 cat4">
                    <div class="gallery-card style2">
                        <div class="box-img global-img">
                            <a target="_blank" href="https://www.instagram.com/" class="simple-btn"><i class="fab fa-instagram"></i></a>
                            <img src="assets/img/gallery/gallery_2_7.jpg" alt="gallery image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button class="th-btn load-more-btn">Load More<i class="fa-duotone fa-spinner ms-2"></i></button>
            </div>
        </div>
    </div>
@endsection