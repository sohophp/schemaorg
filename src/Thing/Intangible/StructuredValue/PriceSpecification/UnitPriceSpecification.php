<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;

/**
* The price asked for a given offer by the respective organization or person.
* @see http://schema.org/UnitPriceSpecification
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification
*/
class UnitPriceSpecification extends PriceSpecification
{


    /**
        * The unit of measurement given using the UN/CEFACT Common Code (3 characters)
 * or a URL. Other codes than the UN/CEFACT Common Code may be used with a
 * prefix followed by a colon.
        * @param string|string|array|mixed $value
    * @return $this
    */
    public function unitCode($value)
    {
        $this->setProperty('unitCode', $value);
        return $this;
    }

    /**
    * @param string|string|array|mixed $value
    * @return $this
    */
    public function setUnitCode($value)
    {
        $this->setProperty('unitCode', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getUnitCode()
    {
       return $this->getProperty('unitCode');
    }


    /**
        * This property specifies the minimal quantity and rounding increment that will
 * be the basis for the billing. The unit of measurement is specified by the
 * unitCode property.
        * @param array|string|mixed $value
    * @return $this
    */
    public function billingIncrement($value)
    {
        $this->setProperty('billingIncrement', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setBillingIncrement($value)
    {
        $this->setProperty('billingIncrement', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBillingIncrement()
    {
       return $this->getProperty('billingIncrement');
    }


    /**
        * A string or text indicating the unit of measurement. Useful if you cannot
 * provide a standard unit code for
 * <a href='unitCode'>unitCode</a>.
        * @param string|array|mixed $value
    * @return $this
    */
    public function unitText($value)
    {
        $this->setProperty('unitText', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setUnitText($value)
    {
        $this->setProperty('unitText', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getUnitText()
    {
       return $this->getProperty('unitText');
    }


    /**
        * The reference quantity for which a certain price applies, e.g. 1 EUR per 4
 * kWh of electricity. This property is a replacement for unitOfMeasurement for
 * the advanced cases where the price does not relate to a standard unit.
        * @param QuantitativeValue|array|string|mixed $value
    * @return $this
    */
    public function referenceQuantity($value)
    {
        $this->setProperty('referenceQuantity', $value);
        return $this;
    }

    /**
    * @param QuantitativeValue|array|string|mixed $value
    * @return $this
    */
    public function setReferenceQuantity($value)
    {
        $this->setProperty('referenceQuantity', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getReferenceQuantity()
    {
       return $this->getProperty('referenceQuantity');
    }


    /**
        * A short text or acronym indicating multiple price specifications for the same
 * offer, e.g. SRP for the suggested retail price or INVOICE for the invoice
 * price, mostly used in the car industry.
        * @param string|array|mixed $value
    * @return $this
    */
    public function priceType($value)
    {
        $this->setProperty('priceType', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setPriceType($value)
    {
        $this->setProperty('priceType', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPriceType()
    {
       return $this->getProperty('priceType');
    }


}
