<?php declare(strict_types=1);
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
    * A sub property of location. The entertainment business where the action occurred.
    * @param EntertainmentBusiness $value
    * @return $this
    */
    public function entertainmentBusiness(?EntertainmentBusiness $value)
    {
        $this->setProperty('entertainmentBusiness', $value);
        return $this;
    }


}

