<?php

class Titular
{
    private string $cpfTitular;
    private string $nomeTitular;

    public function __construct(string $cpf, string $nome)
    {
        $this->cpfTitular = $cpf;
        $this->validarNomeTitular($nome);
        $this->nomeTitular = $nome;
    }
    public function recuperarCPF(): string
    {
        return $this->cpfTitular;
    }

    public function recuperarNome(): string
    {
        return $this->nomeTitular;
    }
    private function validarNomeTitular(string $nomeDoTitular)
    {
        if (mb_strlen($nomeDoTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres" . PHP_EOL;
            exit();
        }
    }
}