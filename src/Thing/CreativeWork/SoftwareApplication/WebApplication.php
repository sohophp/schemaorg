<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\SoftwareApplication;

use Sohophp\SchemaOrg\Thing\CreativeWork\SoftwareApplication;

/**
* Web applications.
* @see schema:WebApplication
* @package Sohophp\SchemaOrg\Thing\CreativeWork\SoftwareApplication
*/
class WebApplication extends SoftwareApplication
{


    /**
        * Specifies browser requirements in human-readable text. For example, 'requires
 * HTML5 support'.
        * @param array|string|mixed $value
    * @return $this
    */
    public function browserRequirements($value)
    {
        $this->setProperty('browserRequirements', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setBrowserRequirements($value)
    {
        $this->setProperty('browserRequirements', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBrowserRequirements()
    {
       return $this->getProperty('browserRequirements');
    }


}
