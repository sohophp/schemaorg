<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;

/**
* A description of costs to the patient under a given network or formulary.
* @see http://schema.org/HealthPlanCostSharingSpecification
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class HealthPlanCostSharingSpecification extends Intangible
{

    /**
    * The category or type of pharmacy associated with this cost sharing.
    * @param string $value
    * @return $this
    */
    public function healthPlanPharmacyCategory(?string $value)
    {
        $this->setProperty('healthPlanPharmacyCategory', $value);
        return $this;
    }

    /**
    * Whether the coinsurance applies before or after deductible, etc. TODO: Is this a closed set?
    * @param string $value
    * @return $this
    */
    public function healthPlanCoinsuranceOption(?string $value)
    {
        $this->setProperty('healthPlanCoinsuranceOption', $value);
        return $this;
    }

    /**
    * Whether The rate of coinsurance expressed as a number between 0.0 and 1.0.
    * @param  $value
    * @return $this
    */
    public function healthPlanCoinsuranceRate($value)
    {
        $this->setProperty('healthPlanCoinsuranceRate', $value);
        return $this;
    }

    /**
    * Whether the copay is before or after deductible, etc. TODO: Is this a closed set?
    * @param string $value
    * @return $this
    */
    public function healthPlanCopayOption(?string $value)
    {
        $this->setProperty('healthPlanCopayOption', $value);
        return $this;
    }

    /**
    * Whether The copay amount.
    * @param PriceSpecification $value
    * @return $this
    */
    public function healthPlanCopay(?PriceSpecification $value)
    {
        $this->setProperty('healthPlanCopay', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\HealthPlanCostSharingSpecification','Thing\\HealthPlanCostSharingSpecification');

