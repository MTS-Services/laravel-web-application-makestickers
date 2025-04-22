<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\User\DashbordController as UserDashboardController;

Route::group(['middleware' => ['auth'], 'as' => 'user.'], function () {
    Route::get('/dashboard', [UserDashboardController::class, 'dashboard'])->name('dashboard');
});
