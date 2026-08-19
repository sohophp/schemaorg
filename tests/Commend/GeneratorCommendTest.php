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
        $baseDir = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'schemaorg-generator-' . uniqid('', true);
        $configure = new Configure([
            'baseDir' => $baseDir,
            'fixCs' => true,
            'namespace' => 'Sohophp\\SchemaOrg\\Tests\\Entity',
            'fullpath' => true,
            'consoleMessage' => false,
        ]);

        $generator = $this->createGenerator($configure);

        try {
            $classFiles = $generator->generate();

            $this->assertNotEmpty($classFiles);
            $patientFile = $baseDir . '/Thing/Intangible/Audience/MedicalAudience/Patient.php';
            $webPageFile = $baseDir . '/Thing/CreativeWork/WebPage.php';
            $this->assertFileExists($patientFile);
            $this->assertFileExists($webPageFile);
            $patientContents = file_get_contents($patientFile);
            $this->assertStringContainsString('declare(strict_types=1);', $patientContents);
            $this->assertStringContainsString('@see https://schema.org/Patient', $patientContents);
            $this->assertStringContainsString('function addDiagnosis', $patientContents);

            $webPageContents = file_get_contents($webPageFile);
            $this->assertStringContainsString('@see https://schema.org/mainContentOfPage', $webPageContents);
        } finally {
            $this->removeDirectory($baseDir);
        }
    }

    public function testGenerateWithoutFullPath(): void
    {
        $baseDir = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'schemaorg-generator-' . uniqid('', true);
        $configure = new Configure([
            'baseDir' => $baseDir,
            'fixCs' => true,
            'namespace' => 'Sohophp\\SchemaOrg\\Tests\\Entity',
            'fullpath' => false,
            'consoleMessage' => false,
        ]);

        try {
            $classFiles = $this->createGenerator($configure)->generate();

            $this->assertNotEmpty($classFiles);
            $webPageFile = $baseDir . '/WebPage.php';
            $this->assertFileExists($webPageFile);
            $this->assertDirectoryDoesNotExist($baseDir . '/Thing');
            $this->assertStringContainsString('namespace Sohophp\\SchemaOrg\\Tests\\Entity;', file_get_contents($webPageFile));
        } finally {
            $this->removeDirectory($baseDir);
        }
    }

    private function createGenerator(Configure $configure): TypesGenerator
    {
        $parser = new Parser();
        $parser->parse($configure);
        $loader = new FilesystemLoader([realpath(__DIR__ . '/../../templates/')]);
        $twig = new Environment(
            $loader,
            ['autoescape' => false, 'debug' => $configure->getTiwgDebug()]
        );
        $twig->addFilter(new TwigFilter('ucfirst', 'ucfirst'));

        $inflector = InflectorFactory::create()->build();
        $twig->addFilter(new TwigFilter('pluralize', [$inflector, 'pluralize']));
        $twig->addFilter(new TwigFilter('singularize', [$inflector, 'singularize']));

        if ($configure->getTiwgDebug()) {
            $twig->addExtension(new DebugExtension());
        }
        return new TypesGenerator($configure, $parser, $twig, new Logger('generator'));
    }

    private function removeDirectory(string $directory): void
    {
        if (!is_dir($directory)) {
            return;
        }

        $iterator = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($directory, \FilesystemIterator::SKIP_DOTS),
            \RecursiveIteratorIterator::CHILD_FIRST
        );
        foreach ($iterator as $item) {
            $item->isDir() ? rmdir($item->getPathname()) : unlink($item->getPathname());
        }
        rmdir($directory);
    }
}
