<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', 'App\Http\Controllers\Admin\DashboardController@dashboard')->name('dashboard');

Route::get('/',  'App\Http\Controllers\Admin\DashboardController@dashboard');