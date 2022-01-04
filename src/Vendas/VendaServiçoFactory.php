<?php

namespace Alura\DesignPattern\Vendas;

use Alura\DesignPattern\Impostos\Imposto;
use Alura\DesignPattern\Impostos\ISS;
use DateTimeImmutable as DateTimeImmutableAlias;

class VendaServiçoFactory implements VendaFactory
{
    private string $nomePrestador;

    public function __construct(string $nomePrestador)
 {
     $this->nomePrestador = $nomePrestador;
 }


 public function criarVenda(): Venda
 {
    return new VendaServico(new DateTimeImmutableAlias(), $this->nomePrestador);
 }

 public function imposto(): Imposto
 {
    return new ISS();
 }
}