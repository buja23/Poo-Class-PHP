<?php

require_once 'Funcionario.php';
require_once 'gerente.php';
require_once 'diretor.php';
require_once 'secretario.php';

$funcionario = new Funcionario(1, "João", 2000.00);
$gerente = new gerente(2, "Maria", 3000.00);
$diretor = new diretor(3, "Carlos", 5000.00);
$secretario = new secretario(4, "Ana", 2500.00);

$funcionario->MostrarAtributos();
$gerente->MostrarAtributos();
$diretor->MostrarAtributos();
$secretario->MostrarAtributos();

$funcionario->bonificar();
$gerente->bonificar();
$diretor->bonificar();
$secretario->bonificar();

$funcionario->MostrarAtributos();
$gerente->MostrarAtributos();
$diretor->MostrarAtributos();
$secretario->MostrarAtributos();
