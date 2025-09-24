<?php

require_once 'Funcionario.php';
require_once 'calcularinterface.php';
require_once 'FuncionarioContrato.php';
require_once 'FuncionarioPermanente.php';

$funcionario = new Funcionario(3000);

$contrato = new funcionarioContrato(3000);

$permanente = new FuncionarioPermanente(3000);

echo "Salário do funcionário com contrato temporário: " . $contrato->calcularsalario($funcionario) . "<br>";

echo "Salário do funcionário permanente: " . $permanente->calcularsalario($funcionario) . "<br>";
?>
