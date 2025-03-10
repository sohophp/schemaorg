<?php
namespace Sohophp\SchemaOrg\Thing\Place\CivicStructure;

use Sohophp\SchemaOrg\Thing\Place\CivicStructure;

/**
* A movie theater.
* @see http://schema.org/MovieTheater
* @package Sohophp\SchemaOrg\Thing\Place\CivicStructure
*/
class MovieTheater extends CivicStructure
{


    /**
        * The number of screens in the movie theater.
        * @param array|string|mixed $value
    * @return $this
    */
    public function screenCount($value)
    {
        $this->setProperty('screenCount', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setScreenCount($value)
    {
        $this->setProperty('screenCount', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getScreenCount()
    {
       return $this->getProperty('screenCount');
    }


}
