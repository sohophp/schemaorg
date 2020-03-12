<?php declare(strict_types=1);
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
    * @param MedicalTest|array $value
    * @return $this
    */
    public function availableTest(?MedicalTest $value)
    {
        $this->setProperty('availableTest', $value);
        return $this;
    }
   /**
    * @param MedicalTest|array $value
    * @return $this
    */
    public function setAvailableTest(?MedicalTest $value)
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


class_alias('Sohophp\\SchemaOrg\\Thing\\Organization\\MedicalOrganization\\DiagnosticLab','Thing\\DiagnosticLab');

