<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPage\BlogController;
use App\Http\Controllers\LandingPage\HomeController;
use App\Http\Controllers\LandingPage\WorkController;
use App\Http\Controllers\LandingPage\AboutController;
use App\Http\Controllers\LandingPage\ContactController;

Route::group(attributes: ['prefix' => '/'], routes: function (): void {
    Route::get(uri: '/', action: [HomeController::class, 'index'])->name(name: 'home');
    Route::get(uri: '/about', action: [AboutController::class, 'index'])->name(name: 'about');
    Route::get(uri: '/contact', action: [ContactController::class, 'index'])->name(name: 'contact');
    Route::post(uri: '/contact', action: [ContactController::class, 'store'])->name(name: 'contact.store');
    Route::get(uri: '/blog', action: [BlogController::class, 'index'])->name(name: 'blog.index');
    Route::get(uri: '/blog/{slug}', action: [BlogController::class, 'show'])->name(name: 'blog.show');
    Route::get(uri: '/works', action: [WorkController::class, 'index'])->name(name: 'works');
});
