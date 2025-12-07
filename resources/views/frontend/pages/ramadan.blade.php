@extends('frontend.app')

@section('title', 'রমজানের সময়সূচী ২০২৫')

@section('content')
<div class="breadcumb-wrapper" data-bg-src="{{ asset('frontend/assets/img/bg/breadcumb-bg.jpg') }}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">রমজানের সময়সূচী ২০২৫</h1>
            <ul class="breadcumb-menu">
                <li><a href="/">হোম</a></li>
                <li>রমজানের সময়সূচী</li>
            </ul>
        </div>
    </div>
</div>

<div class="ramadan-section py-5">
    <div class="container">
        <div class="text-center mb-5">
            <i class="fas fa-mosque fa-4x text-primary mb-3"></i>
            <h1 class="display-5 fw-bold">পবিত্র রমজান মোবারক</h1>
            <p class="day-name fs-4" id="dayName"></p>
            <p class="date fs-3 text-muted" id="currentDate"></p>
            <p class="text-success fw-bold" id="locationName">
                <i class="fas fa-spinner fa-spin"></i> আপনার অবস্থান নির্ধারণ হচ্ছে...
            </p>
        </div>

        <!-- লোডিং স্পিনার -->
        <div class="text-center py-5" id="loadingSpinner">
            <i class="fas fa-spinner fa-spin fa-3x text-primary"></i>
            <p class="mt-3 fs-5">সময়সূচী লোড হচ্ছে...</p>
        </div>

        <div class="row g-4 justify-content-center" id="timeCards" style="display: none;">
            <!-- সাহরির শেষ সময় -->
            <div class="col-md-5">
                <div class="time-card text-center p-5 border rounded shadow-sm">
                    <i class="fas fa-sun fa-4x text-orange mb-4"></i>
                    <h3 class="fw-bold">সাহরির শেষ সময়</h3>
                    <p class="small text-muted mb-3">ফজরের ৭ মিনিট আগে (সতর্কতামূলক)</p>
                    <h2 class="display-4 fw-bold text-danger" id="sehriEnd">--:--</h2>
                    <div class="countdown mt-4" id="sehriEndCountdown"></div>
                </div>
            </div>

            <!-- ইফতারের সময় -->
            <div class="col-md-5">
                <div class="time-card text-center p-5 border rounded shadow-sm">
                    <i class="fas fa-utensils fa-4x text-success mb-4"></i>
                    <h3 class="fw-bold">ইফতারের সময়</h3>
                    <h2 class="display-4 fw-bold text-success" id="iftarTime">--:--</h2>
                    <div class="countdown mt-4" id="iftarCountdown"></div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5 text-muted small">
            <p><i class="fas fa-volume-up"></i> সাহরির শেষ হওয়ার ৭ মিনিট আগে ভয়েস এলার্ট বাজবে</p>
        </div>
    </div>
</div>

<!-- ভয়েস এলার্ট (১০০% সব ব্রাউজারে কাজ করবে) -->
<audio id="sehriVoiceAlert" preload="auto">
    <source src="https://ramadan.alartbd.com/alert-7min.mp3" type="audio/mpeg">
</audio>

<style>
    .time-card { transition: all 0.3s ease; min-height: 320px; }
    .time-card:hover { transform: translateY(-10px); box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important; }
    .countdown { display: flex; justify-content: center; gap: 15px; margin-top: 15px; flex-wrap: wrap; }
    .countdown > div { background: #f8f9fa; padding: 12px 16px; border-radius: 12px; min-width: 80px; text-align: center; box-shadow: 0 4px 10px rgba(0,0,0,0.05); }
    .countdown span { display: block; font-size: 1.8rem; font-weight: bold; color: #2c3e50; }
    .countdown small { font-size: 0.9rem; color: #6c757d; text-transform: uppercase; }
</style>

<script>
    const toBengali = n => n.toString().replace(/\d/g, d => '০১২৩৪৫৬৭৮৯'[d]);

    const to24 = t => {
        const [time, period] = t.split(' ');
        let [h, m] = time.split(':');
        h = parseInt(h);
        if (h === 12) h = 0;
        if (period && period.toUpperCase() === 'PM') h += 12;
        return { h, m: parseInt(m) };
    };

    const updateDate = () => {
        const now = new Date();
        const days = ['রবিবার','সোমবার','মঙ্গলবার','বুধবার','বৃহস্পতিবার','শুক্রবার','শনিবার'];
        document.getElementById('dayName').textContent = days[now.getDay()];
        document.getElementById('currentDate').textContent = now.toLocaleDateString('bn-BD', {
            day: 'numeric', month: 'long', year: 'numeric'
        });
    };

    const createCountdown = ms => {
        if (ms <= 0) return '<div><span>০০:০০:০০</span></div>';
        const h = String(Math.floor(ms / 3600000)).padStart(2, '0');
        const m = String(Math.floor((ms % 3600000) / 60000)).padStart(2, '0');
        const s = String(Math.floor((ms % 60000) / 1000)).padStart(2, '0');
        return `
            <div><span>${toBengali(h)}</span><small>ঘণ্টা</small></div>
            <div><span>${toBengali(m)}</span><small>মিনিট</small></div>
            <div><span>${toBengali(s)}</span><small>সেকেন্ড</small></div>
        `;
    };

    const playVoiceAlert = () => {
        const audio = document.getElementById('sehriVoiceAlert');
        audio.currentTime = 0;
        audio.volume = 1.0;
        audio.play().catch(() => {});
    };

    let alertPlayedToday = false;

    const loadPrayerTimes = async (lat = 23.8103, lng = 90.4125) => {
        try {
            // এখানে তারিখ যোগ করা হয়েছে → প্রতিদিন নতুন ডেটা আসবে!
            const today = new Date().toISOString().split('T')[0];
            const url = `https://api.aladhan.com/v1/timings/${today}?latitude=${lat}&longitude=${lng}&method=1&school=1`;

            const res = await fetch(url);
            const data = await res.json();
            if (data.code !== 200) throw new Error();

            const t = data.data.timings;
            const fajr = to24(t.Fajr);
            const maghrib = to24(t.Maghrib);

            // লোকেশন
            const geo = await fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=${lat}&lon=${lng}&zoom=10&accept-language=bn`).catch(() => null);
            let location = 'বাংলাদেশ';
            if (geo) {
                const g = await geo.json();
                location = g.address?.city || g.address?.town || g.address?.state_district || 'বাংলাদেশ';
            }
            document.getElementById('locationName').innerHTML = `<i class="fas fa-map-marker-alt"></i> ${location}`;

            // সাহরির শেষ = ফজরের ৭ মিনিট আগে
            let sehriEndMin = fajr.m - 7;
            let sehriEndHour = fajr.h;
            if (sehriEndMin < 0) {
                sehriEndMin += 60;
                sehriEndHour -= 1;
                if (sehriEndHour < 0) sehriEndHour = 23;
            }

            document.getElementById('sehriEnd').textContent = `${toBengali(sehriEndHour.toString().padStart(2,'0'))}:${toBengali(sehriEndMin.toString().padStart(2,'0'))}`;
            document.getElementById('iftarTime').textContent = `${toBengali(maghrib.h.toString().padStart(2,'0'))}:${toBengali(maghrib.m.toString().padStart(2,'0'))}`;

            const update = () => {
                const now = new Date();
                const today = new Date(now.getFullYear(), now.getMonth(), now.getDate());

                let nextSehriEnd = new Date(today);
                nextSehriEnd.setHours(fajr.h, fajr.m - 7, 0);
                if (fajr.m < 7) nextSehriEnd.setHours(fajr.h - 1, 60 + fajr.m - 7, 0);

                let nextIftar = new Date(today);
                nextIftar.setHours(maghrib.h, maghrib.m, 0);

                if (now > nextSehriEnd) nextSehriEnd.setDate(nextSehriEnd.getDate() + 1);
                if (now > nextIftar) nextIftar.setDate(nextIftar.getDate() + 1);

                document.getElementById('sehriEndCountdown').innerHTML = createCountdown(nextSehriEnd - now);
                document.getElementById('iftarCountdown').innerHTML = createCountdown(nextIftar - now);

                // ৭ মিনিট আগে এলার্ট
                const diff = nextSehriEnd - now;
                if (diff > 0 && diff <= 7 * 60 * 1000 && !alertPlayedToday) {
                    playVoiceAlert();
                    alertPlayedToday = true;
                    setTimeout(() => alertPlayedToday = false, 24 * 60 * 60 * 1000);
                }
            };

            update();
            setInterval(update, 1000);

            document.getElementById('loadingSpinner').style.display = 'none';
            document.getElementById('timeCards').style.display = 'flex';

        } catch (e) {
            document.getElementById('locationName').innerHTML = 'ঢাকা (ডিফল্ট)';
            loadPrayerTimes(23.8103, 90.4125);
        }
    };

    // GPS
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
            pos => loadPrayerTimes(pos.coords.latitude, pos.coords.longitude),
            () => loadPrayerTimes(23.8103, 90.4125),
            { timeout: 5000, maximumAge: 300000 }
        );
    } else {
        loadPrayerTimes(23.8103, 90.4125);
    }

    updateDate();
    setInterval(updateDate, 60000);
</script>
@endsection