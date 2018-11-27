<?php

namespace Sohophp\SchemaOrg;

class Autoloader
{
    public static function register()
    {
        if (function_exists('__autoload')) {
            spl_autoload_register('__autoload');
        }
        return spl_autoload_register([Autoloader::class, 'load']);
    }

    public static function load($className)
    {
        if (class_exists($className, false) || strpos($className, 'Sohophp\\SchemaOrg\\') !== 0) {
            return false;
        }

        $file = __DIR__ .
            DIRECTORY_SEPARATOR .
            'src' .
            DIRECTORY_SEPARATOR .
            str_replace(['Sohophp\\SchemaOrg\\', '\\'], ['', '/'], $className) .
            '.php';
        if (file_exists($file) && is_readable($file)) {
            require($file);
        } else {
            return false;
        }
    }
}
