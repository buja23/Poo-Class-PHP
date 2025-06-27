<?php
Class ContaCorrente extends Conta {

    private $limite;

    public function __construct($agencia, $conta, $saldo, $limite) {
        parent::__construct($agencia, $conta, $saldo);
        $this->limite = $limite;
    }

    public function retirar($quantia) {
        if ($quantia <= $this->saldo + $this->limite) {
            $this->saldo -= $quantia;
            return true;
        } else {
            echo "Saldo insuficiente para saque.";
            return false;
        }
    }

    public function MostrarAtributos() {
        parent::MostrarAtributos();
        echo "Limite: {$this->limite}\n";
    }
}