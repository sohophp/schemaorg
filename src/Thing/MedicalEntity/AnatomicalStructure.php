<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity;

  use Sohophp\SchemaOrg\Thing\MedicalEntity;
  use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy;
  use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject;
  use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition;
  use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem;

/**
  * Any part of the human body, typically a component of an anatomical system.
 * Organs, tissues, and cells are all anatomical structures.
  * @see schema:AnatomicalStructure
* @package Sohophp\SchemaOrg\Thing\MedicalEntity
*/
class AnatomicalStructure extends MedicalEntity
{


  /**
      * Component (sub-)structure(s) that comprise this anatomical structure.
    * @param AnatomicalStructure|array $value
  * @return $this
  */
  public function subStructure($value)
  {
  $this->setProperty('subStructure', $value);
  return $this;
  }

  /**
  * @param AnatomicalStructure|array $value
  * @return $this
  */
  public function setSubStructure($value)
  {
  $this->setProperty('subStructure', $value);
  return $this;
  }

  /**
  * @param AnatomicalStructure $value
  * @return $this
  */
  public function addSubStructure($value)
  {
  $current = $this->getProperty('subStructure');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('subStructure', $current);
  return $this;
  }

  /**
  * @return AnatomicalStructure|array
  */
  public function getSubStructure()
  {
  return $this->getProperty('subStructure');
  }


  /**
      * Other anatomical structures to which this structure is connected.
    * @param AnatomicalStructure|array $value
  * @return $this
  */
  public function connectedTo($value)
  {
  $this->setProperty('connectedTo', $value);
  return $this;
  }

  /**
  * @param AnatomicalStructure|array $value
  * @return $this
  */
  public function setConnectedTo($value)
  {
  $this->setProperty('connectedTo', $value);
  return $this;
  }

  /**
  * @param AnatomicalStructure $value
  * @return $this
  */
  public function addConnectedTo($value)
  {
  $current = $this->getProperty('connectedTo');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('connectedTo', $current);
  return $this;
  }

  /**
  * @return AnatomicalStructure|array
  */
  public function getConnectedTo()
  {
  return $this->getProperty('connectedTo');
  }


  /**
      * Location in the body of the anatomical structure.
    * @param string|array $value
  * @return $this
  */
  public function bodyLocation($value)
  {
  $this->setProperty('bodyLocation', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setBodyLocation($value)
  {
  $this->setProperty('bodyLocation', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addBodyLocation($value)
  {
  $current = $this->getProperty('bodyLocation');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('bodyLocation', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getBodyLocation()
  {
  return $this->getProperty('bodyLocation');
  }


  /**
      * If applicable, a description of the pathophysiology associated with the
 * anatomical system, including potential abnormal changes in the mechanical,
 * physical, and biochemical functions of the system.
    * @param string|array $value
  * @return $this
  */
  public function associatedPathophysiology($value)
  {
  $this->setProperty('associatedPathophysiology', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setAssociatedPathophysiology($value)
  {
  $this->setProperty('associatedPathophysiology', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addAssociatedPathophysiology($value)
  {
  $current = $this->getProperty('associatedPathophysiology');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('associatedPathophysiology', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getAssociatedPathophysiology()
  {
  return $this->getProperty('associatedPathophysiology');
  }


  /**
      * A medical therapy related to this anatomy.
    * @param MedicalTherapy|array $value
  * @return $this
  */
  public function relatedTherapy($value)
  {
  $this->setProperty('relatedTherapy', $value);
  return $this;
  }

  /**
  * @param MedicalTherapy|array $value
  * @return $this
  */
  public function setRelatedTherapy($value)
  {
  $this->setProperty('relatedTherapy', $value);
  return $this;
  }

  /**
  * @param MedicalTherapy $value
  * @return $this
  */
  public function addRelatedTherapy($value)
  {
  $current = $this->getProperty('relatedTherapy');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('relatedTherapy', $current);
  return $this;
  }

  /**
  * @return MedicalTherapy|array
  */
  public function getRelatedTherapy()
  {
  return $this->getProperty('relatedTherapy');
  }


  /**
      * An image containing a diagram that illustrates the structure and/or its
 * component substructures and/or connections with other structures.
    * @param ImageObject|array $value
  * @return $this
  */
  public function diagram($value)
  {
  $this->setProperty('diagram', $value);
  return $this;
  }

  /**
  * @param ImageObject|array $value
  * @return $this
  */
  public function setDiagram($value)
  {
  $this->setProperty('diagram', $value);
  return $this;
  }

  /**
  * @param ImageObject $value
  * @return $this
  */
  public function addDiagram($value)
  {
  $current = $this->getProperty('diagram');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('diagram', $current);
  return $this;
  }

  /**
  * @return ImageObject|array
  */
  public function getDiagram()
  {
  return $this->getProperty('diagram');
  }


  /**
      * A medical condition associated with this anatomy.
    * @param MedicalCondition|array $value
  * @return $this
  */
  public function relatedCondition($value)
  {
  $this->setProperty('relatedCondition', $value);
  return $this;
  }

  /**
  * @param MedicalCondition|array $value
  * @return $this
  */
  public function setRelatedCondition($value)
  {
  $this->setProperty('relatedCondition', $value);
  return $this;
  }

  /**
  * @param MedicalCondition $value
  * @return $this
  */
  public function addRelatedCondition($value)
  {
  $current = $this->getProperty('relatedCondition');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('relatedCondition', $current);
  return $this;
  }

  /**
  * @return MedicalCondition|array
  */
  public function getRelatedCondition()
  {
  return $this->getProperty('relatedCondition');
  }


  /**
      * The anatomical or organ system that this structure is part of.
    * @param AnatomicalSystem|array $value
  * @return $this
  */
  public function partOfSystem($value)
  {
  $this->setProperty('partOfSystem', $value);
  return $this;
  }

  /**
  * @param AnatomicalSystem|array $value
  * @return $this
  */
  public function setPartOfSystem($value)
  {
  $this->setProperty('partOfSystem', $value);
  return $this;
  }

  /**
  * @param AnatomicalSystem $value
  * @return $this
  */
  public function addPartOfSystem($value)
  {
  $current = $this->getProperty('partOfSystem');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('partOfSystem', $current);
  return $this;
  }

  /**
  * @return AnatomicalSystem|array
  */
  public function getPartOfSystem()
  {
  return $this->getProperty('partOfSystem');
  }


}
