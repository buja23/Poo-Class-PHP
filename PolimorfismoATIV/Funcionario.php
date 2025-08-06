<?php

Class Funcionario{
    protected $codigo;
    protected $nome;
    protected $salario;

    public function __construct($codigo, $nome, $salario){
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function bonificar(){
        $quantia = $this->salario * 0.10;
        $this->salario += $quantia;
    }

    public function mostrarAtributos(){
        echo "Código: {$this->codigo}, Nome: {$this->nome}, Salário: {$this->salario} <br>";
    }
}