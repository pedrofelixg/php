<?php

use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Service\Autenticador;
use Alura\Banco\Modelo\CPF;

require_once 'autoLoad.php';

$autenticador = new Autenticador();
$umDiretor = new Diretor(
    'Paulo Lira',
    new CPF('249.451.744-16'),
    12500
);

$autenticador->tentaLogin($umDiretor, '1234');