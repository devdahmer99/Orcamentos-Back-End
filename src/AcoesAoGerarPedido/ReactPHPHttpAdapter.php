<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Api\HttpAdapter;

class ReactPHPHttpAdapter implements HttpAdapter
{

    public function post(string $url, array $data = []): void
    {
        // Instancio a requisiçao Http
        // Preparo os dados
        // Faço a requisição

        echo "React PHP";
    }
}