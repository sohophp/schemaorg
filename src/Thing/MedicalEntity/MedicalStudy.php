<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity;

use Sohophp\SchemaOrg\Thing\MedicalEntity;

/**
* A medical study is an umbrella type covering all kinds of research studies
 * relating to human medicine or health, including observational studies and
 * interventional trials and registries, randomized, controlled or not. When the
 * specific type of study is known, use one of the extensions of this type, such
 * as MedicalTrial or MedicalObservationalStudy. Also, note that this type
 * should be used to mark up data that describes the study itself; to tag an
 * article that publishes the results of a study, use MedicalScholarlyArticle.
 * Note: use the code property of MedicalEntity to store study IDs, e.g.
 * clinicaltrials.gov ID.
* @see schema:MedicalStudy
* @package Sohophp\SchemaOrg\Thing\MedicalEntity
*/
class MedicalStudy extends MedicalEntity
{


    /**
        * Specifying the health condition(s) of a patient, medical study, or other
 * target audience.
        * @param array|string|mixed $value
    * @return $this
    */
    public function healthCondition($value)
    {
        $this->setProperty('healthCondition', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setHealthCondition($value)
    {
        $this->setProperty('healthCondition', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHealthCondition()
    {
       return $this->getProperty('healthCondition');
    }


    /**
        * A person or organization that supports a thing through a pledge, promise, or
 * financial contribution. E.g. a sponsor of a Medical Study or a corporate
 * sponsor of an event.
        * @param array|string|mixed $value
    * @return $this
    */
    public function sponsor($value)
    {
        $this->setProperty('sponsor', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setSponsor($value)
    {
        $this->setProperty('sponsor', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSponsor()
    {
       return $this->getProperty('sponsor');
    }


    /**
        * A subject of the study, i.e. one of the medical conditions, therapies,
 * devices, drugs, etc. investigated by the study.
        * @param array|string|mixed $value
    * @return $this
    */
    public function studySubject($value)
    {
        $this->setProperty('studySubject', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setStudySubject($value)
    {
        $this->setProperty('studySubject', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getStudySubject()
    {
       return $this->getProperty('studySubject');
    }


    /**
        * The status of the study (enumerated).
        * @param array|string|mixed $value
    * @return $this
    */
    public function status($value)
    {
        $this->setProperty('status', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setStatus($value)
    {
        $this->setProperty('status', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getStatus()
    {
       return $this->getProperty('status');
    }


    /**
        * The location in which the study is taking/took place.
        * @param array|string|mixed $value
    * @return $this
    */
    public function studyLocation($value)
    {
        $this->setProperty('studyLocation', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setStudyLocation($value)
    {
        $this->setProperty('studyLocation', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getStudyLocation()
    {
       return $this->getProperty('studyLocation');
    }


}
