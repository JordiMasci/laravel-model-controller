<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index() {
       
        return view('models.homePage');
    }
    public function listaCard() {
         // RECUPERO MOVIES DAL DATABASE
         $movies = Movie::all();

        return view('models.listaCard', compact('movies'));
    }
    public function about() {
        $lista = [
            'prova 1',
            'prova 2',
            'prova 3',
            'prova 4',
        ];

        return view('models.about', compact('lista'));
    }
}
