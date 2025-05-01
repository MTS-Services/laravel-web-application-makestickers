<?php

use App\Http\Controllers\Backend\User\Cart\CartController;
use Illuminate\Support\Facades\Route;



use App\Http\Controllers\Backend\User\DashboardController as UserDashboardController;
use App\Http\Controllers\Backend\User\UserProfileController;
use App\Http\Controllers\Backend\User\Review\ReviewController;
use App\Http\Controllers\Backend\User\Checkout\CheckoutController;
use App\Http\Controllers\Backend\User\Address\ShippingAddressController;
use App\Http\Controllers\Backend\User\Order\OrderProcessController;

Route::group(['middleware' => ['auth'], 'as' => 'user.'], function () {
    Route::get('/dashboard', [UserDashboardController::class, 'dashboard'])->name('dashboard');
});
