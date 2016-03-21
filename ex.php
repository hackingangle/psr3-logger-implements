<?php
require __DIR__. '/vendor/autoload.php';
use Hackingangle\Logger;
use Psr\Log\LogLevel;

$logger = new Logger();
$logger->log(LogLevel::EMERGENCY, "get up.", [
    'username' => 'hackingangle',
]);
