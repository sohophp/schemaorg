<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;

/**
* A description of costs to the patient under a given network or formulary.
* @see http://schema.org/HealthPlanCostSharingSpecification
* @package Sohophp\SchemaOrg\Thing\Intangible

*
*/
class HealthPlanCostSharingSpecification extends Intangible
{

    /**
    * The category or type of pharmacy associated with this cost sharing.
    * @param string|array $value
    * @return $this
    */
    public function healthPlanPharmacyCategory(?string $value)
    {
        $this->setProperty('healthPlanPharmacyCategory', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setHealthPlanPharmacyCategory(?string $value)
    {
        $this->setProperty('healthPlanPharmacyCategory', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getHealthPlanPharmacyCategory()
    {
       return $this->getProperty('healthPlanPharmacyCategory');
    }

    /**
    * Whether the coinsurance applies before or after deductible, etc. TODO: Is this a closed set?
    * @param string|array $value
    * @return $this
    */
    public function healthPlanCoinsuranceOption(?string $value)
    {
        $this->setProperty('healthPlanCoinsuranceOption', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setHealthPlanCoinsuranceOption(?string $value)
    {
        $this->setProperty('healthPlanCoinsuranceOption', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getHealthPlanCoinsuranceOption()
    {
       return $this->getProperty('healthPlanCoinsuranceOption');
    }

    /**
    * Whether The rate of coinsurance expressed as a number between 0.0 and 1.0.
    * @param |array $value
    * @return $this
    */
    public function healthPlanCoinsuranceRate($value)
    {
        $this->setProperty('healthPlanCoinsuranceRate', $value);
        return $this;
    }
   /**
    * @param |array $value
    * @return $this
    */
    public function setHealthPlanCoinsuranceRate($value)
    {
        $this->setProperty('healthPlanCoinsuranceRate', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getHealthPlanCoinsuranceRate()
    {
       return $this->getProperty('healthPlanCoinsuranceRate');
    }

    /**
    * Whether the copay is before or after deductible, etc. TODO: Is this a closed set?
    * @param string|array $value
    * @return $this
    */
    public function healthPlanCopayOption(?string $value)
    {
        $this->setProperty('healthPlanCopayOption', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setHealthPlanCopayOption(?string $value)
    {
        $this->setProperty('healthPlanCopayOption', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getHealthPlanCopayOption()
    {
       return $this->getProperty('healthPlanCopayOption');
    }

    /**
    * Whether The copay amount.
    * @param PriceSpecification|array $value
    * @return $this
    */
    public function healthPlanCopay(?PriceSpecification $value)
    {
        $this->setProperty('healthPlanCopay', $value);
        return $this;
    }
   /**
    * @param PriceSpecification|array $value
    * @return $this
    */
    public function setHealthPlanCopay(?PriceSpecification $value)
    {
        $this->setProperty('healthPlanCopay', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getHealthPlanCopay()
    {
       return $this->getProperty('healthPlanCopay');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\HealthPlanCostSharingSpecification','Thing\\HealthPlanCostSharingSpecification');

