<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible\Audience\PeopleAudience;

use Sohophp\SchemaOrg\Thing\Intangible\Audience\PeopleAudience;

/**
* A set of characteristics describing parents, who can be interested in viewing some content.
* @see http://schema.org/ParentAudience
* @package Sohophp\SchemaOrg\Thing\Intangible\Audience\PeopleAudience
*/
class ParentAudience extends PeopleAudience
{

    /**
    * Maximal age of the child.
    * @param  $value
    * @return $this
    */
    public function childMaxAge($value)
    {
        $this->setProperty('childMaxAge', $value);
        return $this;
    }

    /**
    * Minimal age of the child.
    * @param  $value
    * @return $this
    */
    public function childMinAge($value)
    {
        $this->setProperty('childMinAge', $value);
        return $this;
    }


}

