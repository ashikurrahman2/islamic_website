<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisaStat extends Model
{
    use HasFactory;

    protected $fillable = [
        'header_description',
        'guidence_description',
        'applicants',
        'serving_countries',
        'satisfied_clients',
        'experience_year',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'applicants' => 'integer',
        'serving_countries' => 'integer',
        'experience_year' => 'integer',
    ];
}