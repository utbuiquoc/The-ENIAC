<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;

use App\Livewire\Clubs;
use App\Livewire\Author;
use App\Livewire\Pages\Post;

Route::view('/', 'welcome');
Route::get('/clubs', Clubs::class);
Route::get('/author/{slug}', Author::class);
Route::get('/post/{slug}', Post::class);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/test', [AuthorController::class, 'test']);

require __DIR__.'/auth.php';
