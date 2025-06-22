<?php
class Produto{ 
    private $codigo;
    private $nome;
    private $preco;

    public function __construct($codigo, $nome, $preco){
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function exibirDetalhes(){
        echo "Código: " . $this->codigo . "\n";
        echo "Nome: " . $this->nome . "\n";
        echo "Preço: R$" . number_format($this->preco, 2, ',', '.') . "\n";
    }
    
}