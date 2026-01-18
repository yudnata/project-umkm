<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.landing.home');
})->name('home');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', function () {
    return redirect()->route('customer.dashboard');
});

Route::get('/customer/dashboard', function () {
    return view('pages.customer.dashboard');
})->name('customer.dashboard');

Route::get('/customer/orders', function () {
    return view('pages.customer.orders');
})->name('customer.orders');

Route::get('/customer/partners', function () {
    return view('pages.customer.partners');
})->name('customer.partners');

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

Route::get('/umkm/booking', function () {
    return view('pages.umkm.booking');
})->name('umkm.booking');

Route::get('/umkm/booking-success', function () {
    return view('pages.umkm.booking-success');
})->name('umkm.booking-success');
