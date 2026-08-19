<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork\DefinedTermSet;

use Sohophp\SchemaOrg\Thing\CreativeWork\DefinedTermSet;
use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm\CategoryCode;

/**
 * A set of Category Code values.
 * @see https://schema.org/CategoryCodeSet
 * @package Sohophp\SchemaOrg\Thing\CreativeWork\DefinedTermSet
 */
class CategoryCodeSet extends DefinedTermSet
{
    /**
     * A Category code contained in this code set.
     * @see https://schema.org/hasCategoryCode
     * @param CategoryCode|array $value
     * @return $this
     */
    public function hasCategoryCode($value)
    {
        $this->setProperty('hasCategoryCode', $value);
        return $this;
    }

    /**
     * @param CategoryCode|array $value
     * @return $this
     */
    public function setHasCategoryCode($value)
    {
        $this->setProperty('hasCategoryCode', $value);
        return $this;
    }

    /**
     * @param CategoryCode $value
     * @return $this
     */
    public function addHasCategoryCode($value)
    {
        $current = $this->getProperty('hasCategoryCode');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('hasCategoryCode', $current);
        return $this;
    }

    /**
     * @return CategoryCode|array
     */
    public function getHasCategoryCode()
    {
        return $this->getProperty('hasCategoryCode');
    }
}
