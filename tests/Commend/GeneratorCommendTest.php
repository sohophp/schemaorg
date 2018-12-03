<?php

namespace Sohophp\SchemaOrg\Tests\Commend;

use Sohophp\SchemaOrg\Tests\TestCase;
use Sohophp\SchemaOrg\Generator\Configure;
use Sohophp\SchemaOrg\Generator\Parser;
use Sohophp\SchemaOrg\Generator\TypesGenerator;

class GeneratorCommendTest extends TestCase
{
    public function testGenerate()
    {

        $baseDir = realpath(__DIR__ . '/../') . DIRECTORY_SEPARATOR . 'Enum';
        $Configure = new Configure(['baseDir' => $baseDir,'fixCs'=>true]);
        $Parser = new Parser();
        $Parser->parse($Configure);
        $loader = new \Twig_Loader_Filesystem(realpath(__DIR__ . '/../../templates/'));
        $twig = new \Twig_Environment($loader, ['autoescape' => false, 'debug' => $Configure->getTiwgDebug()]);
        $twig->addFilter(new \Twig_SimpleFilter('ucfirst'), 'ucfirst');
        $twig->addFilter(new \Twig_SimpleFilter('pluralize', [Inflector::class, 'pluralize']));
        $twig->addFilter(new \Twig_SimpleFilter('singularize'), [Inflector::class, 'singularize']);
        if ($Configure->getTiwgDebug()) {
            $twig->addExtension(new \Twig_Extension_Debug());
        }
        $TypesGenerator = new TypesGenerator($Configure, $Parser, $twig);
        $classFiles = $TypesGenerator->generate();
        $this->assertCount(598, $classFiles);
    }
}
