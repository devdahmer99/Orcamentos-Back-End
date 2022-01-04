<?php

namespace Alura\DesignPattern\NotaFiscal;

use Alura\DesignPattern\itemOrcamento;
use DateTimeInterface as DateTimeInterfaceAlias;

class NotaFiscal
{
    public string $cnpj;
    public string $razaoSocial;
    public array $itens;
    public string $orbservacoes;
    public DateTimeInterfaceAlias $dataEmissao;
    public float $valorImpostos;


    public function valor(): float
    {
        return array_reduce($this->itens, function (float $valorAcumulado, itemOrcamento $itemAtual) {
            return $valorAcumulado + $itemAtual->valor;
        }, 0);
    }


    public function __clone()
    {
        $this->dataEmissao = new \DateTimeImmutable();
    }
}