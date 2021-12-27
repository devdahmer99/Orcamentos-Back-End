<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;

class logGerarPedido implements \SplObserver
{
    public function update(\SplSubject $pedido): void
    {
        echo "Salvando log do pedido no Banco de dados" . PHP_EOL;
    }
}