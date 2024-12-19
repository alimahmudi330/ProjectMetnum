<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\Item;
use App\Models\Material;

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

Route::get('/aplikasiuser', function () {
    return view('main.aplikasiuser');
})->name('aplikasiuser');

Route::get('/howtouse', function () {
    return view('main.howtouse');
})->name('howtouse');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::middleware('role:admin')->group(function () {
    // Admin dashboard route
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');

    // Route for updating material stock
    Route::post('/admin/update-stock', [AdminController::class, 'updateStock'])->name('admin.updateStock');
});

Route::middleware('role:user')->group(function () {
    // User form for application
    Route::get('/user', function () {
        return view('main.aplikasiuser', ['items' => Item::all()]);  // Pass items to the view
    })->name('user.form');

    // Route for calculation logic (handled by UserController)
    Route::post('/user/calculate', [UserController::class, 'calculate'])->name('user.calculate');

    // Result page for user
    Route::get('/user/result', function () {
        return view('main.hasilaplikasiuser');  // Result view
    })->name('user.result');
});
