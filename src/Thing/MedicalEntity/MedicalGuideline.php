<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity;

use Sohophp\SchemaOrg\Thing\MedicalEntity;

/**
* Any recommendation made by a standard society (e.g. ACC/AHA) or consensus statement that denotes how to diagnose and treat a particular condition. Note: this type should be used to tag the actual guideline recommendation; if the guideline recommendation occurs in a larger scholarly article, use MedicalScholarlyArticle to tag the overall article, not this type. Note also: the organization making the recommendation should be captured in the recognizingAuthority base property of MedicalEntity.
* @see schema:MedicalGuideline
* @package Sohophp\SchemaOrg\Thing\MedicalEntity
*/
class MedicalGuideline extends MedicalEntity
{
   /**
        * Strength of evidence of the data used to formulate the guideline (enumerated).
        */
    protected $evidenceLevel = null;

   /**
        * Source of the data used to formulate the guidance, e.g. RCT, consensus opinion, etc.
        */
    protected $evidenceOrigin = null;

   /**
        * The medical conditions, treatments, etc. that are the subject of the guideline.
        */
    protected $guidelineSubject = null;

   /**
        * Date on which this guideline's recommendation was made.
        */
    protected $guidelineDate = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setEvidenceLevel($value)
    {
        $this->setProperty('evidenceLevel', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEvidenceLevel()
    {
       return $this->getProperty('evidenceLevel');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setEvidenceOrigin($value)
    {
        $this->setProperty('evidenceOrigin', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEvidenceOrigin()
    {
       return $this->getProperty('evidenceOrigin');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setGuidelineSubject($value)
    {
        $this->setProperty('guidelineSubject', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGuidelineSubject()
    {
       return $this->getProperty('guidelineSubject');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setGuidelineDate($value)
    {
        $this->setProperty('guidelineDate', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGuidelineDate()
    {
       return $this->getProperty('guidelineDate');
    }


}
