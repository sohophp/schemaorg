<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Audience\PeopleAudience;

  use Sohophp\SchemaOrg\Thing\Intangible\Audience\PeopleAudience;

/**
  * A set of characteristics describing parents, who can be interested in viewing
 * some content.
  * @see schema:ParentAudience
* @package Sohophp\SchemaOrg\Thing\Intangible\Audience\PeopleAudience
*/
class ParentAudience extends PeopleAudience
{


  /**
      * Maximal age of the child.
    * @param mixed $value
  * @return $this
  */
  public function childMaxAge($value)
  {
  $this->setProperty('childMaxAge', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setChildMaxAge($value)
  {
  $this->setProperty('childMaxAge', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addChildMaxAge($value)
  {
  $current = $this->getProperty('childMaxAge');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('childMaxAge', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getChildMaxAge()
  {
  return $this->getProperty('childMaxAge');
  }


  /**
      * Minimal age of the child.
    * @param mixed $value
  * @return $this
  */
  public function childMinAge($value)
  {
  $this->setProperty('childMinAge', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setChildMinAge($value)
  {
  $this->setProperty('childMinAge', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addChildMinAge($value)
  {
  $current = $this->getProperty('childMinAge');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('childMinAge', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getChildMinAge()
  {
  return $this->getProperty('childMinAge');
  }


}
