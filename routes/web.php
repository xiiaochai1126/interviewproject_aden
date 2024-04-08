<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'create']);
Route::get('/cat-images', [LoginController::class, 'showCatImages'])->name('cat-images');

Route::post('/register', [RegisterController::class, 'store'])->name('register');
Route::post('/check', [LoginController::class, 'check'])->name('check');
