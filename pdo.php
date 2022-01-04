<?php

use Alura\DesignPattern\PdoConnection;

require_once 'vendor/autoload.php';

$pdo = PdoConnection::getInstance('sqlite:memory');