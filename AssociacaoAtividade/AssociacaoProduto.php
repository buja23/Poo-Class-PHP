<?php
require_once 'Produto.php';
require_once 'Fabricante.php';

$fa = new Fabricante("dove", "Rua A, 123", "123456789");

$prod1 = new Produto("sabonete", "limpar", 10.99);
$prod1->setFabricante($fa);
echo "Produto: " . $prod1->getDescricao() . "\n";
echo "estoque: " . $prod1->getEstoque() . "\n";
echo "preco: " . $prod1->getPreco() . "\n";
echo "Fabricante: " . $prod1->getFabricante()->getNome() . "\n";




?>