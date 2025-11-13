<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VisaRequirement extends Model
{
    protected $fillable = [
        'title',
        'documents',
        'note',
        'image',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
    
    // Accessor to convert documents to array and decode HTML entities
    public function getDocumentsAttribute($value)
    {
        if (!$value) {
            return [];
        }
        
        $documents = explode("\n", trim($value));
        
        // Decode HTML entities for each document
        return array_map(function($doc) {
            return html_entity_decode(trim($doc), ENT_QUOTES, 'UTF-8');
        }, $documents);
    }
    
    // Accessor for note to decode HTML entities
    public function getNoteAttribute($value)
    {
        return $value ? html_entity_decode($value, ENT_QUOTES, 'UTF-8') : null;
    }
}