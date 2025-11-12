<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HajjStep extends Model
{
     protected $fillable = [
        'hajj_significance_id',
        'step_number',
        'step_icon',
        'step_label',
        'detail_title',
        'detail_description',
        'order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function hajjSignificance(): BelongsTo
    {
        return $this->belongsTo(HajjSignificance::class);
    }
}
