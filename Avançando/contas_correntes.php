<?php
$conta1 = [
    'titular' => 'Pedro',
    'saldo' => 509.09
];
$conta2 = [
    'titular' => 'Jacqueline',
    'saldo' => 4500.73
];
$conta3 = [
    'titular' => 'Ana Clara',
    'saldo' => 979.80
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i] ['titular'] . PHP_EOL;
}
