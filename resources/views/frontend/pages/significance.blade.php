@extends('frontend.app')

@section('title', 'Significance')

@section('content')
{{-- Breadcumb --}}
<div class="breadcumb-wrapper" data-bg-src="{{ asset('/') }}frontend/assets/img/bg/breadcumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title mt-5">Significance</h1>
            <ul class="breadcumb-menu">
                <li><a href="/">Home</a></li>
                <li>Significance</li>
            </ul>
        </div>
    </div>
</div>
 <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h1 class="text-dark">Hajj Unites Global Muslim Ummah Spiritually</h1>
                    <p>
                        The Hajj, one of the five pillars of Islam, is far more than a spiritual journey; it is a transformative experience that unites the global Muslim Ummah in a profound tapestry of faith, humility, and equality. Every year, millions of Muslims from diverse cultures, languages, and socio-economic backgrounds converge in Mecca, dressed in simple white garments, stripping away all markers of worldly status.
                    </p>
                    <p>
                        This act of unity and equality before Allah fosters a deep sense of brotherhood and solidarity, reminding the Ummah that true worth lies not in material wealth but in piety and devotion. Beyond its spiritual rewards, Hajj serves as a powerful reminder of the shared history and purpose of Muslims worldwide, reigniting a collective commitment to justice, compassion, and service to humanity. It is a living testament to the strength of the Ummah, a spiritual recharge that transcends borders, and a call to return to the essence of Islam—peace, unity, and submission to the Divine. In a world often divided by differences, Hajj stands as a timeless symbol of what the Ummah can achieve when it stands together, heart and soul, in pursuit of a higher purpose.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="hajj-guide-card">
                        <h2 class="guide-title">The Hajj<br>Guide</h2>
                        <div class="guide-path">
                            <!-- Kaaba Center -->
                            <div class="kaaba-center">🕋</div>

                            <!-- All Steps -->
                            <div class="guide-step step-1">
                                <div class="step-number">1</div>
                                <div class="step-icon">🤲</div>
                                <div class="step-label">Intend for Hajj<br>And enter state of Ihram before Miqat</div>
                            </div>

                            <div class="guide-step step-2">
                                <div class="step-number">2</div>
                                <div class="step-icon">🕋</div>
                                <div class="step-label">Tawaf<br>Al-Qudoom</div>
                            </div>

                            <div class="guide-step step-3">
                                <div class="step-number">3</div>
                                <div class="step-icon">🏃</div>
                                <div class="step-label">Sa'i between<br>Safa & Marwa</div>
                            </div>

                            <div class="guide-step step-4">
                                <div class="step-number">4</div>
                                <div class="step-icon">⛺</div>
                                <div class="step-label">Go to Mina</div>
                            </div>

                            <div class="guide-step step-5">
                                <div class="step-number">5</div>
                                <div class="step-icon">⛰️</div>
                                <div class="step-label">Spend Time<br>in Arafat</div>
                            </div>

                            <div class="guide-step step-6">
                                <div class="step-number">6</div>
                                <div class="step-icon">🌙</div>
                                <div class="step-label">Spend night<br>in Muzdalifah<br>& collect pebbles</div>
                            </div>

                            <div class="guide-step step-7">
                                <div class="step-number">7</div>
                                <div class="step-icon">🪨</div>
                                <div class="step-label">Pelt only<br>Jamarah<br>al-Aqaba</div>
                            </div>

                            <div class="guide-step step-8">
                                <div class="step-number">8</div>
                                <div class="step-icon">🐑</div>
                                <div class="step-label">Sacrifice<br>Animal</div>
                            </div>

                            <div class="guide-step step-9">
                                <div class="step-number">9</div>
                                <div class="step-icon">✂️</div>
                                <div class="step-label">Shave/<br>Trim Hair</div>
                            </div>

                            <div class="guide-step step-10">
                                <div class="step-number">10</div>
                                <div class="step-icon">🕋</div>
                                <div class="step-label">Tawaf<br>Al-Ifadha</div>
                            </div>

                            <div class="guide-step step-11">
                                <div class="step-number">11</div>
                                <div class="step-icon">🪨</div>
                                <div class="step-label">Pelt all Jamarah<br>al-Ula, al-Wusta,<br>al-Aqaba</div>
                            </div>

                            <div class="guide-step step-12">
                                <div class="step-number">12</div>
                                <div class="step-icon">👋</div>
                                <div class="step-label">Farewell<br>Tawaf</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Step by Step Guide Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title">Step by Step Hajj Guide</h2>
            <p class="text-center mb-5" style="font-size: 1.1rem;">
                Every year, millions of Muslims from around the world gather annually in Mecca to perform Hajj – the sacred Muslim pilgrimage. Hajj became obligatory in the 9th year of Hijrah (Islamic calendar). The word "Hajj" means to intend a journey, which symbolizes a Muslim's life journey toward Allah.
            </p>

            <div class="row">
                <div class="col-12">
                    <div class="step-detail-card">
                        <h3><i class="fas fa-1"></i> INTENTION & IHRAM:</h3>
                        <p>Before you arrive at Makkah to begin Hajj, it's important to make your intention (niyyah) within your heart. Next, you'll enter into the state of Ihram (ritual purity). For men, this means wearing the designated white cloth with one piece wrapped around your shoulder and one around your waist. Ladies may wear any clothing of their choice but should ensure they observe the rules of Hijab.</p>
                    </div>

                    <div class="step-detail-card">
                        <h3><i class="fas fa-2"></i> TAWAF X 7:</h3>
                        <p>Tawaf is one of the principal rites of the pilgrimage and refers to walking in circles around the Kaa'bah in an anti-clockwise motion.</p>
                    </div>

                    <div class="step-detail-card">
                        <h3><i class="fas fa-3"></i> SA'I:</h3>
                        <p>After you've performed your Tawaf, you'll then perform what's known as Sa'i (walking and running between the two hills of Safa and Marwa).</p>
                    </div>

                    <div class="step-detail-card">
                        <h3><i class="fas fa-4"></i> MINA:</h3>
                        <p>Once you arrive in the tent city (neighbourhood) of Mina, you'll settle into your allocated tent. Here you'll pray Salah (obligatory prayers), including Dhuhr, Asr, Maghrib, 'Isha and Fajr, shortening your four-unit prayers to two units each, without combining them, as stated in the Qu'ran.</p>
                    </div>

                    <div class="step-detail-card">
                        <h3><i class="fas fa-5"></i> ARAFAT:</h3>
                        <p>After sunrise in Mina, you'll then head to the plains of 'Arafah, reciting Istaghfar (asking for forgiveness) and making supplications – marking the Day of 'Arafah when we ask Allah (SWT) for forgiveness for our sins.</p>
                    </div>

                    <div class="step-detail-card">
                        <h3><i class="fas fa-6"></i> MUZDALIFAH:</h3>
                        <p>After sunset, you'll depart 'Arafah and head to Muzdalifah – an open plain between Mina and 'Arafah. Once you reach Muzdalifah you'll perform your Maghrib and 'Isha Salah, one after the other, shortening the 'Isha Salah to two Rakat.</p>
                    </div>

                    <div class="step-detail-card">
                        <h3><i class="fas fa-7"></i> RAMI:</h3>
                        <p>On the 10th, 11th, and 12th day of Dhul Hijjah, you will perform Rami (the stoning of the devil). The size of the pebbles should be similar to the size of date stones or seeds. You will need a total of 49 pebbles.</p>
                    </div>

                    <div class="step-detail-card">
                        <h3><i class="fas fa-8"></i> QURBANI:</h3>
                        <p>The festival of Eid al-Adha, or the Feast of Sacrifice, is also celebrated by Muslims around the world on this day who are not on pilgrimage on the 10th Dhul Hijjah. By offering Qurbani (sacrifice), Muslims mark Prophet Ibrahim's (AS) willingness to sacrifice his son Isma'il (AS) upon the commandment of Allah (SWT).</p>
                    </div>

                    <div class="step-detail-card">
                        <h3><i class="fas fa-9"></i> SHAVE/TRIM HAIR:</h3>
                        <p>After offering the Hady, you will proceed to shave or trim your hair if you are male. The Prophet Muhammad (peace and blessings be upon him) shaved his hair and this is preferable. A woman trims her hair by the length of a fingertip.</p>
                    </div>

                    <div class="step-detail-card">
                        <h3><i class="fas fa-1"></i><i class="fas fa-0"></i> TAWAF AL-IFADHA AND SA'I:</h3>
                        <p>You will now go to Makkah to perform Tawaf al-Ifadha and then another circuit of Sai'as part of your Hajj rituals.</p>
                    </div>

                    <div class="step-detail-card">
                        <h3><i class="fas fa-1"></i><i class="fas fa-1"></i> RAMI (2ND DAY):</h3>
                        <p>On the 11th Dhul Hijjah, you will proceed to your second day of Rami (the stoning of the devil).</p>
                    </div>

                    <div class="step-detail-card">
                        <h3><i class="fas fa-1"></i><i class="fas fa-2"></i> RETURN TO MINA:</h3>
                        <p>Once your second Rami is completed, you will return to your camp in Mina and spend the rest of the day and night in worship, making the most of the remaining time.</p>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <h2 class="text-center ml-2 text-success">Haji Mubarak</h2>
        </div>
    </section>
@endsection