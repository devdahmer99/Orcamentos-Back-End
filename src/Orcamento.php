<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\EstadosOrcamento\EmAprovacao;
use Alura\DesignPattern\EstadosOrcamento\EstadoOrcamento;
use DomainException as DomainExceptionAlias;

class Orcamento implements Orcavel
{
    private array $itens;
    public EstadoOrcamento $estadoAtual;

    public function __construct()
    {
        $this->estadoAtual = new EmAprovacao();
        $this->itens = [];
    }

    public function aplicaDescontoExtra()
    {
        $this->valor -= $this->estadoAtual->calculaDescontoExtra($this);
    }

    public function aprova()
    {
        $this->estadoAtual->aprovaOrcamento($this);
    }

    public function reprova()
    {
        $this->estadoAtual->reprova($this);
    }

    public function finaliza()
    {
        $this->estadoAtual->Finaliza($this);
    }

    public function adicionaItem(Orcavel $item)
    {
        $this->itens[] = $item;
    }

    public function valor(): float
    {
        return array_reduce
        (
            $this->itens,
            fn($valorAcumulado, $item) => $item->valor() + $valorAcumulado,
            0
        );
    }
}