<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Clubs;
use App\Http\Controllers\AuthorController;

Route::view('/', 'welcome');
Route::get('/clubs', Clubs::class);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/test', [AuthorController::class, 'test']);

require __DIR__.'/auth.php';
