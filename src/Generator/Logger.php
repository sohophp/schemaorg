<?php

namespace Sohophp\SchemaOrg\Generator;

use DateTimeZone;
use Monolog\Handler\StreamHandler;

class Logger extends \Monolog\Logger
{
    public function __construct(string $name, $handlers = [], $processors = [], ?DateTimeZone $timezone = null)
    {
        parent::__construct($name, $handlers, $processors, $timezone);
        try {
            $streamHandler = new StreamHandler(dirname(dirname(__DIR__)) . '/logs/debug.log');
            $this->pushHandler($streamHandler);
        } catch (\Exception $exception) {

        }
    }
}
