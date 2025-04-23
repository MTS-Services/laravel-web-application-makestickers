<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Backend\User\DashbordController as UserDashboardController;
use App\Http\Controllers\Backend\User\UserProfileController;

Route::group(['middleware' => ['auth'], 'as' => 'user.'], function () {
    Route::get('/dashboard', [UserDashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [UserProfileController::class, 'index'])->name('profile');
    Route::get('/profile/edit', [UserProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [UserProfileController::class, 'update'])->name('profile.update');
    Route::get('/profile/password', [UserProfileController::class, 'showUpdateForm'])->name('profile.password.form');
    Route::put('/profile/password', [UserProfileController::class, 'updatePassword'])->name('profile.password');
});
