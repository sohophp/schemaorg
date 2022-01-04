<?php
namespace Sohophp\SchemaOrg\Thing\Place\CivicStructure;

use Sohophp\SchemaOrg\Thing\Place\CivicStructure;

/**
* A movie theater.
* @see http://schema.org/MovieTheater
* @package Sohophp\SchemaOrg\Thing\Place\CivicStructure

*
*/
class MovieTheater extends CivicStructure
{

    /**
    * The number of screens in the movie theater.
    * @param array|string $value
    * @return $this
    * @deprecated use setScreenCount
    */
    public function screenCount($value)
    {
        $this->setProperty('screenCount', $value);
        return $this;
    }
   /**
    * @param array|string $value
    * @return $this
    */
    public function setScreenCount($value)
    {
        $this->setProperty('screenCount', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getScreenCount()
    {
       return $this->getProperty('screenCount');
    }


}
