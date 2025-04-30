<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Frontend\AuthController as TemporaryAuthController;

Auth::routes();

require __DIR__ . '/frontend.php';
require __DIR__ . '/user.php';
require __DIR__ . '/admin.php';
