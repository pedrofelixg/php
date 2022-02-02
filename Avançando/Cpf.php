<?php

class Cpf
{
    private string $cpf;
    public function __construct(Cpf $cpfTitular)
    {
        $this->cpf = $cpfTitular;
    }
 }
