# AGENTS.md

## Project overview

This repository is a PHP library for schema.org types. The library is built around generated classes that mirror schema.org entities and properties, with a small runtime layer in `src/` that provides dynamic property access, serialization, and JSON-LD output.

Key files:
- `README.md` — public usage and installation examples
- `bin/schema` — CLI entry point for the generator
- `src/Command/GeneratorCommand.php` — command that runs the generator
- `src/Generator/` — schema parsing and code generation logic
- `src/BaseType.php` — common runtime API for generated types
- `templates/` — Twig templates used to emit PHP classes
- `tests/` — PHPUnit tests for runtime behavior
- `data/` — schema source JSON-LD files used to generate classes

## Working conventions

- This project targets PHP 8.1.
- Generated classes under `src/Thing/` and subfolders are the product of the schema generator; if a change should persist across schema updates, fix the generator or template instead of hand-editing generated output.
- Runtime behavior is centered on `BaseType`, which supports `setX()`, `getX()`, `toArray()`, `toJson()`, and `toScript()` patterns.
- The repo favors simple, generated, strongly typed PHP classes with method chaining.

## Common commands

- Install dependencies: `composer install`
- Regenerate the schema classes: `composer build` or `php bin/schema generator`
- Run the test suite: `./vendor/bin/phpunit`

## When editing code

- Prefer changes that match the generated library pattern and the existing `BaseType` API.
- If you add or modify schema-related behavior, check both the generator logic under `src/Generator/` and the relevant template in `templates/`.
- If you add tests, place them in `tests/` and keep assertions focused on real runtime behavior, not mock-only behavior.
- For user-facing examples, keep them consistent with the usage pattern shown in `README.md` and `examples/`.

## Documentation and references

- `README.md` for installation and basic usage
- `examples/` for code patterns
- `src/Generator/` for the generation pipeline
- `tests/` for project-specific validation patterns

## Suggested workflow for agents

1. Read `README.md` and the relevant generator/test files before changing behavior.
2. Identify whether the task belongs in the runtime layer (`src/`) or the generation layer (`src/Generator/`, `templates/`).
3. Add or update a focused test in `tests/` for the behavior you are changing.
4. Run the smallest relevant PHPUnit check, then expand if necessary.
5. If the task is schema-related, regenerate the class set with `composer build` to validate the generated code matches the project conventions.
