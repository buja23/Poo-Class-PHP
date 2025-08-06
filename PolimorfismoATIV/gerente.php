<?php 
class gerente extends Funcionario {
    public function __construct($codigo, $nome, $salario) {
        parent::__construct($codigo, $nome, $salario);
    }

    public function bonificar() {
        $quantia = $this->salario * 0.15; // Aumento de 20% para gerentes
        $this->salario += $quantia;
    }
}