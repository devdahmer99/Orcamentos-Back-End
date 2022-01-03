<?php

namespace Alura\DesignPattern;

class logDesconto
{
    public function informar(float $descontoCalculado):void
    {
        echo "Salvando log de desconto: $descontoCalculado";
    }
}