<?php

require_once 'C:\Users\pedro\PhpstormProjects\php_composer\controle-livros\app\Http\Controllers\LivrosController.php';

use Illuminate\Support\Facades\Route;

Route::get('/listaLivros', 'App\Http\Controllers\LivrosController@index')
    ->name('listar_livros');
Route::get('/listaLivros/criar', 'App\Http\Controllers\LivrosController@create')
    ->name('criar_livros');
Route::post('listaLivros/criar', 'App\Http\Controllers\LivrosController@store')
    ->name('armazenar_livros');
Route::delete('/listaLivros/remover/{id}', 'App\Http\Controllers\LivrosController@destroy')
    ->name('excluir_livros');

