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
        * @param array|string|mixed $value
    * @return $this
    */
    public function assemblyVersion($value)
    {
        $this->setProperty('assemblyVersion', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Type of app development: phone, Metro style, desktop, XBox, etc.
        * @param array|string|mixed $value
    * @return $this
    */
    public function targetPlatform($value)
    {
        $this->setProperty('targetPlatform', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Library file name, e.g., mscorlib.dll, system.web.dll.
        * @param array|string|mixed $value
    * @return $this
    */
    public function executableLibraryName($value)
    {
        $this->setProperty('executableLibraryName', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Library file name, e.g., mscorlib.dll, system.web.dll.
        * @param array|string|mixed $value
    * @return $this
    */
    public function assembly($value)
    {
        $this->setProperty('assembly', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Indicates whether API is managed or unmanaged.
        * @param array|string|mixed $value
    * @return $this
    */
    public function programmingModel($value)
    {
        $this->setProperty('programmingModel', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
