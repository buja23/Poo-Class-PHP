<?php
class Comprador {
    private float $verba;

    public function __construct(float $verba) {
        $this->verba = $verba;
    }

    public function descontarVerba(float $valor): void {
        if ($valor > $this->verba) {
            echo "Verba insuficiente!<br>";
        } else {
            $this->verba -= $valor;
        }
    }

    public function mostrarAtributos(): void {
        echo "Comprador [Verba restante: R$ {$this->verba}]<br>";
    }
}
