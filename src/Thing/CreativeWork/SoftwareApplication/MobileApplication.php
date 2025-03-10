<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\SoftwareApplication;

use Sohophp\SchemaOrg\Thing\CreativeWork\SoftwareApplication;

/**
* A software application designed specifically to work well on a mobile device
 * such as a telephone.
* @see schema:MobileApplication
* @package Sohophp\SchemaOrg\Thing\CreativeWork\SoftwareApplication
*/
class MobileApplication extends SoftwareApplication
{


    /**
        * Specifies specific carrier(s) requirements for the application (e.g. an
 * application may only work on a specific carrier network).
        * @param array|string|mixed $value
    * @return $this
    */
    public function carrierRequirements($value)
    {
        $this->setProperty('carrierRequirements', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setCarrierRequirements($value)
    {
        $this->setProperty('carrierRequirements', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCarrierRequirements()
    {
       return $this->getProperty('carrierRequirements');
    }


}
