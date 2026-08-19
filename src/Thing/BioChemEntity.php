<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing;

use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PropertyValue;
use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm;
use Sohophp\SchemaOrg\Thing\Taxon;
use Sohophp\SchemaOrg\Thing\Intangible\Grant;
use Sohophp\SchemaOrg\Thing\BioChemEntity\Gene;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition;

/**
 * Any biological, chemical, or biochemical thing. For example: a protein; a gene; a chemical; a synthetic chemical.
 * @see https://schema.org/BioChemEntity
 * @package Sohophp\SchemaOrg\Thing
 */
class BioChemEntity extends Thing
{
    /**
     * A common representation such as a protein sequence or chemical structure for this entity. For images use schema.org/image.
     * @see https://schema.org/hasRepresentation
     * @param string|PropertyValue|array $value
     * @return $this
     */
    public function hasRepresentation($value)
    {
        $this->setProperty('hasRepresentation', $value);
        return $this;
    }

    /**
     * @param string|PropertyValue|array $value
     * @return $this
     */
    public function setHasRepresentation($value)
    {
        $this->setProperty('hasRepresentation', $value);
        return $this;
    }

    /**
     * @param string|PropertyValue $value
     * @return $this
     */
    public function addHasRepresentation($value)
    {
        $current = $this->getProperty('hasRepresentation');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('hasRepresentation', $current);
        return $this;
    }

    /**
     * @return string|PropertyValue|array
     */
    public function getHasRepresentation()
    {
        return $this->getProperty('hasRepresentation');
    }
    /**
     * Molecular function performed by this BioChemEntity; please use PropertyValue if you want to include any evidence.
     * @see https://schema.org/hasMolecularFunction
     * @param PropertyValue|DefinedTerm|string|array $value
     * @return $this
     */
    public function hasMolecularFunction($value)
    {
        $this->setProperty('hasMolecularFunction', $value);
        return $this;
    }

    /**
     * @param PropertyValue|DefinedTerm|string|array $value
     * @return $this
     */
    public function setHasMolecularFunction($value)
    {
        $this->setProperty('hasMolecularFunction', $value);
        return $this;
    }

    /**
     * @param PropertyValue|DefinedTerm|string $value
     * @return $this
     */
    public function addHasMolecularFunction($value)
    {
        $current = $this->getProperty('hasMolecularFunction');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('hasMolecularFunction', $current);
        return $this;
    }

    /**
     * @return PropertyValue|DefinedTerm|string|array
     */
    public function getHasMolecularFunction()
    {
        return $this->getProperty('hasMolecularFunction');
    }
    /**
     * A BioChemEntity that is known to interact with this item.
     * @see https://schema.org/bioChemInteraction
     * @param BioChemEntity|array $value
     * @return $this
     */
    public function bioChemInteraction($value)
    {
        $this->setProperty('bioChemInteraction', $value);
        return $this;
    }

    /**
     * @param BioChemEntity|array $value
     * @return $this
     */
    public function setBioChemInteraction($value)
    {
        $this->setProperty('bioChemInteraction', $value);
        return $this;
    }

    /**
     * @param BioChemEntity $value
     * @return $this
     */
    public function addBioChemInteraction($value)
    {
        $current = $this->getProperty('bioChemInteraction');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('bioChemInteraction', $current);
        return $this;
    }

    /**
     * @return BioChemEntity|array
     */
    public function getBioChemInteraction()
    {
        return $this->getProperty('bioChemInteraction');
    }
    /**
     * Biological process this BioChemEntity is involved in; please use PropertyValue if you want to include any evidence.
     * @see https://schema.org/isInvolvedInBiologicalProcess
     * @param PropertyValue|DefinedTerm|string|array $value
     * @return $this
     */
    public function isInvolvedInBiologicalProcess($value)
    {
        $this->setProperty('isInvolvedInBiologicalProcess', $value);
        return $this;
    }

    /**
     * @param PropertyValue|DefinedTerm|string|array $value
     * @return $this
     */
    public function setIsInvolvedInBiologicalProcess($value)
    {
        $this->setProperty('isInvolvedInBiologicalProcess', $value);
        return $this;
    }

    /**
     * @param PropertyValue|DefinedTerm|string $value
     * @return $this
     */
    public function addIsInvolvedInBiologicalProcess($value)
    {
        $current = $this->getProperty('isInvolvedInBiologicalProcess');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('isInvolvedInBiologicalProcess', $current);
        return $this;
    }

    /**
     * @return PropertyValue|DefinedTerm|string|array
     */
    public function getIsInvolvedInBiologicalProcess()
    {
        return $this->getProperty('isInvolvedInBiologicalProcess');
    }
    /**
     * The taxonomic grouping of the organism that expresses, encodes, or in some way related to the BioChemEntity.
     * @see https://schema.org/taxonomicRange
     * @param DefinedTerm|string|Taxon|array $value
     * @return $this
     */
    public function taxonomicRange($value)
    {
        $this->setProperty('taxonomicRange', $value);
        return $this;
    }

    /**
     * @param DefinedTerm|string|Taxon|array $value
     * @return $this
     */
    public function setTaxonomicRange($value)
    {
        $this->setProperty('taxonomicRange', $value);
        return $this;
    }

    /**
     * @param DefinedTerm|string|Taxon $value
     * @return $this
     */
    public function addTaxonomicRange($value)
    {
        $current = $this->getProperty('taxonomicRange');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('taxonomicRange', $current);
        return $this;
    }

    /**
     * @return DefinedTerm|string|Taxon|array
     */
    public function getTaxonomicRange()
    {
        return $this->getProperty('taxonomicRange');
    }
    /**
     * Subcellular location where this BioChemEntity is located; please use PropertyValue if you want to include any evidence.
     * @see https://schema.org/isLocatedInSubcellularLocation
     * @param DefinedTerm|string|PropertyValue|array $value
     * @return $this
     */
    public function isLocatedInSubcellularLocation($value)
    {
        $this->setProperty('isLocatedInSubcellularLocation', $value);
        return $this;
    }

    /**
     * @param DefinedTerm|string|PropertyValue|array $value
     * @return $this
     */
    public function setIsLocatedInSubcellularLocation($value)
    {
        $this->setProperty('isLocatedInSubcellularLocation', $value);
        return $this;
    }

    /**
     * @param DefinedTerm|string|PropertyValue $value
     * @return $this
     */
    public function addIsLocatedInSubcellularLocation($value)
    {
        $current = $this->getProperty('isLocatedInSubcellularLocation');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('isLocatedInSubcellularLocation', $current);
        return $this;
    }

    /**
     * @return DefinedTerm|string|PropertyValue|array
     */
    public function getIsLocatedInSubcellularLocation()
    {
        return $this->getProperty('isLocatedInSubcellularLocation');
    }
    /**
     * A [[Grant]] that directly or indirectly provide funding or sponsorship for this item. See also [[ownershipFundingInfo]].
     * @see https://schema.org/funding
     * @param Grant|array $value
     * @return $this
     */
    public function funding($value)
    {
        $this->setProperty('funding', $value);
        return $this;
    }

    /**
     * @param Grant|array $value
     * @return $this
     */
    public function setFunding($value)
    {
        $this->setProperty('funding', $value);
        return $this;
    }

    /**
     * @param Grant $value
     * @return $this
     */
    public function addFunding($value)
    {
        $current = $this->getProperty('funding');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('funding', $current);
        return $this;
    }

    /**
     * @return Grant|array
     */
    public function getFunding()
    {
        return $this->getProperty('funding');
    }
    /**
     * A role played by the BioChemEntity within a biological context.
     * @see https://schema.org/biologicalRole
     * @param DefinedTerm|array $value
     * @return $this
     */
    public function biologicalRole($value)
    {
        $this->setProperty('biologicalRole', $value);
        return $this;
    }

    /**
     * @param DefinedTerm|array $value
     * @return $this
     */
    public function setBiologicalRole($value)
    {
        $this->setProperty('biologicalRole', $value);
        return $this;
    }

    /**
     * @param DefinedTerm $value
     * @return $this
     */
    public function addBiologicalRole($value)
    {
        $current = $this->getProperty('biologicalRole');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('biologicalRole', $current);
        return $this;
    }

    /**
     * @return DefinedTerm|array
     */
    public function getBiologicalRole()
    {
        return $this->getProperty('biologicalRole');
    }
    /**
     * Indicates a BioChemEntity that is (in some sense) a part of this BioChemEntity.
     * @see https://schema.org/isPartOfBioChemEntity
     * @param BioChemEntity|array $value
     * @return $this
     */
    public function isPartOfBioChemEntity($value)
    {
        $this->setProperty('isPartOfBioChemEntity', $value);
        return $this;
    }

    /**
     * @param BioChemEntity|array $value
     * @return $this
     */
    public function setIsPartOfBioChemEntity($value)
    {
        $this->setProperty('isPartOfBioChemEntity', $value);
        return $this;
    }

    /**
     * @param BioChemEntity $value
     * @return $this
     */
    public function addIsPartOfBioChemEntity($value)
    {
        $current = $this->getProperty('isPartOfBioChemEntity');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('isPartOfBioChemEntity', $current);
        return $this;
    }

    /**
     * @return BioChemEntity|array
     */
    public function getIsPartOfBioChemEntity()
    {
        return $this->getProperty('isPartOfBioChemEntity');
    }
    /**
     * Another BioChemEntity encoding by this one.
     * @see https://schema.org/isEncodedByBioChemEntity
     * @param Gene|array $value
     * @return $this
     */
    public function isEncodedByBioChemEntity($value)
    {
        $this->setProperty('isEncodedByBioChemEntity', $value);
        return $this;
    }

    /**
     * @param Gene|array $value
     * @return $this
     */
    public function setIsEncodedByBioChemEntity($value)
    {
        $this->setProperty('isEncodedByBioChemEntity', $value);
        return $this;
    }

    /**
     * @param Gene $value
     * @return $this
     */
    public function addIsEncodedByBioChemEntity($value)
    {
        $current = $this->getProperty('isEncodedByBioChemEntity');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('isEncodedByBioChemEntity', $current);
        return $this;
    }

    /**
     * @return Gene|array
     */
    public function getIsEncodedByBioChemEntity()
    {
        return $this->getProperty('isEncodedByBioChemEntity');
    }
    /**
     * Indicates a BioChemEntity that (in some sense) has this BioChemEntity as a part.
     * @see https://schema.org/hasBioChemEntityPart
     * @param BioChemEntity|array $value
     * @return $this
     */
    public function hasBioChemEntityPart($value)
    {
        $this->setProperty('hasBioChemEntityPart', $value);
        return $this;
    }

    /**
     * @param BioChemEntity|array $value
     * @return $this
     */
    public function setHasBioChemEntityPart($value)
    {
        $this->setProperty('hasBioChemEntityPart', $value);
        return $this;
    }

    /**
     * @param BioChemEntity $value
     * @return $this
     */
    public function addHasBioChemEntityPart($value)
    {
        $current = $this->getProperty('hasBioChemEntityPart');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('hasBioChemEntityPart', $current);
        return $this;
    }

    /**
     * @return BioChemEntity|array
     */
    public function getHasBioChemEntityPart()
    {
        return $this->getProperty('hasBioChemEntityPart');
    }
    /**
     * A similar BioChemEntity, e.g., obtained by fingerprint similarity algorithms.
     * @see https://schema.org/bioChemSimilarity
     * @param BioChemEntity|array $value
     * @return $this
     */
    public function bioChemSimilarity($value)
    {
        $this->setProperty('bioChemSimilarity', $value);
        return $this;
    }

    /**
     * @param BioChemEntity|array $value
     * @return $this
     */
    public function setBioChemSimilarity($value)
    {
        $this->setProperty('bioChemSimilarity', $value);
        return $this;
    }

    /**
     * @param BioChemEntity $value
     * @return $this
     */
    public function addBioChemSimilarity($value)
    {
        $current = $this->getProperty('bioChemSimilarity');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('bioChemSimilarity', $current);
        return $this;
    }

    /**
     * @return BioChemEntity|array
     */
    public function getBioChemSimilarity()
    {
        return $this->getProperty('bioChemSimilarity');
    }
    /**
     * Disease associated to this BioChemEntity. Such disease can be a MedicalCondition or a URL. If you want to add an evidence supporting the association, please use PropertyValue.
     * @see https://schema.org/associatedDisease
     * @param PropertyValue|MedicalCondition|string|array $value
     * @return $this
     */
    public function associatedDisease($value)
    {
        $this->setProperty('associatedDisease', $value);
        return $this;
    }

    /**
     * @param PropertyValue|MedicalCondition|string|array $value
     * @return $this
     */
    public function setAssociatedDisease($value)
    {
        $this->setProperty('associatedDisease', $value);
        return $this;
    }

    /**
     * @param PropertyValue|MedicalCondition|string $value
     * @return $this
     */
    public function addAssociatedDisease($value)
    {
        $current = $this->getProperty('associatedDisease');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('associatedDisease', $current);
        return $this;
    }

    /**
     * @return PropertyValue|MedicalCondition|string|array
     */
    public function getAssociatedDisease()
    {
        return $this->getProperty('associatedDisease');
    }
}
