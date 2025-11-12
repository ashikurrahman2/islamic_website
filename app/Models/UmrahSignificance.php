<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UmrahSignificance extends Model
{
    protected $fillable = [
        'title', 'description_one', 'description_two', 'guide_title',
        'section_title', 'section_description', 'congratulation_message', 'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function steps()
    {
        return $this->hasMany(Step::class);
    }

    public function activeSteps()
    {
        return $this->hasMany(Step::class)->where('is_active', true)->orderBy('step_number');
    }

    // Only one active at a time
    protected static function booted()
    {
        static::saving(function ($model) {
            if ($model->is_active) {
                static::where('id', '!=', $model->id)
                      ->update(['is_active' => false]);
            }
        });
    }
}