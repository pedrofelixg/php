<?php

function mostra ($string) {
    echo $string . PHP_EOL;
}
function validaEmail (string $email) {
    $posicao = mb_strpos($email, '@');
    if($posicao === 0) {
        mostra('ERRO, Faltou a conta');
    }
    elseif($posicao === false) {
       mostra('ERRO, Esse campo é do e-mail.');
    } else {
        mostra('Obrigado!');
    }
}

validaEmail('pedro.viniciusacm@gmail.com');


