<?php declare(strict_types=1);
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
    */
    public function audienceType(?string $value)
    {
        $this->setProperty('audienceType', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setAudienceType(?string $value)
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
    * @param AdministrativeArea|array $value
    * @return $this
    */
    public function geographicArea(?AdministrativeArea $value)
    {
        $this->setProperty('geographicArea', $value);
        return $this;
    }
   /**
    * @param AdministrativeArea|array $value
    * @return $this
    */
    public function setGeographicArea(?AdministrativeArea $value)
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


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Audience','Thing\\Audience');

