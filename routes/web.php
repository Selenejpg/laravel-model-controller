<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $movies = config('movies');

    //compact funziona quando chiave e valore hanno la stessa nomenclatura. Ha la funzione di richiamare la chiave all'interno dell'array (entrambi stesso nome)
    
    return view('partials.index', compact('movies'));
});

Route::get('/movie/{id}', function ($id) {

    $movies = config('movies');

    //recuperare un solo dato dell'array globale
    $movie = $movies[$id];
    
    return view('partials.show', compact('movie'));
})->name('movie');

