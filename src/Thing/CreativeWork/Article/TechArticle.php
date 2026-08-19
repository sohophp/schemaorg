<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\Article;

  use Sohophp\SchemaOrg\Thing\CreativeWork\Article;

/**
  * A technical article - Example: How-to (task) topics, step-by-step, procedural
 * troubleshooting, specifications, etc.
  * @see schema:TechArticle
* @package Sohophp\SchemaOrg\Thing\CreativeWork\Article
*/
class TechArticle extends Article
{


  /**
      * Prerequisites needed to fulfill steps in article.
    * @param string|array $value
  * @return $this
  */
  public function dependencies($value)
  {
  $this->setProperty('dependencies', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setDependencies($value)
  {
  $this->setProperty('dependencies', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addDependencies($value)
  {
  $current = $this->getProperty('dependencies');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('dependencies', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getDependencies()
  {
  return $this->getProperty('dependencies');
  }


  /**
      * Proficiency needed for this content; expected values: 'Beginner', 'Expert'.
    * @param string|array $value
  * @return $this
  */
  public function proficiencyLevel($value)
  {
  $this->setProperty('proficiencyLevel', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setProficiencyLevel($value)
  {
  $this->setProperty('proficiencyLevel', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addProficiencyLevel($value)
  {
  $current = $this->getProperty('proficiencyLevel');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('proficiencyLevel', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getProficiencyLevel()
  {
  return $this->getProperty('proficiencyLevel');
  }


}
