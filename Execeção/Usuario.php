<?php
    class Usuario{
        public $nome;
        public $email;

        public function __construct($nome, $email) {
            $this->validarEmail($nome);
            $this->validarNome($email);

        }

        public function validarNome($nome){
            if (preg_match('/^[A-Za-zÀ-ÖØ-öø-ÿ\s]{2,}$/u', $nome) == 0){
                $this->nome = $nome;
                echo "nome AAAAAAAAA";
            }else{
                echo "nome invalido";
            }

        }

        public function validarEmail($email){
            if (filter_var($email, FILTER_VALIDATE_EMAIL )){
                $this->email = $email;
                echo "email AAAAAAAAAAAA";
            }else{
                echo "email invalido";
            }
        }
    }