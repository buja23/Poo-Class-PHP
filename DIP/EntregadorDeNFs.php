<?php

class EntregadorDeNFs implements Entregador {
    private $correios;
    private $lei;

    public function __construct(Correios $correios, LeiDeEntrega $lei) {
        $this->correios = $correios;
        $this->lei = $lei;
    }

    public function entregar(NotaFiscal $nf) {
        if ($this->lei->deveEntregarUrgente($nf)) {
            $this->correios->enviaPorSedex10($nf);
        } else {
            $this->correios->enviaPorSedexComum($nf);
        }
    }
}