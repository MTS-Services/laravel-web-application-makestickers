<?php

use App\Http\Controllers\Backend\User\Cart\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\User\DashbordController as UserDashboardController;
use App\Http\Controllers\Backend\User\OrderManage\OrderController;
use App\Http\Controllers\Backend\User\Review\ReviewController;
use App\Http\Controllers\Backend\User\Checkout\CheckoutController;
use App\Http\Controllers\Backend\User\Address\ShippingAddressController;
use App\Http\Controllers\Backend\User\Order\OrderProcessController;

Route::group(['middleware' => ['auth'], 'as' => 'user.'], function () {
    Route::get('/dashboard', [UserDashboardController::class, 'dashboard'])->name('dashboard');
});
// order controller
Route::group(['middleware' => ['auth'],'as'  => 'user.'], function () {
   Route::group(['as' => 'order.'], function () {
//     Route::get('/order', [OrderController::class, 'index'])->name('index');
//     Route::get('/order/show', [OrderController::class, 'show'])->name('show');





   });

    // Review controller
    Route::get('/review', [ReviewController::class, 'index'])->name('review.index');
    Route::get('/order/product_review', [ReviewController::class, 'productReview'])->name('order.product_review');
    Route::post('/review', [ReviewController::class, 'store'])->name('review.store');





    Route::group(['as' => 'op.', 'prefix' => 'order-process'], function () {
        Route::get('/cart', [OrderProcessController::class, 'cart'])->name('cart.index');
        Route::get('/cart/remove', [OrderProcessController::class, 'cartRemove'])->name('cart.remove');
        Route::post('/address', [OrderProcessController::class, 'address'])->name('address.form');
        Route::post('/payment', [OrderProcessController::class, 'payment'])->name('payment.form');
        Route::post('/store', [OrderProcessController::class, 'store'])->name('store');
        Route::get('/order-history', [OrderProcessController::class, 'orderHistory'])->name('history');
        Route::get('/order-details', [OrderProcessController::class, 'orderDetails'])->name('details');
        Route::get('/order-status', [OrderProcessController::class, 'status'])->name('status');
        Route::get('/show', [OrderProcessController::class, 'show'])->name('show');
    });
});

