<?php

class Conta{
    private $numero;
    private $saldo;
    private $cliente; //associação
    
    public function __construct($numero, $saldo){
        $this->numero = $numero;
        $this->saldo = $saldo;
    }
    public function setNumero($numero){
        $this->numero = $numero;
    }
    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }
    public function setCliente($cliente){
        $this->cliente = $cliente;
    }
    public function getNumero(){
        return $this->numero;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    public function getCliente(){
        return $this->cliente;
    }
    
}


?>