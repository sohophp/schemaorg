<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Audience\PeopleAudience;

use Sohophp\SchemaOrg\Thing\Intangible\Audience\PeopleAudience;

/**
* A set of characteristics describing parents, who can be interested in viewing
 * some content.
* @see http://schema.org/ParentAudience
* @package Sohophp\SchemaOrg\Thing\Intangible\Audience\PeopleAudience
*/
class ParentAudience extends PeopleAudience
{


    /**
        * Maximal age of the child.
        * @param array|string|mixed $value
    * @return $this
    */
    public function childMaxAge($value)
    {
        $this->setProperty('childMaxAge', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setChildMaxAge($value)
    {
        $this->setProperty('childMaxAge', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getChildMaxAge()
    {
       return $this->getProperty('childMaxAge');
    }


    /**
        * Minimal age of the child.
        * @param array|string|mixed $value
    * @return $this
    */
    public function childMinAge($value)
    {
        $this->setProperty('childMinAge', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setChildMinAge($value)
    {
        $this->setProperty('childMinAge', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getChildMinAge()
    {
       return $this->getProperty('childMinAge');
    }


}
