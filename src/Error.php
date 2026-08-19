<?php
namespace Sohophp\SchemaOrg;

  use Sohophp\SchemaOrg\BaseType;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\StatusEnumeration;
  use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm;

/**
  * Representation of an Error.
  * @see schema:Error
* @package Sohophp\SchemaOrg
*/
class Error extends BaseType
{


  /**
      * Application or platform dependant error code.
    * @param StatusEnumeration|int|DefinedTerm|string|array $value
  * @return $this
  */
  public function errorCode($value)
  {
  $this->setProperty('errorCode', $value);
  return $this;
  }

  /**
  * @param StatusEnumeration|int|DefinedTerm|string|array $value
  * @return $this
  */
  public function setErrorCode($value)
  {
  $this->setProperty('errorCode', $value);
  return $this;
  }

  /**
  * @param StatusEnumeration|int|DefinedTerm|string $value
  * @return $this
  */
  public function addErrorCode($value)
  {
  $current = $this->getProperty('errorCode');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('errorCode', $current);
  return $this;
  }

  /**
  * @return StatusEnumeration|int|DefinedTerm|string|array
  */
  public function getErrorCode()
  {
  return $this->getProperty('errorCode');
  }


}
