<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* An educational or occupational credential. A diploma, academic degree,
 * certification, qualification, badge, etc., that may be awarded to a person or
 * other entity that meets the requirements defined by the credentialer.
* @see schema:EducationalOccupationalCredential
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class EducationalOccupationalCredential extends CreativeWork
{


    /**
        * The duration of validity of a permit or similar thing.
        * @param array|string|mixed $value
    * @return $this
    */
    public function validFor($value)
    {
        $this->setProperty('validFor', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setValidFor($value)
    {
        $this->setProperty('validFor', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getValidFor()
    {
       return $this->getProperty('validFor');
    }


    /**
        * Knowledge, skill, ability or personal attribute that must be demonstrated by
 * a person or other entity in order to do something such as earn an Educational
 * Occupational Credential or understand a LearningResource.
        * @param array|string|mixed $value
    * @return $this
    */
    public function competencyRequired($value)
    {
        $this->setProperty('competencyRequired', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setCompetencyRequired($value)
    {
        $this->setProperty('competencyRequired', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCompetencyRequired()
    {
       return $this->getProperty('competencyRequired');
    }


    /**
        * An organization that acknowledges the validity, value or utility of a
 * credential. Note: recognition may include a process of quality assurance or
 * accreditation.
        * @param array|string|mixed $value
    * @return $this
    */
    public function recognizedBy($value)
    {
        $this->setProperty('recognizedBy', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setRecognizedBy($value)
    {
        $this->setProperty('recognizedBy', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRecognizedBy()
    {
       return $this->getProperty('recognizedBy');
    }


    /**
        * The category or type of credential being described, for example "degree”,
 * “certificate”, “badge”, or more specific term.
        * @param array|string|mixed $value
    * @return $this
    */
    public function credentialCategory($value)
    {
        $this->setProperty('credentialCategory', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setCredentialCategory($value)
    {
        $this->setProperty('credentialCategory', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCredentialCategory()
    {
       return $this->getProperty('credentialCategory');
    }


    /**
        * The geographic area where the item is valid. Applies for example to a
 * [[Permit]], a [[Certification]], or an [[EducationalOccupationalCredential]].
        * @param array|string|mixed $value
    * @return $this
    */
    public function validIn($value)
    {
        $this->setProperty('validIn', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setValidIn($value)
    {
        $this->setProperty('validIn', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getValidIn()
    {
       return $this->getProperty('validIn');
    }


    /**
        * The level in terms of progression through an educational or training context.
 * Examples of educational levels include 'beginner', 'intermediate' or
 * 'advanced', and formal sets of level indicators.
        * @param array|string|mixed $value
    * @return $this
    */
    public function educationalLevel($value)
    {
        $this->setProperty('educationalLevel', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setEducationalLevel($value)
    {
        $this->setProperty('educationalLevel', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEducationalLevel()
    {
       return $this->getProperty('educationalLevel');
    }


}
