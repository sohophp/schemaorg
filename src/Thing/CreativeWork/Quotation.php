<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

  use Sohophp\SchemaOrg\Thing\CreativeWork;
  use Sohophp\SchemaOrg\Thing\Organization;
  use Sohophp\SchemaOrg\Thing\Person;

/**
  * A quotation. Often but not necessarily from some written work, attributable
 * to a real world author and - if associated with a fictional character - to
 * any fictional Person. Use [[isBasedOn]] to link to source/origin. The
 * [[recordedIn]] property can be used to reference a Quotation from an
 * [[Event]].
  * @see schema:Quotation
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Quotation extends CreativeWork
{


  /**
      * The (e.g. fictional) character, Person or Organization to whom the quotation
 * is attributed within the containing CreativeWork.
    * @param Organization|Person|array $value
  * @return $this
  */
  public function spokenByCharacter($value)
  {
  $this->setProperty('spokenByCharacter', $value);
  return $this;
  }

  /**
  * @param Organization|Person|array $value
  * @return $this
  */
  public function setSpokenByCharacter($value)
  {
  $this->setProperty('spokenByCharacter', $value);
  return $this;
  }

  /**
  * @param Organization|Person $value
  * @return $this
  */
  public function addSpokenByCharacter($value)
  {
  $current = $this->getProperty('spokenByCharacter');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('spokenByCharacter', $current);
  return $this;
  }

  /**
  * @return Organization|Person|array
  */
  public function getSpokenByCharacter()
  {
  return $this->getProperty('spokenByCharacter');
  }


}
