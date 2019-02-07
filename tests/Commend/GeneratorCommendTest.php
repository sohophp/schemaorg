<?php

namespace Sohophp\SchemaOrg\Tests\Commend;

use Doctrine\Inflector\Inflector;
use Sohophp\SchemaOrg\Generator\Logger;
use Sohophp\SchemaOrg\Tests\TestCase;
use Sohophp\SchemaOrg\Generator\Configure;
use Sohophp\SchemaOrg\Generator\Parser;
use Sohophp\SchemaOrg\Generator\TypesGenerator;

class GeneratorCommendTest extends TestCase
{
    public function testGenerate()
    {

        $baseDir = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'Entity';
        $Configure = new Configure([
            'baseDir' => $baseDir,
            'fixCs' => true,
            'namespace' => 'Sohophp\\SchemaOrg\\Tests\\Entity',
            'fullpath'=>false
        ]);

        $Parser = new Parser();
        $Parser->parse($Configure);
        $loader = new \Twig_Loader_Filesystem(realpath(__DIR__ . '/../../templates/'));
        $twig = new \Twig_Environment($loader, ['autoescape' => false, 'debug' => $Configure->getTiwgDebug()]);
        $twig->addFilter(new \Twig_SimpleFilter('ucfirst', 'ucfirst'));
        $twig->addFilter(new \Twig_SimpleFilter('pluralize', [Inflector::class, 'pluralize']));
        $twig->addFilter(new \Twig_SimpleFilter('singularize', [Inflector::class, 'singularize']));
        if ($Configure->getTiwgDebug()) {
            $twig->addExtension(new \Twig_Extension_Debug());
        }
        $Logger = new Logger('generator');
        $Logger->info('test');
        $TypesGenerator = new TypesGenerator($Configure, $Parser, $twig, $Logger);
        try {
            $classFiles = $TypesGenerator->generate();
        } catch (\Exception $exception) {
            $Logger->warning($exception->getMessage(), $exception->getTrace());
        }
        $this->assertCount(598 + 1, $classFiles);
    }
}
