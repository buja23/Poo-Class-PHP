<?php 
    class diretor extends Funcionario{

        public function __construct($codigo, $nome, $salario){
            parent::__construct($codigo, $nome, $salario);
        }

        public function bonificar() {
            parent::bonificar();
            $quantia = 1000.00; 
            $this->salario += $quantia;
        }
    }