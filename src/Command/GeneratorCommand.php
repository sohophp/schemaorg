<?php

namespace Sohophp\SchemaOrg\Command;

use Doctrine\Inflector\Inflector;
use Sohophp\SchemaOrg\Generator\Configure;
use Sohophp\SchemaOrg\Generator\Logger;
use Sohophp\SchemaOrg\Generator\Parser;
use Sohophp\SchemaOrg\Generator\TypesGenerator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GeneratorCommand extends Command
{
    /**
     * @var OutputInterface
     */
    private $Output;

    protected function configure()
    {
        $this->setName("generator");
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $this->Output = $output;
        $this->generate();
    }

    private function generate()
    {
        $Configure = new Configure();
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
        $TypesGenerator = new TypesGenerator($Configure, $Parser, $twig, new Logger('generator'));
        try {
            $TypesGenerator->generate();
        } catch (\Exception $exception) {
            $this->Output->writeln('<error>' . $exception->getMessage() . '</error>');
        }

    }

}
