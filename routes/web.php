<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPage\HomeController;
use App\Http\Controllers\LandingPage\AboutController;

Route::group(['prefix' => '/'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/about', [AboutController::class, 'index'])->name('about');
});
