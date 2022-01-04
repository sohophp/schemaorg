<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Service;

use Sohophp\SchemaOrg\Thing\Intangible\Service;
use Sohophp\SchemaOrg\Thing\Organization;

/**
* A service provided by a government organization, e.g. food stamps, veterans benefits, etc.
* @see http://schema.org/GovernmentService
* @package Sohophp\SchemaOrg\Thing\Intangible\Service

*
*/
class GovernmentService extends Service
{

    /**
    * The operating organization, if different from the provider.  This enables the representation of services that are provided by an organization, but operated by another organization like a subcontractor.
    * @param Organization|array|string $value
    * @return $this
    * @deprecated use setServiceOperator
    */
    public function serviceOperator($value)
    {
        $this->setProperty('serviceOperator', $value);
        return $this;
    }
   /**
    * @param Organization|array|string $value
    * @return $this
    */
    public function setServiceOperator($value)
    {
        $this->setProperty('serviceOperator', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getServiceOperator()
    {
       return $this->getProperty('serviceOperator');
    }


}
