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
*/
class TypeAndQuantityNode extends StructuredValue
{

    /**
    * The unit of measurement given using the UN/CEFACT Common Code (3 characters) or a URL. Other codes than the UN/CEFACT Common Code may be used with a prefix followed by a colon.
    * @param string|string $value
    * @return $this
    */
    public function unitCode($value)
    {
        $this->setProperty('unitCode', $value);
        return $this;
    }

    /**
    * The product that this structured value is referring to.
    * @param Product|Service $value
    * @return $this
    */
    public function typeOfGood($value)
    {
        $this->setProperty('typeOfGood', $value);
        return $this;
    }

    /**
    * The quantity of the goods included in the offer.
    * @param  $value
    * @return $this
    */
    public function amountOfThisGood($value)
    {
        $this->setProperty('amountOfThisGood', $value);
        return $this;
    }

    /**
    * A string or text indicating the unit of measurement. Useful if you cannot provide a standard unit code for
<a href='unitCode'>unitCode</a>.
    * @param string $value
    * @return $this
    */
    public function unitText(?string $value)
    {
        $this->setProperty('unitText', $value);
        return $this;
    }

    /**
    * The business function (e.g. sell, lease, repair, dispose) of the offer or component of a bundle (TypeAndQuantityNode). The default is http://purl.org/goodrelations/v1#Sell.
    * @param BusinessFunction $value
    * @return $this
    */
    public function businessFunction(?BusinessFunction $value)
    {
        $this->setProperty('businessFunction', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\StructuredValue\\TypeAndQuantityNode','Thing\\TypeAndQuantityNode');

