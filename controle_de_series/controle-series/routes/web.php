<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeriesController;

# Route::get('/series', 'App\Http\Controllers\SeriesController@listarSeries'); <- Sintaxe do Laravel usada na Alura
Route::get('/series', [SeriesController::class, 'index'])->name('listar_series');
Route::get('/series/criar', [SeriesController::class, 'create']);
Route::post('series/criar', [SeriesController::class, 'store'])->name('criar_serie');
Route::delete('/series/remover/{id}', [SeriesController::class, 'destroy'] );
