<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\User\DashbordController as UserDashboardController;
use App\Http\Controllers\Backend\User\OrderManage\OrderController;

Route::group(['middleware' => ['auth'], 'as' => 'user.'], function () {
    Route::get('/dashboard', [UserDashboardController::class, 'dashboard'])->name('dashboard');
});
Route::group(['middleware' => ['auth'],'as'  => 'user.'], function () {
   Route::get('/order', [OrderController::class, 'index'])->name('order.index');
   Route::get('/order/show', [OrderController::class, 'show'])->name('order.show');
   Route::get('/order/status', [OrderController::class, 'status'])->name('order.status');
});
