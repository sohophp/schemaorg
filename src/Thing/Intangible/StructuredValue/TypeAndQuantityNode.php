<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

/**
* A structured value indicating the quantity, unit of measurement, and business
 * function of goods included in a bundle offer.
* @see schema:TypeAndQuantityNode
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class TypeAndQuantityNode extends StructuredValue
{


    /**
        * The product that this structured value is referring to.
        * @param array|string|mixed $value
    * @return $this
    */
    public function typeOfGood($value)
    {
        $this->setProperty('typeOfGood', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setTypeOfGood($value)
    {
        $this->setProperty('typeOfGood', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTypeOfGood()
    {
       return $this->getProperty('typeOfGood');
    }


    /**
        * The quantity of the goods included in the offer.
        * @param array|string|mixed $value
    * @return $this
    */
    public function amountOfThisGood($value)
    {
        $this->setProperty('amountOfThisGood', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAmountOfThisGood($value)
    {
        $this->setProperty('amountOfThisGood', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAmountOfThisGood()
    {
       return $this->getProperty('amountOfThisGood');
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
        * The business function (e.g. sell, lease, repair, dispose) of the offer or
 * component of a bundle (TypeAndQuantityNode). The default is
 * http://purl.org/goodrelations/v1#Sell.
        * @param array|string|mixed $value
    * @return $this
    */
    public function businessFunction($value)
    {
        $this->setProperty('businessFunction', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setBusinessFunction($value)
    {
        $this->setProperty('businessFunction', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBusinessFunction()
    {
       return $this->getProperty('businessFunction');
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
