<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity;

use Sohophp\SchemaOrg\Thing\MedicalEntity;

/**
* Any part of the human body, typically a component of an anatomical system. Organs, tissues, and cells are all anatomical structures.
* @see schema:AnatomicalStructure
* @package Sohophp\SchemaOrg\Thing\MedicalEntity
*/
class AnatomicalStructure extends MedicalEntity
{
   /**
        * If applicable, a description of the pathophysiology associated with the anatomical system, including potential abnormal changes in the mechanical, physical, and biochemical functions of the system.
        */
    protected $associatedPathophysiology = null;

   /**
        * A medical therapy related to this anatomy.
        */
    protected $relatedTherapy = null;

   /**
        * A medical condition associated with this anatomy.
        */
    protected $relatedCondition = null;

   /**
        * Other anatomical structures to which this structure is connected.
        */
    protected $connectedTo = null;

   /**
        * The anatomical or organ system that this structure is part of.
        */
    protected $partOfSystem = null;

   /**
        * Component (sub-)structure(s) that comprise this anatomical structure.
        */
    protected $subStructure = null;

   /**
        * An image containing a diagram that illustrates the structure and/or its component substructures and/or connections with other structures.
        */
    protected $diagram = null;

   /**
        * Location in the body of the anatomical structure.
        */
    protected $bodyLocation = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setAssociatedPathophysiology($value)
    {
        $this->setProperty('associatedPathophysiology', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAssociatedPathophysiology()
    {
       return $this->getProperty('associatedPathophysiology');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setRelatedTherapy($value)
    {
        $this->setProperty('relatedTherapy', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRelatedTherapy()
    {
       return $this->getProperty('relatedTherapy');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setRelatedCondition($value)
    {
        $this->setProperty('relatedCondition', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRelatedCondition()
    {
       return $this->getProperty('relatedCondition');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setConnectedTo($value)
    {
        $this->setProperty('connectedTo', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getConnectedTo()
    {
       return $this->getProperty('connectedTo');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setPartOfSystem($value)
    {
        $this->setProperty('partOfSystem', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPartOfSystem()
    {
       return $this->getProperty('partOfSystem');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setSubStructure($value)
    {
        $this->setProperty('subStructure', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSubStructure()
    {
       return $this->getProperty('subStructure');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setDiagram($value)
    {
        $this->setProperty('diagram', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDiagram()
    {
       return $this->getProperty('diagram');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setBodyLocation($value)
    {
        $this->setProperty('bodyLocation', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBodyLocation()
    {
       return $this->getProperty('bodyLocation');
    }


}
