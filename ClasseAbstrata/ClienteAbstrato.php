<?php

require_once 'Cliente.php';
require_once 'Fisico.php';
require_once 'Teste.php';


$cf = new Fisico();
$cf->setIdade(20);

$teste = new Teste();
$teste->verificaIdade($cf);