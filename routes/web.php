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
    Route::get('/Visa-requirement', [FrontendController::class, 'VISA'])->name('visa.req');
    Route::get('/significance', [FrontendController::class, 'sign'])->name('sign.req');
    Route::get('/umrah-significance', [FrontendController::class, 'umrahsign'])->name('umrahsign.req');
    Route::get('/umrah-package', [FrontendController::class, 'umrahpack'])->name('umrah.pack');
    Route::get('/contact', [FrontendController::class, 'commu'])->name('cont.pack');
    Route::get('/consultation', [FrontendController::class, 'Con'])->name('sult.pack');
   
  