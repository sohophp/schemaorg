<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Tests\Generator;

use JsonException;
use PHPUnit\Framework\Attributes\DataProvider;
use Sohophp\SchemaOrg\Generator\Parser;
use Sohophp\SchemaOrg\Tests\TestCase;
use UnexpectedValueException;
use RuntimeException;

class ParserTest extends TestCase
{
    #[DataProvider('invalidFileProvider')]
    public function testParseJsonldRejectsInvalidFiles(string $content, string $exception): void
    {
        $file = tempnam(sys_get_temp_dir(), 'schemaorg-parser-');
        file_put_contents($file, $content);

        try {
            $this->expectException($exception);
            (new Parser())->parseJsonld($file);
        } finally {
            unlink($file);
        }
    }

    public static function invalidFileProvider(): array
    {
        return [
            ['{invalid json', JsonException::class],
            ['{}', UnexpectedValueException::class],
            ['{"@graph":[{"@type":"rdfs:Class"}]}', UnexpectedValueException::class],
            ['{"@graph":[{"@id":"schema:Thing"},{"@id":"schema:Thing"}]}', UnexpectedValueException::class],
        ];
    }

    public function testParseJsonldRejectsMissingFile(): void
    {
        $this->expectException(RuntimeException::class);
        (new Parser())->parseJsonld('/tmp/schemaorg-file-does-not-exist.jsonld');
    }
}
