<?php

namespace Alura\Banco\Modelo\Funcionario;

class EditorVideo extends Funcionarios
{

    public function calculaBonificacao(): float
    {
        return 600;
    }
}