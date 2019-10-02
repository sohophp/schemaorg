<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\MedicalEntity;

use Sohophp\SchemaOrg\Thing\MedicalEntity;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalEvidenceLevel;

/**
* Any recommendation made by a standard society (e.g. ACC/AHA) or consensus statement that denotes how to diagnose and treat a particular condition. Note: this type should be used to tag the actual guideline recommendation; if the guideline recommendation occurs in a larger scholarly article, use MedicalScholarlyArticle to tag the overall article, not this type. Note also: the organization making the recommendation should be captured in the recognizingAuthority base property of MedicalEntity.
* @see http://schema.org/MedicalGuideline
* @package Sohophp\SchemaOrg\Thing\MedicalEntity
*/
class MedicalGuideline extends MedicalEntity
{

    /**
    * Date on which this guideline's recommendation was made.
    * @param  $value
    * @return $this
    */
    public function guidelineDate($value)
    {
        $this->setProperty('guidelineDate', $value);
        return $this;
    }

    /**
    * Strength of evidence of the data used to formulate the guideline (enumerated).
    * @param MedicalEvidenceLevel $value
    * @return $this
    */
    public function evidenceLevel(?MedicalEvidenceLevel $value)
    {
        $this->setProperty('evidenceLevel', $value);
        return $this;
    }

    /**
    * The medical conditions, treatments, etc. that are the subject of the guideline.
    * @param MedicalEntity $value
    * @return $this
    */
    public function guidelineSubject(?MedicalEntity $value)
    {
        $this->setProperty('guidelineSubject', $value);
        return $this;
    }

    /**
    * Source of the data used to formulate the guidance, e.g. RCT, consensus opinion, etc.
    * @param string $value
    * @return $this
    */
    public function evidenceOrigin(?string $value)
    {
        $this->setProperty('evidenceOrigin', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity\\MedicalGuideline','Thing\\MedicalGuideline');

