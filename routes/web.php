<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/pendaftaran', function () {
    return view('pendaftaran');
});

// use App\Http\Controllers\LoginController;
// Route::get('/login',[LoginController::class,'index'])->name('login');

// use App\Http\Controllers\RegisterController;
// Route::get('/register',[RegisterController::class,'index'])->name('register');