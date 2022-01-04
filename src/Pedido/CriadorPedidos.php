<?php

namespace Alura\DesignPattern\Pedido;

use Alura\DesignPattern\Orcamento;

class CriadorPedidos
{
    private array $templates = [];

    /**
     * @throws \Exception
     */
    public function criaPedido(string $nomeCliente, string $dataFormatada, Orcamento $orcamento): Pedido
    {
        $template = $this->gerarTemplatePedido($nomeCliente, $dataFormatada);
        var_dump($template);
        $pedido = new Pedido();
        $pedido->template = $template;
        $pedido->orcamento = $orcamento;

        return $pedido;
    }

    /**
     * @param string $nomeCliente
     * @param string $dataFormatada
     * @return TemplatePedido
     * @throws \Exception
     */
    public function gerarTemplatePedido(string $nomeCliente, string $dataFormatada): TemplatePedido
    {
        $hash = md5($nomeCliente. $dataFormatada);
        if (!array_key_exists($hash, $this->templates)) {
            $template = new TemplatePedido($nomeCliente, new \DateTimeImmutable($dataFormatada));

            $this->templates[$hash] = $template;
        }
        return $this->templates[$hash];
    }
}