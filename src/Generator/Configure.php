<?php
declare (strict_types=1);

namespace Sohophp\SchemaOrg\Generator;

class Configure
{

    public function getSchemaJsonldFilePath(): ?string
    {
        return realpath(__DIR__ . '/../../data/schema.jsonld');
    }

    public function getNamespace()
    {
        $composer = __DIR__ . '/../../composer.json';
        if (file_exists($composer) && is_readable($composer)) {
            $array = json_decode(file_get_contents($composer), true);
            $names = $array['autoload']['psr-4'] ?? [];
            foreach ($names as $name => $value) {
                return trim($name, '\\');
            }
        }
        return 'Sohophp\\SchemaOrg';
    }

    public function getTiwgDebug()
    {
        return true;
    }

    public function getClassBase()
    {
        return 'BaseType';
    }
    public function getBaseDir()
    {
        return realpath(__DIR__ . '/../');
    }
}
