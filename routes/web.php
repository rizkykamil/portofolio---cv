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
use App\Http\Middleware\MaintenanceMiddleware;

// Route::prefix('/')->middleware(MaintenanceMiddleware::class)->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/about', [AboutController::class, 'index'])->name('about');
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
    Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
    Route::get('/works', [WorkController::class, 'index'])->name('works');
    Route::get('/works/{slug}', [WorkController::class, 'detail'])->name('works.detail');
// });// Middleware hanya diterapkan di grup ini

Route::prefix('auth')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login-post', [LoginController::class, 'authenticate'])->name('login.authenticate');
});
Route::prefix('/admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::prefix('blog')->group(function () {
        Route::get('/', [AdminBlogController::class, 'index'])->name('admin.blog.index');
        Route::get('/create', [AdminBlogController::class, 'create'])->name('admin.blog.create');
        Route::post('/store', [AdminBlogController::class, 'store'])->name('admin.blog.store');
        Route::get('/edit/{id}', [AdminBlogController::class, 'edit'])->name('admin.blog.edit');
        Route::put('/update/{id}', [AdminBlogController::class, 'update'])->name('admin.blog.update');
        Route::delete('/delete/{id}', [AdminBlogController::class, 'destroy'])->name('admin.blog.destroy');
    });
    Route::prefix('work')->group(function () {
        Route::get('/', [AdminWorkController::class, 'index'])->name('admin.work.index');
        Route::get('/create', [AdminWorkController::class, 'create'])->name('admin.work.create');
        Route::post('/store', [AdminWorkController::class, 'store'])->name('admin.work.store');
        Route::get('/edit/{id}', [AdminWorkController::class, 'edit'])->name('admin.work.edit');
        Route::put('/update/{id}', [AdminWorkController::class, 'update'])->name('admin.work.update');
        Route::delete('/delete/{id}', [AdminWorkController::class, 'destroy'])->name('admin.work.destroy');
    });
});

// Route maintenance juga tanpa middleware
// Route::get('/comming-soon', function () {
//     return view('comming-soon');
// });
