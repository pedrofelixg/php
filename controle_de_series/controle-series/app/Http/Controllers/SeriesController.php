<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = [
            'The Mandalorian',
            'O Livro de Boba Fett',
            'The Witcher',
            'Wandavision',
            'Star Wars: Clone Wars'
        ];

        return view('series.index', compact('series'));
    }
}
