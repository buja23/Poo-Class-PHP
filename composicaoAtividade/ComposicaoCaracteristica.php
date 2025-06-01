<?php
require_once 'Cesta.php';

$produto1 = new Produto("Café", 5, 12);
$produto1->addCaracteristica("Expresso", "xícara");
$produto1->addCaracteristica("Americano", "copo");

$produto2 = new Produto("Chá", 3, 9);
$produto2->addCaracteristica("Chá Verde", "sachê");
$produto2->addCaracteristica("Chá Preto", "saquinho");

$cesta = new Cesta();
$cesta->adicionarProduto($produto1);
$cesta->adicionarProduto($produto2);

$cesta->exibirProdutos();
