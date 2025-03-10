<?php
namespace Sohophp\SchemaOrg\Thing;

use Sohophp\SchemaOrg\Thing;

/**
* Any biological, chemical, or biochemical thing. For example: a protein; a
 * gene; a chemical; a synthetic chemical.
* @see schema:BioChemEntity
* @package Sohophp\SchemaOrg\Thing
*/
class BioChemEntity extends Thing
{


    /**
        * The taxonomic grouping of the organism that expresses, encodes, or in some
 * way related to the BioChemEntity.
        * @param array|string|mixed $value
    * @return $this
    */
    public function taxonomicRange($value)
    {
        $this->setProperty('taxonomicRange', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setTaxonomicRange($value)
    {
        $this->setProperty('taxonomicRange', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTaxonomicRange()
    {
       return $this->getProperty('taxonomicRange');
    }


    /**
        * Subcellular location where this BioChemEntity is located; please use
 * PropertyValue if you want to include any evidence.
        * @param array|string|mixed $value
    * @return $this
    */
    public function isLocatedInSubcellularLocation($value)
    {
        $this->setProperty('isLocatedInSubcellularLocation', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setIsLocatedInSubcellularLocation($value)
    {
        $this->setProperty('isLocatedInSubcellularLocation', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIsLocatedInSubcellularLocation()
    {
       return $this->getProperty('isLocatedInSubcellularLocation');
    }


    /**
        * Indicates a BioChemEntity that (in some sense) has this BioChemEntity as a
 * part.
        * @param array|string|mixed $value
    * @return $this
    */
    public function hasBioChemEntityPart($value)
    {
        $this->setProperty('hasBioChemEntityPart', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setHasBioChemEntityPart($value)
    {
        $this->setProperty('hasBioChemEntityPart', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHasBioChemEntityPart()
    {
       return $this->getProperty('hasBioChemEntityPart');
    }


    /**
        * Disease associated to this BioChemEntity. Such disease can be a
 * MedicalCondition or a URL. If you want to add an evidence supporting the
 * association, please use PropertyValue.
        * @param array|string|mixed $value
    * @return $this
    */
    public function associatedDisease($value)
    {
        $this->setProperty('associatedDisease', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAssociatedDisease($value)
    {
        $this->setProperty('associatedDisease', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAssociatedDisease()
    {
       return $this->getProperty('associatedDisease');
    }


    /**
        * A [[Grant]] that directly or indirectly provide funding or sponsorship for
 * this item. See also [[ownershipFundingInfo]].
        * @param array|string|mixed $value
    * @return $this
    */
    public function funding($value)
    {
        $this->setProperty('funding', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setFunding($value)
    {
        $this->setProperty('funding', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getFunding()
    {
       return $this->getProperty('funding');
    }


    /**
        * A role played by the BioChemEntity within a biological context.
        * @param array|string|mixed $value
    * @return $this
    */
    public function biologicalRole($value)
    {
        $this->setProperty('biologicalRole', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setBiologicalRole($value)
    {
        $this->setProperty('biologicalRole', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBiologicalRole()
    {
       return $this->getProperty('biologicalRole');
    }


    /**
        * Another BioChemEntity encoding by this one.
        * @param array|string|mixed $value
    * @return $this
    */
    public function isEncodedByBioChemEntity($value)
    {
        $this->setProperty('isEncodedByBioChemEntity', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setIsEncodedByBioChemEntity($value)
    {
        $this->setProperty('isEncodedByBioChemEntity', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIsEncodedByBioChemEntity()
    {
       return $this->getProperty('isEncodedByBioChemEntity');
    }


    /**
        * Biological process this BioChemEntity is involved in; please use
 * PropertyValue if you want to include any evidence.
        * @param array|string|mixed $value
    * @return $this
    */
    public function isInvolvedInBiologicalProcess($value)
    {
        $this->setProperty('isInvolvedInBiologicalProcess', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setIsInvolvedInBiologicalProcess($value)
    {
        $this->setProperty('isInvolvedInBiologicalProcess', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIsInvolvedInBiologicalProcess()
    {
       return $this->getProperty('isInvolvedInBiologicalProcess');
    }


    /**
        * A similar BioChemEntity, e.g., obtained by fingerprint similarity algorithms.
        * @param array|string|mixed $value
    * @return $this
    */
    public function bioChemSimilarity($value)
    {
        $this->setProperty('bioChemSimilarity', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setBioChemSimilarity($value)
    {
        $this->setProperty('bioChemSimilarity', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBioChemSimilarity()
    {
       return $this->getProperty('bioChemSimilarity');
    }


    /**
        * Indicates a BioChemEntity that is (in some sense) a part of this
 * BioChemEntity.
        * @param array|string|mixed $value
    * @return $this
    */
    public function isPartOfBioChemEntity($value)
    {
        $this->setProperty('isPartOfBioChemEntity', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setIsPartOfBioChemEntity($value)
    {
        $this->setProperty('isPartOfBioChemEntity', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIsPartOfBioChemEntity()
    {
       return $this->getProperty('isPartOfBioChemEntity');
    }


    /**
        * A common representation such as a protein sequence or chemical structure for
 * this entity. For images use schema.org/image.
        * @param array|string|mixed $value
    * @return $this
    */
    public function hasRepresentation($value)
    {
        $this->setProperty('hasRepresentation', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setHasRepresentation($value)
    {
        $this->setProperty('hasRepresentation', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHasRepresentation()
    {
       return $this->getProperty('hasRepresentation');
    }


    /**
        * Molecular function performed by this BioChemEntity; please use PropertyValue
 * if you want to include any evidence.
        * @param array|string|mixed $value
    * @return $this
    */
    public function hasMolecularFunction($value)
    {
        $this->setProperty('hasMolecularFunction', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setHasMolecularFunction($value)
    {
        $this->setProperty('hasMolecularFunction', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHasMolecularFunction()
    {
       return $this->getProperty('hasMolecularFunction');
    }


    /**
        * A BioChemEntity that is known to interact with this item.
        * @param array|string|mixed $value
    * @return $this
    */
    public function bioChemInteraction($value)
    {
        $this->setProperty('bioChemInteraction', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setBioChemInteraction($value)
    {
        $this->setProperty('bioChemInteraction', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBioChemInteraction()
    {
       return $this->getProperty('bioChemInteraction');
    }


}
