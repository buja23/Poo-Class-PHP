<?php
require_once 'Caracteristica.php';
require_once 'Produto.php';


$p1 = new Produto('Café',5,12);
$p1->addCaracteristica('Expresso','xícara');
$p1->addCaracteristica('Americano','copo');

echo '<pre>';
print_r($p1);
echo '</pre>';

print "Produdo: {$p1->getNome()} <br>";

foreach ($p1->getCaracteristica() as $caracteristicas)
{
 $nome = $caracteristicas->getNome();
 $valor = $caracteristicas->getValor();
 print "Característica: {$nome} - {$valor} <br>";
}