<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

//routes and games
Route::get('/games', [ProductController::class, 'index'])->name('games.index');
Route::get('/games/{id}', [ProductController::class, 'show'])->name('games.show');
