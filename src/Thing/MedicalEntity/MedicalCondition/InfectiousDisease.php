<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition;

use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration\InfectiousAgentClass;

/**
* An infectious disease is a clinically evident human disease resulting from the presence of pathogenic microbial agents, like pathogenic viruses, pathogenic bacteria, fungi, protozoa, multicellular parasites, and prions. To be considered an infectious disease, such pathogens are known to be able to cause this disease.
* @see http://schema.org/InfectiousDisease
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition

*
*/
class InfectiousDisease extends MedicalCondition
{

    /**
    * The actual infectious agent, such as a specific bacterium.
    * @param string|array $value
    * @return $this
    * @deprecated use setInfectiousAgent
    */
    public function infectiousAgent($value)
    {
        $this->setProperty('infectiousAgent', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setInfectiousAgent($value)
    {
        $this->setProperty('infectiousAgent', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getInfectiousAgent()
    {
       return $this->getProperty('infectiousAgent');
    }

    /**
    * How the disease spreads, either as a route or vector, for example 'direct contact', 'Aedes aegypti', etc.
    * @param string|array $value
    * @return $this
    * @deprecated use setTransmissionMethod
    */
    public function transmissionMethod($value)
    {
        $this->setProperty('transmissionMethod', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setTransmissionMethod($value)
    {
        $this->setProperty('transmissionMethod', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getTransmissionMethod()
    {
       return $this->getProperty('transmissionMethod');
    }

    /**
    * The class of infectious agent (bacteria, prion, etc.) that causes the disease.
    * @param InfectiousAgentClass|array|string $value
    * @return $this
    * @deprecated use setInfectiousAgentClass
    */
    public function infectiousAgentClass($value)
    {
        $this->setProperty('infectiousAgentClass', $value);
        return $this;
    }
   /**
    * @param InfectiousAgentClass|array|string $value
    * @return $this
    */
    public function setInfectiousAgentClass($value)
    {
        $this->setProperty('infectiousAgentClass', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getInfectiousAgentClass()
    {
       return $this->getProperty('infectiousAgentClass');
    }


}
