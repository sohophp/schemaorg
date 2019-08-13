<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\CreativeWork\Article\TechArticle;

use Sohophp\SchemaOrg\Thing\CreativeWork\Article\TechArticle;

/**
* Reference documentation for application programming interfaces (APIs).
* @see http://schema.org/APIReference
* @package Sohophp\SchemaOrg\Thing\CreativeWork\Article\TechArticle
*/
class APIReference extends TechArticle
{

    /**
    * Indicates whether API is managed or unmanaged.
    * @param string $value
    * @return $this
    */
    public function programmingModel(?string $value)
    {
        $this->setProperty('programmingModel', $value);
        return $this;
    }

    /**
    * Library file name e.g., mscorlib.dll, system.web.dll.
    * @param string $value
    * @return $this
    */
    public function executableLibraryName(?string $value)
    {
        $this->setProperty('executableLibraryName', $value);
        return $this;
    }

    /**
    * Library file name e.g., mscorlib.dll, system.web.dll.
    * @param string $value
    * @return $this
    */
    public function assembly(?string $value)
    {
        $this->setProperty('assembly', $value);
        return $this;
    }

    /**
    * Associated product/technology version. e.g., .NET Framework 4.5.
    * @param string $value
    * @return $this
    */
    public function assemblyVersion(?string $value)
    {
        $this->setProperty('assemblyVersion', $value);
        return $this;
    }

    /**
    * Type of app development: phone, Metro style, desktop, XBox, etc.
    * @param string $value
    * @return $this
    */
    public function targetPlatform(?string $value)
    {
        $this->setProperty('targetPlatform', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\Article\\TechArticle\\APIReference','Thing\\APIReference');

