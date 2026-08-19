<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalTest;

  use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalTest;

/**
  * Any collection of tests commonly ordered together.
  * @see schema:MedicalTestPanel
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalTest
*/
class MedicalTestPanel extends MedicalTest
{


  /**
      * A component test of the panel.
    * @param MedicalTest|array $value
  * @return $this
  */
  public function subTest($value)
  {
  $this->setProperty('subTest', $value);
  return $this;
  }

  /**
  * @param MedicalTest|array $value
  * @return $this
  */
  public function setSubTest($value)
  {
  $this->setProperty('subTest', $value);
  return $this;
  }

  /**
  * @param MedicalTest $value
  * @return $this
  */
  public function addSubTest($value)
  {
  $current = $this->getProperty('subTest');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('subTest', $current);
  return $this;
  }

  /**
  * @return MedicalTest|array
  */
  public function getSubTest()
  {
  return $this->getProperty('subTest');
  }


}
