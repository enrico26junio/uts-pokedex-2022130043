<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    // Constructor untuk melindungi route menggunakan middleware auth, kecuali untuk show
    public function __construct()
    {
        $this->middleware('auth')->except(['show']);
    }

    // Function lainnya seperti index, create, store, dll.
}
