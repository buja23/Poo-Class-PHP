<?php

require_once 'Conta.php';
require_once 'ContaCorrente.php';
require_once 'ContaPoupanca.php';

$contas = [];
$contas[] = new ContaCorrente('001', '12345-6', 1000, 500);
$contas[] = new ContaPoupanca('002', '65432-1', 2000);

foreach ($contas as $conta) {
    $conta->MostrarAtributos();
    $conta->depositar(100);
    echo "Saldo após depósito: " . $conta->getSaldo() . "\n";
    
    if ($conta instanceof ContaCorrente) {
        $conta->retirar(1200);
    } elseif ($conta instanceof ContaPoupanca) {
        $conta->retirar(500);
    }
    
    echo "Saldo após saque: " . $conta->getSaldo() . "\n";
}