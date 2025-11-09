<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class FrontendController extends Controller
{
    public function index()
    {
         $sliders = \App\Models\Slider::all();
          $weather = $this->getWeather();
          $astronomy = $this->getAstronomy();
          $hijriDate = $this->getHijriDate();
        return view('frontend.pages.index', compact('sliders', 'weather', 'astronomy', 'hijriDate'));
    }

    // Weather operation
    private function getWeather()
    {
        try {
            // User location detect from IP 
            $ipInfo = Http::timeout(5)->get('http://ip-api.com/json')->json();
            
            // fatch city name 
            $location = $ipInfo['city'] ?? 'Dhaka';
            
            // WeatherAPI call
            $apiKey = env('WEATHER_API_KEY');
            
            if (!$apiKey) {
                return null;
            }
            // Response current weather
            $response = Http::timeout(5)->get("http://api.weatherapi.com/v1/current.json", [
                'key' => $apiKey,
                'q' => $location,
                'aqi' => 'no'
            ]);
            
            if ($response->successful()) {
                return $response->json();
            }
            
            return null;
            
        } catch (\Exception $e) {
            // To do want error log
            \Log::error('Weather API Error: ' . $e->getMessage());
            return null;
        }
    }
    
    //  Sunrise and sunset operation
    private function getAstronomy()
    {
        try {
             // User location detect from IP 
            $ipInfo = Http::timeout(5)->get('http://ip-api.com/json')->json();
            
            $location = $ipInfo['city'] ?? 'Dhaka';
            
            // WeatherAPI Astronomy call
            $apiKey = env('WEATHER_API_KEY');
            
            if (!$apiKey) {
                return null;
            }
            
            $response = Http::timeout(5)->get("http://api.weatherapi.com/v1/astronomy.json", [
                'key' => $apiKey,
                'q' => $location,
                'dt' => date('Y-m-d') // Today date
            ]);
            
            if ($response->successful()) {
                return $response->json();
            }
            
            return null;
            
        } catch (\Exception $e) {
             // To do want error log
            \Log::error('Astronomy API Error: ' . $e->getMessage());
            return null;
        }
    }
    
        // Hijri and English date operation
        private function getHijriDate()
        {
            try {
                // Today Hijri date API call
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
                 // To do want error log
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
            return view('frontend.pages.about', compact('hijriDate', 'weather', 'astronomy'));
        }

              // Service page 
        public function Service()
        {
              $hijriDate = $this->getHijriDate();
                $weather = $this->getWeather();
                   $astronomy = $this->getAstronomy();
            return view('frontend.pages.service', compact('hijriDate', 'weather', 'astronomy'));
        }

         // Service Details page 
        public function Sdetails()
        {
              $hijriDate = $this->getHijriDate();
                $weather = $this->getWeather();
                $astronomy = $this->getAstronomy();
            return view('frontend.pages.service_details', compact('hijriDate', 'weather', 'astronomy'));
        }
}
