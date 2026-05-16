<?php

use Illuminate\Support\Facades\Route;
use Http\Controllers\AuthController;

Route::get('/', function () {
    return view('login');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::post('/register',[AuthController::class,'register'])->name('register');
Route::post('/Login',[AuthController::class,'register'])->name('login');