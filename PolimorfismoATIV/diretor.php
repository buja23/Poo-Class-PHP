<?php 
    class diretor extends Funcionario{

        public function __construct($codigo, $nome, $salario){
            parent::__construct($codigo, $nome, $salario);
        }

        public function bonificar() {
            $quantia = 1000.00; // Aumento de 20% para diretores
            $this->salario += $quantia;
        }
    }