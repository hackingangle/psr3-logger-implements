<?php
namespace Hackingangle;

class Logger extends AbstractLogger
{
    public function log($level, $message, array $context = array())
    {
        var_dump("[{$level}]{$message}". var_export($context, true));
    }
}
