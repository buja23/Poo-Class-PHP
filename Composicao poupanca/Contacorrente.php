<?php
class ContaCorrente{
    private $saldo;
    private $limite;

    public function __construct($saldoInicial, $limite){
        $this->saldo = $saldoInicial;
        $this->limite = $limite;
    }

    public function depositar($valor){
        $this->saldo += $valor;
    }
    public function sacar($valor){
        if ($valor <= $this->saldo + $this->limite){
            $this->saldo -= $valor;
        }else{
            echo"saldo insuficiente.";
        }
    }
    public function gerarextrato(){
        echo "saldo: ". $this->saldo . "limite: " . $this->limite;
    }
        

}

?>