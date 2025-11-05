<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;


 // Homepage
    Route::get('/', [FrontendController::class, 'index'])->name('index');
    Route::get('/about', [FrontendController::class, 'About'])->name('abouts');