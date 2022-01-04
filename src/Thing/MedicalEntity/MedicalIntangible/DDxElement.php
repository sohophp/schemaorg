<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;

use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition\MedicalSignOrSymptom;

/**
* An alternative, closely-related condition typically considered later in the differential diagnosis process along with the signs that are used to distinguish it.
* @see http://schema.org/DDxElement
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible

*
*/
class DDxElement extends MedicalIntangible
{

    /**
    * One or more alternative conditions considered in the differential diagnosis process as output of a diagnosis process.
    * @param MedicalCondition|array|string $value
    * @return $this
    * @deprecated use setDiagnosis
    */
    public function diagnosis($value)
    {
        $this->setProperty('diagnosis', $value);
        return $this;
    }
   /**
    * @param MedicalCondition|array|string $value
    * @return $this
    */
    public function setDiagnosis($value)
    {
        $this->setProperty('diagnosis', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDiagnosis()
    {
       return $this->getProperty('diagnosis');
    }

    /**
    * One of a set of signs and symptoms that can be used to distinguish this diagnosis from others in the differential diagnosis.
    * @param MedicalSignOrSymptom|array|string $value
    * @return $this
    * @deprecated use setDistinguishingSign
    */
    public function distinguishingSign($value)
    {
        $this->setProperty('distinguishingSign', $value);
        return $this;
    }
   /**
    * @param MedicalSignOrSymptom|array|string $value
    * @return $this
    */
    public function setDistinguishingSign($value)
    {
        $this->setProperty('distinguishingSign', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDistinguishingSign()
    {
       return $this->getProperty('distinguishingSign');
    }


}
