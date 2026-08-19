<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\Credential;

  use Sohophp\SchemaOrg\Thing\CreativeWork\Credential;
  use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm;

/**
  * An educational or occupational credential. A diploma, academic degree,
 * certification, qualification, badge, etc., that may be awarded to a person or
 * other entity that meets the requirements defined by the credentialer.
  * @see schema:EducationalOccupationalCredential
* @package Sohophp\SchemaOrg\Thing\CreativeWork\Credential
*/
class EducationalOccupationalCredential extends Credential
{


  /**
      * Knowledge, skill, ability or personal attribute that must be demonstrated by
 * a person or other entity in order to do something such as earn an Educational
 * Occupational Credential or understand a LearningResource.
    * @param string|DefinedTerm|array $value
  * @return $this
  */
  public function competencyRequired($value)
  {
  $this->setProperty('competencyRequired', $value);
  return $this;
  }

  /**
  * @param string|DefinedTerm|array $value
  * @return $this
  */
  public function setCompetencyRequired($value)
  {
  $this->setProperty('competencyRequired', $value);
  return $this;
  }

  /**
  * @param string|DefinedTerm $value
  * @return $this
  */
  public function addCompetencyRequired($value)
  {
  $current = $this->getProperty('competencyRequired');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('competencyRequired', $current);
  return $this;
  }

  /**
  * @return string|DefinedTerm|array
  */
  public function getCompetencyRequired()
  {
  return $this->getProperty('competencyRequired');
  }


  /**
      * The level in terms of progression through an educational or training context.
 * Examples of educational levels include 'beginner', 'intermediate' or
 * 'advanced', and formal sets of level indicators.
    * @param string|DefinedTerm|array $value
  * @return $this
  */
  public function educationalLevel($value)
  {
  $this->setProperty('educationalLevel', $value);
  return $this;
  }

  /**
  * @param string|DefinedTerm|array $value
  * @return $this
  */
  public function setEducationalLevel($value)
  {
  $this->setProperty('educationalLevel', $value);
  return $this;
  }

  /**
  * @param string|DefinedTerm $value
  * @return $this
  */
  public function addEducationalLevel($value)
  {
  $current = $this->getProperty('educationalLevel');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('educationalLevel', $current);
  return $this;
  }

  /**
  * @return string|DefinedTerm|array
  */
  public function getEducationalLevel()
  {
  return $this->getProperty('educationalLevel');
  }


}
