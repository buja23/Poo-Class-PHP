<?php
require_once 'Conta.php';

class ContaPoupanca implements Conta {
    protected $saldo;

    public function __construct($saldo) {
        $this->saldo = $saldo;
    }

    public function sacar($valor) {
        // 2%
        $valorComTaxa = $valor * 1.02;
        if ($valorComTaxa <= $this->saldo) {
            $this->saldo -= $valorComTaxa;
        } else {
            echo "Saldo insuficiente poupança.\n";
        }
    }

    public function getSaldo() {
        return $this->saldo;
    }
}
