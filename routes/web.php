<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\AdminBlogController;
use App\Http\Controllers\Admin\AdminWorkController;
use App\Http\Controllers\Admin\DashboardController;
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

Route::prefix( 'admin')->group( function (): void {
    Route::prefix('auth')->group( function (): void {
        Route::get(uri: '/login', action: [LoginController::class, 'index'])->name(name: 'login');
        Route::post(uri: '/login-post', action: [LoginController::class, 'authenticate'])->name(name: 'login.authenticate');
    });
    Route::get(uri: '/dashboard', action: [DashboardController::class, 'index'])->name(name: 'dashboard');
    Route::prefix('blog')->group(function (): void {
        Route::get(uri: '/', action: [AdminBlogController::class, 'index'])->name(name: 'admin.blog.index');
        Route::get(uri: '/create', action: [AdminBlogController::class, 'create'])->name(name: 'admin.blog.create');
        Route::post(uri: '/store', action: [AdminBlogController::class, 'store'])->name(name: 'admin.blog.store');
        Route::get(uri: '/edit/{id}', action: [AdminBlogController::class, 'edit'])->name(name: 'admin.blog.edit');
        Route::put(uri: '/update/{id}', action: [AdminBlogController::class, 'update'])->name(name: 'admin.blog.update');
        Route::delete(uri: '/delete/{id}', action: [AdminBlogController::class, 'destroy'])->name(name: 'admin.blog.destroy');
    });
    Route::prefix('work')->group(function (): void {
        Route::get(uri: '/', action: [AdminWorkController::class, 'index'])->name(name: 'admin.work.index');
        Route::get(uri: '/create', action: [AdminWorkController::class, 'create'])->name(name: 'admin.work.create');
        Route::post(uri: '/store', action: [AdminWorkController::class, 'store'])->name(name: 'admin.work.store');
        Route::get(uri: '/edit/{id}', action: [AdminWorkController::class, 'edit'])->name(name: 'admin.work.edit');
        Route::put(uri: '/update/{id}', action: [AdminWorkController::class, 'update'])->name(name: 'admin.work.update');
        Route::delete(uri: '/delete/{id}', action: [AdminWorkController::class, 'destroy'])->name(name: 'admin.work.destroy');
    });

});
