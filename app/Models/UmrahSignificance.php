<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UmrahSignificance extends Model
{
    
       protected $fillable = [
        'title',
        'description_one',
        'description_two',
        'guide_title',
        'section_title',
        'section_description',
        'congratulation_message',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function steps(): HasMany
    {
        return $this->hasMany(UmrahStep::class)->orderBy('order');
    }

    public function activeSteps(): HasMany
    {
        return $this->hasMany(UmrahStep::class)
            ->where('is_active', true)
            ->orderBy('order');
    }
}
