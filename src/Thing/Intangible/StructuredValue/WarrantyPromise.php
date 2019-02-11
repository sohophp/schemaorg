<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\WarrantyScope;

/**
* A structured value representing the duration and scope of services that will be provided to a customer free of charge in case of a defect or malfunction of a product.
* @see http://schema.org/WarrantyPromise
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class WarrantyPromise extends StructuredValue
{

    /**
    * The duration of the warranty promise. Common unitCode values are ANN for year, MON for months, or DAY for days.
    * @param QuantitativeValue $value
    * @return $this
    */
    public function durationOfWarranty(?QuantitativeValue $value)
    {
        $this->setProperty('durationOfWarranty', $value);
        return $this;
    }

    /**
    * The scope of the warranty promise.
    * @param WarrantyScope $value
    * @return $this
    */
    public function warrantyScope(?WarrantyScope $value)
    {
        $this->setProperty('warrantyScope', $value);
        return $this;
    }


}

