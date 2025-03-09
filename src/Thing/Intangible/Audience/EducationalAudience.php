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
        */
    protected $educationalRole = null;


    /**
    * @param array|string $value
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
