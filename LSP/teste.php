<?php
require_once 'ContaCorrente.php';
require_once 'ContaPoupanca.php';

//Saque teste
function realizarSaque(Conta $conta, $valor) {
    $conta->sacar($valor);
    echo "Novo saldo: " . $conta->getSaldo() . "\n";
}


$contaCorrente = new ContaCorrente(1000);
realizarSaque($contaCorrente, 200); 


$contaPoupanca = new ContaPoupanca(1000);
realizarSaque($contaPoupanca, 200); 
