<?php

use App\Http\Controllers\PostController;
use App\Http\Livewire\Articles;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('articles', Articles::class);
Route::get('post', [PostController::class, 'index'])->name('post.index');