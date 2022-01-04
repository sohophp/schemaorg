<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* A US-style health insurance plan network.
* @see http://schema.org/HealthPlanNetwork
* @package Sohophp\SchemaOrg\Thing\Intangible

*
*/
class HealthPlanNetwork extends Intangible
{

    /**
    * The tier(s) for this network.
    * @param string|array $value
    * @return $this
    * @deprecated use setHealthPlanNetworkTier
    */
    public function healthPlanNetworkTier($value)
    {
        $this->setProperty('healthPlanNetworkTier', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setHealthPlanNetworkTier($value)
    {
        $this->setProperty('healthPlanNetworkTier', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getHealthPlanNetworkTier()
    {
       return $this->getProperty('healthPlanNetworkTier');
    }

    /**
    * Name or unique ID of network. (Networks are often reused across different insurance plans).
    * @param string|array $value
    * @return $this
    * @deprecated use setHealthPlanNetworkId
    */
    public function healthPlanNetworkId($value)
    {
        $this->setProperty('healthPlanNetworkId', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setHealthPlanNetworkId($value)
    {
        $this->setProperty('healthPlanNetworkId', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getHealthPlanNetworkId()
    {
       return $this->getProperty('healthPlanNetworkId');
    }

    /**
    * Whether The costs to the patient for services under this network or formulary.
    * @param bool|array|string $value
    * @return $this
    * @deprecated use setHealthPlanCostSharing
    */
    public function healthPlanCostSharing($value)
    {
        $this->setProperty('healthPlanCostSharing', $value);
        return $this;
    }
   /**
    * @param bool|array|string $value
    * @return $this
    */
    public function setHealthPlanCostSharing($value)
    {
        $this->setProperty('healthPlanCostSharing', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getHealthPlanCostSharing()
    {
       return $this->getProperty('healthPlanCostSharing');
    }


}
