<?php

require_once 'TributavelInterface.php';

class ContaCorrente implements TributavelInterface
{
    private $saldo;

    public function __construct($saldoInicial)
    {
        $this->saldo = $saldoInicial;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function calculaTributos()
    {
        return $this->saldo * 0.05;
    }
}