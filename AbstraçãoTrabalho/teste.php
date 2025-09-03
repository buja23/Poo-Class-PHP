<?php
require_once('Concursado.php');
require_once('Comissionado.php');
require_once('Filhos.php');
require_once('Funcionario.php');
require_once('Departamento.php');

$filho1 = new Filhos(1, "Joao", 13);
$filho2 = new Filhos(2, "Maria", 11);

// Criando funcionários
$concursado = new Concursado(1, "Carlos", 3000, [$filho1, $filho2], "12345");
$comissionado = new Comissionado(2, "Ana", 2000, [], 10); // 10% comissão

// Teste dos métodos individuais
echo "<h3>Dados Funcionários Individuais</h3>";
$concursado->MostrarAtributos();
echo "<br>";
$comissionado->MostrarAtributos();
echo "<br>";

// Criando departamento
$departamento = new Departamento(1, "Recursos Humanos");
$departamento->adimitirFuncionario($concursado);
$departamento->adimitirFuncionario($comissionado);

// Mostrar departamento
echo "<h3>Dados do Departamento</h3>";
$departamento->MostrarDados();

// Testar cálculo de salários
echo "<h3>Salários</h3>";
echo "Salario Concursado (20 dias úteis): " . $concursado->calcularSalario(20) . "<br>";
echo "Salario Comissionado (20 dias úteis): " . $comissionado->calcularSalario(20) . "<br>";

// Testar demissão
echo "<h3>Teste de Demissão</h3>";
$departamento->demitirFuncionario(1);

// Mostrar departamento após demissão
echo "<h3>Departamento após demissão</h3>";
$departamento->MostrarDados();
