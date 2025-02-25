<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

// Route to display all games
Route::get('/games', [ProductController::class, 'index'])->name('games.index');

// Route to show details of a specific game
Route::get('/games/{id}', [ProductController::class, 'show'])->name('games.show');

