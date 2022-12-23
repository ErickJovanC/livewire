<?php
use App\Http\Livewire\Articles;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('articles', Articles::class);