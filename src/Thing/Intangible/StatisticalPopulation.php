<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\Class;

/**
* A StatisticalPopulation is a set of instances of a certain given type that satisfy some set of constraints. The property <a class="localLink" href="http://schema.org/populationType">populationType</a> is used to specify the type. Any property that can be used on instances of that type can appear on the statistical population. For example, a <a class="localLink" href="http://schema.org/StatisticalPopulation">StatisticalPopulation</a> representing all <a class="localLink" href="http://schema.org/Person">Person</a>s with a <a class="localLink" href="http://schema.org/homeLocation">homeLocation</a> of East Podunk California, would be described by applying the appropriate <a class="localLink" href="http://schema.org/homeLocation">homeLocation</a> and <a class="localLink" href="http://schema.org/populationType">populationType</a> properties to a <a class="localLink" href="http://schema.org/StatisticalPopulation">StatisticalPopulation</a> item that stands for that set of people.
The properties <a class="localLink" href="http://schema.org/numConstraints">numConstraints</a> and <a class="localLink" href="http://schema.org/constrainingProperties">constrainingProperties</a> are used to specify which of the populations properties are used to specify the population. Note that the sense of "population" used here is the general sense of a statistical
population, and does not imply that the population consists of people. For example, a <a class="localLink" href="http://schema.org/populationType">populationType</a> of <a class="localLink" href="http://schema.org/Event">Event</a> or <a class="localLink" href="http://schema.org/NewsArticle">NewsArticle</a> could be used. See also <a class="localLink" href="http://schema.org/Observation">Observation</a>, and the <a href="/docs/data-and-datasets.html">data and datasets</a> overview for more details.
* @see http://schema.org/StatisticalPopulation
* @package Sohophp\SchemaOrg\Thing\Intangible

*
*/
class StatisticalPopulation extends Intangible
{

    /**
    * Indicates a property used as a constraint to define a <a class="localLink" href="http://schema.org/StatisticalPopulation">StatisticalPopulation</a> with respect to the set of entities
  corresponding to an indicated type (via <a class="localLink" href="http://schema.org/populationType">populationType</a>).
    * @param int|array $value
    * @return $this
    */
    public function constrainingProperty(?int $value)
    {
        $this->setProperty('constrainingProperty', $value);
        return $this;
    }
   /**
    * @param int|array $value
    * @return $this
    */
    public function setConstrainingProperty(?int $value)
    {
        $this->setProperty('constrainingProperty', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getConstrainingProperty()
    {
       return $this->getProperty('constrainingProperty');
    }

    /**
    * Indicates the number of constraints (not counting <a class="localLink" href="http://schema.org/populationType">populationType</a>) defined for a particular <a class="localLink" href="http://schema.org/StatisticalPopulation">StatisticalPopulation</a>. This helps applications understand if they have access to a sufficiently complete description of a <a class="localLink" href="http://schema.org/StatisticalPopulation">StatisticalPopulation</a>.
    * @param int|array $value
    * @return $this
    */
    public function numConstraints(?int $value)
    {
        $this->setProperty('numConstraints', $value);
        return $this;
    }
   /**
    * @param int|array $value
    * @return $this
    */
    public function setNumConstraints(?int $value)
    {
        $this->setProperty('numConstraints', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getNumConstraints()
    {
       return $this->getProperty('numConstraints');
    }

    /**
    * Indicates the populationType common to all members of a <a class="localLink" href="http://schema.org/StatisticalPopulation">StatisticalPopulation</a>.
    * @param Class|array $value
    * @return $this
    */
    public function populationType(?Class $value)
    {
        $this->setProperty('populationType', $value);
        return $this;
    }
   /**
    * @param Class|array $value
    * @return $this
    */
    public function setPopulationType(?Class $value)
    {
        $this->setProperty('populationType', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPopulationType()
    {
       return $this->getProperty('populationType');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\StatisticalPopulation','Thing\\StatisticalPopulation');

