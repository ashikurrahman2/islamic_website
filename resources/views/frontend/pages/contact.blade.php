@extends('frontend.app')

@section('title', 'Contact')

@section('content')
    {{-- Breadcumb --}}
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('/') }}frontend/assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Contact info</h1>
                <ul class="breadcumb-menu">
                    <li><a href="/">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>

    {{-- Contact Info Area   --}}
    <div class="space">
        <div class="container">
            <div class="row gy-4">
                <div class="col-xl-4 col-lg-6">
                    <div class="contact-media">
                        <div class="icon-btn">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="media-body">
                            <h5 class="box-title">Mosque Address</h5>
                            <p class="box-text">{{ $setting->address ?? '123 Academic Way City, State, 1234, New York City.' }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="contact-media">
                        <div class="icon-btn">
                            <i class="fa-solid fa-phone-volume"></i>
                        </div>
                        <div class="media-body">
                            <h5 class="box-title">Phone Number</h5>
                            <p class="box-text">
                                @if($setting && $setting->phone_number)
                                    <a href="tel:{{ preg_replace('/\D+/', '', $setting->phone_number) }}">{{ $setting->phone_number }}</a>
                                @else
                                    <a href="tel:+011123234567890">+011 (123) 234 567 890</a>
                                @endif
                                
                                @if($setting && $setting->alt_phone_number)
                                    <a href="tel:{{ preg_replace('/\D+/', '', $setting->alt_phone_number) }}">{{ $setting->alt_phone_number }}</a>
                                @else
                                    <a href="tel:+09456876543210">No number</a>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="contact-media">
                        <div class="icon-btn">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="media-body">
                            <h5 class="box-title">Email Address</h5>
                            <p class="box-text">
                                @if($setting && $setting->email)
                                    <a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a>
                                @else
                                    <a href="mailto:info@examplemail.edu">info@examplemail.edu</a>
                                @endif
                                
                                @if($setting && $setting->alt_email)
                                    <a href="mailto:{{ $setting->alt_email }}">{{ $setting->alt_email }}</a>
                                @else
                                    <a href="mailto:admission@examplemail.edu">no email</a>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Contact Area --}}
    <div class="space-bottom">
        <div class="container">
            <div class="row gx-0 gy-4">
                <div class="col-xl-6">
                    <form action="https://html.themeholy.com/tawba/demo/mail.php" method="POST" class="contact-form2 input-smoke ajax-contact">
                        <h3 class="h2">Do you have questions?</h3>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name*">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="tel" class="form-control" name="number" id="number" placeholder="Phone*">
                            </div>
                            <div class="form-group col-12">
                                <input type="email" class="form-control" name="email" id="email" placeholder="e-mail address*">
                            </div>
                            <div class="form-group col-12">
                                <select name="subject" id="subject" class="form-select nice-select">
                                    <option value="" disabled selected hidden>Select</option>
                                    <option value="Surah-Fatiha">Surah-Fatiha</option>
                                    <option value="Al-Baqarah">Al-Baqarah</option>
                                    <option value="Aal-E-Imran">Aal-E-Imran</option>
                                    <option value="An-Nisa">An-Nisa</option>
                                </select>
                            </div>
                            <div class="form-group col-12">
                                <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Your Messsage*"></textarea>
                            </div>
                            <div class="form-btn col-12">
                                <button class="th-btn"><span class="btn-text" data-back="Send Messages" data-front="Send Messages"></span></button>
                            </div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>
                </div>
                <div class="col-xl-6">
                    <div class="contact-image">
                        <img src="{{ asset('/') }}frontend/assets/img/normal/contact-image.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Map Area --}}
    <div class="">
        <div class="contact-map">
            @if($setting && $setting->map_embed_url)
                {!! $setting->map_embed_url !!}
            @else
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7310056272386!2d89.2286059153658!3d24.00527418490799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9b97badc6151%3A0x30b048c9fb2129bc!2sAngfuztheme!5e0!3m2!1sen!2sbd!4v1651028958211!5m2!1sen!2sbd" allowfullscreen="" loading="lazy"></iframe>
            @endif
            <div class="contact-icon">
                <img src="{{ asset('/') }}frontend/assets/img/icon/location-dot.svg" alt="">
            </div>
        </div>
    </div>
@endsection