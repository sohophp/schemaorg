<?php declare(strict_types=1);
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
    * @param Organization|array $value
    * @return $this
    */
    public function serviceOperator(?Organization $value)
    {
        $this->setProperty('serviceOperator', $value);
        return $this;
    }
   /**
    * @param Organization|array $value
    * @return $this
    */
    public function setServiceOperator(?Organization $value)
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


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Service\\GovernmentService','Thing\\GovernmentService');

