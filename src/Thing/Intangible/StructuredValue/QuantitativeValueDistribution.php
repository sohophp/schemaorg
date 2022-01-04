<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Duration;

/**
* A statistical distribution of values.
* @see http://schema.org/QuantitativeValueDistribution
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue

*
*/
class QuantitativeValueDistribution extends StructuredValue
{

    /**
    * The 10th percentile value.
    * @param array|string $value
    * @return $this
    * @deprecated use setPercentile10
    */
    public function percentile10($value)
    {
        $this->setProperty('percentile10', $value);
        return $this;
    }
   /**
    * @param array|string $value
    * @return $this
    */
    public function setPercentile10($value)
    {
        $this->setProperty('percentile10', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPercentile10()
    {
       return $this->getProperty('percentile10');
    }

    /**
    * The 25th percentile value.
    * @param array|string $value
    * @return $this
    * @deprecated use setPercentile25
    */
    public function percentile25($value)
    {
        $this->setProperty('percentile25', $value);
        return $this;
    }
   /**
    * @param array|string $value
    * @return $this
    */
    public function setPercentile25($value)
    {
        $this->setProperty('percentile25', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPercentile25()
    {
       return $this->getProperty('percentile25');
    }

    /**
    * The median value.
    * @param array|string $value
    * @return $this
    * @deprecated use setMedian
    */
    public function median($value)
    {
        $this->setProperty('median', $value);
        return $this;
    }
   /**
    * @param array|string $value
    * @return $this
    */
    public function setMedian($value)
    {
        $this->setProperty('median', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getMedian()
    {
       return $this->getProperty('median');
    }

    /**
    * The 75th percentile value.
    * @param array|string $value
    * @return $this
    * @deprecated use setPercentile75
    */
    public function percentile75($value)
    {
        $this->setProperty('percentile75', $value);
        return $this;
    }
   /**
    * @param array|string $value
    * @return $this
    */
    public function setPercentile75($value)
    {
        $this->setProperty('percentile75', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPercentile75()
    {
       return $this->getProperty('percentile75');
    }

    /**
    * The duration of the item (movie, audio recording, event, etc.) in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 date format</a>.
    * @param Duration|array|string $value
    * @return $this
    * @deprecated use setDuration
    */
    public function duration($value)
    {
        $this->setProperty('duration', $value);
        return $this;
    }
   /**
    * @param Duration|array|string $value
    * @return $this
    */
    public function setDuration($value)
    {
        $this->setProperty('duration', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDuration()
    {
       return $this->getProperty('duration');
    }

    /**
    * The 90th percentile value.
    * @param array|string $value
    * @return $this
    * @deprecated use setPercentile90
    */
    public function percentile90($value)
    {
        $this->setProperty('percentile90', $value);
        return $this;
    }
   /**
    * @param array|string $value
    * @return $this
    */
    public function setPercentile90($value)
    {
        $this->setProperty('percentile90', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPercentile90()
    {
       return $this->getProperty('percentile90');
    }


}
