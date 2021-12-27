<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\EstadosOrcamento\Finalizado;
use Exception;
use Traversable;

class ListaOrcamentos implements \IteratorAggregate
{
    /**
     * @var array Orcamento[]
     */
    private array $orcamentos;

    public function __construct()
    {
        $this->orcamentos = [];
    }


    public function addOrcamento(Orcamento $orcamento)
    {
        $this->orcamentos[] = $orcamento;
    }

    public function orcamentosLiberados(): array
    {
        return array_filter(
            $this->orcamentos,
            fn(Orcamento $orcamento) => $orcamento->estadoAtual instanceof Finalizado
        );
    }


    public function getIterator(): \ArrayIterator
    {
        return new \ArrayIterator($this->orcamentos);
    }
}