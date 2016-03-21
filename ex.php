<?php
require __DIR__. '/vendor/autoload.php';
use Hackingangle\Logger;
use Psr\Log\LogLevel;

$logger = new Logger();
$logger->log(LogLevel::EMERGENCY, "get up.", [
    'username' => 'hackingangle',
]);

$a = new A();
$a->say();

$b = new B();
$b->say();

$c = new C();
$c->say();

$d = new D();
$d->say();
