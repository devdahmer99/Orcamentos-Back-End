<?php

namespace Alura\DesignPattern;

class GerarPedido
{
    private float $valorOrcamento;
    private int $numeroItens;
    private string $nomeCliente;

    public function __construct(float $valorOrcamento, int $numeroItens, string $nomeCliente)
    {
        $this->valorOrcamento = $valorOrcamento;
        $this->numeroItens = $numeroItens;
        $this->nomeCliente = $nomeCliente;
    }

    /**
     * @return string
     */
    public function getNomeCliente(): string
    {
        return $this->nomeCliente;
    }

    /**
     * @param string $nomeCliente
     */
    public function setNomeCliente(string $nomeCliente): void
    {
        $this->nomeCliente = $nomeCliente;
    }

    /**
     * @return float
     */
    public function getValorOrcamento(): float
    {
        return $this->valorOrcamento;
    }

    /**
     * @param float $valorOrcamento
     */
    public function setValorOrcamento(float $valorOrcamento): void
    {
        $this->valorOrcamento = $valorOrcamento;
    }

    /**
     * @return int
     */
    public function getNumeroItens(): int
    {
        return $this->numeroItens;
    }

    /**
     * @param int $numeroItens
     */
    public function setNumeroItens(int $numeroItens): void
    {
        $this->numeroItens = $numeroItens;
    }


}