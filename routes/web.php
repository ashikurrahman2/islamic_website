<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;


 // Homepage
    Route::get('/', [FrontendController::class, 'index'])->name('index');
    Route::get('/about', [FrontendController::class, 'About'])->name('abouts');
    Route::get('/services', [FrontendController::class, 'Service'])->name('service');
    Route::get('/service-details', [FrontendController::class, 'Sdetails'])->name('service.details');