<?php declare(strict_types=1);
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
*/
class EducationalOccupationalCredential extends CreativeWork
{

    /**
    * The duration of validity of a permit or similar thing.
    * @param Duration $value
    * @return $this
    */
    public function validFor(?Duration $value)
    {
        $this->setProperty('validFor', $value);
        return $this;
    }

    /**
    * The level in terms of progression through an educational or training context. Examples of educational levels include 'beginner', 'intermediate' or 'advanced', and formal sets of level indicators.
    * @param string|DefinedTerm|string $value
    * @return $this
    */
    public function educationalLevel($value)
    {
        $this->setProperty('educationalLevel', $value);
        return $this;
    }

    /**
    * An organization that acknowledges the validity, value or utility of a credential. Note: recognition may include a process of quality assurance or accreditation.
    * @param Organization $value
    * @return $this
    */
    public function recognizedBy(?Organization $value)
    {
        $this->setProperty('recognizedBy', $value);
        return $this;
    }

    /**
    * Knowledge, skill, ability or personal attribute that must be demonstrated by a person or other entity.
    * @param string|string|DefinedTerm $value
    * @return $this
    */
    public function competencyRequired($value)
    {
        $this->setProperty('competencyRequired', $value);
        return $this;
    }

    /**
    * The category or type of credential being described, for example "degree”, “certificate”, “badge”, or more specific term.
    * @param DefinedTerm|string|string $value
    * @return $this
    */
    public function credentialCategory($value)
    {
        $this->setProperty('credentialCategory', $value);
        return $this;
    }

    /**
    * The geographic area where a permit or similar thing is valid.
    * @param AdministrativeArea $value
    * @return $this
    */
    public function validIn(?AdministrativeArea $value)
    {
        $this->setProperty('validIn', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\EducationalOccupationalCredential','Thing\\EducationalOccupationalCredential');

