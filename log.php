<?php

use Alura\DesignPattern\Log\{StdoutLogManager,FileLogManager};

require_once 'vendor/autoload.php';

$logManager = new FileLogManager(__DIR__ . '/LOG');
$logManager->log('info', 'Testando Log Manager');