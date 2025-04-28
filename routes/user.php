<?php

use App\Http\Controllers\Backend\User\Cart\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\User\DashbordController as UserDashboardController;
use App\Http\Controllers\Backend\User\OrderManage\OrderController;
use App\Http\Controllers\Backend\User\Review\ReviewController;
use App\Http\Controllers\Backend\User\Checkout\CheckoutController;

Route::group(['middleware' => ['auth'], 'as' => 'user.'], function () {
    Route::get('/dashboard', [UserDashboardController::class, 'dashboard'])->name('dashboard');
});
Route::group(['middleware' => ['auth'],'as'  => 'user.'], function () {
   Route::group(['as' => 'order.'], function () {
    Route::get('/order', [OrderController::class, 'index'])->name('index');
    Route::get('/order/show', [OrderController::class, 'show'])->name('show');
    Route::get('/order/status', [OrderController::class, 'status'])->name('status');
    Route::get('/order/history', [OrderController::class, 'orderHistory'])->name('history');
    Route::get('/order/details', [OrderController::class, 'orderDetails'])->name('details');
    Route::post('/order/store', [OrderController::class, 'store'])->name('store');
    Route::post('/payment',[OrderController::class,'orderPayment'])->name('payment');
   });


   Route::get('/review', [ReviewController::class, 'index'])->name('review.index');
   Route::get('/order/product_review', [ReviewController::class, 'productReview'])->name('order.product_review');
   Route::post('/review', [ReviewController::class, 'store'])->name('review.store');

   Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
   Route::get('/cart/remove', [CartController::class, 'removeFromCart'])->name('cart.remove');

   Route::post('/checkout',[CheckoutController::class,'index'])->name('checkout.form');
});

