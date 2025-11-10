<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DocumentNote extends Model
{
    protected $fillable = [
        'hajj_document_id',
        'note_text',
        'order',
    ];

    public function hajjDocument(): BelongsTo
    {
        return $this->belongsTo(HajjDocument::class);
    }
}