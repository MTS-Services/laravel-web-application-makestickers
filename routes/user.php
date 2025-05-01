<?php

use App\Http\Controllers\Backend\User\Cart\CartController;
use Illuminate\Support\Facades\Route;



use App\Http\Controllers\Backend\User\DashbordController as UserDashboardController;
use App\Http\Controllers\Backend\User\UserProfileController;
use App\Http\Controllers\Backend\UserDashboard\UserDashboardController as UserController;
use App\Http\Controllers\Backend\User\Review\ReviewController;
use App\Http\Controllers\Backend\User\Checkout\CheckoutController;
use App\Http\Controllers\Backend\User\Address\ShippingAddressController;
use App\Http\Controllers\Backend\User\Order\OrderProcessController;

Route::group(['middleware' => ['auth'], 'as' => 'user.'], function () {
    Route::get('/dashboard', [UserDashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [UserProfileController::class, 'index'])->name('profile');
    Route::get('/profile/edit', [UserProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [UserProfileController::class, 'update'])->name('profile.update');
    Route::get('/profile/password', [UserProfileController::class, 'showUpdateForm'])->name('profile.password.form');
    Route::put('/profile/password', [UserProfileController::class, 'updatePassword'])->name('profile.password');
    Route::get('/AccountSettings', [UserController::class, 'AccountSettings'])->name('AccountSettings');
    Route::get('/AddressBook', [UserController::class, 'AddressBook'])->name('AddressBook');
    Route::get('/ManageSavedCreditCards', [UserController::class, 'ManageSavedCreditCards'])->name('ManageSavedCreditCards');
    Route::get('/MyFavoriteDesigns', [UserController::class, 'MyFavoriteDesigns'])->name('MyFavoriteDesigns');
    Route::get('/OrderHistory', [UserController::class, 'OrderHistory'])->name('OrderHistory');
});
// order controller
Route::group(['middleware' => ['auth'], 'as'  => 'user.'], function () {

    // Review controller
    Route::get('/review', [ReviewController::class, 'index'])->name('review.index');
    Route::get('/order/product_review', [ReviewController::class, 'productReview'])->name('order.product_review');
    Route::post('/review', [ReviewController::class, 'store'])->name('review.store');





    Route::group(['as' => 'op.', 'prefix' => 'order-process'], function () {
        Route::get('/cart', [OrderProcessController::class, 'cart'])->name('cart.index');
        Route::post('/cart', [OrderProcessController::class, 'cartStore'])->name('cart.store');
        Route::get('/cart/remove', [OrderProcessController::class, 'cartRemove'])->name('cart.remove');
        Route::post('/address', [OrderProcessController::class, 'address'])->name('address.form');
        Route::post('/payment', [OrderProcessController::class, 'payment'])->name('payment.form');
        Route::post('/store', [OrderProcessController::class, 'store'])->name('store');
        Route::get('/order-history', [OrderProcessController::class, 'orderHistory'])->name('history');
        Route::get('/order-details', [OrderProcessController::class, 'orderDetails'])->name('details');
        Route::get('/order-status', [OrderProcessController::class, 'status'])->name('status');
        Route::get('/show', [OrderProcessController::class, 'show'])->name('show');
        // web.php

        Route::post('/user/cart/update', [OrderProcessController::class, 'update'])->name('cart.update');
    });
});
