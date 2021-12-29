<?php

namespace Alura\DesignPattern\Relatorio;

class ArquivoZipExportado implements ArquivoExportado
{

    private string $nomeArquivo;

    public function __construct(string $nomeArquivo)
    {

        $this->nomeArquivo = $nomeArquivo;
    }

    public function exportar(ConteudoExportado $conteudoExportado): string
    {
        $caminhoArquivo = tempnam(sys_get_temp_dir(), 'zip');
        $arquivoZip = new \ZipArchive();
        $arquivoZip->open($caminhoArquivo);
        $arquivoZip->addFromString($this->nomeArquivo, serialize($conteudoExportado->conteudo()));
        $arquivoZip->close();

        return $caminhoArquivo;
    }
}