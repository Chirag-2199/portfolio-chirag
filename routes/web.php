<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home'); // Ensure the 'home' view exists
})->name('home');

Route::get('/exp', function () {
    return view('exp'); // Ensure the 'exp' view exists
})->name('exp');

Route::get('/about-me', function () {
    return view('about'); // Ensure the 'about' view exists
})->name('about');

Route::get('/projects', function () {
    return view('projects'); // Ensure the 'projects' view exists
})->name('projects');
