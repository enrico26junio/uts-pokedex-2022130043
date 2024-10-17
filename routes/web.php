<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokedexController;
use App\Http\Controllers\PokemonController;

// Route ke halaman utama untuk menampilkan Pokemon dalam grid
Route::get('/', [PokedexController::class, 'index'])->name('pokedex.index');

// Route untuk resource CRUD Pokemon
Route::resource('pokemon', PokemonController::class);
