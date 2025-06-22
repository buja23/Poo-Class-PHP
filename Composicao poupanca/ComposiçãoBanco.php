<?php
require_once 'Banco.php';
require_once 'ContaCorrente.php';
require_once 'Poupanca.php';
$banco = new Banco();

// Criando contas
$cc1 = new ContaCorrente(500, 200);
$cc2 = new ContaCorrente(1000, 300);

$p1 = new Poupanca(1500);
$p2 = new Poupanca(2500);

// Adicionando ao banco
$banco->adicionarContaCorrente($cc1);
$banco->adicionarContaCorrente($cc2);
$banco->adicionarPoupanca($p1);
$banco->adicionarPoupanca($p2);

// Operações
$cc1->sacar(600);         // usa o limite
$cc2->depositar(500);     // saldo agora: 1500
$p1->gerarRendimento(0.1); // 10% de rendimento
$p2->sacar(500);          // saldo agora: 2000

// Mostrando extratos
echo "<h3>Contas Correntes:</h3>";
foreach ($banco->listarContasCorrentes() as $conta) {
    echo $conta->gerarExtrato() . "<br>";
}

echo "<h3>Poupanças:</h3>";
foreach ($banco->listarPoupancas() as $p) {
    echo $p->gerarExtrato() . "<br>";
}
?>