<?php
declare (strict_types=1);

namespace Sohophp\SchemaOrg\Generator;

class Configure
{

    private $cfg = [];

    public function __construct(array $cfg = [])
    {
        $defs = [
            'classBase' => 'BaseType',
            'baseDir' => dirname(__DIR__),
            'tiwgDebug' => true,
            'schemaJsonldFilePath' => realpath(__DIR__ . '/../../data/schema.jsonld'),
            'consoleMessage' => true,
            'namespace' => $this->getNamespace(),
            'fixCs' => true
        ];
        $this->cfg = array_merge($defs, $cfg);
    }

    public function get(?string $key)
    {
        return $this->cfg[$key] ?? null;
    }

    public function set($key, $value): self
    {
        $this->cfg[$key] = $value;
        return $this;
    }

    public function getSchemaJsonldFilePath(): ?string
    {
        return $this->cfg['schemaJsonldFilePath'];
    }

    public function getNamespace()
    {
        if ($this->get('namespace')) {
            return $this->get('namespace');
        }
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
        return $this->cfg['tiwgDebug'];
    }

    public function getClassBase()
    {
        return $this->cfg['classBase'];
    }

    public function getBaseDir()
    {
        return $this->cfg['baseDir'];
    }

    public function getFixCs()
    {
        return $this->get('fixCs');
    }

}
