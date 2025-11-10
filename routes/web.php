<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;


 // Homepage
    Route::get('/', [FrontendController::class, 'index'])->name('index');
    Route::get('/about', [FrontendController::class, 'About'])->name('abouts');
    Route::get('/gellary', [FrontendController::class, 'Gallary'])->name('gel');
    Route::get('/pre-ragistration', [FrontendController::class, 'Pre'])->name('pre.reg');
    Route::get('/hajj-package', [FrontendController::class, 'Pack'])->name('hajj.pack');
    Route::get('/hajj-package/download/{id}', [FrontendController::class, 'downloadPdf'])->name('package.download');
  