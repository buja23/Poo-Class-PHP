<?php

    abstract class Cliente{
        protected $codigo;
        protected $nome;
        protected $idade;
        //... mais implementações
        public function __construct()
        {
            
        }

        public function setIdade($idade)
        {
            $this->idade = $idade;
        }

        public function getIdade()
        {
            return $this->idade;
        }
        
        public function mostrarDados()
        {
            echo "codigo: ." . $this->codigo . "<br>";
            echo "nome: " . $this->nome . "<br>";
            echo "idade: " . $this->idade . "<br>";
        }

        public abstract function avaliaIdade();

    }