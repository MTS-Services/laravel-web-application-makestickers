<?php

use App\Http\Controllers\Frontend\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;

Route::group(['as' => 'frontend.', 'middleware' => 'guest'], function () {
    Route::get('/' , [FrontendController::class, 'home'])->name('home');
    Route::get('/about', [FrontendController::class, 'about'])->name('about');
    Route::get('/career', [FrontendController::class, 'career'])->name('career');
    Route::get('/pouch', [FrontendController::class, 'pouch'])->name('pouch');
    Route::get('/faq', [FrontendController::class, 'faq'])->name('faq');
    Route::get('/shipping', [FrontendController::class, 'shipping'])->name('shipping');
    Route::get('/return', [FrontendController::class, 'return'])->name('returns'); 
    Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
    Route::get('/designs', [FrontendController::class, 'designs'])->name('designs');
    Route::get('/custom-sticker', [FrontendController::class, 'customSticker'])->name('custom_sticker');
    Route::get('/custom-label', [FrontendController::class, 'customLabel'])->name('custom_label');
    Route::get('/categories/{id}/second_categories', [CategoryController::class, 'getSecondCategories'])->name('second_categories');
});
