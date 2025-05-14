<?php
require_once "Conta.php";
require_once "Cliente.php";

$cli = new Cliente("buja", "azaleias", "23x1111" );

$ct = new Conta("1", "2000");
$ct->setCliente($cli);
echo "numero:". $ct->getNumero()."<br>". "Saldo:". $ct->getSaldo();

?>