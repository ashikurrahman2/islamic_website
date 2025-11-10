<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DocumentItem extends Model
{
    protected $fillable = [
        'document_category_id',
        'item_text',
        'order',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(DocumentCategory::class);
    }
}