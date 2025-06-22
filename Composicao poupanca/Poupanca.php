<?php

class Poupanca{
    private $saldo;

    public function __construct($saldoInicial){
        $this->saldo = $saldoInicial;
    }

    public function depositar($valor){
        $this->saldo += $valor;
    }

     public function sacar($valor){
        if ($valor <= $this->saldo ){
            $this->saldo -= $valor;
        }else{
            echo"saldo insuficiente.";
        }
    }
    public function gerarRendimento(float $taxa) {
        $this->saldo += $this->saldo * $taxa;
    }

     public function gerarExtrato() {
        return "Poupança - Saldo: R$ " . $this->saldo;
    }
}