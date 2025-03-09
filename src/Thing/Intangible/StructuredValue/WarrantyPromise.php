<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

/**
* A structured value representing the duration and scope of services that will be provided to a customer free of charge in case of a defect or malfunction of a product.
* @see schema:WarrantyPromise
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class WarrantyPromise extends StructuredValue
{
   /**
        * The duration of the warranty promise. Common unitCode values are ANN for year, MON for months, or DAY for days.
        */
    protected $durationOfWarranty = null;

   /**
        * The scope of the warranty promise.
        */
    protected $warrantyScope = null;


    /**
    * @param array|string $value
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
    * @param array|string $value
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
