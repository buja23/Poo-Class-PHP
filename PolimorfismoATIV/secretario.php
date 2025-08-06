<?php
    class secretario extends Funcionario{

        public function __construct($codigo, $nome, $salario){
            parent::__construct($codigo, $nome, $salario);
        }
    }