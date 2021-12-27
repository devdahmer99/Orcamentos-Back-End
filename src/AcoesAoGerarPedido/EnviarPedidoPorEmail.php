<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;

class EnviarPedidoPorEmail implements \SplObserver
{
    public function update(\SplSubject $pedido): void
    {
        echo $pedido->pedido->nomeCliente . PHP_EOL;
        echo "Enviando E-mail do pedido Gerado" . PHP_EOL;
    }
}