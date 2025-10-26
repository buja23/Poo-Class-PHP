<?php

class DespachadorDeNotasFiscais
{
    private $dao;
    private $impostos;
    private $entregador;


    public function __construct(
        NFDao $dao,
        CalculadorDeImposto $impostos,
        Entregador $entregador
    ) {
        $this->dao = $dao;
        $this->impostos = $impostos;
        $this->entregador = $entregador;
    }


    public function processa(NotaFiscal $nf)
    {

        $imposto = $this->impostos->para($nf);
        $nf->setImposto($imposto);


        $this->entregador->entregar($nf);

        $this->dao->persiste($nf);
    }
}