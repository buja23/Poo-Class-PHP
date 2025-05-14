<?php
require_once "Cesta.php";
require_once "Produto.php";

$p1 = new Produto("sabonete",23,25);
$p2 = new Produto("xarope",11,27);
$p3 = new Produto("teclado",42,100);

$c = new Cesta();
$c->addItem($p1);
$c->addItem($p2);
$c->addItem($p3);

echo "<pre>";
print_r($c);
echo"<pre>";

foreach($c->getItens() as $item){
    print("Descrição: {$item->getDescricao()} <br>");
}



?>