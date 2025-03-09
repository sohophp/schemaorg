<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* Intended audience for an item, i.e. the group for whom the item was created.
* @see schema:Audience
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class Audience extends Intangible
{
   /**
        * The target group associated with a given audience (e.g. veterans, car owners, musicians, etc.).
        */
    protected $audienceType = null;

   /**
        * The geographic area associated with the audience.
        */
    protected $geographicArea = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setAudienceType($value)
    {
        $this->setProperty('audienceType', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAudienceType()
    {
       return $this->getProperty('audienceType');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setGeographicArea($value)
    {
        $this->setProperty('geographicArea', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGeographicArea()
    {
       return $this->getProperty('geographicArea');
    }


}
