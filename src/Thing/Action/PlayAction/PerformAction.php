<?php
namespace Sohophp\SchemaOrg\Thing\Action\PlayAction;

use Sohophp\SchemaOrg\Thing\Action\PlayAction;

/**
* The act of participating in performance arts.
* @see schema:PerformAction
* @package Sohophp\SchemaOrg\Thing\Action\PlayAction
*/
class PerformAction extends PlayAction
{
   /**
        * A sub property of location. The entertainment business where the action occurred.
        */
    protected $entertainmentBusiness = null;


    /**
    * @param array|string $value
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
