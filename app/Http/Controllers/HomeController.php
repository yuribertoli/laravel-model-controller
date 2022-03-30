<?php

//con comando "php artisan make:controller HomeController" creo un controller di nome HomeController
//lo utilizzo per creare un metodo da utilizzare nella route home per passare il database alla pagina corrispondente

namespace App\Http\Controllers;

/* Richiamo il model Movie */
use App\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        /* Prendo tutti i dati contenuti nel database */
        $movies = Movie::all();

        //ritorno il collegamento alla pagina principale e passo il database salvato nella variabile $movies
        return view('home', ['movies' => $movies]);
    }
}
