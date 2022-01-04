<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Audience;

use Sohophp\SchemaOrg\Thing\Intangible\Audience;

/**
* An EducationalAudience.
* @see http://schema.org/EducationalAudience
* @package Sohophp\SchemaOrg\Thing\Intangible\Audience

*
*/
class EducationalAudience extends Audience
{

    /**
    * An educationalRole of an EducationalAudience.
    * @param string|array $value
    * @return $this
    * @deprecated use setEducationalRole
    */
    public function educationalRole($value)
    {
        $this->setProperty('educationalRole', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setEducationalRole($value)
    {
        $this->setProperty('educationalRole', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getEducationalRole()
    {
       return $this->getProperty('educationalRole');
    }


}
