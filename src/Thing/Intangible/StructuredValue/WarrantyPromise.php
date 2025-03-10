<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

/**
* A structured value representing the duration and scope of services that will
 * be provided to a customer free of charge in case of a defect or malfunction
 * of a product.
* @see schema:WarrantyPromise
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class WarrantyPromise extends StructuredValue
{


    /**
        * The duration of the warranty promise. Common unitCode values are ANN for
 * year, MON for months, or DAY for days.
        * @param array|string|mixed $value
    * @return $this
    */
    public function durationOfWarranty($value)
    {
        $this->setProperty('durationOfWarranty', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setDurationOfWarranty($value)
    {
        $this->setProperty('durationOfWarranty', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDurationOfWarranty()
    {
       return $this->getProperty('durationOfWarranty');
    }


    /**
        * The scope of the warranty promise.
        * @param array|string|mixed $value
    * @return $this
    */
    public function warrantyScope($value)
    {
        $this->setProperty('warrantyScope', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setWarrantyScope($value)
    {
        $this->setProperty('warrantyScope', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getWarrantyScope()
    {
       return $this->getProperty('warrantyScope');
    }


}
