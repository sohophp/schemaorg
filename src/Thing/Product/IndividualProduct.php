<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Product;

use Sohophp\SchemaOrg\Thing\Product;

/**
* A single, identifiable product instance (e.g. a laptop with a particular serial number).
* @see http://schema.org/IndividualProduct
* @package Sohophp\SchemaOrg\Thing\Product
*/
class IndividualProduct extends Product
{

    /**
    * The serial number or any alphanumeric identifier of a particular product. When attached to an offer, it is a shortcut for the serial number of the product included in the offer.
    * @param string $value
    * @return $this
    */
    public function serialNumber(?string $value)
    {
        $this->setProperty('serialNumber', $value);
        return $this;
    }


}

