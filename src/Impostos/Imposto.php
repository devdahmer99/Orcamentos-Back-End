<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

abstract class Imposto
{
    private ?Imposto $outroImposto;

    public function __construct(Imposto $outroImposto = null)
    {
        $this->outroImposto = $outroImposto;
    }

    abstract protected function realizaCalculo(Orcamento $orcamento): float;

    public function calculaImposto($orcamento)
    {
        return $this->realizaCalculo($orcamento)  + $this->realizaCalculoOutroImposto($orcamento);
    }

    public function realizaCalculoOutroImposto(Orcamento $orcamento)
    {
        return $this->outroImposto === null ? 0 : $this->outroImposto->realizaCalculoOutroImposto($orcamento);
    }
}