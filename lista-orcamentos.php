<?php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\ListaOrcamentos;
use Alura\DesignPattern\Orcamento;


$orcamento1 = new Orcamento();
$orcamento1->quantidadeItens = 7;
$orcamento1->aprova();
$orcamento1->valor = 1500.75;


$orcamento2 = new Orcamento();
$orcamento2->quantidadeItens = 12;
$orcamento2->reprova();
$orcamento2->valor = 1500.75;


$orcamento3 = new Orcamento();
$orcamento3->quantidadeItens = 32;
$orcamento3->aprova();
$orcamento3->finaliza();
$orcamento3->valor = 3800.70;

$listaOrcamentos = new ListaOrcamentos();
$listaOrcamentos->addOrcamento($orcamento1);
$listaOrcamentos->addOrcamento($orcamento2);
$listaOrcamentos->addOrcamento($orcamento3);
$listaOrcamentos->orcamentosLiberados();

foreach($listaOrcamentos as $orcamento) {
    echo "Valor: " . $orcamento->valor . PHP_EOL;
    echo "Estado: " . get_class($orcamento->estadoAtual). PHP_EOL;
    echo "Quantidade De Itens: " . $orcamento->quantidadeItens. PHP_EOL;

    echo PHP_EOL;
}