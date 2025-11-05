  <header class="th-header header-layout1 header-absolute">
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-center justify-content-md-between align-items-center">
                    <div class="col-auto d-none d-md-block">
                        <div class="header-links">
                         <ul class="info-list">
                            <li>
                                <i class="fa-solid fa-calendar-days"></i>
                                <span>5 April 2025</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-calendar-days"></i>
                                <span>6 Rajab 1446</span>
                            </li>      
                             {{-- Weather section --}}
                            @if($weather && isset($weather['current']))
                                <li class="weather-item">
                                    <img src="{{ $weather['current']['condition']['icon'] }}" 
                                        alt="Weather" 
                                        style="width: 20px; height: 20px; vertical-align: middle;">
                                    <span>{{ round($weather['current']['temp_c']) }}°C, {{ $weather['current']
                                      ['condition']['text'] }}</span>
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
                                <li class=""><img src="assets/img/icon/light.svg" alt="">
                                    <span>Sunrise At: <span class="fw-medium">6:20 AM</span></span>
                                </li>
                                <li class=""><img src="assets/img/icon/sunrise.svg" alt="">
                                    <span>Sunset At: <span class="fw-medium"> 5:20 PM</span></span>
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
                                <a href="home-al-noor-haven.html"><img src="assets/img/logo.svg" alt="Tawba"></a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li class="menu-item-has-children">
                                        <a href="home-al-noor-haven.html">Home</a>
                                        <ul class="mega-menu mega-menu-content mega-scroll">
                                            <li>
                                                <div class="container">
                                                    <div class="row gy-4">
                                                        <div class="col-lg-4">
                                                            <div class="mega-menu-box">
                                                                <div class="mega-menu-img">
                                                                    <img src="assets/img/pages/home-eternal-guidance.jpg" alt="Home One">
                                                                    <div class="btn-wrap">
                                                                        <a href="home-eternal-guidance.html" class="th-btn">View Demo</a>
                                                                    </div>
                                                                </div>
                                                                <h3 class="mega-menu-title"><a href="home-eternal-guidance.html">Home Eternal
                                                                        Guidance</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mega-menu-box">
                                                                <div class="mega-menu-img">
                                                                    <img src="assets/img/pages/home-namaz-timings.jpg" alt="Home One">
                                                                    <div class="btn-wrap">
                                                                        <a href="home-namaz-timings.html" class="th-btn">View Demo</a>
                                                                    </div>
                                                                </div>
                                                                <h3 class="mega-menu-title"><a href="home-namaz-timings.html">Home Namaz Timings</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mega-menu-box">
                                                                <div class="mega-menu-img">
                                                                    <img src="assets/img/pages/home-path-serenity.jpg" alt="Home Two">
                                                                    <div class="btn-wrap">
                                                                        <a href="home-path-serenity.html" class="th-btn ">View Demo</a>
                                                                    </div>
                                                                </div>
                                                                <h3 class="mega-menu-title"><a href="home-path-serenity.html">Path of Serenity</a></h3>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mega-menu-box">
                                                                <div class="mega-menu-img">
                                                                    <img src="assets/img/pages/home-al-noor-haven.jpg" alt="Home Three">
                                                                    <div class="btn-wrap">
                                                                        <a href="home-al-noor-haven.html" class="th-btn">View Demo</a>
                                                                    </div>
                                                                </div>
                                                                <h3 class="mega-menu-title"><a href="home-al-noor-haven.html">Home Al Noor Haven</a></h3>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mega-menu-box">
                                                                <div class="mega-menu-img">
                                                                    <img src="assets/img/pages/home-faithful-harmony.jpg" alt="Home Two">
                                                                    <div class="btn-wrap">
                                                                        <a href="home-faithful-harmony.html" class="th-btn ">View Demo</a>
                                                                    </div>
                                                                </div>
                                                                <h3 class="mega-menu-title"><a href="home-faithful-harmony.html">Home Faithful
                                                                        Harmony</a></h3>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mega-menu-box">
                                                                <div class="mega-menu-img">
                                                                    <img src="assets/img/pages/home-pillar-of-blessings.jpg" alt="Home Three">
                                                                    <div class="btn-wrap">
                                                                        <a href="home-pillar-of-blessings.html" class="th-btn">View Demo</a>
                                                                    </div>
                                                                </div>
                                                                <h3 class="mega-menu-title"><a href="home-pillar-of-blessings.html">Home pillar Of
                                                                        Blessings</a></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Service</a>
                                        <ul class="sub-menu">
                                            <li><a href="service.html">Services</a></li>
                                            <li><a href="service-details.html">Service Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Courses</a>
                                        <ul class="sub-menu">
                                            <li><a href="popular-courses.html">Popular-courses</a></li>
                                            <li><a href="courses-details.html">Courses Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item-has-children">
                                                <a href="#">Shop</a>
                                                <ul class="sub-menu">
                                                    <li><a href="shop.html">Islamic Shop</a></li>
                                                    <li><a href="shop-details.html">Shop Details</a></li>
                                                    <li><a href="cart.html">Cart Page</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                    <li><a href="wishlist.html">Wishlist</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-grid.html">Blog Grid</a></li>
                                            <li><a href="blog-list.html">Blog List</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                            <li><a href="islamic-scholars.html">Islamic Scholars</a></li>
                                            <li><a href="scholar-details.html">Islamic Scholars Details</a></li>
                                            <li><a href="charity.html">Charity Campaigns</a></li>
                                            <li><a href="charity-details.html">Charity Details</a></li>
                                            <li><a href="sermon.html">Sermons Archive</a></li>
                                            <li><a href="sermon-details.html">Sermon Details</a></li>
                                            <li><a href="prayer-times.html">Prayer Times</a></li>
                                            <li><a href="event.html">Events Calendar</a></li>
                                            <li><a href="event-details.html">Event Details</a></li>
                                            <li><a href="faq.html">FAQ</a></li>
                                            <li><a href="gallery.html">Gallery</a></li>
                                            <li><a href="error.html">Error Page</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </nav>
                            <div class="header-button">
                                <button type="button" class="th-menu-toggle d-inline-block d-lg-none"><i class="far fa-bars"></i></button>
                            </div>
                        </div>
                        <div class="col-auto d-none d-xl-block">
                            <div class="header-button">
                                <a href="contact.html" class="th-btn th-icon"><span class="btn-text" data-back="Donate Now" data-front="Donate Now"></span> </a>
                                <button type="button" class="icon-btn searchBoxToggler"><i class="far fa-search"></i></button>
                                <a href="#" class="icon-btn sideMenuToggler d-none d-lg-block"><img src="assets/img/icon/grid.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </header>