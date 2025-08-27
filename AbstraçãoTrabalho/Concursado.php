<?php
require('Funcionario.php');

class Concursado extends Funcionario{
    private $numeroEdital;
    public function __construct($codigo, $nome, $salario, $vetFilhos = [], $numeroEdital)
    {
        parent::__construct($codigo, $nome, $salario, $vetFilhos);
        $this->numeroEdital = $numeroEdital;
    }
    public function getNumeroEdital(){
        return $this->numeroEdital;
    }
    public function setNumeroEdital($numeroEdital){
        $this->numeroEdital = $numeroEdital;
    }
    public function calcularSalario($diasUteis){
        $salarioDia = $this->salario / 30;
        return $salarioDia * $diasUteis;
    }

}