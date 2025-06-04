<?php
class Banco{
    private $poupanca;
    private $contacorrente;

    public function __construct($poupanca,$contacorrente){
        $this->poupanca = []; 
        $this->contacorrente = []; 
    }
}
?>