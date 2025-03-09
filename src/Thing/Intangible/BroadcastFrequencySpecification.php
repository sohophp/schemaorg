<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* The frequency in MHz and the modulation used for a particular BroadcastService.
* @see schema:BroadcastFrequencySpecification
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class BroadcastFrequencySpecification extends Intangible
{
   /**
        * The modulation (e.g. FM, AM, etc) used by a particular broadcast service.
        */
    protected $broadcastSignalModulation = null;

   /**
        * The frequency in MHz for a particular broadcast.
        */
    protected $broadcastFrequencyValue = null;

   /**
        * The subchannel used for the broadcast.
        */
    protected $broadcastSubChannel = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setBroadcastSignalModulation($value)
    {
        $this->setProperty('broadcastSignalModulation', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBroadcastSignalModulation()
    {
       return $this->getProperty('broadcastSignalModulation');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setBroadcastFrequencyValue($value)
    {
        $this->setProperty('broadcastFrequencyValue', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBroadcastFrequencyValue()
    {
       return $this->getProperty('broadcastFrequencyValue');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setBroadcastSubChannel($value)
    {
        $this->setProperty('broadcastSubChannel', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBroadcastSubChannel()
    {
       return $this->getProperty('broadcastSubChannel');
    }


}
