<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

class ICMS extends Imposto
{
    /*public function calculaImposto(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.1;
    }*/

    protected function realizaCalculo(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.1;
    }
}