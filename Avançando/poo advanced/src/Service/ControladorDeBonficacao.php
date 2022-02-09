<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\Funcionarios;


class ControladorDeBonficacao
{
    private float $totalBonificacoes = 0;
    
    public function adicionarBonificacaoDe(Funcionarios $funcionarios)
    {
        $this->totalBonificacoes += $funcionarios->calculaBonificacao();
    }

    public function recuperaTotal(): float
    {
        return $this->totalBonificacoes;
    }


}