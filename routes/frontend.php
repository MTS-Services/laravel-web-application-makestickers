<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;

Route::group(['as' => 'frontend.', 'middleware' => 'guest'], function () {
    // Route::get('/' , [FrontendController::class, 'home'])->name('home');
    Route::get('/about', [FrontendController::class, 'about'])->name('about');
    Route::get('/faq', [FrontendController::class, 'faq'])->name('faq');
    Route::get('/shipping', [FrontendController::class, 'shipping'])->name('shipping');
});
