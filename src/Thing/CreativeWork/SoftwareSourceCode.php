<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

  use Sohophp\SchemaOrg\Thing\CreativeWork;
  use Sohophp\SchemaOrg\Thing\Intangible\ComputerLanguage;
  use Sohophp\SchemaOrg\Thing\CreativeWork\SoftwareApplication;
  use Sohophp\SchemaOrg\Thing\CreativeWork\SoftwareApplication\RuntimePlatform;

/**
  * Computer programming source code. Example: Full (compile ready) solutions,
 * code snippet samples, scripts, templates.
  * @see schema:SoftwareSourceCode
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class SoftwareSourceCode extends CreativeWork
{


  /**
      * The computer programming language.
    * @param string|ComputerLanguage|array $value
  * @return $this
  */
  public function programmingLanguage($value)
  {
  $this->setProperty('programmingLanguage', $value);
  return $this;
  }

  /**
  * @param string|ComputerLanguage|array $value
  * @return $this
  */
  public function setProgrammingLanguage($value)
  {
  $this->setProperty('programmingLanguage', $value);
  return $this;
  }

  /**
  * @param string|ComputerLanguage $value
  * @return $this
  */
  public function addProgrammingLanguage($value)
  {
  $current = $this->getProperty('programmingLanguage');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('programmingLanguage', $current);
  return $this;
  }

  /**
  * @return string|ComputerLanguage|array
  */
  public function getProgrammingLanguage()
  {
  return $this->getProperty('programmingLanguage');
  }


  /**
      * Target Operating System / Product to which the code applies.  If applies to
 * several versions, just the product name can be used.
    * @param SoftwareApplication|array $value
  * @return $this
  */
  public function targetProduct($value)
  {
  $this->setProperty('targetProduct', $value);
  return $this;
  }

  /**
  * @param SoftwareApplication|array $value
  * @return $this
  */
  public function setTargetProduct($value)
  {
  $this->setProperty('targetProduct', $value);
  return $this;
  }

  /**
  * @param SoftwareApplication $value
  * @return $this
  */
  public function addTargetProduct($value)
  {
  $current = $this->getProperty('targetProduct');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('targetProduct', $current);
  return $this;
  }

  /**
  * @return SoftwareApplication|array
  */
  public function getTargetProduct()
  {
  return $this->getProperty('targetProduct');
  }


  /**
      * What type of code sample: full (compile ready) solution, code snippet, inline
 * code, scripts, template.
    * @param string|array $value
  * @return $this
  */
  public function codeSampleType($value)
  {
  $this->setProperty('codeSampleType', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setCodeSampleType($value)
  {
  $this->setProperty('codeSampleType', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addCodeSampleType($value)
  {
  $current = $this->getProperty('codeSampleType');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('codeSampleType', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getCodeSampleType()
  {
  return $this->getProperty('codeSampleType');
  }


  /**
      * Runtime platform or script interpreter dependencies (example: Java v1, Python
 * 2.3, .NET Framework 3.0).
    * @param RuntimePlatform|string|array $value
  * @return $this
  */
  public function runtimePlatform($value)
  {
  $this->setProperty('runtimePlatform', $value);
  return $this;
  }

  /**
  * @param RuntimePlatform|string|array $value
  * @return $this
  */
  public function setRuntimePlatform($value)
  {
  $this->setProperty('runtimePlatform', $value);
  return $this;
  }

  /**
  * @param RuntimePlatform|string $value
  * @return $this
  */
  public function addRuntimePlatform($value)
  {
  $current = $this->getProperty('runtimePlatform');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('runtimePlatform', $current);
  return $this;
  }

  /**
  * @return RuntimePlatform|string|array
  */
  public function getRuntimePlatform()
  {
  return $this->getProperty('runtimePlatform');
  }


  /**
      * Runtime platform or script interpreter dependencies (example: Java v1, Python
 * 2.3, .NET Framework 3.0).
    * @param string|array $value
  * @return $this
  */
  public function runtime($value)
  {
  $this->setProperty('runtime', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setRuntime($value)
  {
  $this->setProperty('runtime', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addRuntime($value)
  {
  $current = $this->getProperty('runtime');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('runtime', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getRuntime()
  {
  return $this->getProperty('runtime');
  }


  /**
      * Link to the repository where the un-compiled, human readable code and related
 * code is located (SVN, GitHub, CodePlex).
    * @param string|array $value
  * @return $this
  */
  public function codeRepository($value)
  {
  $this->setProperty('codeRepository', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setCodeRepository($value)
  {
  $this->setProperty('codeRepository', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addCodeRepository($value)
  {
  $current = $this->getProperty('codeRepository');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('codeRepository', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getCodeRepository()
  {
  return $this->getProperty('codeRepository');
  }


  /**
      * What type of code sample: full (compile ready) solution, code snippet, inline
 * code, scripts, template.
    * @param string|array $value
  * @return $this
  */
  public function sampleType($value)
  {
  $this->setProperty('sampleType', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setSampleType($value)
  {
  $this->setProperty('sampleType', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addSampleType($value)
  {
  $current = $this->getProperty('sampleType');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('sampleType', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getSampleType()
  {
  return $this->getProperty('sampleType');
  }


}
