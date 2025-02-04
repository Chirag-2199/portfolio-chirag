<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

// Public routes
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/exp', function () {
    return view('exp'); 
})->name('exp');

Route::get('/about-me', function () {
    return view('about'); 
})->name('about');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');


Route::get('/admin/login', [AdminController::class, 'loginForm'])->name('admin.login.form');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login');


Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');


Route::get('/admin', [AdminController::class, 'index'])
    ->name('admin.dashboard')
    ->middleware('admin.auth');
