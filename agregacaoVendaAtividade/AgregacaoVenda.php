<?php
require_once 'Produto.php';
require_once 'Comprador.php';
require_once 'Vendedor.php';
require_once 'Venda.php';

$comprador = new Comprador(1000);
$vendedor = new Vendedor();

$produto1 = new Produto(1, "Notebook", 500);
$produto2 = new Produto(2, "Mouse", 50);

$venda = new Venda($comprador, $vendedor);
$venda->adicionarProduto($produto1);
$venda->adicionarProduto($produto2);

$venda->realizarVenda();
$venda->mostrarAtributos();
