<?php

use App\Http\Controllers\Frontend\AuthController as TemporaryAuthController;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return Redirect::route('frontend.home');
//     // return view('welcome');
// });

Route::group(['middleware' => 'Auth', 'prefix' => 'home','as' => 'frontend'], function () {
    Route::get('/', [FrontendController::class, 'home'])->name('home');
    Route::get('/about', [FrontendController::class, 'return'])->name('returns');
});

// Auth Routes
Route::get('/login', [TemporaryAuthController::class, 'login'])->name('login');
Route::get('/register', [TemporaryAuthController::class, 'register'])->name('register');
Route::get('/forgot-password', [TemporaryAuthController::class, 'forgotPassword'])->name('password.request');

require __DIR__ . '/frontend.php';
