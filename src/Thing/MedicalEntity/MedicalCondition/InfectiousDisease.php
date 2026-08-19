<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition;

use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration\InfectiousAgentClass;

/**
 * An infectious disease is a clinically evident human disease resulting from the presence of pathogenic microbial agents, like pathogenic viruses, pathogenic bacteria, fungi, protozoa, multicellular parasites, and prions. To be considered an infectious disease, such pathogens are known to be able to cause this disease.
 * @see https://schema.org/InfectiousDisease
 * @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition
 */
class InfectiousDisease extends MedicalCondition
{
    /**
     * The class of infectious agent (bacteria, prion, etc.) that causes the disease.
     * @see https://schema.org/infectiousAgentClass
     * @param InfectiousAgentClass|array $value
     * @return $this
     */
    public function infectiousAgentClass($value)
    {
        $this->setProperty('infectiousAgentClass', $value);
        return $this;
    }

    /**
     * @param InfectiousAgentClass|array $value
     * @return $this
     */
    public function setInfectiousAgentClass($value)
    {
        $this->setProperty('infectiousAgentClass', $value);
        return $this;
    }

    /**
     * @param InfectiousAgentClass $value
     * @return $this
     */
    public function addInfectiousAgentClass($value)
    {
        $current = $this->getProperty('infectiousAgentClass');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('infectiousAgentClass', $current);
        return $this;
    }

    /**
     * @return InfectiousAgentClass|array
     */
    public function getInfectiousAgentClass()
    {
        return $this->getProperty('infectiousAgentClass');
    }
    /**
     * The actual infectious agent, such as a specific bacterium.
     * @see https://schema.org/infectiousAgent
     * @param string|array $value
     * @return $this
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
     * @param string $value
     * @return $this
     */
    public function addInfectiousAgent($value)
    {
        $current = $this->getProperty('infectiousAgent');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('infectiousAgent', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getInfectiousAgent()
    {
        return $this->getProperty('infectiousAgent');
    }
    /**
     * How the disease spreads, either as a route or vector, for example 'direct contact', 'Aedes aegypti', etc.
     * @see https://schema.org/transmissionMethod
     * @param string|array $value
     * @return $this
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
     * @param string $value
     * @return $this
     */
    public function addTransmissionMethod($value)
    {
        $current = $this->getProperty('transmissionMethod');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('transmissionMethod', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getTransmissionMethod()
    {
        return $this->getProperty('transmissionMethod');
    }
}
