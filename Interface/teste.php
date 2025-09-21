<?php

require_once 'ContaCorrente.php';
require_once 'SeguroDeVida.php';
require_once 'TotalizadorDeTributos.php';

echo "--- Iniciando Testes ---\n\n";

$contaCorrente = new ContaCorrente(5000.00);
$seguroDeVida = new SeguroDeVida();

$tributoConta = $contaCorrente->calculaTributos();
$tributoSeguro = $seguroDeVida->calculaTributos();

echo "Saldo da Conta Corrente: R$ " . number_format($contaCorrente->getSaldo(), 2, ',', '.') . "\n";
echo "Tributo da Conta Corrente: R$ " . number_format($tributoConta, 2, ',', '.') . "\n";
echo "Tributo do Seguro de Vida: R$ " . number_format($tributoSeguro, 2, ',', '.') . "\n\n";

echo "--- Testando o Totalizador ---\n\n";

$totalizador = new TotalizadorDeTributos();

$totalizador->adiciona($contaCorrente);
$totalizador->adiciona($seguroDeVida);

$totalDeTributos = $totalizador->getTotal();

echo "Total de tributos acumulados: R$ " . number_format($totalDeTributos, 2, ',', '.') . "\n";

?>