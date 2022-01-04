<?php

use Alura\DesignPattern\Pedido\CriadorPedidos;
use Alura\DesignPattern\Pedido\Pedido;
use Alura\DesignPattern\Pedido\TemplatePedido;
use Alura\DesignPattern\Orcamento;

require_once 'vendor/autoload.php';

$pedidos = [];
$criadorPedido = new CriadorPedidos();

for ($i = 0; $i < 10000; $i++) {
$orcamento = new Orcamento();
$pedido = $criadorPedido->criaPedido('Eduardo Dahmer', date('Y-m-d'), $orcamento);
$pedidos[] = $pedido;
}

echo memory_get_peak_usage();