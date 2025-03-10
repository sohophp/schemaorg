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
        * The target group associated with a given audience (e.g. veterans, car owners,
 * musicians, etc.).
        * @param array|string|mixed $value
    * @return $this
    */
    public function audienceType($value)
    {
        $this->setProperty('audienceType', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The geographic area associated with the audience.
        * @param array|string|mixed $value
    * @return $this
    */
    public function geographicArea($value)
    {
        $this->setProperty('geographicArea', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
