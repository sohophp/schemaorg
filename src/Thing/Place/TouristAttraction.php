<?php
namespace Sohophp\SchemaOrg\Thing\Place;

use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\Intangible\Audience;
use Sohophp\SchemaOrg\Thing\Intangible\Language;

/**
* A tourist attraction.  In principle any Thing can be a <a class="localLink" href="http://schema.org/TouristAttraction">TouristAttraction</a>, from a <a class="localLink" href="http://schema.org/Mountain">Mountain</a> and <a class="localLink" href="http://schema.org/LandmarksOrHistoricalBuildings">LandmarksOrHistoricalBuildings</a> to a <a class="localLink" href="http://schema.org/LocalBusiness">LocalBusiness</a>.  This Type can be used on its own to describe a general <a class="localLink" href="http://schema.org/TouristAttraction">TouristAttraction</a>, or be used as an <a class="localLink" href="http://schema.org/additionalType">additionalType</a> to add tourist attraction properties to any other type.  (See examples below)
* @see http://schema.org/TouristAttraction
* @package Sohophp\SchemaOrg\Thing\Place

*
*/
class TouristAttraction extends Place
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
    * A language someone may use with or at the item, service or place. Please use one of the language codes from the <a href="http://tools.ietf.org/html/bcp47">IETF BCP 47 standard</a>. See also <a class="localLink" href="http://schema.org/inLanguage">inLanguage</a>
    * @param string|Language|array $value
    * @return $this
    */
    public function availableLanguage($value)
    {
        $this->setProperty('availableLanguage', $value);
        return $this;
    }
   /**
    * @param string|Language|array $value
    * @return $this
    */
    public function setAvailableLanguage($value)
    {
        $this->setProperty('availableLanguage', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAvailableLanguage()
    {
       return $this->getProperty('availableLanguage');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Place\\TouristAttraction','Thing\\TouristAttraction');

