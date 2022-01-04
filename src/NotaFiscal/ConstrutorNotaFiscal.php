<?php

namespace Alura\DesignPattern\NotaFiscal;

use Alura\DesignPattern\itemOrcamento;
use DateTimeImmutable as DateTimeImmutableAlias;
use DateTimeImmutable as DateTimeImmutableAlias1;

abstract class ConstrutorNotaFiscal
{
    protected NotaFiscal $notaFiscal;

    public function __construct()
    {
        $this->notaFiscal = new NotaFiscal();
        $this->notaFiscal->dataEmissao = new \DateTimeImmutable();
    }


    public function paraEmpresa(string $cnpj, string $razaoSocial): ConstrutorNotaFiscal
    {
        $this->notaFiscal->cnpj = $cnpj;
        $this->notaFiscal->razaoSocial = $razaoSocial;

        return $this;
    }

    public function comItem(itemOrcamento $item): ConstrutorNotaFiscal
    {
        $this->notaFiscal->itens[] = $item;
        return $this;
    }

    public function comObservacoes(string $orbservacoes): ConstrutorNotaFiscal
    {
        $this->notaFiscal->orbservacoes = $orbservacoes;
        return $this;
    }

    /**
     * @param DateTimeImmutableAlias $dataEmissao
     * @return ConstrutorNotaFiscal
     */
    public function dataEmissao(\DateTimeInterface $dataEmissao): ConstrutorNotaFiscal
    {
        $this->notaFiscal->dataEmissao = $dataEmissao;
        return $this;
    }

    /**
     * @return NotaFiscal
     */
    abstract public function constroi(): NotaFiscal;

}