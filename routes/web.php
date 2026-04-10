<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Tambahan route
Route::get('/profil', function () {
    return "HALAMAN PROFIL";
});

Route::get('/katalog', function () {
    return view('katalog');
});

Route::get('/bantuan', function () {
    return view('bantuan');
});

Route::get('/contact', function () {
    return view('contact');
});

