<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Admin\TestManage\TestController;
use App\Http\Controllers\Backend\Admin\Auth\LoginController as AdminLoginController;
use App\Http\Controllers\Backend\Admin\DashbordController as AdminDashboardController;
use App\Http\Controllers\Backend\Admin\SiteSetting\SiteSettingController;

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




    // Site Setting 
    Route::group(['prefix' => 'site-settings', 'as' => 'settings.'], function () {
        Route::get('/', [SiteSettingController::class, 'index'])->name('index');
        Route::post('/store', [SiteSettingController::class, 'store'])->name('store');
        Route::put('/update/{update}', [SiteSettingController::class, 'update'])->name('update');
    });
});
