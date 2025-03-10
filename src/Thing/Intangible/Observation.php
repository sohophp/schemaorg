<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\StatisticalPopulation;
use Sohophp\SchemaOrg\Thing\Intangible\Property;

/**
* Instances of the class [[Observation]] are used to specify observations about
 * an entity (which may or may not be an instance of a
 * [[StatisticalPopulation]]), at a particular time. The principal properties of
 * an [[Observation]] are [[observedNode]], [[measuredProperty]],
 * [[measuredValue]] (or [[median]], etc.) and [[observationDate]]
 * ([[measuredProperty]] properties can, but need not always, be W3C RDF Data
 * Cube "measure properties", as in the [lifeExpectancy
 * example](https://www.w3.org/TR/vocab-data-cube/#dsd-example)).
 * See also [[StatisticalPopulation]], and the [data and
 * datasets](/docs/data-and-datasets.html) overview for more details.
* @see http://schema.org/Observation
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class Observation extends Intangible
{


    /**
        * The observedNode of an [[Observation]], often a [[StatisticalPopulation]].
        * @param StatisticalPopulation|array|string|mixed $value
    * @return $this
    */
    public function observedNode($value)
    {
        $this->setProperty('observedNode', $value);
        return $this;
    }

    /**
    * @param StatisticalPopulation|array|string|mixed $value
    * @return $this
    */
    public function setObservedNode($value)
    {
        $this->setProperty('observedNode', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getObservedNode()
    {
       return $this->getProperty('observedNode');
    }


    /**
        * The measuredValue of an [[Observation]].
        * @param array|string|mixed $value
    * @return $this
    */
    public function measuredValue($value)
    {
        $this->setProperty('measuredValue', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setMeasuredValue($value)
    {
        $this->setProperty('measuredValue', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMeasuredValue()
    {
       return $this->getProperty('measuredValue');
    }


    /**
        * The observationDate of an [[Observation]].
        * @param array|string|mixed $value
    * @return $this
    */
    public function observationDate($value)
    {
        $this->setProperty('observationDate', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setObservationDate($value)
    {
        $this->setProperty('observationDate', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getObservationDate()
    {
       return $this->getProperty('observationDate');
    }


    /**
        * A marginOfError for an [[Observation]].
        * @param array|string|mixed $value
    * @return $this
    */
    public function marginOfError($value)
    {
        $this->setProperty('marginOfError', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setMarginOfError($value)
    {
        $this->setProperty('marginOfError', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMarginOfError()
    {
       return $this->getProperty('marginOfError');
    }


    /**
        * The measuredProperty of an [[Observation]], either a schema.org property, a
 * property from other RDF-compatible systems e.g. W3C RDF Data Cube, or
 * schema.org extensions such as <a
 * href="https://www.gs1.org/voc/?show=properties">GS1's</a>.
        * @param Property|array|string|mixed $value
    * @return $this
    */
    public function measuredProperty($value)
    {
        $this->setProperty('measuredProperty', $value);
        return $this;
    }

    /**
    * @param Property|array|string|mixed $value
    * @return $this
    */
    public function setMeasuredProperty($value)
    {
        $this->setProperty('measuredProperty', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMeasuredProperty()
    {
       return $this->getProperty('measuredProperty');
    }


}
