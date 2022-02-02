<?php
require_once 'SRC/Conta.php';
require_once 'SRC/Titular.php';

$primieraConta = new Conta(new Titular('145.751.684-10', 'Thomas Mann'));
$primieraConta->depositar(750);
$primieraConta->sacar(210);

$segundaConta = new Conta(new Titular('477.261.334-12', 'Hermann Hesse'));
$segundaConta->depositar(335);
$primieraConta->transferir(100, $segundaConta);

echo $primieraConta->recuperaSaldo() . PHP_EOL;
echo $segundaConta->recuperaSaldo() . PHP_EOL;




