<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Action;

use Sohophp\SchemaOrg\Thing\Action;

/**
 * The act of searching for an object. Related actions: * [[FindAction]]: SearchAction generally leads to a FindAction, but not necessarily.
 * @see https://schema.org/SearchAction
 * @package Sohophp\SchemaOrg\Thing\Action
 */
class SearchAction extends Action
{
    /**
     * A sub property of instrument. The query used on this action.
     * @see https://schema.org/query
     * @param string|array $value
     * @return $this
     */
    public function query($value)
    {
        $this->setProperty('query', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setQuery($value)
    {
        $this->setProperty('query', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addQuery($value)
    {
        $current = $this->getProperty('query');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('query', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getQuery()
    {
        return $this->getProperty('query');
    }
}
