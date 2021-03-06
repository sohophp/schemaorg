<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue;

/**
* The frequency in MHz and the modulation used for a particular BroadcastService.
* @see http://schema.org/BroadcastFrequencySpecification
* @package Sohophp\SchemaOrg\Thing\Intangible

*
*/
class BroadcastFrequencySpecification extends Intangible
{

    /**
    * The frequency in MHz for a particular broadcast.
    * @param QuantitativeValue|array $value
    * @return $this
    */
    public function broadcastFrequencyValue(?QuantitativeValue $value)
    {
        $this->setProperty('broadcastFrequencyValue', $value);
        return $this;
    }
   /**
    * @param QuantitativeValue|array $value
    * @return $this
    */
    public function setBroadcastFrequencyValue(?QuantitativeValue $value)
    {
        $this->setProperty('broadcastFrequencyValue', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getBroadcastFrequencyValue()
    {
       return $this->getProperty('broadcastFrequencyValue');
    }

    /**
    * The subchannel used for the broadcast.
    * @param string|array $value
    * @return $this
    */
    public function broadcastSubChannel(?string $value)
    {
        $this->setProperty('broadcastSubChannel', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setBroadcastSubChannel(?string $value)
    {
        $this->setProperty('broadcastSubChannel', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getBroadcastSubChannel()
    {
       return $this->getProperty('broadcastSubChannel');
    }

    /**
    * The modulation (e.g. FM, AM, etc) used by a particular broadcast service
    * @param QualitativeValue|string|array $value
    * @return $this
    */
    public function broadcastSignalModulation($value)
    {
        $this->setProperty('broadcastSignalModulation', $value);
        return $this;
    }
   /**
    * @param QualitativeValue|string|array $value
    * @return $this
    */
    public function setBroadcastSignalModulation($value)
    {
        $this->setProperty('broadcastSignalModulation', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getBroadcastSignalModulation()
    {
       return $this->getProperty('broadcastSignalModulation');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\BroadcastFrequencySpecification','Thing\\BroadcastFrequencySpecification');

