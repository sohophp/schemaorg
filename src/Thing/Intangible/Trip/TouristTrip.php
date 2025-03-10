<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Trip;

use Sohophp\SchemaOrg\Thing\Intangible\Trip;
use Sohophp\SchemaOrg\Thing\Intangible\Audience;

/**
* A tourist trip. A created itinerary of visits to one or more places of
 * interest ([[TouristAttraction]]/[[TouristDestination]]) often linked by a
 * similar theme, geographic area, or interest to a particular [[touristType]].
 * The [UNWTO](http://www2.unwto.org/) defines tourism trip as the Trip taken by
 * visitors.
 *   (See examples below).
* @see http://schema.org/TouristTrip
* @package Sohophp\SchemaOrg\Thing\Intangible\Trip
*/
class TouristTrip extends Trip
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


}
