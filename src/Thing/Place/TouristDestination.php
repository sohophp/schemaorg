<?php
namespace Sohophp\SchemaOrg\Thing\Place;

use Sohophp\SchemaOrg\Thing\Place;

/**
* A tourist destination. In principle any [[Place]] can be a [[TouristDestination]] from a [[City]], Region or [[Country]] to an [[AmusementPark]] or [[Hotel]]. This Type can be used on its own to describe a general [[TouristDestination]], or be used as an [[additionalType]] to add tourist relevant properties to any other [[Place]].  A [[TouristDestination]] is defined as a [[Place]] that contains, or is colocated with, one or more [[TouristAttraction]]s, often linked by a similar theme or interest to a particular [[touristType]]. The [UNWTO](http://www2.unwto.org/) defines Destination (main destination of a tourism trip) as the place visited that is central to the decision to take the trip.
  (See examples below.)
* @see schema:TouristDestination
* @package Sohophp\SchemaOrg\Thing\Place
*/
class TouristDestination extends Place
{
   /**
        * Attraction located at destination.
        */
    protected $includesAttraction = null;

   /**
        * Attraction suitable for type(s) of tourist. E.g. children, visitors from a particular country, etc. 
        */
    protected $touristType = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setIncludesAttraction($value)
    {
        $this->setProperty('includesAttraction', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIncludesAttraction()
    {
       return $this->getProperty('includesAttraction');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setTouristType($value)
    {
        $this->setProperty('touristType', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTouristType()
    {
       return $this->getProperty('touristType');
    }


}
