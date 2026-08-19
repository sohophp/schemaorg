<?php

namespace Sohophp\SchemaOrg\Generator;

use DateTimeZone;
use Monolog\Handler\StreamHandler;

class Logger
{
    private \Monolog\Logger $logger;

    public function __construct(string $name, $handlers = [], $processors = [], ?DateTimeZone $timezone = null)
    {
        $this->logger = new \Monolog\Logger($name, $handlers, $processors, $timezone);
        try {
            $streamHandler = new StreamHandler(dirname(__DIR__, 2) . '/logs/debug.log');
            $this->logger->pushHandler($streamHandler);
        } catch (\Exception $exception) {
        }
    }

    public function __call(string $name, array $arguments): mixed
    {
        return $this->logger->{$name}(...$arguments);
    }
}
