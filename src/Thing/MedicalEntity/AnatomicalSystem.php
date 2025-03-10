<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity;

use Sohophp\SchemaOrg\Thing\MedicalEntity;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition;
use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy;

/**
* An anatomical system is a group of anatomical structures that work together
 * to perform a certain task. Anatomical systems, such as organ systems, are one
 * organizing principle of anatomy, and can includes circulatory, digestive,
 * endocrine, integumentary, immune, lymphatic, muscular, nervous, reproductive,
 * respiratory, skeletal, urinary, vestibular, and other systems.
* @see http://schema.org/AnatomicalSystem
* @package Sohophp\SchemaOrg\Thing\MedicalEntity
*/
class AnatomicalSystem extends MedicalEntity
{


    /**
        * A medical condition associated with this anatomy.
        * @param MedicalCondition|array|string|mixed $value
    * @return $this
    */
    public function relatedCondition($value)
    {
        $this->setProperty('relatedCondition', $value);
        return $this;
    }

    /**
    * @param MedicalCondition|array|string|mixed $value
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
        * Specifying something physically contained by something else. Typically used
 * here for the underlying anatomical structures, such as organs, that comprise
 * the anatomical system.
        * @param AnatomicalSystem|AnatomicalStructure|array|string|mixed $value
    * @return $this
    */
    public function comprisedOf($value)
    {
        $this->setProperty('comprisedOf', $value);
        return $this;
    }

    /**
    * @param AnatomicalSystem|AnatomicalStructure|array|string|mixed $value
    * @return $this
    */
    public function setComprisedOf($value)
    {
        $this->setProperty('comprisedOf', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getComprisedOf()
    {
       return $this->getProperty('comprisedOf');
    }


    /**
        * If applicable, a description of the pathophysiology associated with the
 * anatomical system, including potential abnormal changes in the mechanical,
 * physical, and biochemical functions of the system.
        * @param string|array|mixed $value
    * @return $this
    */
    public function associatedPathophysiology($value)
    {
        $this->setProperty('associatedPathophysiology', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
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
        * Related anatomical structure(s) that are not part of the system but relate or
 * connect to it, such as vascular bundles associated with an organ system.
        * @param AnatomicalStructure|array|string|mixed $value
    * @return $this
    */
    public function relatedStructure($value)
    {
        $this->setProperty('relatedStructure', $value);
        return $this;
    }

    /**
    * @param AnatomicalStructure|array|string|mixed $value
    * @return $this
    */
    public function setRelatedStructure($value)
    {
        $this->setProperty('relatedStructure', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRelatedStructure()
    {
       return $this->getProperty('relatedStructure');
    }


    /**
        * A medical therapy related to this anatomy.
        * @param MedicalTherapy|array|string|mixed $value
    * @return $this
    */
    public function relatedTherapy($value)
    {
        $this->setProperty('relatedTherapy', $value);
        return $this;
    }

    /**
    * @param MedicalTherapy|array|string|mixed $value
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


}
