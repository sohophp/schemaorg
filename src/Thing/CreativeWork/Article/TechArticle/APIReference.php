<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\Article\TechArticle;

use Sohophp\SchemaOrg\Thing\CreativeWork\Article\TechArticle;

/**
* Reference documentation for application programming interfaces (APIs).
* @see http://schema.org/APIReference
* @package Sohophp\SchemaOrg\Thing\CreativeWork\Article\TechArticle

*
*/
class APIReference extends TechArticle
{

    /**
    * Indicates whether API is managed or unmanaged.
    * @param string|array $value
    * @return $this
    */
    public function programmingModel(?string $value)
    {
        $this->setProperty('programmingModel', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setProgrammingModel(?string $value)
    {
        $this->setProperty('programmingModel', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getProgrammingModel()
    {
       return $this->getProperty('programmingModel');
    }

    /**
    * Library file name e.g., mscorlib.dll, system.web.dll.
    * @param string|array $value
    * @return $this
    */
    public function executableLibraryName(?string $value)
    {
        $this->setProperty('executableLibraryName', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setExecutableLibraryName(?string $value)
    {
        $this->setProperty('executableLibraryName', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getExecutableLibraryName()
    {
       return $this->getProperty('executableLibraryName');
    }

    /**
    * Library file name e.g., mscorlib.dll, system.web.dll.
    * @param string|array $value
    * @return $this
    */
    public function assembly(?string $value)
    {
        $this->setProperty('assembly', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setAssembly(?string $value)
    {
        $this->setProperty('assembly', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAssembly()
    {
       return $this->getProperty('assembly');
    }

    /**
    * Associated product/technology version. e.g., .NET Framework 4.5.
    * @param string|array $value
    * @return $this
    */
    public function assemblyVersion(?string $value)
    {
        $this->setProperty('assemblyVersion', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setAssemblyVersion(?string $value)
    {
        $this->setProperty('assemblyVersion', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAssemblyVersion()
    {
       return $this->getProperty('assemblyVersion');
    }

    /**
    * Type of app development: phone, Metro style, desktop, XBox, etc.
    * @param string|array $value
    * @return $this
    */
    public function targetPlatform(?string $value)
    {
        $this->setProperty('targetPlatform', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setTargetPlatform(?string $value)
    {
        $this->setProperty('targetPlatform', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getTargetPlatform()
    {
       return $this->getProperty('targetPlatform');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\Article\\TechArticle\\APIReference','Thing\\APIReference');

