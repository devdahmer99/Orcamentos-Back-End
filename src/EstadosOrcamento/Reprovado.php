<?php

namespace Alura\DesignPattern\EstadosOrcamento;

use Alura\DesignPattern\Orcamento;

class Reprovado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        throw DomainException('Um Orcamento reprovado, não pode receber descontos!');
    }

    public function Finaliza(Orcamento $orcamento): void
    {
            $orcamento->estadoAtual = new Finalizado();
    }
}