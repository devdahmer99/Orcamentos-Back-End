<?php

namespace Alura\DesignPattern;

class DadosExtrinsecosPedido
{
    private string $nomeCliente;
    private \DateTimeImmutable $dataFinalizacao;


    public function __construct(string $nomeCliente, \DateTimeInterface $dataFinalizacao)
    {
        $this->nomeCliente = $nomeCliente;
        $this->dataFinalizacao = $dataFinalizacao;
    }

    public function nomeCliente(): string
    {
       return $this->nomeCliente;
    }

    public function dataFinalizacao(): \DateTimeInterface
    {
        return $this->dataFinalizacao;
    }
}