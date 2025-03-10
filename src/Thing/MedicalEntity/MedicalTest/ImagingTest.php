<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalTest;

use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalTest;

/**
* Any medical imaging modality typically used for diagnostic purposes.
* @see schema:ImagingTest
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalTest
*/
class ImagingTest extends MedicalTest
{


    /**
        * Imaging technique used.
        * @param array|string|mixed $value
    * @return $this
    */
    public function imagingTechnique($value)
    {
        $this->setProperty('imagingTechnique', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setImagingTechnique($value)
    {
        $this->setProperty('imagingTechnique', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getImagingTechnique()
    {
       return $this->getProperty('imagingTechnique');
    }


}
