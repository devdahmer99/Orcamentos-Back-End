<?php

namespace Alura\DesignPattern\Descontos;

use Alura\DesignPattern\Orcamento;

class DescontoMaisDe5Itens extends Desconto
{
    public function CalculaDesconto(Orcamento $orcamento): float
    {
        if ($orcamento->quantidadeItens > 5) {
            return $orcamento->valor * 0.01;
        }
        return $this->proximoDesconto->calculaDesconto($orcamento);
    }
}