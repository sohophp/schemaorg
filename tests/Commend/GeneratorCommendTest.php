<?php

namespace Sohophp\SchemaOrg\Tests\Commend;

use Doctrine\Inflector\InflectorFactory;
use Sohophp\SchemaOrg\Generator\Logger;
use Sohophp\SchemaOrg\Tests\TestCase;
use Sohophp\SchemaOrg\Generator\Configure;
use Sohophp\SchemaOrg\Generator\Parser;
use Sohophp\SchemaOrg\Generator\TypesGenerator;
use Twig\Environment;
use Twig\Extension\DebugExtension;
use Twig\Loader\FilesystemLoader;
use Twig\TwigFilter;

class GeneratorCommendTest extends TestCase
{
    public function testGenerate()
    {

        $baseDir = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'Entity';
        $Configure = new Configure([
            'baseDir' => $baseDir,
            'fixCs' => true,
            'namespace' => 'Sohophp\\SchemaOrg\\Tests\\Entity',
            'fullpath' => false
        ]);

        $Parser = new Parser();
        $Parser->parse($Configure);
        $loader = new FilesystemLoader([realpath(__DIR__ . '/../../templates/')]);

        $twig = new Environment($loader, ['autoescape' => false, 'debug' => $Configure->getTiwgDebug()]);
        $filter = new TwigFilter('ucfirst', function ($str) {
            return ucfirst($str);
        });
        $twig->addFilter($filter);

        $inflector = InflectorFactory::create()->build();
        $filter = new TwigFilter('pluralize', function ($str) use ($inflector) {
            return $inflector->pluralize($str);
        });

        $twig->addFilter($filter);
        $filter = new TwigFilter('singularize', function ($str) use ($inflector) {
            return $inflector->singularize($str);
        });

        $twig->addFilter($filter);

        if ($Configure->getTiwgDebug()) {
            $twig->addExtension(new DebugExtension());
        }
        $Logger = new Logger('generator');
        $Logger->info('test');
        $TypesGenerator = new TypesGenerator($Configure, $Parser, $twig, $Logger);

        try {
            $classFiles = $TypesGenerator->generate();
        } catch (\Exception $exception) {
            $classFiles = [];
            $Logger->warning($exception->getMessage(), $exception->getTrace());
        }

        $this->assertCount(800, $classFiles, "classFiles:" . count($classFiles));
    }
}
