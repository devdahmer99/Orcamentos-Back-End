<?php

use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Relatorio\OrcamentoZip;

require_once 'vendor/autoload.php';

$Orcamentozip = new OrcamentoZip();
$orcamento = new Orcamento();
$orcamento->valor = 500;

$Orcamentozip->exportarOrcamento($orcamento);