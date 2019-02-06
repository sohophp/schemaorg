<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Intangible\Offer;
/**
* A trip or journey. An itinerary of visits to one or more places.
* @see http://schema.org/Trip
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class Trip extends Intangible
{

     
     /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
     * @param Organization|Person $value
     * @return $this
     */

     public function provider( $value):self
     {
        $this->setProperty("provider",$value);
        return $this;
     }

     
     /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event.
     * @param Offer $value
     * @return $this
     */

     public function offers(?Offer $value):self
     {
        $this->setProperty("offers",$value);
        return $this;
     }

     
     /**
     * The expected arrival time.
     * @param  $value
     * @return $this
     */

     public function arrivalTime( $value):self
     {
        $this->setProperty("arrivalTime",$value);
        return $this;
     }

     
     /**
     * The expected departure time.
     * @param  $value
     * @return $this
     */

     public function departureTime( $value):self
     {
        $this->setProperty("departureTime",$value);
        return $this;
     }

     
}

