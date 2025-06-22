<?php
require_once 'Produto.php';
require_once 'Perecivel.php';

echo "Produto Comum:\n";
$produto = new Produto(1, "Caderno", 15.90);
$produto->exibirDetalhes();

echo "\nProduto Perecível:\n";
$perecivel = new Perecivel(2, "Iogurte", 4.50, "2025-07-01", "2025-06-01", "L1234");
$perecivel->exibirDetalhes();
?>
