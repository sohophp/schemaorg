<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

/**
* A structured value providing information about the opening hours of a place or a certain service inside a place.\n\n
The place is __open__ if the [[opens]] property is specified, and __closed__ otherwise.\n\nIf the value for the [[closes]] property is less than the value for the [[opens]] property then the hour range is assumed to span over the next day.
      
* @see schema:OpeningHoursSpecification
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class OpeningHoursSpecification extends StructuredValue
{
   /**
        * The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.
        */
    protected $validThrough = null;

   /**
        * The day of the week for which these opening hours are valid.
        */
    protected $dayOfWeek = null;

   /**
        * The opening hour of the place or service on the given day(s) of the week.
        */
    protected $opens = null;

   /**
        * The date when the item becomes valid.
        */
    protected $validFrom = null;

   /**
        * The closing hour of the place or service on the given day(s) of the week.
        */
    protected $closes = null;


    /**
    * @param array|string $value
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
    * @param array|string $value
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

    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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


}
