<?php
require_once 'Comprador.php';
require_once 'Vendedor.php';
require_once 'Produto.php';

class Venda {
    private Comprador $comp;
    private Vendedor $vend;
    private array $vetProd;

    public function __construct(Comprador $comp, Vendedor $vend) {
        $this->comp = $comp;
        $this->vend = $vend;
        $this->vetProd = [];
    }

    public function adicionarProduto(Produto $produto): void {
        $this->vetProd[] = $produto;
    }

    public function realizarVenda(): void {
        $total = 0;
        foreach ($this->vetProd as $produto) {
            $total += $produto->getPreco();
            $this->vend->calcularComissao($produto->getPreco());
        }

        $this->comp->descontarVerba($total);
    }

    public function mostrarAtributos(): void {
        echo "<strong>Venda:</strong><br>";
        foreach ($this->vetProd as $produto) {
            $produto->mostrarAtributos();
        }
        $this->comp->mostrarAtributos();
        $this->vend->mostrarAtributos();
    }
}
