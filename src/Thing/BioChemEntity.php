<?php
namespace Sohophp\SchemaOrg\Thing;

use Sohophp\SchemaOrg\Thing;

/**
* Any biological, chemical, or biochemical thing. For example: a protein; a gene; a chemical; a synthetic chemical.
* @see schema:BioChemEntity
* @package Sohophp\SchemaOrg\Thing
*/
class BioChemEntity extends Thing
{
   /**
        * The taxonomic grouping of the organism that expresses, encodes, or in some way related to the BioChemEntity.
        */
    protected $taxonomicRange = null;

   /**
        * Subcellular location where this BioChemEntity is located; please use PropertyValue if you want to include any evidence.
        */
    protected $isLocatedInSubcellularLocation = null;

   /**
        * Indicates a BioChemEntity that (in some sense) has this BioChemEntity as a part. 
        */
    protected $hasBioChemEntityPart = null;

   /**
        * Disease associated to this BioChemEntity. Such disease can be a MedicalCondition or a URL. If you want to add an evidence supporting the association, please use PropertyValue.
        */
    protected $associatedDisease = null;

   /**
        * A [[Grant]] that directly or indirectly provide funding or sponsorship for this item. See also [[ownershipFundingInfo]].
        */
    protected $funding = null;

   /**
        * A role played by the BioChemEntity within a biological context.
        */
    protected $biologicalRole = null;

   /**
        * Another BioChemEntity encoding by this one.
        */
    protected $isEncodedByBioChemEntity = null;

   /**
        * Biological process this BioChemEntity is involved in; please use PropertyValue if you want to include any evidence.
        */
    protected $isInvolvedInBiologicalProcess = null;

   /**
        * A similar BioChemEntity, e.g., obtained by fingerprint similarity algorithms.
        */
    protected $bioChemSimilarity = null;

   /**
        * Indicates a BioChemEntity that is (in some sense) a part of this BioChemEntity. 
        */
    protected $isPartOfBioChemEntity = null;

   /**
        * A common representation such as a protein sequence or chemical structure for this entity. For images use schema.org/image.
        */
    protected $hasRepresentation = null;

   /**
        * Molecular function performed by this BioChemEntity; please use PropertyValue if you want to include any evidence.
        */
    protected $hasMolecularFunction = null;

   /**
        * A BioChemEntity that is known to interact with this item.
        */
    protected $bioChemInteraction = null;


    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
