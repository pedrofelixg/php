<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/series', function () {
    $series = [
        'The Mandalorian',
        'O Livro de Boba Fett',
        'The Witcher',
        'Wandavision',
        'Star Wars: Clone Wars'
    ];
    $html = "<ul>";
    foreach ($series as $serie) {
        $html .= "<li>$serie</li>";
    }
    $html .= "</ul>";

    return $html;
});
