<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition;

use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition;

/**
* An infectious disease is a clinically evident human disease resulting from
 * the presence of pathogenic microbial agents, like pathogenic viruses,
 * pathogenic bacteria, fungi, protozoa, multicellular parasites, and prions. To
 * be considered an infectious disease, such pathogens are known to be able to
 * cause this disease.
* @see schema:InfectiousDisease
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition
*/
class InfectiousDisease extends MedicalCondition
{


    /**
        * How the disease spreads, either as a route or vector, for example 'direct
 * contact', 'Aedes aegypti', etc.
        * @param array|string|mixed $value
    * @return $this
    */
    public function transmissionMethod($value)
    {
        $this->setProperty('transmissionMethod', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setTransmissionMethod($value)
    {
        $this->setProperty('transmissionMethod', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTransmissionMethod()
    {
       return $this->getProperty('transmissionMethod');
    }


    /**
        * The actual infectious agent, such as a specific bacterium.
        * @param array|string|mixed $value
    * @return $this
    */
    public function infectiousAgent($value)
    {
        $this->setProperty('infectiousAgent', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setInfectiousAgent($value)
    {
        $this->setProperty('infectiousAgent', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getInfectiousAgent()
    {
       return $this->getProperty('infectiousAgent');
    }


    /**
        * The class of infectious agent (bacteria, prion, etc.) that causes the
 * disease.
        * @param array|string|mixed $value
    * @return $this
    */
    public function infectiousAgentClass($value)
    {
        $this->setProperty('infectiousAgentClass', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setInfectiousAgentClass($value)
    {
        $this->setProperty('infectiousAgentClass', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getInfectiousAgentClass()
    {
       return $this->getProperty('infectiousAgentClass');
    }


}
