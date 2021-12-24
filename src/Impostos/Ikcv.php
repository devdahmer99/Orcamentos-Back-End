<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

/**
 * @property $impostoComMaisDeUmaAliquota
 */
class Ikcv extends ImpostoComMaisDeUmaAliquota
{
    protected function deveAplicarTaxaMaxima(Orcamento $orcamento): bool
    {
        return $orcamento->valor > 300 && $orcamento->quantidadeItens > 3;
    }

    protected function calculaTaxaMaxima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.04;
    }

    protected function calculaTaxaMinima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.025;
    }
}