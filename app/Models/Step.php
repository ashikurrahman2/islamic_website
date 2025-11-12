<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    protected $fillable = [
        'umrah_significance_id', 'step_number', 'step_label',
        'detail_title', 'detail_description', 'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function significance()
    {
        return $this->belongsTo(UmrahSignificance::class);
    }
}