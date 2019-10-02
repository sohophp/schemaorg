<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalGuideline;

use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalGuideline;

/**
* A guideline recommendation that is regarded as efficacious and where quality of the data supporting the recommendation is sound.
* @see http://schema.org/MedicalGuidelineRecommendation
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalGuideline
*/
class MedicalGuidelineRecommendation extends MedicalGuideline
{

    /**
    * Strength of the guideline's recommendation (e.g. 'class I').
    * @param string $value
    * @return $this
    */
    public function recommendationStrength(?string $value)
    {
        $this->setProperty('recommendationStrength', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity\\MedicalGuideline\\MedicalGuidelineRecommendation','Thing\\MedicalGuidelineRecommendation');

