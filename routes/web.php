<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/about', function () {
    return view('main.about');
})->name('about');



Route::get('/howtouse', function () {
    return view('main.howtouse');
})->name('howtouse');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');