<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HajjPackage extends Model
{
    // নিরাপত্তার জন্য fillable ব্যবহার করুন
    protected $fillable = [
        'title',
        'type',
        'description',
        'price',
        'duration',
        'flight',
        'hotel_makkah',
        'hotel_madinah',
        'food',
        'special_services',
        'icon_class',
        'pdf_path',
        'is_active',
    ];

    /**
     * Get formatted features for frontend display
     */
    public function getFeaturesAttribute()
    {
        return [
            [
                'icon' => 'fas fa-clock',
                'text' => 'Duration: ' . ($this->duration ?? 'N/A')
            ],
            [
                'icon' => 'fas fa-plane',
                'text' => 'Flight: ' . ($this->flight ?? 'Not specified')
            ],
            [
                'icon' => 'fas fa-hotel',
                'text' => 'Hotel Makkah: ' . ($this->hotel_makkah ?? 'N/A')
            ],
            [
                'icon' => 'fas fa-building',
                'text' => 'Hotel Madinah: ' . ($this->hotel_madinah ?? 'N/A')
            ],
            [
                'icon' => 'fas fa-utensils',
                'text' => 'Food: ' . ($this->food ?? 'Not included')
            ],
            [
                'icon' => 'fas fa-bus',
                'text' => 'Special Services: ' . ($this->special_services ?? 'None')
            ],
        ];
    }
}