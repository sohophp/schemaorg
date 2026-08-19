<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm;

  use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm;
  use Sohophp\SchemaOrg\Thing\CreativeWork\DefinedTermSet\CategoryCodeSet;

/**
  * A Category Code.
  * @see schema:CategoryCode
* @package Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm
*/
class CategoryCode extends DefinedTerm
{


  /**
      * A short textual code that uniquely identifies the value.
    * @param string|array $value
  * @return $this
  */
  public function codeValue($value)
  {
  $this->setProperty('codeValue', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setCodeValue($value)
  {
  $this->setProperty('codeValue', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addCodeValue($value)
  {
  $current = $this->getProperty('codeValue');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('codeValue', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getCodeValue()
  {
  return $this->getProperty('codeValue');
  }


  /**
      * A [[CategoryCodeSet]] that contains this category code.
    * @param string|CategoryCodeSet|array $value
  * @return $this
  */
  public function inCodeSet($value)
  {
  $this->setProperty('inCodeSet', $value);
  return $this;
  }

  /**
  * @param string|CategoryCodeSet|array $value
  * @return $this
  */
  public function setInCodeSet($value)
  {
  $this->setProperty('inCodeSet', $value);
  return $this;
  }

  /**
  * @param string|CategoryCodeSet $value
  * @return $this
  */
  public function addInCodeSet($value)
  {
  $current = $this->getProperty('inCodeSet');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('inCodeSet', $current);
  return $this;
  }

  /**
  * @return string|CategoryCodeSet|array
  */
  public function getInCodeSet()
  {
  return $this->getProperty('inCodeSet');
  }


}
