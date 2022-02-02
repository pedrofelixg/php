<?php
echo "BEM VINDO À CALCULADORA DE IMC EM PHP" . PHP_EOL;

$nome = readline("Qual o seu nome: ");
$peso = 77;
$altura = 1.82;

$imc_calculado = round($peso / ($altura **2), 2, $mode = PHP_ROUND_HALF_EVEN);


echo "Olá $nome, Seu Imc é $imc_calculado". PHP_EOL;
if ($imc_calculado <18.5) {
    echo "Você está abaixo do Peso Ideal, procure um médico";
} elseif ($imc_calculado >= 18.6 && $imc_calculado <= 24.9) {
    echo "Você está no Peso Ideal";
} elseif ($imc_calculado >= 25.0 && $imc_calculado <= 29.9) {
    echo "Você está Acima do Peso Ideal";
} else {
    echo "Você está com graus de Obesidade, procure um médico.";
}
