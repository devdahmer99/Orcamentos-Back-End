<?php

namespace Alura\DesignPattern\Vendas;

use Alura\DesignPattern\Impostos\Imposto;

interface VendaFactory
{
    public function criarVenda(): Venda;

    public function imposto(): Imposto;
}