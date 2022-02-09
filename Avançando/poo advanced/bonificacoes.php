<?php

require_once 'autoLoad.php';

use Alura\Banco\Modelo\Funcionario\EditorVideo;
use Alura\Banco\Service\ControladorDeBonficacao;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Desenvolvedor;

$funcioUm = new Gerente(
    'Jacqueline',
    new CPF('519.457.654-10'),
    4500
);

$funcioDois = new Diretor(
    'Gilderlan',
    new CPF('741.854.964-21'),
    3720
);

$funcioTres = new Desenvolvedor(
    'Pedro',
    new CPF('120.704.684-76'),
    2450
);

$funcioQuatro = new Desenvolvedor(
    'Maxianne',
    new CPF('159.753.654-12'),
    2450
);

$funcioCinco = new EditorVideo(
    'Lucas Mota',
    new CPF('357.624.994-16'),
    2150
);

$controlador = new ControladorDeBonficacao();
$controlador->adicionarBonificacaoDe($funcioUm);
$controlador->adicionarBonificacaoDe($funcioDois);
$controlador->adicionarBonificacaoDe($funcioTres);
$controlador->adicionarBonificacaoDe($funcioQuatro);
$controlador->adicionarBonificacaoDe($funcioCinco);

echo $controlador->recuperaTotal();