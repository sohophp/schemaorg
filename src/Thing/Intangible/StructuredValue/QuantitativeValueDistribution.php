<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

/**
* A statistical distribution of values.
* @see schema:QuantitativeValueDistribution
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class QuantitativeValueDistribution extends StructuredValue
{
   /**
        * The median value.
        */
    protected $median = null;

   /**
        * The 90th percentile value.
        */
    protected $percentile90 = null;

   /**
        * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
        */
    protected $duration = null;

   /**
        * The 25th percentile value.
        */
    protected $percentile25 = null;

   /**
        * The 10th percentile value.
        */
    protected $percentile10 = null;

   /**
        * The 75th percentile value.
        */
    protected $percentile75 = null;


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
    * @return string|array|mixed
    */
    public function getMedian()
    {
       return $this->getProperty('median');
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
    * @return string|array|mixed
    */
    public function getPercentile90()
    {
       return $this->getProperty('percentile90');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setDuration($value)
    {
        $this->setProperty('duration', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDuration()
    {
       return $this->getProperty('duration');
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
    * @return string|array|mixed
    */
    public function getPercentile25()
    {
       return $this->getProperty('percentile25');
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
    * @return string|array|mixed
    */
    public function getPercentile10()
    {
       return $this->getProperty('percentile10');
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
    * @return string|array|mixed
    */
    public function getPercentile75()
    {
       return $this->getProperty('percentile75');
    }


}
