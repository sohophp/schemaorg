<?php

namespace Sohophp\SchemaOrg;

/**
 * Class Autoloader
 * @package Sohophp\SchemaOrg
 */
class Autoloader
{
    public static function register(): bool
    {
        if (function_exists('__autoload')) {
            spl_autoload_register('__autoload');
        }
        return spl_autoload_register([Autoloader::class, 'load']);
    }

    public static function load($className)
    {
        $className = ltrim($className, '\\');
        if (class_exists($className, false) || !str_starts_with($className, 'Sohophp\\SchemaOrg\\')) {
            return false;
        }

        $file = __DIR__ . DIRECTORY_SEPARATOR .
            str_replace(['Sohophp\\SchemaOrg\\', '\\'], ['', '/'], $className) .
            '.php';
        if (file_exists($file) && is_readable($file)) {
            require($file);
        } else {
            return false;
        }
    }
}
