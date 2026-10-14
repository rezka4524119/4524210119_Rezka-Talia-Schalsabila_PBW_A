<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('dashboard');

Route::get('/tentang-kami', function () {
    return view('about');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/dashboard-test', function () {
    return 'Selamat! Kamu sudah login.';
})->middleware('auth');

Route::get('/tes-route', function () {
    return 'ROUTE LARAVEL BERHASIL!';
});

require __DIR__.'/auth.php';