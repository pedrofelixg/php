<?php
require 'Calculadora.php';

$notas = [4, 8, 6, 9, 8, 10, 10, 7];

$calculadora = new Calculadora();
$media = $calculadora->calculaMedia($notas);

if ($media) {
    echo "A média é: $media";
} else {
    echo "Não foi possível calcular a média";
}