<?php
class Vendedor {
    private float $comissao = 0;

    public function calcularComissao(float $preco): void {
        $this->comissao += $preco * 0.02;
    }

    public function mostrarAtributos(): void {
        echo "Vendedor [Comissão acumulada: R$ {$this->comissao}]<br>";
    }
}
