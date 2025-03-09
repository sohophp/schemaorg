<?php
namespace Sohophp\SchemaOrg\Thing\Place\LocalBusiness\EntertainmentBusiness;

use Sohophp\SchemaOrg\Thing\Place\LocalBusiness\EntertainmentBusiness;

/**
* A movie theater.
* @see schema:MovieTheater
* @package Sohophp\SchemaOrg\Thing\Place\LocalBusiness\EntertainmentBusiness
*/
class MovieTheater extends EntertainmentBusiness
{
   /**
        * The number of screens in the movie theater.
        */
    protected $screenCount = null;


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
    * @return string|array|mixed
    */
    public function getScreenCount()
    {
       return $this->getProperty('screenCount');
    }


}
