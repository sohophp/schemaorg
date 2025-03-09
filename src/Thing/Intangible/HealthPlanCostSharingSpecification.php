<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* A description of costs to the patient under a given network or formulary.
* @see schema:HealthPlanCostSharingSpecification
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class HealthPlanCostSharingSpecification extends Intangible
{
   /**
        * The copay amount.
        */
    protected $healthPlanCopay = null;

   /**
        * The category or type of pharmacy associated with this cost sharing.
        */
    protected $healthPlanPharmacyCategory = null;

   /**
        * The rate of coinsurance expressed as a number between 0.0 and 1.0.
        */
    protected $healthPlanCoinsuranceRate = null;

   /**
        * Whether the copay is before or after deductible, etc. TODO: Is this a closed set?
        */
    protected $healthPlanCopayOption = null;

   /**
        * Whether the coinsurance applies before or after deductible, etc. TODO: Is this a closed set?
        */
    protected $healthPlanCoinsuranceOption = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setHealthPlanCopay($value)
    {
        $this->setProperty('healthPlanCopay', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHealthPlanCopay()
    {
       return $this->getProperty('healthPlanCopay');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setHealthPlanPharmacyCategory($value)
    {
        $this->setProperty('healthPlanPharmacyCategory', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHealthPlanPharmacyCategory()
    {
       return $this->getProperty('healthPlanPharmacyCategory');
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
    * @return string|array|mixed
    */
    public function getHealthPlanCoinsuranceRate()
    {
       return $this->getProperty('healthPlanCoinsuranceRate');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setHealthPlanCopayOption($value)
    {
        $this->setProperty('healthPlanCopayOption', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHealthPlanCopayOption()
    {
       return $this->getProperty('healthPlanCopayOption');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setHealthPlanCoinsuranceOption($value)
    {
        $this->setProperty('healthPlanCoinsuranceOption', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHealthPlanCoinsuranceOption()
    {
       return $this->getProperty('healthPlanCoinsuranceOption');
    }


}
