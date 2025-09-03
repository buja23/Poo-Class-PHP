<?php
class Departamento{
    private $codigo;
    private $nome;
    private $vetorFuncionarios;
    
    public function __construct($codigo, $nome, $vetorFuncionarios = [])
    {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->vetorFuncionarios = $vetorFuncionarios;
    }

    public function getCodigo() {
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
    public function getVetorFuncionarios(){
        return $this->vetorFuncionarios;
    }
    public function setVetorFuncionarios($vetorFuncionarios){
        $this->vetorFuncionarios = $vetorFuncionarios;
    }

    public function MostrarDados(){
        echo "Codigo: ".$this->getCodigo()."<br>";
        echo "Nome: ".$this->getNome()."<br>";
        echo "Funcionarios: <br>";
        foreach($this->getVetorFuncionarios() as $funcionario){
            $funcionario->MostrarAtributos();
            echo "<br>";
        }
    }

    public function adimitirFuncionario($funcionario){
        array_push($this->vetorFuncionarios, $funcionario);
    }

    public function listarDadosFuncionario(){
        foreach($this->getVetorFuncionarios() as $funcionario){
            $funcionario->MostrarAtributos();
            echo "<br>";
        }
    }

    public function demitirFuncionario($codigo){
        foreach($this->getVetorFuncionarios() as $codigo => $funcionario){
            if($funcionario->getCodigo() == $codigo){
                unset($this->vetorFuncionarios[$codigo]);
                echo "Funcionario demitido com sucesso!<br>";
                return;
            }
        }
        echo "Funcionario nao encontrado!<br>";
    }

    public function calcularFolhaPagamento(){
        $total = 0;
        foreach($this->getVetorFuncionarios() as $funcionario){
            $total += $funcionario->calcularSalario();
        }
        return $total;
    }
}

