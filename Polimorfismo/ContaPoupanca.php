<?php

Class ContaPoupanca extends Conta{

    public function __construct($agencia, $conta, $saldo){
        parent::__construct($agencia, $conta, $saldo);
    }

    public function retirar($quantia){
        if ($quantia <= $this->saldo){
            $this->saldo -= $quantia;
        }else{
            echo "Saldo insuficiente para saque.";
        }
    }
}