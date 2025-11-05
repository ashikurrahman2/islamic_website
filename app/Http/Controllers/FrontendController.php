<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FrontendController extends Controller
{
    public function index()
    {
         $sliders = \App\Models\Slider::all();
          $weather = $this->getWeather();
        return view('frontend.pages.index', compact('sliders', 'weather'));
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
}
