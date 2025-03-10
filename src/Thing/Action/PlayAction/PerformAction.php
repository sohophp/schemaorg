<?php
namespace Sohophp\SchemaOrg\Thing\Action\PlayAction;

use Sohophp\SchemaOrg\Thing\Action\PlayAction;
use Sohophp\SchemaOrg\Thing\Organization\LocalBusiness\EntertainmentBusiness;

/**
* The act of participating in performance arts.
* @see http://schema.org/PerformAction
* @package Sohophp\SchemaOrg\Thing\Action\PlayAction
*/
class PerformAction extends PlayAction
{


    /**
        * A sub property of location. The entertainment business where the action
 * occurred.
        * @param EntertainmentBusiness|array|string|mixed $value
    * @return $this
    */
    public function entertainmentBusiness($value)
    {
        $this->setProperty('entertainmentBusiness', $value);
        return $this;
    }

    /**
    * @param EntertainmentBusiness|array|string|mixed $value
    * @return $this
    */
    public function setEntertainmentBusiness($value)
    {
        $this->setProperty('entertainmentBusiness', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEntertainmentBusiness()
    {
       return $this->getProperty('entertainmentBusiness');
    }


}
