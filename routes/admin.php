<?php

use App\Http\Controllers\Backend\Admin\Auth\LoginController as AdminLoginController;
use App\Http\Controllers\Backend\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Backend\Admin\AdminManage\AdminController;
use App\Http\Controllers\Backend\Admin\AdminManage\PermissionController;
use App\Http\Controllers\Backend\Admin\AdminManage\RoleController;
use App\Http\Controllers\Backend\Admin\StickerMangement\StickerCategoryController;
use App\Http\Controllers\Backend\Admin\StickerMangement\StickerTypeContoller;
use Illuminate\Support\Facades\Route;

// Admin Auth Routes
Route::controller(AdminLoginController::class)->prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', 'showLoginForm')->name('login'); // Admin Login Form
    Route::post('/login', 'login')->name('login.submit'); // Admin Login Submit (Handled by AuthenticatesUsers)
    Route::post('/logout', 'logout')->name('logout'); // Admin Logout
});

// Admin Dashboard Routes (Requires Admin Authentication)

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth:admin'], function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'dashboard'])->name('dashboard');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {

    // Admin & Role - Permission Management
    Route::group(['prefix' => 'admin-management', 'as' => 'am.'], function () {

        // Admins Management
        Route::resource('admin', AdminController::class);
        Route::group(['as' => 'admin.', 'prefix' => 'admin-restore'], function () {
            Route::get('/trash', [AdminController::class, 'trash'])->name('trash');
            Route::get('/restore/{id}', [AdminController::class, 'restore'])->name('restore');
            Route::get('/force-delete/{id}', [AdminController::class, 'forceDelete'])->name('force-delete');
            Route::get('/status/{id}/{status}', [AdminController::class, 'status'])->name('status');
        });

        // Role Management
        Route::resource('role', RoleController::class);
        Route::group(['as' => 'role.', 'prefix' => 'role-restore'], function () {
            Route::get('/trash', [RoleController::class, 'trash'])->name('trash');
            Route::get('/restore/{id}', [RoleController::class, 'restore'])->name('restore');
            Route::get('/force-delete/{id}', [RoleController::class, 'forceDelete'])->name('force-delete');
        });

        // Permission Management
        Route::resource('permission', PermissionController::class);
        Route::group(['as' => 'permission.', 'prefix' => 'permission-restore'], function () {
            Route::get('/trash', [PermissionController::class, 'trash'])->name('trash');
            Route::get('/restore/{id}', [PermissionController::class, 'restore'])->name('restore');
            Route::get('/force-delete/{id}', [PermissionController::class, 'forceDelete'])->name('force-delete');
        });

        // Sticker Management
        Route::resource('sticker-category',StickerCategoryController::class);
        Route::resource('sticker-type', StickerTypeContoller::class);
    });
});
