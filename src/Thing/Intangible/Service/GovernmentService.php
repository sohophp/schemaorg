<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Service;

use Sohophp\SchemaOrg\Thing\Intangible\Service;

/**
* A service provided by a government organization, e.g. food stamps, veterans benefits, etc.
* @see schema:GovernmentService
* @package Sohophp\SchemaOrg\Thing\Intangible\Service
*/
class GovernmentService extends Service
{
   /**
        * The operating organization, if different from the provider.  This enables the representation of services that are provided by an organization, but operated by another organization like a subcontractor.
        */
    protected $serviceOperator = null;

   /**
        * Indicates a legal jurisdiction, e.g. of some legislation, or where some government service is based.
        */
    protected $jurisdiction = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setServiceOperator($value)
    {
        $this->setProperty('serviceOperator', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getServiceOperator()
    {
       return $this->getProperty('serviceOperator');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setJurisdiction($value)
    {
        $this->setProperty('jurisdiction', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getJurisdiction()
    {
       return $this->getProperty('jurisdiction');
    }


}
