<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;

class MovieController extends Controller
{
    public function index(){
        //$movies = config('movies');

        $movies = Movie::all();

        //compact funziona quando chiave e valore hanno la stessa nomenclatura. Ha la funzione di richiamare la chiave all'interno dell'array (entrambi stesso nome)
        
        return view('partials.index', compact('movies'));
    }

    public function show($id){
        //$movies = config('movies');

        //recuperare un solo dato dell'array globale
        //$movie = $movies[$id];

        $movie = Movie::findOrFail($id);
        
        return view('partials.show', compact('movie'));
    }
}
