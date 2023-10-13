<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    function index() {
        return view('models.homePage');
    }
    function listaCard() {
        return view('models.listaCard');
    }
    function about() {
        $lista = [
            'prova 1',
            'prova 2',
            'prova 3',
            'prova 4',
        ];

        return view('models.about', compact('lista'));
    }
}
