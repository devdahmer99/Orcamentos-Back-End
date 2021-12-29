<?php

namespace Alura\DesignPattern\Relatorio;

interface ArquivoExportado
{
    public function exportar(ConteudoExportado $conteudoExportado):string;
}