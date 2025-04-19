<?php

use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return Redirect::route('frontend.home');
    // return view('welcome');
});

require __DIR__ . '/frontend.php';

//Frontend Routes
Route::group(['as' => 'frontend.', 'middleware' => 'guest'], function () {
});
Route::get('/pouches' , [FrontendController::class, 'pouch'])->name('pouch');