<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\DayOfWeek;

/**
* A structured value providing information about the opening hours of a place
 * or a certain service inside a place.
 * 
 * The place is __open__ if the [[opens]] property is specified, and __closed__
 * otherwise.
 * 
 * If the value for the [[closes]] property is less than the value for the
 * [[opens]] property then the hour range is assumed to span over the next day.
* @see http://schema.org/OpeningHoursSpecification
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class OpeningHoursSpecification extends StructuredValue
{


    /**
        * The date when the item becomes valid.
        * @param array|string|mixed $value
    * @return $this
    */
    public function validFrom($value)
    {
        $this->setProperty('validFrom', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setValidFrom($value)
    {
        $this->setProperty('validFrom', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getValidFrom()
    {
       return $this->getProperty('validFrom');
    }


    /**
        * The date after when the item is not valid. For example the end of an offer,
 * salary period, or a period of opening hours.
        * @param array|string|mixed $value
    * @return $this
    */
    public function validThrough($value)
    {
        $this->setProperty('validThrough', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setValidThrough($value)
    {
        $this->setProperty('validThrough', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getValidThrough()
    {
       return $this->getProperty('validThrough');
    }


    /**
        * The opening hour of the place or service on the given day(s) of the week.
        * @param array|string|mixed $value
    * @return $this
    */
    public function opens($value)
    {
        $this->setProperty('opens', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setOpens($value)
    {
        $this->setProperty('opens', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getOpens()
    {
       return $this->getProperty('opens');
    }


    /**
        * The closing hour of the place or service on the given day(s) of the week.
        * @param array|string|mixed $value
    * @return $this
    */
    public function closes($value)
    {
        $this->setProperty('closes', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setCloses($value)
    {
        $this->setProperty('closes', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCloses()
    {
       return $this->getProperty('closes');
    }


    /**
        * The day of the week for which these opening hours are valid.
        * @param DayOfWeek|array|string|mixed $value
    * @return $this
    */
    public function dayOfWeek($value)
    {
        $this->setProperty('dayOfWeek', $value);
        return $this;
    }

    /**
    * @param DayOfWeek|array|string|mixed $value
    * @return $this
    */
    public function setDayOfWeek($value)
    {
        $this->setProperty('dayOfWeek', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDayOfWeek()
    {
       return $this->getProperty('dayOfWeek');
    }


}
