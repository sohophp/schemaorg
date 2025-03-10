<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue;

/**
* The frequency in MHz and the modulation used for a particular
 * BroadcastService.
* @see http://schema.org/BroadcastFrequencySpecification
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class BroadcastFrequencySpecification extends Intangible
{


    /**
        * The frequency in MHz for a particular broadcast.
        * @param QuantitativeValue|array|string|mixed $value
    * @return $this
    */
    public function broadcastFrequencyValue($value)
    {
        $this->setProperty('broadcastFrequencyValue', $value);
        return $this;
    }

    /**
    * @param QuantitativeValue|array|string|mixed $value
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
        * The subchannel used for the broadcast.
        * @param string|array|mixed $value
    * @return $this
    */
    public function broadcastSubChannel($value)
    {
        $this->setProperty('broadcastSubChannel', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
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


    /**
        * The modulation (e.g. FM, AM, etc) used by a particular broadcast service
        * @param QualitativeValue|string|array|mixed $value
    * @return $this
    */
    public function broadcastSignalModulation($value)
    {
        $this->setProperty('broadcastSignalModulation', $value);
        return $this;
    }

    /**
    * @param QualitativeValue|string|array|mixed $value
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


}
