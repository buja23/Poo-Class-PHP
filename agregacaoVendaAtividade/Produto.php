<?php
class Produto {
    private int $codigo;
    private string $nome;
    private float $preco;

    public function __construct(int $codigo, string $nome, float $preco) {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function getPreco(): float {
        return $this->preco;
    }

    public function mostrarAtributos(): void {
        echo "Produto [Código: {$this->codigo}, Nome: {$this->nome}, Preço: R$ {$this->preco}]<br>";
    }
}
