<?php declare(strict_types=1);

require 'ArrayUtils.php';

$correntistas_e_compras = [
    "Giovanni",
    "João",
    12,
    "Maria",
    25,
    "Luis",
    "Luisa",
    "12"
];

var_dump($correntistas_e_compras);
ArrayUtils::remover("12", $correntistas_e_compras);
var_dump($correntistas_e_compras);