<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Grant;

use Sohophp\SchemaOrg\Thing\Intangible\Grant;

/**
* A monetary grant.
* @see schema:MonetaryGrant
* @package Sohophp\SchemaOrg\Thing\Intangible\Grant
*/
class MonetaryGrant extends Grant
{
   /**
        * A person or organization that supports (sponsors) something through some kind of financial contribution.
        */
    protected $funder = null;

   /**
        * The amount of money.
        */
    protected $amount = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setFunder($value)
    {
        $this->setProperty('funder', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getFunder()
    {
       return $this->getProperty('funder');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setAmount($value)
    {
        $this->setProperty('amount', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAmount()
    {
       return $this->getProperty('amount');
    }


}
