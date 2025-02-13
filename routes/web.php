<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/experience', function () {
    return view('experience');
})->name('experience');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

// Protect dashboard route with authentication middleware
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Include authentication routes
require __DIR__.'/auth.php';
