<?php

namespace Alura\DesignPattern\Vendas;

class VendaProduto extends Venda
{
    /**
     * @var int Peso do Produto em Gramas;
     */

    private int $pesoProduto;

    public function __construct(\DateTimeInterface $dataRealizacao, int $pesoProduto)
        {
            parent::__construct($dataRealizacao);
            $this->pesoProduto = $pesoProduto;
        }
}