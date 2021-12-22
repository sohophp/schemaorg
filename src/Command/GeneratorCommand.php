<?php

namespace Sohophp\SchemaOrg\Command;

use Doctrine\Inflector\CachedWordInflector;
use Doctrine\Inflector\Inflector;
use Doctrine\Inflector\InflectorFactory;
use Sohophp\SchemaOrg\Generator\Configure;
use Sohophp\SchemaOrg\Generator\Logger;
use Sohophp\SchemaOrg\Generator\Parser;
use Sohophp\SchemaOrg\Generator\TypesGenerator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Twig\Environment;
use Twig\Extension\DebugExtension;
use Twig\Loader\FilesystemLoader;
use Twig\TwigFilter;

class GeneratorCommand extends Command
{
    /**
     * @var OutputInterface
     */
    private OutputInterface $Output;

    protected function configure()
    {
        $this->setName("generator");
    }

    public function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->Output = $output;
        $this->generate();
        return 0;
    }

    private function generate()
    {
        $Configure = new Configure();
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

        $TypesGenerator = new TypesGenerator($Configure, $Parser, $twig, new Logger('generator'));

        try {
            $TypesGenerator->generate();
        } catch (\Exception $exception) {
            $this->Output->writeln('<error>' . $exception->getMessage() . '</error>');
        }

    }

}
