<?php

use Illuminate\Support\Facades\Route;

// Route::get('/dashboard', 'App\Http\Controllers\Admin\DashboardController@dashboard')->name('dashboard');

// Route::get('/',  'App\Http\Controllers\Admin\DashboardController@dashboard');

Route::get('/login', 'App\Http\Controllers\Admin\AdminLoginController@showLoginForm')->name('login');
Route::post('/login', 'App\Http\Controllers\Admin\AdminLoginController@login')->name('login.submit');
Route::get('logout/', 'App\Http\Controllers\Admin\AdminLoginController@logout')->name('logout');
Route::get('/',  'App\Http\Controllers\Admin\DashboardController@dashboard')->name('dashboard');