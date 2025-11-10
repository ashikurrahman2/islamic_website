<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HajjPackage extends Model
{
    protected $guarded = [];

    public function getFeaturesAttribute()
    {
        return [
            ['icon' => 'fas fa-clock', 'text' => 'Duration: ' . $this->duration],
            ['icon' => 'fas fa-plane', 'text' => 'Direct Flight: ' . $this->flight],
            ['icon' => 'fas fa-hotel', 'text' => "Hotel Makkah: {$this->hotel_makkah}"],
            ['icon' => 'fas fa-building', 'text' => "Hotel Madinah: {$this->hotel_madinah}"],
            ['icon' => 'fas fa-utensils', 'text' => 'Food: ' . $this->food],
            ['icon' => 'fas fa-bus', 'text' => 'Special Service:: ' . $this->special_services],
        ];
    }
}
