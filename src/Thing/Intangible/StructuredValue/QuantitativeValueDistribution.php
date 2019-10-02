<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Duration;

/**
* A statistical distribution of values.
* @see http://schema.org/QuantitativeValueDistribution
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class QuantitativeValueDistribution extends StructuredValue
{

    /**
    * The 10th percentile value.
    * @param  $value
    * @return $this
    */
    public function percentile10($value)
    {
        $this->setProperty('percentile10', $value);
        return $this;
    }

    /**
    * The 25th percentile value.
    * @param  $value
    * @return $this
    */
    public function percentile25($value)
    {
        $this->setProperty('percentile25', $value);
        return $this;
    }

    /**
    * The median value.
    * @param  $value
    * @return $this
    */
    public function median($value)
    {
        $this->setProperty('median', $value);
        return $this;
    }

    /**
    * The 75th percentile value.
    * @param  $value
    * @return $this
    */
    public function percentile75($value)
    {
        $this->setProperty('percentile75', $value);
        return $this;
    }

    /**
    * The duration of the item (movie, audio recording, event, etc.) in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 date format</a>.
    * @param Duration $value
    * @return $this
    */
    public function duration(?Duration $value)
    {
        $this->setProperty('duration', $value);
        return $this;
    }

    /**
    * The 90th percentile value.
    * @param  $value
    * @return $this
    */
    public function percentile90($value)
    {
        $this->setProperty('percentile90', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\StructuredValue\\QuantitativeValueDistribution','Thing\\QuantitativeValueDistribution');

