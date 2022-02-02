<?php
$idade = [25, 62, 41, 37, 28, 17, 15];

list ($idadeJoao, $idadeSara, $idadeMelissa) = $idade;


for ($i = 0; $i < count($idade); $i++) {
    echo $idade[$i] . PHP_EOL;
}

