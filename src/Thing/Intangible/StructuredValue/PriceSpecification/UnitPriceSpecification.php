<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;

/**
* The price asked for a given offer by the respective organization or person.
* @see schema:UnitPriceSpecification
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification
*/
class UnitPriceSpecification extends PriceSpecification
{


    /**
        * Specifies for how long this price (or price component) will be billed. Can be
 * used, for example, to model the contractual duration of a subscription or
 * payment plan. Type can be either a Duration or a Number (in which case the
 * unit of measurement, for example month, is specified by the unitCode
 * property).
        * @param array|string|mixed $value
    * @return $this
    */
    public function billingDuration($value)
    {
        $this->setProperty('billingDuration', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setBillingDuration($value)
    {
        $this->setProperty('billingDuration', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBillingDuration()
    {
       return $this->getProperty('billingDuration');
    }


    /**
        * The reference quantity for which a certain price applies, e.g. 1 EUR per 4
 * kWh of electricity. This property is a replacement for unitOfMeasurement for
 * the advanced cases where the price does not relate to a standard unit.
        * @param array|string|mixed $value
    * @return $this
    */
    public function referenceQuantity($value)
    {
        $this->setProperty('referenceQuantity', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Defines the type of a price specified for an offered product, for example a
 * list price, a (temporary) sale price or a manufacturer suggested retail
 * price. If multiple prices are specified for an offer the [[priceType]]
 * property can be used to identify the type of each such specified price. The
 * value of priceType can be specified as a value from enumeration
 * PriceTypeEnumeration or as a free form text string for price types that are
 * not already predefined in PriceTypeEnumeration.
        * @param array|string|mixed $value
    * @return $this
    */
    public function priceType($value)
    {
        $this->setProperty('priceType', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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


    /**
        * Identifies a price component (for example, a line item on an invoice), part
 * of the total price for an offer.
        * @param array|string|mixed $value
    * @return $this
    */
    public function priceComponentType($value)
    {
        $this->setProperty('priceComponentType', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setPriceComponentType($value)
    {
        $this->setProperty('priceComponentType', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPriceComponentType()
    {
       return $this->getProperty('priceComponentType');
    }


    /**
        * Specifies after how much time this price (or price component) becomes valid
 * and billing starts. Can be used, for example, to model a price increase after
 * the first year of a subscription. The unit of measurement is specified by the
 * unitCode property.
        * @param array|string|mixed $value
    * @return $this
    */
    public function billingStart($value)
    {
        $this->setProperty('billingStart', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setBillingStart($value)
    {
        $this->setProperty('billingStart', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBillingStart()
    {
       return $this->getProperty('billingStart');
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
        * @param array|string|mixed $value
    * @return $this
    */
    public function unitText($value)
    {
        $this->setProperty('unitText', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The unit of measurement given using the UN/CEFACT Common Code (3 characters)
 * or a URL. Other codes than the UN/CEFACT Common Code may be used with a
 * prefix followed by a colon.
        * @param array|string|mixed $value
    * @return $this
    */
    public function unitCode($value)
    {
        $this->setProperty('unitCode', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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


}
