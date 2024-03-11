<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class HomeController extends Controller
{
    public function __invoke(){
        $movies = Movie::all();
        return view('movies', compact('movies'));
    }
}

// ricorda che nei controller usi invoke se fanno una cosa sola, se fanno più cose 
// gurda la live del 11/03/2024 dal minuto 1:00:00