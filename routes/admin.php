<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Admin\TestManage\TestController;
use App\Http\Controllers\Backend\Admin\Auth\LoginController as AdminLoginController;
use App\Http\Controllers\Backend\Admin\DashbordController as AdminDashboardController;
use App\Http\Controllers\Backend\Admin\Order\OrderController;



// Admin Auth Routes
Route::controller(AdminLoginController::class)->prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', 'showLoginForm')->name('login'); // Admin Login Form
    Route::post('/login', 'login')->name('login.submit'); // Admin Login Submit (Handled by AuthenticatesUsers)
    Route::post('/logout', 'logout')->name('logout'); // Admin Logout
});

// Admin Dashboard Routes (Requires Admin Authentication)
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'dashboard'])->name('admin.dashboard'); // Admin Dashboard
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::resource('/test', TestController::class);
    });
});
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {
   Route::resource('/order', OrderController::class);
   Route::any('/order/status', [OrderController::class, 'status'])->name('order.status');
});


