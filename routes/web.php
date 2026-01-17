<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.landing.home');
})->name('home');

// Auth Routes (placeholder - adjust according to your auth setup)
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');
