<?php
class Fisico extends Cliente{
    private $cpf;
    private $rg;
    //... mais implementações
    public function avaliaIdade()
    {
        if ($this->idade < 18 and $this->idade > 40) {
            echo "Cliente Fisico";
        }
    }
}