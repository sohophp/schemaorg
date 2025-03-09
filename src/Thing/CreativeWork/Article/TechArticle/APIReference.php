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
        * Associated product/technology version. E.g., .NET Framework 4.5.
        */
    protected $assemblyVersion = null;

   /**
        * Type of app development: phone, Metro style, desktop, XBox, etc.
        */
    protected $targetPlatform = null;

   /**
        * Library file name, e.g., mscorlib.dll, system.web.dll.
        */
    protected $executableLibraryName = null;

   /**
        * Library file name, e.g., mscorlib.dll, system.web.dll.
        */
    protected $assembly = null;

   /**
        * Indicates whether API is managed or unmanaged.
        */
    protected $programmingModel = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setAssemblyVersion($value)
    {
        $this->setProperty('assemblyVersion', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAssemblyVersion()
    {
       return $this->getProperty('assemblyVersion');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setTargetPlatform($value)
    {
        $this->setProperty('targetPlatform', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTargetPlatform()
    {
       return $this->getProperty('targetPlatform');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setExecutableLibraryName($value)
    {
        $this->setProperty('executableLibraryName', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getExecutableLibraryName()
    {
       return $this->getProperty('executableLibraryName');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setAssembly($value)
    {
        $this->setProperty('assembly', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAssembly()
    {
       return $this->getProperty('assembly');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setProgrammingModel($value)
    {
        $this->setProperty('programmingModel', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getProgrammingModel()
    {
       return $this->getProperty('programmingModel');
    }


}
