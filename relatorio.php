<?php
require_once 'vendor/autoload.php';


use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Pedido;
use Alura\DesignPattern\Relatorio\OrcamentoExportado;
//use Alura\DesignPattern\Relatorio\PedidoExportado;
use Alura\DesignPattern\Relatorio\ArquivoExportadoXML;
//use Alura\DesignPattern\Relatorio\ArquivoZipExportado;


$orcamento = new Orcamento();
$orcamento->valor = 2500;
$orcamento->quantidadeItens = 3;


$pedido = new Pedido();
$pedido->nomeCliente = 'Pedro Alves';
$pedido->dataFinalizacao = new DateTimeImmutable();


$orcamentoExportado = new OrcamentoExportado($orcamento);

$orcamentoXML = new ArquivoExportadoXML('orcamento');

echo $orcamentoXML->exportar($orcamentoExportado);

