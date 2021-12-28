<?php

namespace Alura\DesignPattern\Relatorio;

use Alura\DesignPattern\Orcamento;

class OrcamentoXML
{
    public function exportarOrcamento(Orcamento $orcamento)
    {
        $element = new \SimpleXMLElement('<orcamento/>');
        $element->addChild('valor', $orcamento->valor);
        $element->addChild('quantidade_itens', $orcamento->quantidadeItens);

        return $element->asXML();

    }
}