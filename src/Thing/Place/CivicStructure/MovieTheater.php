<?php declare(strict_types=1);
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
    * @param  $value
    * @return $this
    */
    public function screenCount($value)
    {
        $this->setProperty('screenCount', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Place\\CivicStructure\\MovieTheater','Thing\\MovieTheater');

