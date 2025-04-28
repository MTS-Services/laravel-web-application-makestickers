<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Admin\TestManage\TestController;
use App\Http\Controllers\Backend\Admin\Auth\LoginController as AdminLoginController;
use App\Http\Controllers\Backend\Admin\DashbordController as AdminDashboardController;
use App\Http\Controllers\Backend\Admin\ProductsManage\MainCategoryController;
use App\Http\Controllers\Backend\Admin\ProductsManage\MaterialCategoryController;
use App\Http\Controllers\Backend\Admin\ProductsManage\ProductsController;
use App\Http\Controllers\Backend\Admin\ProductsManage\SecondCategoryController;
use App\Http\Controllers\Backend\Admin\ProductsManage\ThirdCategoryController;

// Admin Auth Routes
Route::controller(AdminLoginController::class)->prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', 'showLoginForm')->name('login'); // Admin Login Form
    Route::post('/login', 'login')->name('login.submit'); // Admin Login Submit (Handled by AuthenticatesUsers)
    Route::post('/logout', 'logout')->name('logout'); // Admin Logout
});

// Admin Dashboard Routes (Requires Admin Authentication)
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'dashboard'])->name('admin.dashboard'); // Admin Dashboard
    Route::group(['as' => 'admin.'], function () {
        Route::resource('/test', TestController::class);
        Route::resource('/main-category', MainCategoryController::class);
        Route::resource('/second-category', SecondCategoryController::class);
        Route::resource('/third-category', ThirdCategoryController::class);
        Route::resource('/material-category', MaterialCategoryController::class);
        Route::resource('/product', ProductsController::class);
    });
});
