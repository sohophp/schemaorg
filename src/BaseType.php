<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg;

/**
 * Class BaseType
 * @package Sohophp\SchemaOrg
 */
class BaseType implements \ArrayAccess, \JsonSerializable
{
    /**
     * @var array
     */
    protected array $properties = [];
    /**
     * @var mixed
     */
    protected mixed $type;

    /**
     * @param mixed $offset
     * @param mixed $value
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
        $this->properties[$offset] = $value;
    }

    /**
     * @param mixed $offset
     * @return mixed
     */
    public function offsetGet(mixed $offset): mixed
    {
        return $this->properties[$offset] ?? null;
    }

    /**
     * @param mixed $offset
     * @return bool
     */
    public function offsetExists(mixed $offset): bool
    {
        return array_key_exists($offset, $this->properties);
    }

    /**
     * @param mixed $offset
     */
    public function offsetUnset(mixed $offset): void
    {
        unset($this->properties[$offset]);
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return $this->toArray();
    }

    public function __call(string $name, array $arguments): mixed
    {
        if (str_starts_with($name, 'get')) {
            $property = substr($name, 3);
            if ($property === '' || $arguments !== []) {
                throw new \BadMethodCallException('Getter methods require a property name and no arguments.');
            }
            return $this->getProperty(lcfirst($property));
        }

        $prefix = null;
        if (str_starts_with($name, 'set')) {
            $prefix = 'set';
        } elseif (str_starts_with($name, 'add')) {
            $prefix = 'add';
        }

        if ($prefix !== null) {
            $property = substr($name, 3);
            if ($property === '' || count($arguments) !== 1) {
                throw new \BadMethodCallException(sprintf('%s methods require one value argument.', ucfirst($prefix)));
            }
            $property = lcfirst($property);
            return $prefix === 'add'
                ? $this->addProperty($property, $arguments[0])
                : $this->setProperty($property, $arguments[0]);
        }

        throw new \BadMethodCallException(sprintf('Undefined method %s::%s().', static::class, $name));
    }

    /**
     * @param bool $context
     * @return array
     */
    public function toArray(bool $context = true): array
    {

        $vars = $this->properties;
        $type = $this->getType();
        if ($type !== false) {
            $vars = array_merge(['@type' => $type], $vars);
        }
        if ($context) {
            $vars = array_merge(['@context' => $this->getContext()], $vars);
        }

        return $this->filterArray($vars);
    }

    public function setId(string $id): static
    {
        return $this->setProperty('@id', $id);
    }

    public function getId(): ?string
    {
        $id = $this->getProperty('@id');
        return is_string($id) ? $id : null;
    }

    public function setContext(string|array $context): static
    {
        return $this->setProperty('@context', $context);
    }

    public function getContext(): string|array
    {
        return $this->properties['@context'] ?? 'https://schema.org';
    }

    public function setJsonLdType(string|array $type): static
    {
        return $this->setProperty('@type', $type);
    }

    /**
     * @param mixed $vars
     * @return mixed
     */
    public function filterArray(mixed $vars): mixed
    {
        if ($vars instanceof BaseType) {
            return $vars->toArray(false);
        }
        if ($vars instanceof DataType) {
            return $vars->getValue();
        }
        if (is_array($vars)) {
            return array_map([$this, 'filterArray'], $vars);
        }
        return $vars;
    }

    public function setProperty(string $property, mixed $value): static
    {
        $this->properties[$property] = $value;
        return $this;
    }

    public function addProperty(string $property, mixed $value): static
    {
        $current = $this->getProperty($property);
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        return $this->setProperty($property, $current);
    }

    public function clearProperty(string $property): static
    {
        unset($this->properties[$property]);
        return $this;
    }

    public function getProperty(string $property): mixed
    {
        return $this->properties[$property] ?? null;
    }

    public function getType(): mixed
    {
        if (array_key_exists('@type', $this->properties)) {
            return $this->properties['@type'];
        }

        try {
            return $this->type ?? (new \ReflectionClass($this))->getShortName();
        } catch (\Throwable) {
            $arr = explode("\\", static::class);
            return $arr[count($arr) - 1];
        }
    }

    /**
     * @param int $options
     * @return string
     * @deprecated @see SchemaUtils::toJSON
     */
    public function toJson(int $options = JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES): string
    {
        return SchemaUtils::toJSON($this, $options);
    }

    /**
     * @param int $options
     * @deprecated @see SchemaUtils::toScript
     */

    public function toScript(int $options = JSON_UNESCAPED_UNICODE): string
    {
        return SchemaUtils::toScript($this, $options);
    }
}
