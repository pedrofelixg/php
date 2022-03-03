<?php

$titulo = [
    'A Universidade Desconhecida',
    'Toda Poesia',
    'Padre Sergyo',
    'Os Despossuídos'
];
$autor = [
    'Roberto Bolaño',
    'Ferreira Gullar',
    'Liev Tolstói',
    'Úrsula K LeGuin'
];
$editora = [
    'Companhia das Letras',
    'Record',
    'Editora 34',
    'Aleph'
];

$listaDesejados = array_combine($titulo, $autor);
var_dump($listaDesejados);

$withEditora = array_combine($titulo, $editora);
var_dump($withEditora);