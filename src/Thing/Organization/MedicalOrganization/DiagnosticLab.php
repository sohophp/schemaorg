<?php
namespace Sohophp\SchemaOrg\Thing\Organization\MedicalOrganization;

use Sohophp\SchemaOrg\Thing\Organization\MedicalOrganization;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalTest;

/**
* A medical laboratory that offers on-site or off-site diagnostic services.
* @see http://schema.org/DiagnosticLab
* @package Sohophp\SchemaOrg\Thing\Organization\MedicalOrganization

*
*/
class DiagnosticLab extends MedicalOrganization
{

    /**
    * A diagnostic test or procedure offered by this lab.
    * @param MedicalTest|array|string $value
    * @return $this
    * @deprecated use setAvailableTest
    */
    public function availableTest($value)
    {
        $this->setProperty('availableTest', $value);
        return $this;
    }
   /**
    * @param MedicalTest|array|string $value
    * @return $this
    */
    public function setAvailableTest($value)
    {
        $this->setProperty('availableTest', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAvailableTest()
    {
       return $this->getProperty('availableTest');
    }


}
