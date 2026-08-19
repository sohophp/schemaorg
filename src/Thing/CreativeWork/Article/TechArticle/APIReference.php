<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\Article\TechArticle;

  use Sohophp\SchemaOrg\Thing\CreativeWork\Article\TechArticle;

/**
  * Reference documentation for application programming interfaces (APIs).
  * @see schema:APIReference
* @package Sohophp\SchemaOrg\Thing\CreativeWork\Article\TechArticle
*/
class APIReference extends TechArticle
{


  /**
      * Indicates whether API is managed or unmanaged.
    * @param string|array $value
  * @return $this
  */
  public function programmingModel($value)
  {
  $this->setProperty('programmingModel', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setProgrammingModel($value)
  {
  $this->setProperty('programmingModel', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addProgrammingModel($value)
  {
  $current = $this->getProperty('programmingModel');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('programmingModel', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getProgrammingModel()
  {
  return $this->getProperty('programmingModel');
  }


  /**
      * Type of app development: phone, Metro style, desktop, XBox, etc.
    * @param string|array $value
  * @return $this
  */
  public function targetPlatform($value)
  {
  $this->setProperty('targetPlatform', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setTargetPlatform($value)
  {
  $this->setProperty('targetPlatform', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addTargetPlatform($value)
  {
  $current = $this->getProperty('targetPlatform');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('targetPlatform', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getTargetPlatform()
  {
  return $this->getProperty('targetPlatform');
  }


  /**
      * Associated product/technology version. E.g., .NET Framework 4.5.
    * @param string|array $value
  * @return $this
  */
  public function assemblyVersion($value)
  {
  $this->setProperty('assemblyVersion', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setAssemblyVersion($value)
  {
  $this->setProperty('assemblyVersion', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addAssemblyVersion($value)
  {
  $current = $this->getProperty('assemblyVersion');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('assemblyVersion', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getAssemblyVersion()
  {
  return $this->getProperty('assemblyVersion');
  }


  /**
      * Library file name, e.g., mscorlib.dll, system.web.dll.
    * @param string|array $value
  * @return $this
  */
  public function assembly($value)
  {
  $this->setProperty('assembly', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setAssembly($value)
  {
  $this->setProperty('assembly', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addAssembly($value)
  {
  $current = $this->getProperty('assembly');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('assembly', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getAssembly()
  {
  return $this->getProperty('assembly');
  }


  /**
      * Library file name, e.g., mscorlib.dll, system.web.dll.
    * @param string|array $value
  * @return $this
  */
  public function executableLibraryName($value)
  {
  $this->setProperty('executableLibraryName', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setExecutableLibraryName($value)
  {
  $this->setProperty('executableLibraryName', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addExecutableLibraryName($value)
  {
  $current = $this->getProperty('executableLibraryName');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('executableLibraryName', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getExecutableLibraryName()
  {
  return $this->getProperty('executableLibraryName');
  }


}
