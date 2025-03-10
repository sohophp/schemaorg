<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalGuideline;

use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalGuideline;

/**
* A guideline recommendation that is regarded as efficacious and where quality
 * of the data supporting the recommendation is sound.
* @see schema:MedicalGuidelineRecommendation
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalGuideline
*/
class MedicalGuidelineRecommendation extends MedicalGuideline
{


    /**
        * Strength of the guideline's recommendation (e.g. 'class I').
        * @param array|string|mixed $value
    * @return $this
    */
    public function recommendationStrength($value)
    {
        $this->setProperty('recommendationStrength', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setRecommendationStrength($value)
    {
        $this->setProperty('recommendationStrength', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRecommendationStrength()
    {
       return $this->getProperty('recommendationStrength');
    }


}
