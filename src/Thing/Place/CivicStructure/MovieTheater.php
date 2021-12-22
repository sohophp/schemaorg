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
    * @param |array $value
    * @return $this
    */
    public function screenCount($value)
    {
        $this->setProperty('screenCount', $value);
        return $this;
    }
   /**
    * @param |array $value
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


class_alias('Sohophp\\SchemaOrg\\Thing\\Place\\CivicStructure\\MovieTheater','Thing\\MovieTheater');

