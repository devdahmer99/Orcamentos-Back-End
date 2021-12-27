<?php

namespace Alura\DesignPattern\EstadosOrcamento;

use Alura\DesignPattern\Orcamento;

abstract class EstadoOrcamento
{
    /**
     * @param Orcamento $orcamento
     * @return mixed
     * @throws \DomainException
     */

    abstract public function CalculaDescontoExtra(Orcamento $orcamento);


    public function Aprova(Orcamento $orcamento)
    {
        throw new \DomainException('Este orcamento não pode ser aprovado');
    }

    public function Reprovado(Orcamento $orcamento)
    {
        throw new \DomainException('Este orcamento não pode ser reprovado');
    }

    public function Finaliza(Orcamento $orcamento)
    {
        throw new \DomainException('Este orcamento não pode ser finalizado');
    }

}