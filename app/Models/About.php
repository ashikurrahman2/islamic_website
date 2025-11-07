<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class About extends Model
{
     use HasFactory;

       protected $fillable = [
        'about_image',
        'about_pragraph',
        'mission',
        'vision',
    ];
}
