<?php
require_once('Concursado.php');
require_once('Comissionado.php');
require_once('Filhos.php');
require_once('Funcionario.php');
require_once('Departamento.php');

$filho1 = new Filhos(1, "Joao", "01/01/2010");
$filho2 = new Filhos(2, "Maria", "02/02/2012");

$concursado = new Concursado(1, "Carlos", 3000, [$filho1, $filho2], "12345");
$comissionado = new Comissionado(2, "Ana", 2000, [], 10);
$departamento = new Departamento(1, "Recursos Humanos");
$departamento->adimitirFuncionario($concursado);
$departamento->adimitirFuncionario($comissionado);
$departamento->MostrarDados();
echo "Salario Concursado: ".$concursado->calcularSalario(20)."<br>";
echo "Salario Comissionado: ".$comissionado->calcularSalario(5000)."<br>";
$departamento->demitirFuncionario(1);
