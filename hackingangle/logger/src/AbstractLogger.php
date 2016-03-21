<?php
namespace Hackingangle;

use Psr\Log\LoggerInterface;
use Psr\Log\LoggerTrait;

abstract class AbstractLogger implements LoggerInterface
{
    use LoggerTrait;
}
