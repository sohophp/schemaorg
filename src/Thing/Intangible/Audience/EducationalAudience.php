<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Audience;

use Sohophp\SchemaOrg\Thing\Intangible\Audience;

/**
* An EducationalAudience.
* @see http://schema.org/EducationalAudience
* @package Sohophp\SchemaOrg\Thing\Intangible\Audience
*/
class EducationalAudience extends Audience
{


    /**
        * An educationalRole of an EducationalAudience.
        * @param string|array|mixed $value
    * @return $this
    */
    public function educationalRole($value)
    {
        $this->setProperty('educationalRole', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setEducationalRole($value)
    {
        $this->setProperty('educationalRole', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEducationalRole()
    {
       return $this->getProperty('educationalRole');
    }


}
