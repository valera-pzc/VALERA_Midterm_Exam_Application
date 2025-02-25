<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $games = [
        ['id' => 1, 'name' => 'Kingdom Come 2', 'genre' => 'RPG', 'price' => 59.99],
        ['id' => 2, 'name' => 'The Witcher 3', 'genre' => 'Action RPG', 'price' => 39.99],
        ['id' => 3, 'name' => 'Red Dead Redemption', 'genre' => 'Adventure', 'price' => 49.99],
        ['id' => 4, 'name' => 'Elden Ring', 'genre' => 'Soulslike', 'price' => 59.99],
        ['id' => 5, 'name' => 'Divinity: Original Sin 2', 'genre' => 'Turn-based RPG', 'price' => 44.99],
    ];

    // Method to display all games
    public function index()
    {
        return view('games.index', ['games' => $this->games]);
    }

    // Method to show a single game by ID
    public function show($id)
    {
        $game = collect($this->games)->firstWhere('id', $id);

        if (!$game) {
            abort(404); // Show a 404 page if game not found
        }

        return view('games.show', ['game' => $game]);
    }
}

