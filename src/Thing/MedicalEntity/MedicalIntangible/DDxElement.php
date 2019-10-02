<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;

use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition\MedicalSignOrSymptom;

/**
* An alternative, closely-related condition typically considered later in the differential diagnosis process along with the signs that are used to distinguish it.
* @see http://schema.org/DDxElement
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible
*/
class DDxElement extends MedicalIntangible
{

    /**
    * One or more alternative conditions considered in the differential diagnosis process as output of a diagnosis process.
    * @param MedicalCondition $value
    * @return $this
    */
    public function diagnosis(?MedicalCondition $value)
    {
        $this->setProperty('diagnosis', $value);
        return $this;
    }

    /**
    * One of a set of signs and symptoms that can be used to distinguish this diagnosis from others in the differential diagnosis.
    * @param MedicalSignOrSymptom $value
    * @return $this
    */
    public function distinguishingSign(?MedicalSignOrSymptom $value)
    {
        $this->setProperty('distinguishingSign', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity\\MedicalIntangible\\DDxElement','Thing\\DDxElement');

