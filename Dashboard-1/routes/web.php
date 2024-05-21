<?php

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;



Route::middleware('auth')->group(function () {
    Route::get('/home', function () {
        return view('pages.dashboard');
    })->name('home');
});
Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('pages.dashboard');
    });
});

// Route::get('/login', function () {
//     return view('pages.auth.login');
// })->name("login");
// Route::get('/register', function () {
//     return view('pages.auth.register');
// })->name("register");
// Route::get('/users', function () {
//     return view('pages.users.index');
// });
