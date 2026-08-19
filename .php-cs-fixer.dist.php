<?php

$finder = PhpCsFixer\Finder::create()
    ->in([__DIR__ . '/src/Generator', __DIR__ . '/tests'])
    ->append([
        __DIR__ . '/src/BaseType.php',
        __DIR__ . '/src/DataType.php',
        __DIR__ . '/src/SchemaCollection.php',
        __DIR__ . '/src/SchemaUtils.php',
    ]);

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(false)
    ->setRules([
        '@PSR12' => true,
        'array_syntax' => ['syntax' => 'short'],
        'function_declaration' => ['closure_fn_spacing' => 'none'],
        'no_trailing_whitespace' => true,
        'single_line_empty_body' => true,
        'single_space_after_construct' => false,
    ])
    ->setFinder($finder);
