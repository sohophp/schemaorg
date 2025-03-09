<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* A US-style health insurance plan network.
* @see schema:HealthPlanNetwork
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class HealthPlanNetwork extends Intangible
{
   /**
        * The tier(s) for this network.
        */
    protected $healthPlanNetworkTier = null;

   /**
        * Name or unique ID of network. (Networks are often reused across different insurance plans.)
        */
    protected $healthPlanNetworkId = null;

   /**
        * The costs to the patient for services under this network or formulary.
        */
    protected $healthPlanCostSharing = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setHealthPlanNetworkTier($value)
    {
        $this->setProperty('healthPlanNetworkTier', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHealthPlanNetworkTier()
    {
       return $this->getProperty('healthPlanNetworkTier');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setHealthPlanNetworkId($value)
    {
        $this->setProperty('healthPlanNetworkId', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHealthPlanNetworkId()
    {
       return $this->getProperty('healthPlanNetworkId');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setHealthPlanCostSharing($value)
    {
        $this->setProperty('healthPlanCostSharing', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHealthPlanCostSharing()
    {
       return $this->getProperty('healthPlanCostSharing');
    }


}
