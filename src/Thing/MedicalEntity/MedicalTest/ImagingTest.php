<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalTest;

use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalTest;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalImagingTechnique;

/**
* Any medical imaging modality typically used for diagnostic purposes.
* @see http://schema.org/ImagingTest
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalTest

*
*/
class ImagingTest extends MedicalTest
{

    /**
    * Imaging technique used.
    * @param MedicalImagingTechnique|array $value
    * @return $this
    */
    public function imagingTechnique(?MedicalImagingTechnique $value)
    {
        $this->setProperty('imagingTechnique', $value);
        return $this;
    }
   /**
    * @param MedicalImagingTechnique|array $value
    * @return $this
    */
    public function setImagingTechnique(?MedicalImagingTechnique $value)
    {
        $this->setProperty('imagingTechnique', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getImagingTechnique()
    {
       return $this->getProperty('imagingTechnique');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity\\MedicalTest\\ImagingTest','Thing\\ImagingTest');

