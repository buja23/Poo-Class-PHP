<?php

class NotaFiscal
{
    private $valor;
    private $imposto;

    public function __construct(float $valor)
    {
        $this->valor = $valor;
        $this->imposto = 0;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setImposto(float $imposto)
    {
        $this->imposto = $imposto;
    }

    public function getValorTotal()
    {
        return $this->valor + $this->imposto;
    }
}