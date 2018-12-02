<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\Audience;
use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\Intangible\ServiceChannel;
/**
* A service provided by an organization, e.g. delivery service, print services, etc.
* @see http://schema.org/Service
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class Service extends Intangible
{

     
     /**
     * The audience eligible for this service.
     * @param Audience $value
     * @return $this
     */

     public function serviceAudience(?Audience $value):self
     {
        $this->setProperty("serviceAudience",$value);
        return $this;
     }

     
     /**
     * Indicates the mobility of a provided service (e.g. 'static', 'dynamic').
     * @param string $value
     * @return $this
     */

     public function providerMobility(?string $value):self
     {
        $this->setProperty("providerMobility",$value);
        return $this;
     }

     
     /**
     * The tangible thing generated by the service, e.g. a passport, permit, etc.
     * @param Thing $value
     * @return $this
     */

     public function serviceOutput(?Thing $value):self
     {
        $this->setProperty("serviceOutput",$value);
        return $this;
     }

     
     /**
     * A means of accessing the service (e.g. a phone bank, a web site, a location, etc.).
     * @param ServiceChannel $value
     * @return $this
     */

     public function availableChannel(?ServiceChannel $value):self
     {
        $this->setProperty("availableChannel",$value);
        return $this;
     }

     
     /**
     * The type of service being offered, e.g. veterans' benefits, emergency relief, etc.
     * @param string $value
     * @return $this
     */

     public function serviceType(?string $value):self
     {
        $this->setProperty("serviceType",$value);
        return $this;
     }

     
     /**
     * The tangible thing generated by the service, e.g. a passport, permit, etc.
     * @param Thing $value
     * @return $this
     */

     public function produces(?Thing $value):self
     {
        $this->setProperty("produces",$value);
        return $this;
     }

     
}

