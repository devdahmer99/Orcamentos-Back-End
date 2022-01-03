<?php

use Alura\DesignPattern\CacheOrcamentoProxy;
use Alura\DesignPattern\itemOrcamento;
use Alura\DesignPattern\Orcamento;

require_once 'vendor/autoload.php';


$orcamento = new Orcamento();
$item1 = new itemOrcamento();
$item1->valor = 300;
$item2 = new itemOrcamento();
$item2->valor = 500;

$orcamento->adicionaItem($item1);
$orcamento->adicionaItem($item2);

$orcamentoAntigo = new Orcamento();
$item3 = new itemOrcamento();
$item3->valor = 150;
$orcamentoAntigo->adicionaItem($item3);

$orcamento->adicionaItem($orcamentoAntigo);

$proxyCache = new CacheOrcamentoProxy($orcamento);


echo $proxyCache->valor() . PHP_EOL;
echo $proxyCache->valor() . PHP_EOL;