<?php

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return Redirect::route('frontend.home');
    // return view('welcome');
});

require __DIR__ . '/frontend.php';
