<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Audience\PeopleAudience;

use Sohophp\SchemaOrg\Thing\Intangible\Audience\PeopleAudience;

/**
* A set of characteristics describing parents, who can be interested in viewing some content.
* @see http://schema.org/ParentAudience
* @package Sohophp\SchemaOrg\Thing\Intangible\Audience\PeopleAudience

*
*/
class ParentAudience extends PeopleAudience
{

    /**
    * Maximal age of the child.
    * @param array|string $value
    * @return $this
    * @deprecated use setChildMaxAge
    */
    public function childMaxAge($value)
    {
        $this->setProperty('childMaxAge', $value);
        return $this;
    }
   /**
    * @param array|string $value
    * @return $this
    */
    public function setChildMaxAge($value)
    {
        $this->setProperty('childMaxAge', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getChildMaxAge()
    {
       return $this->getProperty('childMaxAge');
    }

    /**
    * Minimal age of the child.
    * @param array|string $value
    * @return $this
    * @deprecated use setChildMinAge
    */
    public function childMinAge($value)
    {
        $this->setProperty('childMinAge', $value);
        return $this;
    }
   /**
    * @param array|string $value
    * @return $this
    */
    public function setChildMinAge($value)
    {
        $this->setProperty('childMinAge', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getChildMinAge()
    {
       return $this->getProperty('childMinAge');
    }


}
