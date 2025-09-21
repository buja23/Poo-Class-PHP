<?php

require_once 'TributavelInterface.php';

class SeguroDeVida implements TributavelInterface
{
    public function calculaTributos()
    {
        return 75.0;
    }
}