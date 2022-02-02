<?php

class Conta
{
    private string $titular;
    private float $saldo = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
    }

    public function sacar(float $valorASacar): void
    {
       if ($valorASacar > $this->saldo) {
           echo "Saldo Indisponível";
       } else {
           $this->saldo -= $valorASacar;
       }
    }
    public function depositar(float $deposito): void
    {
        if($deposito < 0) {
            echo "valor precisa ser positivo";
        } else {
            $this->saldo += $deposito;
        }
    }

    public function transferir(float $valorTransfere, Conta $contaDestino): void
    {
        if ($valorTransfere > $this->saldo) {
            echo "Saldo Indisponível";
        } else {
            $this->sacar($valorTransfere);
            $contaDestino->depositar($valorTransfere);
        }
    }
    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }
    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }
}
