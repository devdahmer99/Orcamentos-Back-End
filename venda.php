<?php

use Alura\DesignPattern\Vendas\VendaProdutoFactory;
use Alura\DesignPattern\Vendas\VendaServiçoFactory;

require_once 'vendor/autoload.php';

$fabrica = new VendaProdutoFactory(1000);
$venda = $fabrica->criarVenda();
$imposto = $fabrica->imposto();

var_dump($venda) . PHP_EOL;
var_dump($imposto) . PHP_EOL;