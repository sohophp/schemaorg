<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\BusinessFunction;
use Sohophp\SchemaOrg\Thing\Intangible\Service;
use Sohophp\SchemaOrg\Thing\Product;

/**
 * A structured value indicating the quantity, unit of measurement, and business function of goods included in a bundle offer.
 * @see https://schema.org/TypeAndQuantityNode
 * @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
 */
class TypeAndQuantityNode extends StructuredValue
{
    /**
     * The unit of measurement given using the UN/CEFACT Common Code (3 characters) or a URL. Other codes than the UN/CEFACT Common Code may be used with a prefix followed by a colon.
     * @see https://schema.org/unitCode
     * @param string|array $value
     * @return $this
     */
    public function unitCode($value)
    {
        $this->setProperty('unitCode', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setUnitCode($value)
    {
        $this->setProperty('unitCode', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addUnitCode($value)
    {
        $current = $this->getProperty('unitCode');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('unitCode', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getUnitCode()
    {
        return $this->getProperty('unitCode');
    }
    /**
     * The quantity of the goods included in the offer.
     * @see https://schema.org/amountOfThisGood
     * @param mixed $value
     * @return $this
     */
    public function amountOfThisGood($value)
    {
        $this->setProperty('amountOfThisGood', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setAmountOfThisGood($value)
    {
        $this->setProperty('amountOfThisGood', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addAmountOfThisGood($value)
    {
        $current = $this->getProperty('amountOfThisGood');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('amountOfThisGood', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAmountOfThisGood()
    {
        return $this->getProperty('amountOfThisGood');
    }
    /**
     * The business function (e.g. sell, lease, repair, dispose) of the offer or component of a bundle (TypeAndQuantityNode). The default is http://purl.org/goodrelations/v1#Sell.
     * @see https://schema.org/businessFunction
     * @param BusinessFunction|array $value
     * @return $this
     */
    public function businessFunction($value)
    {
        $this->setProperty('businessFunction', $value);
        return $this;
    }

    /**
     * @param BusinessFunction|array $value
     * @return $this
     */
    public function setBusinessFunction($value)
    {
        $this->setProperty('businessFunction', $value);
        return $this;
    }

    /**
     * @param BusinessFunction $value
     * @return $this
     */
    public function addBusinessFunction($value)
    {
        $current = $this->getProperty('businessFunction');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('businessFunction', $current);
        return $this;
    }

    /**
     * @return BusinessFunction|array
     */
    public function getBusinessFunction()
    {
        return $this->getProperty('businessFunction');
    }
    /**
     * A string or text indicating the unit of measurement. Useful if you cannot provide a standard unit code for <a href='unitCode'>unitCode</a>.
     * @see https://schema.org/unitText
     * @param string|array $value
     * @return $this
     */
    public function unitText($value)
    {
        $this->setProperty('unitText', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setUnitText($value)
    {
        $this->setProperty('unitText', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addUnitText($value)
    {
        $current = $this->getProperty('unitText');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('unitText', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getUnitText()
    {
        return $this->getProperty('unitText');
    }
    /**
     * The product that this structured value is referring to.
     * @see https://schema.org/typeOfGood
     * @param Service|Product|array $value
     * @return $this
     */
    public function typeOfGood($value)
    {
        $this->setProperty('typeOfGood', $value);
        return $this;
    }

    /**
     * @param Service|Product|array $value
     * @return $this
     */
    public function setTypeOfGood($value)
    {
        $this->setProperty('typeOfGood', $value);
        return $this;
    }

    /**
     * @param Service|Product $value
     * @return $this
     */
    public function addTypeOfGood($value)
    {
        $current = $this->getProperty('typeOfGood');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('typeOfGood', $current);
        return $this;
    }

    /**
     * @return Service|Product|array
     */
    public function getTypeOfGood()
    {
        return $this->getProperty('typeOfGood');
    }
}
