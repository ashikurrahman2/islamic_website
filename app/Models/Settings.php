<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
      protected $fillable = [
        'web_logo',
        'favicon',
        'address',
        'phone_number',
        'alt_phone_number',
        'email',
        'alt_email',
        'map_embed_url',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
