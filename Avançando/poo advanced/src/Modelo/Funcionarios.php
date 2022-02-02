<?php
namespace Alura\Banco\Modelo;
class Funcionarios extends Pessoa
{
    private string $cargo;

    public function __construct(string $nome, string $cpf, string $cargo)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
    }

    public function recuperaCargo(): string
    {
        return $this->cargo;
    }
    public function alteraNome(string $nome): void
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }




}