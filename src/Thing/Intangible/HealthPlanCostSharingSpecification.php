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
    * @deprecated use setHealthPlanPharmacyCategory
    */
    public function healthPlanPharmacyCategory($value)
    {
        $this->setProperty('healthPlanPharmacyCategory', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setHealthPlanPharmacyCategory($value)
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
    * @deprecated use setHealthPlanCoinsuranceOption
    */
    public function healthPlanCoinsuranceOption($value)
    {
        $this->setProperty('healthPlanCoinsuranceOption', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setHealthPlanCoinsuranceOption($value)
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
    * @param array|string $value
    * @return $this
    * @deprecated use setHealthPlanCoinsuranceRate
    */
    public function healthPlanCoinsuranceRate($value)
    {
        $this->setProperty('healthPlanCoinsuranceRate', $value);
        return $this;
    }
   /**
    * @param array|string $value
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
    * @deprecated use setHealthPlanCopayOption
    */
    public function healthPlanCopayOption($value)
    {
        $this->setProperty('healthPlanCopayOption', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setHealthPlanCopayOption($value)
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
    * @param PriceSpecification|array|string $value
    * @return $this
    * @deprecated use setHealthPlanCopay
    */
    public function healthPlanCopay($value)
    {
        $this->setProperty('healthPlanCopay', $value);
        return $this;
    }
   /**
    * @param PriceSpecification|array|string $value
    * @return $this
    */
    public function setHealthPlanCopay($value)
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
