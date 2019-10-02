<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue;

/**
* The frequency in MHz and the modulation used for a particular BroadcastService.
* @see http://schema.org/BroadcastFrequencySpecification
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class BroadcastFrequencySpecification extends Intangible
{

    /**
    * The frequency in MHz for a particular broadcast.
    * @param QuantitativeValue $value
    * @return $this
    */
    public function broadcastFrequencyValue(? $value)
    {
        $this->setProperty('broadcastFrequencyValue', $value);
        return $this;
    }

    /**
    * The subchannel used for the broadcast.
    * @param string $value
    * @return $this
    */
    public function broadcastSubChannel(?string $value)
    {
        $this->setProperty('broadcastSubChannel', $value);
        return $this;
    }

    /**
    * The modulation (e.g. FM, AM, etc) used by a particular broadcast service
    * @param QualitativeValue|string $value
    * @return $this
    */
    public function broadcastSignalModulation($value)
    {
        $this->setProperty('broadcastSignalModulation', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\BroadcastFrequencySpecification','Thing\\BroadcastFrequencySpecification');

