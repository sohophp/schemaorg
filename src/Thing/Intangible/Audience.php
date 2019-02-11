<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea;

/**
* Intended audience for an item, i.e. the group for whom the item was created.
* @see http://schema.org/Audience
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class Audience extends Intangible
{

    /**
    * The target group associated with a given audience (e.g. veterans, car owners, musicians, etc.).
    * @param string $value
    * @return $this
    */
    public function audienceType(?string $value)
    {
        $this->setProperty('audienceType', $value);
        return $this;
    }

    /**
    * The geographic area associated with the audience.
    * @param AdministrativeArea $value
    * @return $this
    */
    public function geographicArea(?AdministrativeArea $value)
    {
        $this->setProperty('geographicArea', $value);
        return $this;
    }


}

