<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Place;

use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\Intangible\Audience;
use Sohophp\SchemaOrg\Thing\Place\TouristAttraction;

/**
* A tourist destination. In principle any <a class="localLink" href="http://schema.org/Place">Place</a> can be a <a class="localLink" href="http://schema.org/TouristDestination">TouristDestination</a> from a <a class="localLink" href="http://schema.org/City">City</a>, <a class="localLink" href="http://schema.org/Region">Region</a> or <a class="localLink" href="http://schema.org/Country">Country</a> to an <a class="localLink" href="http://schema.org/AmusementPark">AmusementPark</a> or <a class="localLink" href="http://schema.org/Hotel">Hotel</a>. This Type can be used on its own to describe a general <a class="localLink" href="http://schema.org/TouristDestination">TouristDestination</a>, or be used as an <a class="localLink" href="http://schema.org/additionalType">additionalType</a> to add tourist relevant properties to any other <a class="localLink" href="http://schema.org/Place">Place</a>.  A <a class="localLink" href="http://schema.org/TouristDestination">TouristDestination</a> is defined as a <a class="localLink" href="http://schema.org/Place">Place</a> that contains, or is colocated with, one or more <a class="localLink" href="http://schema.org/TouristAttraction">TouristAttraction</a>s, often linked by a similar theme or interest to a particular <a class="localLink" href="http://schema.org/touristType">touristType</a>. The <a href="http://www2.unwto.org/">UNWTO</a> defines Destination (main destination of a tourism trip) as the place visited that is central to the decision to take the trip.
  (See examples below).
* @see http://schema.org/TouristDestination
* @package Sohophp\SchemaOrg\Thing\Place

*
*/
class TouristDestination extends Place
{

    /**
    * Attraction suitable for type(s) of tourist. eg. Children, visitors from a particular country, etc.
    * @param string|Audience|array $value
    * @return $this
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

    /**
    * Attraction located at destination.
    * @param TouristAttraction|array $value
    * @return $this
    */
    public function includesAttraction(?TouristAttraction $value)
    {
        $this->setProperty('includesAttraction', $value);
        return $this;
    }
   /**
    * @param TouristAttraction|array $value
    * @return $this
    */
    public function setIncludesAttraction(?TouristAttraction $value)
    {
        $this->setProperty('includesAttraction', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getIncludesAttraction()
    {
       return $this->getProperty('includesAttraction');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Place\\TouristDestination','Thing\\TouristDestination');

