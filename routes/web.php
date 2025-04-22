<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Frontend\AuthController as TemporaryAuthController;

Route::get('/', function () {
    // return Redirect::route('frontend.home');
    return view('welcome');
});

// Auth Routes
Route::get('/login', [TemporaryAuthController::class, 'login'])->name('login');
Route::get('/register', [TemporaryAuthController::class, 'register'])->name('register');
Route::get('/forgot-password', [TemporaryAuthController::class, 'forgotPassword'])->name('password.request');


Auth::routes();

require __DIR__ . '/frontend.php';
require __DIR__ . '/user.php';
require __DIR__ . '/admin.php';
