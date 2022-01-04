<?php

namespace Alura\DesignPattern\Vendas;

abstract class Venda
{
    public \DateTimeImmutable $dataRealizacao;

    public function __construct(\DateTimeInterface $dataRealizacao)
    {
        $this->dataRealizacao = $dataRealizacao;
    }
}