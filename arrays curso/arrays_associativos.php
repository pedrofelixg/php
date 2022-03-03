<?php declare(strict_types=1);
namespace Alura;

use ArrayUtils;

require 'ArrayUtils.php';

$correntistas = [
    'Giovanni',
    'João',
    'Maria',
    'Luis',
    'Luisa',
    'Rafael'
];

$saldos = [
    2500,
    3000,
    4400,
    1000,
    8700,
    9000
];

$relacionados = array_combine($correntistas, $saldos);

/*
if (array_key_exists('Rafael', $relacionados)) {
    echo "O saldo de Rafael é: {$relacionados['Rafael']}";
} else {
    echo "Não foi encontrado";
}
*/

$maiores = ArrayUtils::acharMaior(3000, $relacionados);
var_dump($maiores);