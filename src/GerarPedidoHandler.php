<?php

namespace Alura\DesignPattern;

use DateTimeImmutable as DateTimeImmutableAlias;
use SplObserver;

/**
 * @property $getNumeroItens
 * @property $getValorOrcamento
 * @property $getNomeCliente
 */
class GerarPedidoHandler implements \SplSubject
{
    /** @var SplObserver[] */
    private array $acoesAposGerarPedido = [];
    public Pedido $pedido;
    public function __construct()
    {

    }

    public function run(GerarPedido $gerarPedido)
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $gerarPedido->getNumeroItens();
        $orcamento->valor = $gerarPedido->getValorOrcamento();


        $pedido = new Pedido();
        $pedido->dataFinalizacao = new DateTimeImmutableAlias();
        $pedido->nomeCliente = $gerarPedido->getNomeCliente();
        $pedido->orcamento = $orcamento;

        $this->pedido = $pedido;
        $this->notify();

    }

    public function attach(SplObserver $observer)
    {
       $this->acoesAposGerarPedido[] = $observer;
    }

    public function detach(SplObserver $observer)
    {

    }

    public function notify()
    {
        foreach($this->acoesAposGerarPedido as $acao) {
            $acao->update($this);
        }
    }
}