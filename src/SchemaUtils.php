<?php

namespace Sohophp\SchemaOrg;

/**
 * SchemaUtils
 */
class SchemaUtils
{
    public static function toJSON(BaseType $object, int $options = JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES): string
    {
        return json_encode($object, $options | JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR);
    }

    public static function toScript(BaseType $object, int $options = JSON_UNESCAPED_UNICODE): string
    {
        $script = [];
        $script[] = '<script type="application/ld+json">';
        $script[] = static::toJSON($object, $options);
        $script[] = '</script>';
        if ($options & JSON_PRETTY_PRINT) {
            return implode(PHP_EOL, $script);
        }
        return implode('', $script);
    }
}
