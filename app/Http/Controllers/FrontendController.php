<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use App\Models\HajjDocument;
use App\Models\HajjPackage;           // এই লাইন যোগ করুন
use Barryvdh\DomPDF\Facade\Pdf;      // এই লাইন যোগ করুন

class FrontendController extends Controller
{
    public function index()
    {
        $sliders = \App\Models\Slider::all();
        $hajjDocuments = HajjDocument::with(['categories.items', 'notes'])->where('is_active', true)->get();
        $weather = $this->getWeather();
        $astronomy = $this->getAstronomy();
        $hijriDate = $this->getHijriDate();

        return view('frontend.pages.index', compact('sliders', 'hajjDocuments', 'weather', 'astronomy', 'hijriDate'));
    }

    private function getWeather()
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

    private function getAstronomy()
    {
        try {
            $ipInfo = Http::timeout(5)->get('http://ip-api.com/json')->json();
            $location = $ipInfo['city'] ?? 'Dhaka';

            $apiKey = env('WEATHER_API_KEY');
            if (!$apiKey) return null;

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

    private function getHijriDate()
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

    public function About()
    {
        $hijriDate = $this->getHijriDate();
        $weather = $this->getWeather();
        $astronomy = $this->getAstronomy();
        return view('frontend.pages.about', compact('hijriDate', 'weather', 'astronomy'));
    }

    public function Gallary()
    {
        $hijriDate = $this->getHijriDate();
        $weather = $this->getWeather();
        $astronomy = $this->getAstronomy();
        return view('frontend.pages.gallery', compact('hijriDate', 'weather', 'astronomy'));
    }

    public function Pre()
    {
        $hijriDate = $this->getHijriDate();
        $weather = $this->getWeather();
        $astronomy = $this->getAstronomy();

        $hajjDocument = HajjDocument::with(['categories.items', 'notes'])
            ->where('is_active', true)
            ->latest()
            ->first();

        return view('frontend.pages.pre_ragistration', compact('hijriDate', 'hajjDocument', 'weather', 'astronomy'));
    }

    // Package Page
    public function Pack()
    {
        $hijriDate = $this->getHijriDate();
        $weather = $this->getWeather();
        $astronomy = $this->getAstronomy();
        $packages = HajjPackage::all(); // ঠিক করা হয়েছে

        return view('frontend.pages.hajj_package', compact('hijriDate', 'packages', 'weather', 'astronomy'));
    }

    // Package PDF Download
    public function downloadPdf($id)
    {
        $package = HajjPackage::findOrFail($id);

        $pdf = Pdf::loadView('pdf.hajj-package', compact('package'))
            ->setPaper('a4', 'portrait');

        return response()->streamDownload(function () use ($pdf) {
            echo $pdf->stream();
        }, \Illuminate\Support\Str::slug($package->title) . '-hajj-package-2026.pdf');
    }
}