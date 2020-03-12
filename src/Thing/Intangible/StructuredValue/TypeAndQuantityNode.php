<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
use Sohophp\SchemaOrg\Thing\Product;
use Sohophp\SchemaOrg\Thing\Intangible\Service;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\BusinessFunction;

/**
* A structured value indicating the quantity, unit of measurement, and business function of goods included in a bundle offer.
* @see http://schema.org/TypeAndQuantityNode
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue

*
*/
class TypeAndQuantityNode extends StructuredValue
{

    /**
    * The unit of measurement given using the UN/CEFACT Common Code (3 characters) or a URL. Other codes than the UN/CEFACT Common Code may be used with a prefix followed by a colon.
    * @param string|string|array $value
    * @return $this
    */
    public function unitCode($value)
    {
        $this->setProperty('unitCode', $value);
        return $this;
    }
   /**
    * @param string|string|array $value
    * @return $this
    */
    public function setUnitCode($value)
    {
        $this->setProperty('unitCode', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getUnitCode()
    {
       return $this->getProperty('unitCode');
    }

    /**
    * The product that this structured value is referring to.
    * @param Product|Service|array $value
    * @return $this
    */
    public function typeOfGood($value)
    {
        $this->setProperty('typeOfGood', $value);
        return $this;
    }
   /**
    * @param Product|Service|array $value
    * @return $this
    */
    public function setTypeOfGood($value)
    {
        $this->setProperty('typeOfGood', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getTypeOfGood()
    {
       return $this->getProperty('typeOfGood');
    }

    /**
    * The quantity of the goods included in the offer.
    * @param |array $value
    * @return $this
    */
    public function amountOfThisGood($value)
    {
        $this->setProperty('amountOfThisGood', $value);
        return $this;
    }
   /**
    * @param |array $value
    * @return $this
    */
    public function setAmountOfThisGood($value)
    {
        $this->setProperty('amountOfThisGood', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAmountOfThisGood()
    {
       return $this->getProperty('amountOfThisGood');
    }

    /**
    * A string or text indicating the unit of measurement. Useful if you cannot provide a standard unit code for
<a href='unitCode'>unitCode</a>.
    * @param string|array $value
    * @return $this
    */
    public function unitText(?string $value)
    {
        $this->setProperty('unitText', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setUnitText(?string $value)
    {
        $this->setProperty('unitText', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getUnitText()
    {
       return $this->getProperty('unitText');
    }

    /**
    * The business function (e.g. sell, lease, repair, dispose) of the offer or component of a bundle (TypeAndQuantityNode). The default is http://purl.org/goodrelations/v1#Sell.
    * @param BusinessFunction|array $value
    * @return $this
    */
    public function businessFunction(?BusinessFunction $value)
    {
        $this->setProperty('businessFunction', $value);
        return $this;
    }
   /**
    * @param BusinessFunction|array $value
    * @return $this
    */
    public function setBusinessFunction(?BusinessFunction $value)
    {
        $this->setProperty('businessFunction', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getBusinessFunction()
    {
       return $this->getProperty('businessFunction');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\StructuredValue\\TypeAndQuantityNode','Thing\\TypeAndQuantityNode');

