<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Backend\User\DashboardController as UserDashboardController;

Route::group(['as' => 'user.', 'prefix' => 'user', 'middleware' => 'auth:web'], function () {
    Route::get('/dashboard', [UserDashboardController::class, 'dashboard'])->name('dashboard');
});