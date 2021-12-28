<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Api\HttpAdapter;
use Alura\DesignPattern\EstadosOrcamento\Finalizado;
use DomainException;

class RegistroOrcamento
{
    private HttpAdapter $http;
    public function __construct(HttpAdapter $http)
    {
        $this->http = $http;
    }

    public function registrar(Orcamento $orcamento): void
    {
        if($orcamento->estadoAtual instanceof Finalizado) {
            throw new DomainException(
                'Apenas Orcamentos finalizados podem ser enviados pela API'
            );
        }

        $this->http->post('http://registrar.orcamento', [
            'valor' => $orcamento,
            'quantidadeItens' => $orcamento->quantidadeItens
        ]);
    }
}