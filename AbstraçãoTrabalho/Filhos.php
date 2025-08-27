<?php
class Filhos{
    private $codigo;
    private $nome;
    private $idade;
    public function __construct($codigo, $nome, $idade)
    {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->idade = $idade;
    }
    public function getCodigo(){
        return $this->codigo;
    }
    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($idade){
        $this->idade = $idade;
    }
    public function MostrarDados(){
        echo "Codigo: ".$this->getCodigo()."<br>";
        echo "Nome: ".$this->getNome()."<br>";
        echo "Idade: ".$this->getIdade()."<br>";
    }
    public function verificarMaiorIdade(){
        if($this->getIdade() >= 18){
            return true;
        }else{
            return false;
        }
    }

}