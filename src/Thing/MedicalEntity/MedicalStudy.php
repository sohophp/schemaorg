<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\MedicalEntity;

use Sohophp\SchemaOrg\Thing\MedicalEntity;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\EventStatusType;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalStudyStatus;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Organization;

/**
* A medical study is an umbrella type covering all kinds of research studies relating to human medicine or health, including observational studies and interventional trials and registries, randomized, controlled or not. When the specific type of study is known, use one of the extensions of this type, such as MedicalTrial or MedicalObservationalStudy. Also, note that this type should be used to mark up data that describes the study itself; to tag an article that publishes the results of a study, use MedicalScholarlyArticle. Note: use the code property of MedicalEntity to store study IDs, e.g. clinicaltrials.gov ID.
* @see http://schema.org/MedicalStudy
* @package Sohophp\SchemaOrg\Thing\MedicalEntity
*/
class MedicalStudy extends MedicalEntity
{

    /**
    * A subject of the study, i.e. one of the medical conditions, therapies, devices, drugs, etc. investigated by the study.
    * @param MedicalEntity $value
    * @return $this
    */
    public function studySubject(?MedicalEntity $value)
    {
        $this->setProperty('studySubject', $value);
        return $this;
    }

    /**
    * Any characteristics of the population used in the study, e.g. 'males under 65'.
    * @param string $value
    * @return $this
    */
    public function population(?string $value)
    {
        $this->setProperty('population', $value);
        return $this;
    }

    /**
    * The status of the study (enumerated).
    * @param EventStatusType|string|MedicalStudyStatus $value
    * @return $this
    */
    public function status($value)
    {
        $this->setProperty('status', $value);
        return $this;
    }

    /**
    * Expected or actual outcomes of the study.
    * @param MedicalEntity|string $value
    * @return $this
    */
    public function outcome($value)
    {
        $this->setProperty('outcome', $value);
        return $this;
    }

    /**
    * Specifying the health condition(s) of a patient, medical study, or other target audience.
    * @param MedicalCondition $value
    * @return $this
    */
    public function healthCondition(?MedicalCondition $value)
    {
        $this->setProperty('healthCondition', $value);
        return $this;
    }

    /**
    * The location in which the study is taking/took place.
    * @param AdministrativeArea $value
    * @return $this
    */
    public function studyLocation(?AdministrativeArea $value)
    {
        $this->setProperty('studyLocation', $value);
        return $this;
    }

    /**
    * A person or organization that supports a thing through a pledge, promise, or financial contribution. e.g. a sponsor of a Medical Study or a corporate sponsor of an event.
    * @param Person|Organization $value
    * @return $this
    */
    public function sponsor($value)
    {
        $this->setProperty('sponsor', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity\\MedicalStudy','Thing\\MedicalStudy');

