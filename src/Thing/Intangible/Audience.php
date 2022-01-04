<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea;

/**
* Intended audience for an item, i.e. the group for whom the item was created.
* @see http://schema.org/Audience
* @package Sohophp\SchemaOrg\Thing\Intangible

*
*/
class Audience extends Intangible
{

    /**
    * The target group associated with a given audience (e.g. veterans, car owners, musicians, etc.).
    * @param string|array $value
    * @return $this
    * @deprecated use setAudienceType
    */
    public function audienceType($value)
    {
        $this->setProperty('audienceType', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setAudienceType($value)
    {
        $this->setProperty('audienceType', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAudienceType()
    {
       return $this->getProperty('audienceType');
    }

    /**
    * The geographic area associated with the audience.
    * @param AdministrativeArea|array|string $value
    * @return $this
    * @deprecated use setGeographicArea
    */
    public function geographicArea($value)
    {
        $this->setProperty('geographicArea', $value);
        return $this;
    }
   /**
    * @param AdministrativeArea|array|string $value
    * @return $this
    */
    public function setGeographicArea($value)
    {
        $this->setProperty('geographicArea', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getGeographicArea()
    {
       return $this->getProperty('geographicArea');
    }


}
