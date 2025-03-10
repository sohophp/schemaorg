<?php
namespace Sohophp\SchemaOrg\Thing\Place;

use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\Intangible\Audience;
use Sohophp\SchemaOrg\Thing\Place\TouristAttraction;

/**
* A tourist destination. In principle any [[Place]] can be a
 * [[TouristDestination]] from a [[City]], [[Region]] or [[Country]] to an
 * [[AmusementPark]] or [[Hotel]]. This Type can be used on its own to describe
 * a general [[TouristDestination]], or be used as an [[additionalType]] to add
 * tourist relevant properties to any other [[Place]].  A [[TouristDestination]]
 * is defined as a [[Place]] that contains, or is colocated with, one or more
 * [[TouristAttraction]]s, often linked by a similar theme or interest to a
 * particular [[touristType]]. The [UNWTO](http://www2.unwto.org/) defines
 * Destination (main destination of a tourism trip) as the place visited that is
 * central to the decision to take the trip.
 *   (See examples below).
* @see http://schema.org/TouristDestination
* @package Sohophp\SchemaOrg\Thing\Place
*/
class TouristDestination extends Place
{


    /**
        * Attraction suitable for type(s) of tourist. eg. Children, visitors from a
 * particular country, etc.
        * @param string|Audience|array|mixed $value
    * @return $this
    */
    public function touristType($value)
    {
        $this->setProperty('touristType', $value);
        return $this;
    }

    /**
    * @param string|Audience|array|mixed $value
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


    /**
        * Attraction located at destination.
        * @param TouristAttraction|array|string|mixed $value
    * @return $this
    */
    public function includesAttraction($value)
    {
        $this->setProperty('includesAttraction', $value);
        return $this;
    }

    /**
    * @param TouristAttraction|array|string|mixed $value
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


}
