<?php

class Cliente{
    private $nome;
    private $endereco;
    private $rg;
    
    public function __construct($nome, $endereco, $rg){
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->rg = $rg;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }
    public function setRg($rg){
        $this->rg = $rg;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getEndereco(){
        return $this->endereco;
    }
    public function getRg(){
        return $this->rg;
    }
    
}

?>