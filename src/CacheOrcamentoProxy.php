<?php

namespace Alura\DesignPattern;

class CacheOrcamentoProxy extends Orcamento
{
    private float $valorCache = 0;
    private Orcamento $orcamento;

    public function __construct(Orcamento $orcamento)
    {
        $this->orcamento = $orcamento;
    }

    public function adicionaItem(Orcavel $item)
    {
        throw new \DomainException('Não é possivel adicionar item a orcamento cacheavel');
    }

    public function valor(): float
    {
       if ($this->valorCache == 0) {
        $cache = $this->orcamento->valor();
       }

       return $this->valorCache;
    }
}