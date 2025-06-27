<?php

Class Conta{
    protected $agencia;
    protected $conta;
    protected $saldo;

    public function __construct($agencia, $conta, $saldo){
        $this->agencia = $agencia;
        $this->conta = $conta;
        $this->saldo = $saldo;
    }

    public function depositar($quantia){
        $this->saldo += $valor;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function MostrarAtributos(){
        echo "Agencia: {$this->agencia}, Conta: {$this->conta}, Saldo: {$this->saldo}\n";
    }
}