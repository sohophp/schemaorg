<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Service\BroadcastService;

use Sohophp\SchemaOrg\Thing\Intangible\Service\BroadcastService;

/**
* A delivery service through which radio content is provided via broadcast over the air or online.
* @see http://schema.org/RadioBroadcastService
* @package Sohophp\SchemaOrg\Thing\Intangible\Service\BroadcastService

*
*/
class RadioBroadcastService extends BroadcastService
{

    /**
    * The official callsign for the radio broadcast.
    * @param string|array $value
    * @return $this
    * @deprecated use setCallSign
    */
    public function callSign($value)
    {
        $this->setProperty('callSign', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setCallSign($value)
    {
        $this->setProperty('callSign', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCallSign()
    {
       return $this->getProperty('callSign');
    }


}
