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

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('forgot-password');

// Temporary route for UMKM Preview
Route::get('/umkm/preview', function () {
    return view('pages.umkm.home');
})->name('umkm.preview');
