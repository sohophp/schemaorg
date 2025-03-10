<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Audience;

use Sohophp\SchemaOrg\Thing\Intangible\Audience;

/**
* An EducationalAudience.
* @see schema:EducationalAudience
* @package Sohophp\SchemaOrg\Thing\Intangible\Audience
*/
class EducationalAudience extends Audience
{


    /**
        * An educationalRole of an EducationalAudience.
        * @param array|string|mixed $value
    * @return $this
    */
    public function educationalRole($value)
    {
        $this->setProperty('educationalRole', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
