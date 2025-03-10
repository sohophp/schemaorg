<?php
namespace Sohophp\SchemaOrg\Thing\Product;

use Sohophp\SchemaOrg\Thing\Product;

/**
* A single, identifiable product instance (e.g. a laptop with a particular
 * serial number).
* @see schema:IndividualProduct
* @package Sohophp\SchemaOrg\Thing\Product
*/
class IndividualProduct extends Product
{


    /**
        * The serial number or any alphanumeric identifier of a particular product.
 * When attached to an offer, it is a shortcut for the serial number of the
 * product included in the offer.
        * @param array|string|mixed $value
    * @return $this
    */
    public function serialNumber($value)
    {
        $this->setProperty('serialNumber', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setSerialNumber($value)
    {
        $this->setProperty('serialNumber', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSerialNumber()
    {
       return $this->getProperty('serialNumber');
    }


}
