<?php
require_once 'Produto.php';

class Cesta {
    private $produtos;

    public function __construct() {
        $this->produtos = [];
    }

    public function adicionarProduto(Produto $produto) {
        $this->produtos[] = $produto;
    }

    public function exibirProdutos() {
        foreach ($this->produtos as $produto) {
            echo "Produto: " . $produto->getNome() . "<br>";
            foreach ($produto->getCaracteristicas() as $caracteristica) {
                echo "- Característica: " . $caracteristica->getNome() . " - " . $caracteristica->getValor() . "<br>";
            }
            echo "<br>";
        }
    }
}
