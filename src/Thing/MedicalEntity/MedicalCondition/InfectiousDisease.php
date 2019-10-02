<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition;

use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration\InfectiousAgentClass;

/**
* An infectious disease is a clinically evident human disease resulting from the presence of pathogenic microbial agents, like pathogenic viruses, pathogenic bacteria, fungi, protozoa, multicellular parasites, and prions. To be considered an infectious disease, such pathogens are known to be able to cause this disease.
* @see http://schema.org/InfectiousDisease
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition
*/
class InfectiousDisease extends MedicalCondition
{

    /**
    * The actual infectious agent, such as a specific bacterium.
    * @param string $value
    * @return $this
    */
    public function infectiousAgent(?string $value)
    {
        $this->setProperty('infectiousAgent', $value);
        return $this;
    }

    /**
    * How the disease spreads, either as a route or vector, for example 'direct contact', 'Aedes aegypti', etc.
    * @param string $value
    * @return $this
    */
    public function transmissionMethod(?string $value)
    {
        $this->setProperty('transmissionMethod', $value);
        return $this;
    }

    /**
    * The class of infectious agent (bacteria, prion, etc.) that causes the disease.
    * @param InfectiousAgentClass $value
    * @return $this
    */
    public function infectiousAgentClass(?InfectiousAgentClass $value)
    {
        $this->setProperty('infectiousAgentClass', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity\\MedicalCondition\\InfectiousDisease','Thing\\InfectiousDisease');

