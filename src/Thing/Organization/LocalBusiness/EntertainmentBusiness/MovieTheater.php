<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Organization\LocalBusiness\EntertainmentBusiness;

use Sohophp\SchemaOrg\Thing\Organization\LocalBusiness\EntertainmentBusiness;

/**
* A movie theater.
* @see http://schema.org/MovieTheater
* @package Sohophp\SchemaOrg\Thing\Organization\LocalBusiness\EntertainmentBusiness
*/
class MovieTheater extends EntertainmentBusiness
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


class_alias('Sohophp\\SchemaOrg\\Thing\\Organization\\LocalBusiness\\EntertainmentBusiness\\MovieTheater','Thing\\MovieTheater');

