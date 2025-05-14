<?php
class Produto{
    private$descricao;
    private$estoque;
    private$preco;
    private$fabricante; //associação

    public function __construct($descricao, $estoque, $preco){
        $this->descricao = $descricao;
        $this->estoque = $estoque;
        $this->preco = $preco;
    }
    public function getDescricao(){
        return $this->descricao;
    }
    public function getEstoque(){
        return $this->estoque;
    }
    public function getPreco(){
        return $this->preco;
    }
    public function getFabricante(){
        return $this->fabricante;
    }
    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }
    public function setEstoque($estoque){
        $this->estoque = $estoque;
    }
    public function setPreco($preco){
        $this->preco = $preco;
    }
    public function setFabricante($fabricante){
        $this->fabricante = $fabricante;
    }

    
}
?>