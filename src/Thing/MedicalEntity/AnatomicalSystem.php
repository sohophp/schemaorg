<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\MedicalEntity;

use Sohophp\SchemaOrg\Thing\MedicalEntity;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition;
use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy;

/**
* An anatomical system is a group of anatomical structures that work together to perform a certain task. Anatomical systems, such as organ systems, are one organizing principle of anatomy, and can includes circulatory, digestive, endocrine, integumentary, immune, lymphatic, muscular, nervous, reproductive, respiratory, skeletal, urinary, vestibular, and other systems.
* @see http://schema.org/AnatomicalSystem
* @package Sohophp\SchemaOrg\Thing\MedicalEntity
*/
class AnatomicalSystem extends MedicalEntity
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
    * Specifying something physically contained by something else. Typically used here for the underlying anatomical structures, such as organs, that comprise the anatomical system.
    * @param AnatomicalSystem|AnatomicalStructure $value
    * @return $this
    */
    public function comprisedOf($value)
    {
        $this->setProperty('comprisedOf', $value);
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
    * Related anatomical structure(s) that are not part of the system but relate or connect to it, such as vascular bundles associated with an organ system.
    * @param AnatomicalStructure $value
    * @return $this
    */
    public function relatedStructure(?AnatomicalStructure $value)
    {
        $this->setProperty('relatedStructure', $value);
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


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity\\AnatomicalSystem','Thing\\AnatomicalSystem');

