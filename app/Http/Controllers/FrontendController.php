<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;
use App\Models\HajjDocument;
use App\Models\Consultation;
use App\Models\VisaRequirement;
use App\Models\Gallery;
use App\Models\HajjPackage;           
use App\Models\UmrahPackage;           
use App\Models\HajjSignificance;           
use App\Models\VisaStat;           
use App\Models\UmrahSignificance;           
use App\Models\Settings;           
use Barryvdh\DomPDF\Facade\Pdf;   
use Illuminate\Support\Str;   

class FrontendController extends Controller
{
    public function index()
    {
        $sliders = \App\Models\Slider::all();
        $hajjDocuments = HajjDocument::with(['categories.items', 'notes'])->where('is_active', true)->get();
        $weather = $this->getWeather();
        $astronomy = $this->getAstronomy();
        $hijriDate = $this->getHijriDate();
        $prayerTimes = $this->getPrayerTimes();
        $galleries = Gallery::orderBy('created_at', 'desc')->limit(6)->get();
        return view('frontend.pages.index', compact('sliders', 'hajjDocuments', 'prayerTimes', 'galleries', 'weather', 'astronomy', 'hijriDate'));
    }

    public function getWeather()
    {
        try {
            $ipInfo = Http::timeout(5)->get('http://ip-api.com/json')->json();
            $location = $ipInfo['city'] ?? 'Dhaka';

            $apiKey = env('WEATHER_API_KEY');
            if (!$apiKey) return null;

            $response = Http::timeout(5)->get("http://api.weatherapi.com/v1/current.json", [
                'key' => $apiKey,
                'q' => $location,
                'aqi' => 'no'
            ]);

            return $response->successful() ? $response->json() : null;

        } catch (\Exception $e) {
            \Log::error('Weather API Error: ' . $e->getMessage());
            return null;
        }
    }

    public function getAstronomy()
    {
        try {
            $ipInfo = Http::timeout(5)->get('http://ip-api.com/json')->json();
            $location = $ipInfo['city'] ?? 'Dhaka';

            $apiKey = env('WEATHER_API_KEY');
            if (!$apiKey) 
                return null;

            $response = Http::timeout(5)->get("http://api.weatherapi.com/v1/astronomy.json", [
                'key' => $apiKey,
                'q' => $location,
                'dt' => date('Y-m-d')
            ]);

            return $response->successful() ? $response->json() : null;

        } catch (\Exception $e) {
            \Log::error('Astronomy API Error: ' . $e->getMessage());
            return null;
        }
    }

    // Fixed Prayer Times Method
    public function getPrayerTimes()
    {
        // Default fallback timings (Dhaka, Bangladesh)
        $fallbackTimings = [
            'Fajr' => '04:57',
            'Dhuhr' => '11:55',
            'Asr' => '03:05',
            'Maghrib' => '05:20',
            'Isha' => '06:44',
            'Jummah' => '11:55',
        ];

        try {
            $ipInfo = Http::timeout(5)->get('http://ip-api.com/json')->json();
            $latitude = $ipInfo['lat'] ?? 23.8103;
            $longitude = $ipInfo['lon'] ?? 90.4125;

            $cacheKey = 'prayer_times_' . md5($latitude . $longitude . now()->format('Y-m-d'));
            
            return \Cache::remember($cacheKey, now()->addDay(), function () use ($latitude, $longitude, $fallbackTimings) {
                $date = now()->format('d-m-Y');
                
                try {
                    $response = Http::timeout(5)->get("https://api.aladhan.com/v1/timings/{$date}", [
                        'latitude' => $latitude,
                        'longitude' => $longitude,
                        'method' => 5
                    ]);

                    if ($response->successful()) {
                        $data = $response->json('data.timings');
                        
                        if ($data && is_array($data)) {
                            return [
                                'Fajr' => $data['Fajr'] ?? $fallbackTimings['Fajr'],
                                'Dhuhr' => $data['Dhuhr'] ?? $fallbackTimings['Dhuhr'],
                                'Asr' => $data['Asr'] ?? $fallbackTimings['Asr'],
                                'Maghrib' => $data['Maghrib'] ?? $fallbackTimings['Maghrib'],
                                'Isha' => $data['Isha'] ?? $fallbackTimings['Isha'],
                                'Jummah' => $data['Jumuah'] ?? $data['Dhuhr'] ?? $fallbackTimings['Jummah'],
                            ];
                        }
                    }
                } catch (\Exception $e) {
                    \Log::error('Prayer API Error: ' . $e->getMessage());
                }

                // Return fallback timings if API fails
                return $fallbackTimings;
            });
        } catch (\Exception $e) {
            \Log::error('Prayer Times Error: ' . $e->getMessage());
            return $fallbackTimings;
        }
    }

    // Hijri date API
    public function getHijriDate()
    {
        try {
            $today = now()->format('d-m-Y');
            $response = Http::timeout(5)->get("https://api.aladhan.com/v1/gToH/{$today}");

            if ($response->successful()) {
                $data = $response->json();
                return [
                    'hijri_day' => $data['data']['hijri']['day'],
                    'hijri_month' => $data['data']['hijri']['month']['en'],
                    'hijri_month_ar' => $data['data']['hijri']['month']['ar'],
                    'hijri_year' => $data['data']['hijri']['year'],
                    'gregorian_day' => $data['data']['gregorian']['day'],
                    'gregorian_month' => $data['data']['gregorian']['month']['en'],
                    'gregorian_year' => $data['data']['gregorian']['year'],
                ];
            }

            return null;

        } catch (\Exception $e) {
            \Log::error('Hijri Date API Error: ' . $e->getMessage());
            return null;
        }
    }

    // About page
    public function About()
    {
        $hijriDate = $this->getHijriDate();
        $weather = $this->getWeather();
        $astronomy = $this->getAstronomy();
        $galleries = Gallery::orderBy('created_at', 'desc')->limit(6)->get();
        $about = \App\Models\About::where('is_active', true)->first();
        return view('frontend.pages.about', compact('hijriDate', 'galleries', 'about', 'weather', 'astronomy'));
    }

    // Gallery page
    public function Gallary()
    {
        $hijriDate = $this->getHijriDate();
        $weather = $this->getWeather();
        $astronomy = $this->getAstronomy();
        $galleries = Gallery::orderBy('created_at', 'desc')->get();
        return view('frontend.pages.gallery', compact('hijriDate', 'galleries', 'weather', 'astronomy'));
    }

    // Pre registration page 
    public function Pre()
    {
        $hijriDate = $this->getHijriDate();
        $weather = $this->getWeather();
        $astronomy = $this->getAstronomy();
        $galleries = Gallery::orderBy('created_at', 'desc')->get();

        $hajjDocument = HajjDocument::with(['categories.items', 'notes'])
            ->where('is_active', true)
            ->latest()
            ->first();

        return view('frontend.pages.pre_ragistration', compact('hijriDate', 'galleries', 'hajjDocument', 'weather', 'astronomy'));
    }

    // Package Page
    public function Pack()
    {
        $hijriDate = $this->getHijriDate();
        $weather = $this->getWeather();
        $astronomy = $this->getAstronomy();
        $galleries = Gallery::orderBy('created_at', 'desc')->limit(6)->get();
        $packages = HajjPackage::all(); 

        return view('frontend.pages.hajj_package', compact('hijriDate', 'packages', 'weather', 'astronomy', 'galleries'));
    }

    // Package PDF Download
    public function downloadPdf($id)
    {
        $package = HajjPackage::findOrFail($id);

        $pdf = Pdf::loadView('frontend.pages.pdf.hajj-package', compact('package'))
            ->setPaper('a4', 'portrait');

        $fileName = Str::slug($package->title) . '-hajj-package-2026.pdf';

        return $pdf->download($fileName);
    }

    // Significance Page
    public function sign()
    {
        $hijriDate = $this->getHijriDate();
        $weather = $this->getWeather();
        $astronomy = $this->getAstronomy();
        $galleries = Gallery::orderBy('created_at', 'desc')->limit(6)->get();
        $significance = HajjSignificance::with('activeSteps')
            ->where('is_active', true)
            ->first();

        if (!$significance) {
            abort(404, 'Hajj Significance page not found');
        }
        return view('frontend.pages.significance', compact('hijriDate', 'significance', 'weather', 'astronomy', 'galleries'));
    }

    //Umrah Significance Page
    public function umrahsign()
    {
        $hijriDate = $this->getHijriDate();
        $weather = $this->getWeather();
        $astronomy = $this->getAstronomy();
        $galleries = Gallery::orderBy('created_at', 'desc')->limit(6)->get();
        $significance = UmrahSignificance::with('activeSteps')->firstOrFail();

        if (!$significance) {
            abort(404, 'Umrah Significance page not found');
        }
        return view('frontend.pages.umrah_significance', compact('hijriDate', 'significance', 'weather', 'astronomy', 'galleries'));
    }

    // Umrah package
    public function umrahpack()
    {
        $hijriDate = $this->getHijriDate();
        $weather = $this->getWeather();
        $astronomy = $this->getAstronomy();
        $galleries = Gallery::orderBy('created_at', 'desc')->limit(6)->get();
        $packages = UmrahPackage::all();

        if (!$packages) {
            abort(404, 'Umrah packages page not found');
        }
        return view('frontend.pages.umrah_package', compact('hijriDate', 'packages', 'weather', 'astronomy', 'galleries'));
    }

    // Visa requirement 
    public function VISA()
    {
        $hijriDate = $this->getHijriDate();
        $weather = $this->getWeather();
        $astronomy = $this->getAstronomy();
        $galleries = Gallery::orderBy('created_at', 'desc')->limit(6)->get();
        $visaRequirement = VisaRequirement::where('is_active', true)->first();
        
        if (!$visaRequirement) {
            abort(404, 'VISA requirement page not found');
        }
        return view('frontend.pages.visa_requirement', compact('hijriDate', 'visaRequirement', 'weather', 'astronomy', 'galleries'));
    }

    // Contact page 
    public function commu()
    {
        $hijriDate = $this->getHijriDate();
        $weather = $this->getWeather();
        $astronomy = $this->getAstronomy();
        $galleries = Gallery::orderBy('created_at', 'desc')->limit(6)->get();
        $setting = \App\Models\Settings::first();
        
        if (!$setting) {
            abort(404, 'Contact page not found');
        }
        return view('frontend.pages.contact', compact('hijriDate','weather', 'setting', 'astronomy', 'galleries'));
    }

    // Free consultation page 
    public function Con()
    {
        $hijriDate = $this->getHijriDate();
        $weather = $this->getWeather();
        $astronomy = $this->getAstronomy();
        $galleries = Gallery::orderBy('created_at', 'desc')->limit(6)->get();
        $consults = Consultation::all();
        
        if (!$consults) {
            abort(404, 'Consultation page not found');
        }
        return view('frontend.pages.consultation', compact('hijriDate', 'consults', 'weather', 'astronomy', 'galleries'));
    }

    // Visa processing page
    public function Provisa()
    {
        $hijriDate = $this->getHijriDate();
        $weather = $this->getWeather();
        $astronomy = $this->getAstronomy();
        $galleries = Gallery::orderBy('created_at', 'desc')->limit(6)->get();
        $visaStats = VisaStat::where('is_active', true)->latest()->get();
        
        if (!$visaStats) {
            abort(404, 'Visa processing page not found');
        }
        return view('frontend.pages.visa_processing', compact('hijriDate', 'visaStats', 'weather', 'astronomy', 'galleries'));
    }  
    
     public function edultime()
    {
        $hijriDate = $this->getHijriDate();
        $weather = $this->getWeather();
        $astronomy = $this->getAstronomy();
        $galleries = Gallery::orderBy('created_at', 'desc')->limit(6)->get();
        $districts = $this->getBangladeshDistricts();
        $prayerTimes = $this->getPrayerTimesForLocation(23.8103, 90.4125);
        return view('frontend.pages.ramadan', compact('hijriDate', 'weather', 'astronomy', 'galleries', 'prayerTimes', 'districts'));
    }

    public function getDistrictPrayerTimes(Request $request)
    {
        $districtName = $request->input('district');
        $districts = $this->getBangladeshDistricts();

        if (!isset($districts[$districtName])) {
            return response()->json(['error' => 'জেলা পাওয়া যায়নি'], 404);
        }

        $district = $districts[$districtName];
        $prayerTimes = $this->getPrayerTimesForLocation($district['lat'], $district['lng']);

        return response()->json([
            'district' => $districtName,
            'district_english' => $district['english'],
            'prayer_times' => $prayerTimes
        ]);
    }

    public function ramadan()
    {
        $hijriDate = $this->getHijriDate();
        $weather = $this->getWeather();
        $astronomy = $this->getAstronomy();
        $galleries = Gallery::orderBy('created_at', 'desc')->limit(6)->get();

        
        $defaultPrayerTimes = $this->getPrayerTimesForLocation(23.8103, 90.4125);

        return view('frontend.pages.ramadan', compact(
            'hijriDate',
            'weather',
            'astronomy',
            'galleries',
            'defaultPrayerTimes'
        ));
    }

    // AJAX API: যেকোনো লোকেশনের জন্য সাহরি-ইফতার
    public function getAutoPrayerTimes(Request $request)
    {
        $lat = $request->query('lat', 23.8103);
        $lng = $request->query('lng', 90.4125);

        $prayerTimes = $this->getPrayerTimesForLocation($lat, $lng);
        $locationName = $this->getLocationNameFromCoords($lat, $lng);

        return response()->json([
            'location' => $locationName,
            'isha'     => $prayerTimes['isha'],     
            'fajr'     => $prayerTimes['fajr'],     
            'maghrib'  => $prayerTimes['maghrib'],  
        ]);
    }

    // ল্যাট-লং থেকে বাংলায় জেলার নাম
    private function getLocationNameFromCoords($lat, $lng)
    {
        $cacheKey = "loc_name_" . md5("{$lat}_{$lng}");

        return Cache::remember($cacheKey, now()->addDays(7), function () use ($lat, $lng) {
            try {
                $response = Http::timeout(8)->get('https://nominatim.openstreetmap.org/reverse', [
                    'format' => 'json',
                    'lat' => $lat,
                    'lon' => $lng,
                    'zoom' => 10,
                    'accept-language' => 'bn',
                ]);

                if ($response->successful()) {
                    $addr = $response->json('address', []);
                    return $addr['city'] ??
                           $addr['town'] ??
                           $addr['state_district'] ??
                           $addr['state'] ??
                           'বাংলাদেশ';
                }
            } catch (\Exception $e) {
                \Log::warning('Reverse geocoding failed: ' . $e->getMessage());
            }

            return 'বাংলাদেশ';
        });
    }

    
    private function getPrayerTimesForLocation($lat, $lng)
    {
        $cacheKey = "prayer_{$lat}_{$lng}_" . now()->format('Y-m-d');

        return Cache::remember($cacheKey, now()->addHours(6), function () use ($lat, $lng) {
            try {
                $response = Http::timeout(10)->get('https://api.aladhan.com/v1/timings', [
                    'latitude' => $lat,
                    'longitude' => $lng,
                    'method' => 1,      // University of Islamic Sciences, Karachi (বাংলাদেশে সবচেয়ে সঠিক)
                    'school' => 1,      // Hanafi
                ]);

                if ($response->successful() && $response->json('code') === 200) {
                    $t = $response->json('data.timings');
                    return [
                        'fajr' => $t['Fajr'],
                        'isha' => $t['Isha'],
                        'maghrib' => $t['Maghrib'],
                    ];
                }
            } catch (\Exception $e) {
                \Log::error('Aladhan API Error: ' . $e->getMessage());
            }

            // ফলব্যাক
            return [
                'fajr' => '04:50 AM',
                'isha' => '07:45 PM',
                'maghrib' => '06:20 PM',
            ];
        });
    }
}