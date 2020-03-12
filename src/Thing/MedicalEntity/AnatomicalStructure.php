<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\MedicalEntity;

use Sohophp\SchemaOrg\Thing\MedicalEntity;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject;
use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy;

/**
* Any part of the human body, typically a component of an anatomical system. Organs, tissues, and cells are all anatomical structures.
* @see http://schema.org/AnatomicalStructure
* @package Sohophp\SchemaOrg\Thing\MedicalEntity

*
*/
class AnatomicalStructure extends MedicalEntity
{

    /**
    * A medical condition associated with this anatomy.
    * @param MedicalCondition|array $value
    * @return $this
    */
    public function relatedCondition(?MedicalCondition $value)
    {
        $this->setProperty('relatedCondition', $value);
        return $this;
    }
   /**
    * @param MedicalCondition|array $value
    * @return $this
    */
    public function setRelatedCondition(?MedicalCondition $value)
    {
        $this->setProperty('relatedCondition', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getRelatedCondition()
    {
       return $this->getProperty('relatedCondition');
    }

    /**
    * Other anatomical structures to which this structure is connected.
    * @param AnatomicalStructure|array $value
    * @return $this
    */
    public function connectedTo(?AnatomicalStructure $value)
    {
        $this->setProperty('connectedTo', $value);
        return $this;
    }
   /**
    * @param AnatomicalStructure|array $value
    * @return $this
    */
    public function setConnectedTo(?AnatomicalStructure $value)
    {
        $this->setProperty('connectedTo', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getConnectedTo()
    {
       return $this->getProperty('connectedTo');
    }

    /**
    * An image containing a diagram that illustrates the structure and/or its component substructures and/or connections with other structures.
    * @param ImageObject|array $value
    * @return $this
    */
    public function diagram(?ImageObject $value)
    {
        $this->setProperty('diagram', $value);
        return $this;
    }
   /**
    * @param ImageObject|array $value
    * @return $this
    */
    public function setDiagram(?ImageObject $value)
    {
        $this->setProperty('diagram', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDiagram()
    {
       return $this->getProperty('diagram');
    }

    /**
    * If applicable, a description of the pathophysiology associated with the anatomical system, including potential abnormal changes in the mechanical, physical, and biochemical functions of the system.
    * @param string|array $value
    * @return $this
    */
    public function associatedPathophysiology(?string $value)
    {
        $this->setProperty('associatedPathophysiology', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setAssociatedPathophysiology(?string $value)
    {
        $this->setProperty('associatedPathophysiology', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAssociatedPathophysiology()
    {
       return $this->getProperty('associatedPathophysiology');
    }

    /**
    * Location in the body of the anatomical structure.
    * @param string|array $value
    * @return $this
    */
    public function bodyLocation(?string $value)
    {
        $this->setProperty('bodyLocation', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setBodyLocation(?string $value)
    {
        $this->setProperty('bodyLocation', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getBodyLocation()
    {
       return $this->getProperty('bodyLocation');
    }

    /**
    * Component (sub-)structure(s) that comprise this anatomical structure.
    * @param AnatomicalStructure|array $value
    * @return $this
    */
    public function subStructure(?AnatomicalStructure $value)
    {
        $this->setProperty('subStructure', $value);
        return $this;
    }
   /**
    * @param AnatomicalStructure|array $value
    * @return $this
    */
    public function setSubStructure(?AnatomicalStructure $value)
    {
        $this->setProperty('subStructure', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSubStructure()
    {
       return $this->getProperty('subStructure');
    }

    /**
    * Function of the anatomical structure.
    * @param string|array $value
    * @return $this
    */
    public function function(?string $value)
    {
        $this->setProperty('function', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setFunction(?string $value)
    {
        $this->setProperty('function', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getFunction()
    {
       return $this->getProperty('function');
    }

    /**
    * The anatomical or organ system that this structure is part of.
    * @param AnatomicalSystem|array $value
    * @return $this
    */
    public function partOfSystem(?AnatomicalSystem $value)
    {
        $this->setProperty('partOfSystem', $value);
        return $this;
    }
   /**
    * @param AnatomicalSystem|array $value
    * @return $this
    */
    public function setPartOfSystem(?AnatomicalSystem $value)
    {
        $this->setProperty('partOfSystem', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPartOfSystem()
    {
       return $this->getProperty('partOfSystem');
    }

    /**
    * A medical therapy related to this anatomy.
    * @param MedicalTherapy|array $value
    * @return $this
    */
    public function relatedTherapy(?MedicalTherapy $value)
    {
        $this->setProperty('relatedTherapy', $value);
        return $this;
    }
   /**
    * @param MedicalTherapy|array $value
    * @return $this
    */
    public function setRelatedTherapy(?MedicalTherapy $value)
    {
        $this->setProperty('relatedTherapy', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getRelatedTherapy()
    {
       return $this->getProperty('relatedTherapy');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity\\AnatomicalStructure','Thing\\AnatomicalStructure');

