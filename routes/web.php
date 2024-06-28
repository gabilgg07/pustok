<?php

use App\Http\Controllers\Front\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('front.home.index');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');