<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.landing.home');
})->name('home');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('forgot-password');

Route::get('/umkm/preview', function () {
    return view('pages.umkm.home');
})->name('umkm.preview');

Route::get('/umkm/catalog', function () {
    return view('pages.umkm.catalog');
})->name('umkm.catalog');

Route::get('/umkm/detail', function () {
    return view('pages.umkm.detail');
})->name('umkm.detail');
