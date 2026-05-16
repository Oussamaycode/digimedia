<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/dashboard',function () {
    return view('dashboard');
});

Route::get('home',function(){
    return view('home');
});

Route::post('/register',[AuthController::class,'register'])->name('register');
Route::post('/Login',[AuthController::class,'login'])->name('login');
Route::post('/home',[MediaTrackController::class,''])->name('media.upload');