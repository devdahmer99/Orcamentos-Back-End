<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

class ISS extends Imposto
{
    protected function realizaCalculo(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.06;
    }
}