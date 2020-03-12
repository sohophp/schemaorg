<?php declare(strict_types=1);
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
    * @param MedicalCondition|array $value
    * @return $this
    */
    public function diagnosis(?MedicalCondition $value)
    {
        $this->setProperty('diagnosis', $value);
        return $this;
    }
   /**
    * @param MedicalCondition|array $value
    * @return $this
    */
    public function setDiagnosis(?MedicalCondition $value)
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
    * @param MedicalSignOrSymptom|array $value
    * @return $this
    */
    public function distinguishingSign(?MedicalSignOrSymptom $value)
    {
        $this->setProperty('distinguishingSign', $value);
        return $this;
    }
   /**
    * @param MedicalSignOrSymptom|array $value
    * @return $this
    */
    public function setDistinguishingSign(?MedicalSignOrSymptom $value)
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


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity\\MedicalIntangible\\DDxElement','Thing\\DDxElement');

