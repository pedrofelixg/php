<?php

$nomes = "Giovanni, João, Maria, Pedro";

$arrays_nomes = explode(", ", $nomes); //o separador depende da variável pode ser (, ; / | )

foreach ($arrays_nomes as $nome) {
    echo "Olá $nome, seja bem vindo(a)" . PHP_EOL;
}

$nomesJuntos = implode(", ", $arrays_nomes);
echo $nomesJuntos;