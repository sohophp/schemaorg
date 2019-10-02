<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\StatisticalPopulation;
use Sohophp\SchemaOrg\Thing\Intangible\Property;

/**
* Instances of the class <a class="localLink" href="http://schema.org/Observation">Observation</a> are used to specify observations about an entity (which may or may not be an instance of a <a class="localLink" href="http://schema.org/StatisticalPopulation">StatisticalPopulation</a>), at a particular time. The principal properties of an <a class="localLink" href="http://schema.org/Observation">Observation</a> are <a class="localLink" href="http://schema.org/observedNode">observedNode</a>, <a class="localLink" href="http://schema.org/measuredProperty">measuredProperty</a>, <a class="localLink" href="http://schema.org/measuredValue">measuredValue</a> (or <a class="localLink" href="http://schema.org/median">median</a>, etc.) and <a class="localLink" href="http://schema.org/observationDate">observationDate</a> (<a class="localLink" href="http://schema.org/measuredProperty">measuredProperty</a> properties can, but need not always, be W3C RDF Data Cube "measure properties", as in the <a href="https://www.w3.org/TR/vocab-data-cube/#dsd-example">lifeExpectancy example</a>).
See also <a class="localLink" href="http://schema.org/StatisticalPopulation">StatisticalPopulation</a>, and the <a href="/docs/data-and-datasets.html">data and datasets</a> overview for more details.
* @see http://schema.org/Observation
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class Observation extends Intangible
{

    /**
    * The observedNode of an <a class="localLink" href="http://schema.org/Observation">Observation</a>, often a <a class="localLink" href="http://schema.org/StatisticalPopulation">StatisticalPopulation</a>.
    * @param StatisticalPopulation $value
    * @return $this
    */
    public function observedNode(?StatisticalPopulation $value)
    {
        $this->setProperty('observedNode', $value);
        return $this;
    }

    /**
    * The measuredValue of an <a class="localLink" href="http://schema.org/Observation">Observation</a>.
    * @param  $value
    * @return $this
    */
    public function measuredValue($value)
    {
        $this->setProperty('measuredValue', $value);
        return $this;
    }

    /**
    * The observationDate of an <a class="localLink" href="http://schema.org/Observation">Observation</a>.
    * @param  $value
    * @return $this
    */
    public function observationDate($value)
    {
        $this->setProperty('observationDate', $value);
        return $this;
    }

    /**
    * A marginOfError for an <a class="localLink" href="http://schema.org/Observation">Observation</a>.
    * @param  $value
    * @return $this
    */
    public function marginOfError($value)
    {
        $this->setProperty('marginOfError', $value);
        return $this;
    }

    /**
    * The measuredProperty of an <a class="localLink" href="http://schema.org/Observation">Observation</a>, either a schema.org property, a property from other RDF-compatible systems e.g. W3C RDF Data Cube, or schema.org extensions such as <a href="https://www.gs1.org/voc/?show=properties">GS1's</a>.
    * @param Property $value
    * @return $this
    */
    public function measuredProperty(?Property $value)
    {
        $this->setProperty('measuredProperty', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Observation','Thing\\Observation');

