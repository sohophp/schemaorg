<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\Class;

/**
* A StatisticalPopulation is a set of instances of a certain given type that
 * satisfy some set of constraints. The property [[populationType]] is used to
 * specify the type. Any property that can be used on instances of that type can
 * appear on the statistical population. For example, a
 * [[StatisticalPopulation]] representing all [[Person]]s with a
 * [[homeLocation]] of East Podunk California, would be described by applying
 * the appropriate [[homeLocation]] and [[populationType]] properties to a
 * [[StatisticalPopulation]] item that stands for that set of people.
 * The properties [[numConstraints]] and [[constrainingProperties]] are used to
 * specify which of the populations properties are used to specify the
 * population. Note that the sense of "population" used here is the general
 * sense of a statistical
 * population, and does not imply that the population consists of people. For
 * example, a [[populationType]] of [[Event]] or [[NewsArticle]] could be used.
 * See also [[Observation]], and the [data and
 * datasets](/docs/data-and-datasets.html) overview for more details.
* @see http://schema.org/StatisticalPopulation
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class StatisticalPopulation extends Intangible
{


    /**
        * Indicates a property used as a constraint to define a
 * [[StatisticalPopulation]] with respect to the set of entities
 *   corresponding to an indicated type (via [[populationType]]).
        * @param int|array|string|mixed $value
    * @return $this
    */
    public function constrainingProperty($value)
    {
        $this->setProperty('constrainingProperty', $value);
        return $this;
    }

    /**
    * @param int|array|string|mixed $value
    * @return $this
    */
    public function setConstrainingProperty($value)
    {
        $this->setProperty('constrainingProperty', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getConstrainingProperty()
    {
       return $this->getProperty('constrainingProperty');
    }


    /**
        * Indicates the number of constraints (not counting [[populationType]]) defined
 * for a particular [[StatisticalPopulation]]. This helps applications
 * understand if they have access to a sufficiently complete description of a
 * [[StatisticalPopulation]].
        * @param int|array|string|mixed $value
    * @return $this
    */
    public function numConstraints($value)
    {
        $this->setProperty('numConstraints', $value);
        return $this;
    }

    /**
    * @param int|array|string|mixed $value
    * @return $this
    */
    public function setNumConstraints($value)
    {
        $this->setProperty('numConstraints', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNumConstraints()
    {
       return $this->getProperty('numConstraints');
    }


    /**
        * Indicates the populationType common to all members of a
 * [[StatisticalPopulation]].
        * @param Class|array|string|mixed $value
    * @return $this
    */
    public function populationType($value)
    {
        $this->setProperty('populationType', $value);
        return $this;
    }

    /**
    * @param Class|array|string|mixed $value
    * @return $this
    */
    public function setPopulationType($value)
    {
        $this->setProperty('populationType', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPopulationType()
    {
       return $this->getProperty('populationType');
    }


}
