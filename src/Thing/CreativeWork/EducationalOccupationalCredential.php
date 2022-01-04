<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Duration;
use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea;

/**
* An educational or occupational credential. A diploma, academic degree, certification, qualification, badge, etc., that may be awarded to a person or other entity that meets the requirements defined by the credentialer.
* @see http://schema.org/EducationalOccupationalCredential
* @package Sohophp\SchemaOrg\Thing\CreativeWork

*
*/
class EducationalOccupationalCredential extends CreativeWork
{

    /**
    * The duration of validity of a permit or similar thing.
    * @param Duration|array|string $value
    * @return $this
    * @deprecated use setValidFor
    */
    public function validFor($value)
    {
        $this->setProperty('validFor', $value);
        return $this;
    }
   /**
    * @param Duration|array|string $value
    * @return $this
    */
    public function setValidFor($value)
    {
        $this->setProperty('validFor', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getValidFor()
    {
       return $this->getProperty('validFor');
    }

    /**
    * The level in terms of progression through an educational or training context. Examples of educational levels include 'beginner', 'intermediate' or 'advanced', and formal sets of level indicators.
    * @param string|DefinedTerm|string|array $value
    * @return $this
    * @deprecated use setEducationalLevel
    */
    public function educationalLevel($value)
    {
        $this->setProperty('educationalLevel', $value);
        return $this;
    }
   /**
    * @param string|DefinedTerm|string|array $value
    * @return $this
    */
    public function setEducationalLevel($value)
    {
        $this->setProperty('educationalLevel', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getEducationalLevel()
    {
       return $this->getProperty('educationalLevel');
    }

    /**
    * An organization that acknowledges the validity, value or utility of a credential. Note: recognition may include a process of quality assurance or accreditation.
    * @param Organization|array|string $value
    * @return $this
    * @deprecated use setRecognizedBy
    */
    public function recognizedBy($value)
    {
        $this->setProperty('recognizedBy', $value);
        return $this;
    }
   /**
    * @param Organization|array|string $value
    * @return $this
    */
    public function setRecognizedBy($value)
    {
        $this->setProperty('recognizedBy', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getRecognizedBy()
    {
       return $this->getProperty('recognizedBy');
    }

    /**
    * Knowledge, skill, ability or personal attribute that must be demonstrated by a person or other entity.
    * @param string|string|DefinedTerm|array $value
    * @return $this
    * @deprecated use setCompetencyRequired
    */
    public function competencyRequired($value)
    {
        $this->setProperty('competencyRequired', $value);
        return $this;
    }
   /**
    * @param string|string|DefinedTerm|array $value
    * @return $this
    */
    public function setCompetencyRequired($value)
    {
        $this->setProperty('competencyRequired', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCompetencyRequired()
    {
       return $this->getProperty('competencyRequired');
    }

    /**
    * The category or type of credential being described, for example "degree”, “certificate”, “badge”, or more specific term.
    * @param DefinedTerm|string|string|array $value
    * @return $this
    * @deprecated use setCredentialCategory
    */
    public function credentialCategory($value)
    {
        $this->setProperty('credentialCategory', $value);
        return $this;
    }
   /**
    * @param DefinedTerm|string|string|array $value
    * @return $this
    */
    public function setCredentialCategory($value)
    {
        $this->setProperty('credentialCategory', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCredentialCategory()
    {
       return $this->getProperty('credentialCategory');
    }

    /**
    * The geographic area where a permit or similar thing is valid.
    * @param AdministrativeArea|array|string $value
    * @return $this
    * @deprecated use setValidIn
    */
    public function validIn($value)
    {
        $this->setProperty('validIn', $value);
        return $this;
    }
   /**
    * @param AdministrativeArea|array|string $value
    * @return $this
    */
    public function setValidIn($value)
    {
        $this->setProperty('validIn', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getValidIn()
    {
       return $this->getProperty('validIn');
    }


}
