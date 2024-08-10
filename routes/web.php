<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; 



Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::get('/logout', function () {
    Auth::logout();
    return view('welcome');
})->name('logout');




require __DIR__.'/auth.php';
