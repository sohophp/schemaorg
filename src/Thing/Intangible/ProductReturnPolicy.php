<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
 * A ProductReturnPolicy provides information about product return policies associated with an [[Organization]] or [[Product]].
 * @see https://schema.org/ProductReturnPolicy
 * @package Sohophp\SchemaOrg\Thing\Intangible
 */
class ProductReturnPolicy extends Intangible
{
    /**
     * Indicates a Web page or service by URL, for product return.
     * @see https://schema.org/productReturnLink
     * @param string|array $value
     * @return $this
     */
    public function productReturnLink($value)
    {
        $this->setProperty('productReturnLink', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setProductReturnLink($value)
    {
        $this->setProperty('productReturnLink', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addProductReturnLink($value)
    {
        $current = $this->getProperty('productReturnLink');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('productReturnLink', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getProductReturnLink()
    {
        return $this->getProperty('productReturnLink');
    }
    /**
     * The productReturnDays property indicates the number of days (from purchase) within which relevant product return policy is applicable.
     * @see https://schema.org/productReturnDays
     * @param int|array $value
     * @return $this
     */
    public function productReturnDays($value)
    {
        $this->setProperty('productReturnDays', $value);
        return $this;
    }

    /**
     * @param int|array $value
     * @return $this
     */
    public function setProductReturnDays($value)
    {
        $this->setProperty('productReturnDays', $value);
        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function addProductReturnDays($value)
    {
        $current = $this->getProperty('productReturnDays');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('productReturnDays', $current);
        return $this;
    }

    /**
     * @return int|array
     */
    public function getProductReturnDays()
    {
        return $this->getProperty('productReturnDays');
    }
}
