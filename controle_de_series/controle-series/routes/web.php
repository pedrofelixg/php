<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeriesController;

# Route::get('/series', 'App\Http\Controllers\SeriesController@listarSeries'); <- Sintaxe do Laravel usada na Alura
Route::get('/series', [SeriesController::class, 'index']);
