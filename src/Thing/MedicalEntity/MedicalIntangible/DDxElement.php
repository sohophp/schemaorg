<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;

use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;

/**
* An alternative, closely-related condition typically considered later in the
 * differential diagnosis process along with the signs that are used to
 * distinguish it.
* @see schema:DDxElement
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible
*/
class DDxElement extends MedicalIntangible
{


    /**
        * One or more alternative conditions considered in the differential diagnosis
 * process as output of a diagnosis process.
        * @param array|string|mixed $value
    * @return $this
    */
    public function diagnosis($value)
    {
        $this->setProperty('diagnosis', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setDiagnosis($value)
    {
        $this->setProperty('diagnosis', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDiagnosis()
    {
       return $this->getProperty('diagnosis');
    }


    /**
        * One of a set of signs and symptoms that can be used to distinguish this
 * diagnosis from others in the differential diagnosis.
        * @param array|string|mixed $value
    * @return $this
    */
    public function distinguishingSign($value)
    {
        $this->setProperty('distinguishingSign', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setDistinguishingSign($value)
    {
        $this->setProperty('distinguishingSign', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDistinguishingSign()
    {
       return $this->getProperty('distinguishingSign');
    }


}
