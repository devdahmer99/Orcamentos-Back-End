<?php

namespace Alura\DesignPattern\NotaFiscal;

use Alura\DesignPattern\itemOrcamento;

class NotaFiscal
{
    public string $cnpj;
    public string $razaoSocial;
    public array $itens;
    public string $orbservacoes;
    public \DateTimeInterface $dataEmissao;
    public float $valorImpostos;


    public function valor(): float
    {
        return array_reduce($this->itens, function (float $valorAcumulado, itemOrcamento $itemAtual) {
            return $valorAcumulado + $itemAtual->valor;
        }, 0);
    }
}