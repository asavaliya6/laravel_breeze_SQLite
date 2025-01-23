<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard', function () { 
        return view('dashboard');
    })->name('dashboard');
  
    // Route::resource('categories', \App\Http\Controllers\CategoryController::class); 
    // Route::resource('categories', \App\Http\Controllers\CategoryController::class)->middleware('is_admin');
    // Route::resource('categories', \App\Http\Controllers\CategoryController::class)->middleware(\App\Http\Middleware\IsAdminMiddleware::class);  
        
    Route::middleware('is_admin')->group(function () { 
        Route::resource('categories', \App\Http\Controllers\CategoryController::class); 
        Route::resource('posts', \App\Http\Controllers\PostController::class);
    });
});

    Route::name('posts.')->group(function () {
        Route::post('/store', [PostController::class, 'store'])->name('store');
    });

require __DIR__.'/auth.php';
