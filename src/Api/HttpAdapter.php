<?php

namespace Alura\DesignPattern\Api;

interface HttpAdapter
{
    public function post(string $url, array $data = []): void;
}