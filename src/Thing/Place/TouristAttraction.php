<?php
namespace Sohophp\SchemaOrg\Thing\Place;

use Sohophp\SchemaOrg\Thing\Place;

/**
* A tourist attraction.  In principle any Thing can be a [[TouristAttraction]],
 * from a [[Mountain]] and [[LandmarksOrHistoricalBuildings]] to a
 * [[LocalBusiness]].  This Type can be used on its own to describe a general
 * [[TouristAttraction]], or be used as an [[additionalType]] to add tourist
 * attraction properties to any other type.  (See examples below)
* @see schema:TouristAttraction
* @package Sohophp\SchemaOrg\Thing\Place
*/
class TouristAttraction extends Place
{


    /**
        * A language someone may use with or at the item, service or place. Please use
 * one of the language codes from the [IETF BCP 47
 * standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]].
        * @param array|string|mixed $value
    * @return $this
    */
    public function availableLanguage($value)
    {
        $this->setProperty('availableLanguage', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAvailableLanguage($value)
    {
        $this->setProperty('availableLanguage', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAvailableLanguage()
    {
       return $this->getProperty('availableLanguage');
    }


    /**
        * Attraction suitable for type(s) of tourist. E.g. children, visitors from a
 * particular country, etc.
        * @param array|string|mixed $value
    * @return $this
    */
    public function touristType($value)
    {
        $this->setProperty('touristType', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
