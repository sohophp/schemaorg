<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\WebPage;

  use Sohophp\SchemaOrg\Thing\CreativeWork\WebPage;
  use Sohophp\SchemaOrg\Thing\Intangible\Audience\MedicalAudience;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalAudienceType;

/**
  * A web page that provides medical information.
  * @see schema:MedicalWebPage
* @package Sohophp\SchemaOrg\Thing\CreativeWork\WebPage
*/
class MedicalWebPage extends WebPage
{


  /**
      * Medical audience for page.
    * @param MedicalAudience|MedicalAudienceType|array $value
  * @return $this
  */
  public function medicalAudience($value)
  {
  $this->setProperty('medicalAudience', $value);
  return $this;
  }

  /**
  * @param MedicalAudience|MedicalAudienceType|array $value
  * @return $this
  */
  public function setMedicalAudience($value)
  {
  $this->setProperty('medicalAudience', $value);
  return $this;
  }

  /**
  * @param MedicalAudience|MedicalAudienceType $value
  * @return $this
  */
  public function addMedicalAudience($value)
  {
  $current = $this->getProperty('medicalAudience');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('medicalAudience', $current);
  return $this;
  }

  /**
  * @return MedicalAudience|MedicalAudienceType|array
  */
  public function getMedicalAudience()
  {
  return $this->getProperty('medicalAudience');
  }


  /**
      * An aspect of medical practice that is considered on the page, such as
 * 'diagnosis', 'treatment', 'causes', 'prognosis', 'etiology', 'epidemiology',
 * etc.
    * @param string|array $value
  * @return $this
  */
  public function aspect($value)
  {
  $this->setProperty('aspect', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setAspect($value)
  {
  $this->setProperty('aspect', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addAspect($value)
  {
  $current = $this->getProperty('aspect');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('aspect', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getAspect()
  {
  return $this->getProperty('aspect');
  }


}
