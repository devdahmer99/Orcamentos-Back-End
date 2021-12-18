<?php

namespace Alura\DesignPattern;

class CalculadoraDeImpostos
{
    public function calcula(Orcamento $orcamento, $imposto):float
    {
        return $imposto->calculaImposto($orcamento);
    }
}