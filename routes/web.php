<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('user', 'user')
    ->middleware(['auth', 'verified'])
    ->name('user');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('work', 'work')
    ->middleware(['auth'])
    ->name('work');

Route::view('medical', 'medical')
    ->middleware(['auth'])
    ->name('medical');

Route::view('activity', 'activity')
    ->middleware(['auth'])
    ->name('activity');

Route::view('setting', 'setting')
    ->middleware(['auth'])
    ->name('setting');

require __DIR__.'/auth.php';
