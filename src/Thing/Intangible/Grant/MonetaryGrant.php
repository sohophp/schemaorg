<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible\Grant;

use Sohophp\SchemaOrg\Thing\Intangible\Grant;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;

/**
* A monetary grant.
* @see http://schema.org/MonetaryGrant
* @package Sohophp\SchemaOrg\Thing\Intangible\Grant
*/
class MonetaryGrant extends Grant
{

    /**
    * A person or organization that supports (sponsors) something through some kind of financial contribution.
    * @param Organization|Person $value
    * @return $this
    */
    public function funder($value)
    {
        $this->setProperty('funder', $value);
        return $this;
    }

    /**
    * The amount of money.
    * @param MonetaryAmount $value
    * @return $this
    */
    public function amount(?MonetaryAmount $value)
    {
        $this->setProperty('amount', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Grant\\MonetaryGrant','Thing\\MonetaryGrant');

