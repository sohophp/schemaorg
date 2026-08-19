<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity;

  use Sohophp\SchemaOrg\Thing\MedicalEntity;
  use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalContraindication;

/**
  * Any object used in a medical capacity, such as to diagnose or treat a
 * patient.
  * @see schema:MedicalDevice
* @package Sohophp\SchemaOrg\Thing\MedicalEntity
*/
class MedicalDevice extends MedicalEntity
{


  /**
      * A description of the workup, testing, and other preparations required before
 * implanting this device.
    * @param string|array $value
  * @return $this
  */
  public function preOp($value)
  {
  $this->setProperty('preOp', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setPreOp($value)
  {
  $this->setProperty('preOp', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addPreOp($value)
  {
  $current = $this->getProperty('preOp');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('preOp', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getPreOp()
  {
  return $this->getProperty('preOp');
  }


  /**
      * A possible complication and/or side effect of this therapy. If it is known
 * that an adverse outcome is serious (resulting in death, disability, or
 * permanent damage; requiring hospitalization; or otherwise life-threatening or
 * requiring immediate medical attention), tag it as a seriousAdverseOutcome
 * instead.
    * @param MedicalEntity|array $value
  * @return $this
  */
  public function adverseOutcome($value)
  {
  $this->setProperty('adverseOutcome', $value);
  return $this;
  }

  /**
  * @param MedicalEntity|array $value
  * @return $this
  */
  public function setAdverseOutcome($value)
  {
  $this->setProperty('adverseOutcome', $value);
  return $this;
  }

  /**
  * @param MedicalEntity $value
  * @return $this
  */
  public function addAdverseOutcome($value)
  {
  $current = $this->getProperty('adverseOutcome');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('adverseOutcome', $current);
  return $this;
  }

  /**
  * @return MedicalEntity|array
  */
  public function getAdverseOutcome()
  {
  return $this->getProperty('adverseOutcome');
  }


  /**
      * A contraindication for this therapy.
    * @param string|MedicalContraindication|array $value
  * @return $this
  */
  public function contraindication($value)
  {
  $this->setProperty('contraindication', $value);
  return $this;
  }

  /**
  * @param string|MedicalContraindication|array $value
  * @return $this
  */
  public function setContraindication($value)
  {
  $this->setProperty('contraindication', $value);
  return $this;
  }

  /**
  * @param string|MedicalContraindication $value
  * @return $this
  */
  public function addContraindication($value)
  {
  $current = $this->getProperty('contraindication');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('contraindication', $current);
  return $this;
  }

  /**
  * @return string|MedicalContraindication|array
  */
  public function getContraindication()
  {
  return $this->getProperty('contraindication');
  }


  /**
      * A description of the procedure involved in setting up, using, and/or
 * installing the device.
    * @param string|array $value
  * @return $this
  */
  public function procedure($value)
  {
  $this->setProperty('procedure', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setProcedure($value)
  {
  $this->setProperty('procedure', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addProcedure($value)
  {
  $current = $this->getProperty('procedure');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('procedure', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getProcedure()
  {
  return $this->getProperty('procedure');
  }


  /**
      * A possible serious complication and/or serious side effect of this therapy.
 * Serious adverse outcomes include those that are life-threatening; result in
 * death, disability, or permanent damage; require hospitalization or prolong
 * existing hospitalization; cause congenital anomalies or birth defects; or
 * jeopardize the patient and may require medical or surgical intervention to
 * prevent one of the outcomes in this definition.
    * @param MedicalEntity|array $value
  * @return $this
  */
  public function seriousAdverseOutcome($value)
  {
  $this->setProperty('seriousAdverseOutcome', $value);
  return $this;
  }

  /**
  * @param MedicalEntity|array $value
  * @return $this
  */
  public function setSeriousAdverseOutcome($value)
  {
  $this->setProperty('seriousAdverseOutcome', $value);
  return $this;
  }

  /**
  * @param MedicalEntity $value
  * @return $this
  */
  public function addSeriousAdverseOutcome($value)
  {
  $current = $this->getProperty('seriousAdverseOutcome');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('seriousAdverseOutcome', $current);
  return $this;
  }

  /**
  * @return MedicalEntity|array
  */
  public function getSeriousAdverseOutcome()
  {
  return $this->getProperty('seriousAdverseOutcome');
  }


  /**
      * A description of the postoperative procedures, care, and/or followups for
 * this device.
    * @param string|array $value
  * @return $this
  */
  public function postOp($value)
  {
  $this->setProperty('postOp', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setPostOp($value)
  {
  $this->setProperty('postOp', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addPostOp($value)
  {
  $current = $this->getProperty('postOp');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('postOp', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getPostOp()
  {
  return $this->getProperty('postOp');
  }


}
