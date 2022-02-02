<?php
function exibeMensagem($mensagem) {
    echo $mensagem . '<br>';
}

function saque($conta, $valorASacar) {
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem('Você não pode sacar este valor');
    } else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

function deposito($conta, $depositar) {
    if ($depositar > 0) {
        $conta ['saldo'] += $depositar;
    } else {
        exibeMensagem("Depósitos precisam ser positivos");
    }
    return $conta;
}

function exibeConta(array $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $conta[titular]. Saldo: {$conta['saldo']}</li>";
}
