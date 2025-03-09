<?php
namespace Sohophp\SchemaOrg\Thing;

use Sohophp\SchemaOrg\Thing;

/**
* A StupidType for testing.
* @see schema:StupidType
* @package Sohophp\SchemaOrg\Thing
*/
class StupidType extends Thing
{
   /**
        * This is a StupidProperty! - for testing only.
        */
    protected $stupidProperty = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setStupidProperty($value)
    {
        $this->setProperty('stupidProperty', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getStupidProperty()
    {
       return $this->getProperty('stupidProperty');
    }


}
