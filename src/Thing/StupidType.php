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
        * @param array|string|mixed $value
    * @return $this
    */
    public function stupidProperty($value)
    {
        $this->setProperty('stupidProperty', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
