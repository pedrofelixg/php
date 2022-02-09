<?php

require_once 'autoLoad.php';

use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\ContaPoupanca;
use Alura\Banco\Modelo\Conta\ContaCorrente;

$endereco = new Endereco('Buenos Aires', 'Centro', 'Cajueiro', '23');
$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias', $endereco);
$primeiraConta = new ContaCorrente($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$enderecoDois = new Endereco('Vicência', 'Caixa dAgua', 'Padre Amaro', '45');
$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $enderecoDois);
$segundaConta = new ContaPoupanca($patricia);
var_dump($segundaConta);

$enderecoTres = new Endereco('Macaparana', 'Jangamassa', 'Aristides Lobo', '75a');
$outra = new ContaPoupanca(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $enderecoTres));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
