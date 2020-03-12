<?php declare(strict_types=1);
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
    */
    public function healthPlanNetworkTier(?string $value)
    {
        $this->setProperty('healthPlanNetworkTier', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setHealthPlanNetworkTier(?string $value)
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
    */
    public function healthPlanNetworkId(?string $value)
    {
        $this->setProperty('healthPlanNetworkId', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setHealthPlanNetworkId(?string $value)
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
    * @param bool|array $value
    * @return $this
    */
    public function healthPlanCostSharing(?bool $value)
    {
        $this->setProperty('healthPlanCostSharing', $value);
        return $this;
    }
   /**
    * @param bool|array $value
    * @return $this
    */
    public function setHealthPlanCostSharing(?bool $value)
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


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\HealthPlanNetwork','Thing\\HealthPlanNetwork');

