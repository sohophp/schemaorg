<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalTest;

use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalTest;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalImagingTechnique;

/**
* Any medical imaging modality typically used for diagnostic purposes.
* @see http://schema.org/ImagingTest
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalTest
*/
class ImagingTest extends MedicalTest
{

    /**
    * Imaging technique used.
    * @param MedicalImagingTechnique $value
    * @return $this
    */
    public function imagingTechnique(?MedicalImagingTechnique $value)
    {
        $this->setProperty('imagingTechnique', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity\\MedicalTest\\ImagingTest','Thing\\ImagingTest');

