<?php

namespace Alura\Banco\Modelo\Funcionario;


class Desenvolvedor extends Funcionarios
{
    public function calculaBonificacao(): float
    {
        return 500;
    }

}