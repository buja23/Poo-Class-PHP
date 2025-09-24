<?php

require_once 'calcularinterface.php';
require_once 'Funcionario.php';


class FuncionarioPermanente implements calcularsalarios {
    private $salario;

    public function __construct($salario) {
        $this->salario = $salario;
    }

    public function getsalario() {
        return $this->salario;
    }

    public function calcularsalario(Funcionario $funcionario) {
        return $funcionario->salario * 1.10; // 10% de aumento
    }
}
?>
