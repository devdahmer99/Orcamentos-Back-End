<?php

namespace Alura\DesignPattern\Relatorio;

use Alura\DesignPattern\Orcamento;

/**
 * @property Orcamento $orcamento
 */
class OrcamentoExportado implements ConteudoExportado
{

    public function __construct(Orcamento $orcamento)
    {
        $this->orcamento = $orcamento;
    }

    public function conteudo(): array
    {
        return [
            'valor' => $this->orcamento->valor,
            'quantidade_Itens' => $this->orcamento->quantidadeItens
        ];
    }
}