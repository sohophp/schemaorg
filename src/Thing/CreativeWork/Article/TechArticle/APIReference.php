<?php

declare (strict_types=1);

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
     * Library file name e.g., mscorlib.dll, system.web.dll.
     * @param string $value
     * @return $this
     */

     public function executableLibraryName(?string $value):self
     {
        $this->setProperty("executableLibraryName",$value);
        return $this;
     }

     
     /**
     * Associated product/technology version. e.g., .NET Framework 4.5.
     * @param string $value
     * @return $this
     */

     public function assemblyVersion(?string $value):self
     {
        $this->setProperty("assemblyVersion",$value);
        return $this;
     }

     
     /**
     * Indicates whether API is managed or unmanaged.
     * @param string $value
     * @return $this
     */

     public function programmingModel(?string $value):self
     {
        $this->setProperty("programmingModel",$value);
        return $this;
     }

     
     /**
     * Library file name e.g., mscorlib.dll, system.web.dll.
     * @param string $value
     * @return $this
     */

     public function assembly(?string $value):self
     {
        $this->setProperty("assembly",$value);
        return $this;
     }

     
     /**
     * Type of app development: phone, Metro style, desktop, XBox, etc.
     * @param string $value
     * @return $this
     */

     public function targetPlatform(?string $value):self
     {
        $this->setProperty("targetPlatform",$value);
        return $this;
     }

     
}

