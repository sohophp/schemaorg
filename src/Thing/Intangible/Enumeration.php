<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* Lists or enumerations—for example, a list of cuisines or music genres, etc.
* @see schema:Enumeration
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class Enumeration extends Intangible
{
   /**
        * Relates a term (i.e. a property, class or enumeration) to one that supersedes it.
        */
    protected $supersededBy = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setSupersededBy($value)
    {
        $this->setProperty('supersededBy', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSupersededBy()
    {
       return $this->getProperty('supersededBy');
    }


}
