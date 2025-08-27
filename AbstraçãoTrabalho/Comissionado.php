<?php
class Comissionado extends Funcionario{
    private $porcentagem;
    public function __construct($codigo, $nome, $salario, $vetFilhos = [], $porcentagem)
    {
        parent::__construct($codigo, $nome, $salario, $vetFilhos);
        $this->porcentagem = $porcentagem;
    }
    public function getporcentagem(){
        return $this->porcentagem;
    }
    public function setporcentagem($porcentagem){
        $this->porcentagem = $porcentagem;
    }
    public function calcularSalario($diasUteis){
        $salarioDia = $this->salario / 30;
        $salarioBase = $salarioDia * $diasUteis;
        $comissao = $salarioBase * ($this->porcentagem / 100);
        return $salarioBase + $comissao;
    }

}