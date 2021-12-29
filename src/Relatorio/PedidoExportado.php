<?php

namespace Alura\DesignPattern\Relatorio;

use Alura\DesignPattern\Pedido;

/**
 * @property Pedido $pedido
 */
class PedidoExportado implements ConteudoExportado
{

    public function __construct(Pedido $pedido)
    {
        $this->pedido = $pedido;
    }

    public function conteudo(): array
    {
        return [
            'data_finalizacao' => $this->pedido->dataFinalizacao,
            'nome_cliente' => $this->pedido->nomeCliente
        ];
    }
}