<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

// Route::get('/', function () {
//     return view('welcome');
// });

 // Homepage
    Route::get('/', [FrontendController::class, 'index'])->name('index');