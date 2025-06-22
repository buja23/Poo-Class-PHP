<?php
class Banco{
    private $poupanca;
    private $contacorrente;

    public function __construct(){
        $this->poupanca = []; 
        $this->contacorrente = []; 
    }

    public function adicionarContaCorrente(ContaCorrente $conta){
        $this->contacorrente[] = $conta;
    }

    public function adicionarPoupanca(Poupanca $poupanca){
        $this->poupanca[] = $poupanca;
    }

    public function listarPoupancas() {
        return $this->poupanca;
    }

    public function listarContasCorrentes() {
        return $this->contacorrente;
    }
}
?>