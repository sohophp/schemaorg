<?php
namespace Sohophp\SchemaOrg\Thing\Organization\MedicalOrganization;

use Sohophp\SchemaOrg\Thing\Organization\MedicalOrganization;

/**
* A medical laboratory that offers on-site or off-site diagnostic services.
* @see schema:DiagnosticLab
* @package Sohophp\SchemaOrg\Thing\Organization\MedicalOrganization
*/
class DiagnosticLab extends MedicalOrganization
{
   /**
        * A diagnostic test or procedure offered by this lab.
        */
    protected $availableTest = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setAvailableTest($value)
    {
        $this->setProperty('availableTest', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAvailableTest()
    {
       return $this->getProperty('availableTest');
    }


}
