<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Trip;

use Sohophp\SchemaOrg\Thing\Intangible\Trip;
use Sohophp\SchemaOrg\Thing\Intangible\Audience;

/**
* A tourist trip. A created itinerary of visits to one or more places of interest (<a class="localLink" href="http://schema.org/TouristAttraction">TouristAttraction</a>/<a class="localLink" href="http://schema.org/TouristDestination">TouristDestination</a>) often linked by a similar theme, geographic area, or interest to a particular <a class="localLink" href="http://schema.org/touristType">touristType</a>. The <a href="http://www2.unwto.org/">UNWTO</a> defines tourism trip as the Trip taken by visitors.
  (See examples below).
* @see http://schema.org/TouristTrip
* @package Sohophp\SchemaOrg\Thing\Intangible\Trip

*
*/
class TouristTrip extends Trip
{

    /**
    * Attraction suitable for type(s) of tourist. eg. Children, visitors from a particular country, etc.
    * @param string|Audience|array $value
    * @return $this
    * @deprecated use setTouristType
    */
    public function touristType($value)
    {
        $this->setProperty('touristType', $value);
        return $this;
    }
   /**
    * @param string|Audience|array $value
    * @return $this
    */
    public function setTouristType($value)
    {
        $this->setProperty('touristType', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getTouristType()
    {
       return $this->getProperty('touristType');
    }


}
