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
*/
class AnatomicalStructure extends MedicalEntity
{

    /**
    * A medical condition associated with this anatomy.
    * @param MedicalCondition $value
    * @return $this
    */
    public function relatedCondition(?MedicalCondition $value)
    {
        $this->setProperty('relatedCondition', $value);
        return $this;
    }

    /**
    * Other anatomical structures to which this structure is connected.
    * @param AnatomicalStructure $value
    * @return $this
    */
    public function connectedTo(?AnatomicalStructure $value)
    {
        $this->setProperty('connectedTo', $value);
        return $this;
    }

    /**
    * An image containing a diagram that illustrates the structure and/or its component substructures and/or connections with other structures.
    * @param ImageObject $value
    * @return $this
    */
    public function diagram(?ImageObject $value)
    {
        $this->setProperty('diagram', $value);
        return $this;
    }

    /**
    * If applicable, a description of the pathophysiology associated with the anatomical system, including potential abnormal changes in the mechanical, physical, and biochemical functions of the system.
    * @param string $value
    * @return $this
    */
    public function associatedPathophysiology(?string $value)
    {
        $this->setProperty('associatedPathophysiology', $value);
        return $this;
    }

    /**
    * Location in the body of the anatomical structure.
    * @param string $value
    * @return $this
    */
    public function bodyLocation(?string $value)
    {
        $this->setProperty('bodyLocation', $value);
        return $this;
    }

    /**
    * Component (sub-)structure(s) that comprise this anatomical structure.
    * @param AnatomicalStructure $value
    * @return $this
    */
    public function subStructure(?AnatomicalStructure $value)
    {
        $this->setProperty('subStructure', $value);
        return $this;
    }

    /**
    * Function of the anatomical structure.
    * @param string $value
    * @return $this
    */
    public function function(?string $value)
    {
        $this->setProperty('function', $value);
        return $this;
    }

    /**
    * The anatomical or organ system that this structure is part of.
    * @param AnatomicalSystem $value
    * @return $this
    */
    public function partOfSystem(?AnatomicalSystem $value)
    {
        $this->setProperty('partOfSystem', $value);
        return $this;
    }

    /**
    * A medical therapy related to this anatomy.
    * @param MedicalTherapy $value
    * @return $this
    */
    public function relatedTherapy(?MedicalTherapy $value)
    {
        $this->setProperty('relatedTherapy', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity\\AnatomicalStructure','Thing\\AnatomicalStructure');

