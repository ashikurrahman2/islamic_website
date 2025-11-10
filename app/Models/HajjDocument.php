<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class HajjDocument extends Model
{
    protected $fillable = [
        'title',
        'government_fee',
        'currency',
        'kaaba_image',
        'bottom_notice_line1',
        'bottom_notice_line2',
        'is_active',
    ];

    protected $casts = [
        'government_fee' => 'decimal:2',
        'is_active' => 'boolean',
    ];

    public function categories(): HasMany
    {
        return $this->hasMany(DocumentCategory::class)->orderBy('order');
    }

    public function notes(): HasMany
    {
        return $this->hasMany(DocumentNote::class)->orderBy('order');
    }
}