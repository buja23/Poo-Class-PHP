<?php

class Perecivel extends Produto{
    private $dataValidade;
    private $dataFabricacao;
    private $lote;

    public function __construct($codigo, $nome, $preco, $dataValidade, $dataFabricacao, $lote){
        parent::__construct($codigo, $nome, $preco);
        $this->dataValidade = $dataValidade;
        $this->dataFabricacao = $dataFabricacao;
        $this->lote = $lote;
    }

    public function exibirDetalhes(){
        parent::exibirDetalhes();
        echo "Data de Validade: " . $this->dataValidade . "\n";
        echo "Data de Fabricação: " . $this->dataFabricacao . "\n";
        echo "Lote: " . $this->lote . "\n";
    }
}