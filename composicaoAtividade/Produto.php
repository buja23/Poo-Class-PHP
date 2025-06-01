<?php
require_once 'Caracteristica.php';

class Produto {
    private $nome;
    private $estoque;
    private $preco;
    private $caracteristicas;

    public function __construct($nome, $estoque, $preco) {
        $this->nome = $nome;
        $this->estoque = $estoque;
        $this->preco = $preco;
        $this->caracteristicas = [];
    }

    public function addCaracteristica($nome, $valor) {
        $this->caracteristicas[] = new Caracteristica($nome, $valor);
    }

    public function getCaracteristicas() {
        return $this->caracteristicas;
    }

    public function getNome() {
        return $this->nome;
    }
}
