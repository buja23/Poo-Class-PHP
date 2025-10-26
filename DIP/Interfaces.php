<?php

//Interfaces


interface LeiDeEntrega
{
    public function deveEntregarUrgente(NotaFiscal $nf);
}


interface Correios
{
    public function enviaPorSedex10(NotaFiscal $nf);
    public function enviaPorSedexComum(NotaFiscal $nf);
}


interface CalculadorDeImposto
{
    public function para(NotaFiscal $nf);
}


interface NFDao
{
    public function persiste(NotaFiscal $nf);
}


//Despachador
interface Entregador
{
    public function entregar(NotaFiscal $nf);
}