<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\SoftwareApplication;

use Sohophp\SchemaOrg\Thing\CreativeWork\SoftwareApplication;

/**
* A software application designed specifically to work well on a mobile device such as a telephone.
* @see http://schema.org/MobileApplication
* @package Sohophp\SchemaOrg\Thing\CreativeWork\SoftwareApplication

*
*/
class MobileApplication extends SoftwareApplication
{

    /**
    * Specifies specific carrier(s) requirements for the application (e.g. an application may only work on a specific carrier network).
    * @param string|array $value
    * @return $this
    * @deprecated use setCarrierRequirements
    */
    public function carrierRequirements($value)
    {
        $this->setProperty('carrierRequirements', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setCarrierRequirements($value)
    {
        $this->setProperty('carrierRequirements', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCarrierRequirements()
    {
       return $this->getProperty('carrierRequirements');
    }


}
