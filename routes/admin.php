<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Backend\Admin\DashboardController as AdminDashboardController;

Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'dashboard'])->name('dashboard');
});
