<?php

$saldos = [
    2500,
    3000,
    4400,
    1000,
    8700,
    9000
];

foreach ($saldos as $saldo) {
    echo "o saldo é $saldo" . PHP_EOL;
}

sort($saldos);
echo "o menor saldo é $saldos[0]";
