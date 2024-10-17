<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokedexController extends Controller
{
    public function index()
    {
        // Ambil data Pokemon dari database dengan pagination 9 per halaman
        $pokemons = Pokemon::paginate(9);

        // Kembalikan view pokedex dan lemparkan data Pokemon
        return view('pokedex', compact('pokemons'));
    }
}
