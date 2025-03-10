<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* A US-style health insurance plan network.
* @see http://schema.org/HealthPlanNetwork
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class HealthPlanNetwork extends Intangible
{


    /**
        * The tier(s) for this network.
        * @param string|array|mixed $value
    * @return $this
    */
    public function healthPlanNetworkTier($value)
    {
        $this->setProperty('healthPlanNetworkTier', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
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
        * Name or unique ID of network. (Networks are often reused across different
 * insurance plans).
        * @param string|array|mixed $value
    * @return $this
    */
    public function healthPlanNetworkId($value)
    {
        $this->setProperty('healthPlanNetworkId', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
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
        * Whether The costs to the patient for services under this network or
 * formulary.
        * @param bool|array|string|mixed $value
    * @return $this
    */
    public function healthPlanCostSharing($value)
    {
        $this->setProperty('healthPlanCostSharing', $value);
        return $this;
    }

    /**
    * @param bool|array|string|mixed $value
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
