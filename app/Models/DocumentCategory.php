<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DocumentCategory extends Model
{
    protected $fillable = [
        'hajj_document_id',
        'category_title',
        'order',
    ];

    public function hajjDocument(): BelongsTo
    {
        return $this->belongsTo(HajjDocument::class);
    }

    public function items(): HasMany
    {
        return $this->hasMany(DocumentItem::class)->orderBy('order');
    }
}