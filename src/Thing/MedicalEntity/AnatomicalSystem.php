<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity;

use Sohophp\SchemaOrg\Thing\MedicalEntity;

/**
* An anatomical system is a group of anatomical structures that work together to perform a certain task. Anatomical systems, such as organ systems, are one organizing principle of anatomy, and can include circulatory, digestive, endocrine, integumentary, immune, lymphatic, muscular, nervous, reproductive, respiratory, skeletal, urinary, vestibular, and other systems.
* @see schema:AnatomicalSystem
* @package Sohophp\SchemaOrg\Thing\MedicalEntity
*/
class AnatomicalSystem extends MedicalEntity
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
        * Related anatomical structure(s) that are not part of the system but relate or connect to it, such as vascular bundles associated with an organ system.
        */
    protected $relatedStructure = null;

   /**
        * Specifying something physically contained by something else. Typically used here for the underlying anatomical structures, such as organs, that comprise the anatomical system.
        */
    protected $comprisedOf = null;


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
    * @param array|string $value
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


}
