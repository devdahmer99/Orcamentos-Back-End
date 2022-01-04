<?php

use Alura\DesignPattern\itemOrcamento;
use Alura\DesignPattern\NotaFiscal\ConstrutorNotaFiscalProduto;
use Alura\DesignPattern\NotaFiscal\ConstrutorNotaFiscalServico;

require_once 'vendor/autoload.php';

$builder = new ConstrutorNotaFiscalServico();

$item1 = new itemOrcamento();
$item1->valor = 500;
$item2 = new itemOrcamento();
$item2->valor = 1500;
$item3 = new itemOrcamento();
$item3->valor = 1000;


$notaFiscal = $builder->paraEmpresa('123456', 'Eduardo Dahmer Correa')
    ->comItem($item1)
    ->comItem($item2)
    ->comItem($item3)
    ->comObservacoes('Esta nota foi construida com um Builder')
    ->constroi();

$notaFiscal2 = clone $notaFiscal;
$notaFiscal2->itens[] = new itemOrcamento();

var_dump($notaFiscal, $notaFiscal2);