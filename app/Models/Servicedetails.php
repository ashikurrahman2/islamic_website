<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Servicedetails extends Model
{
      use HasFactory;

      protected $fillable = [
        'service_image',
        'service_description',
    ];
}
