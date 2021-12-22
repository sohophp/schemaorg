<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\CreativeWork\SoftwareApplication;
use Sohophp\SchemaOrg\Thing\Intangible\ComputerLanguage;

/**
* Computer programming source code. Example: Full (compile ready) solutions, code snippet samples, scripts, templates.
* @see http://schema.org/SoftwareSourceCode
* @package Sohophp\SchemaOrg\Thing\CreativeWork

*
*/
class SoftwareSourceCode extends CreativeWork
{

    /**
    * Target Operating System / Product to which the code applies.  If applies to several versions, just the product name can be used.
    * @param SoftwareApplication|array $value
    * @return $this
    */
    public function targetProduct(?SoftwareApplication $value)
    {
        $this->setProperty('targetProduct', $value);
        return $this;
    }
   /**
    * @param SoftwareApplication|array $value
    * @return $this
    */
    public function setTargetProduct(?SoftwareApplication $value)
    {
        $this->setProperty('targetProduct', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getTargetProduct()
    {
       return $this->getProperty('targetProduct');
    }

    /**
    * Link to the repository where the un-compiled, human readable code and related code is located (SVN, github, CodePlex).
    * @param string|array $value
    * @return $this
    */
    public function codeRepository(?string $value)
    {
        $this->setProperty('codeRepository', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setCodeRepository(?string $value)
    {
        $this->setProperty('codeRepository', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCodeRepository()
    {
       return $this->getProperty('codeRepository');
    }

    /**
    * The computer programming language.
    * @param ComputerLanguage|string|array $value
    * @return $this
    */
    public function programmingLanguage($value)
    {
        $this->setProperty('programmingLanguage', $value);
        return $this;
    }
   /**
    * @param ComputerLanguage|string|array $value
    * @return $this
    */
    public function setProgrammingLanguage($value)
    {
        $this->setProperty('programmingLanguage', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getProgrammingLanguage()
    {
       return $this->getProperty('programmingLanguage');
    }

    /**
    * What type of code sample: full (compile ready) solution, code snippet, inline code, scripts, template.
    * @param string|array $value
    * @return $this
    */
    public function codeSampleType(?string $value)
    {
        $this->setProperty('codeSampleType', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setCodeSampleType(?string $value)
    {
        $this->setProperty('codeSampleType', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCodeSampleType()
    {
       return $this->getProperty('codeSampleType');
    }

    /**
    * Runtime platform or script interpreter dependencies (Example - Java v1, Python2.3, .Net Framework 3.0).
    * @param string|array $value
    * @return $this
    */
    public function runtimePlatform(?string $value)
    {
        $this->setProperty('runtimePlatform', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setRuntimePlatform(?string $value)
    {
        $this->setProperty('runtimePlatform', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getRuntimePlatform()
    {
       return $this->getProperty('runtimePlatform');
    }

    /**
    * What type of code sample: full (compile ready) solution, code snippet, inline code, scripts, template.
    * @param string|array $value
    * @return $this
    */
    public function sampleType(?string $value)
    {
        $this->setProperty('sampleType', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setSampleType(?string $value)
    {
        $this->setProperty('sampleType', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSampleType()
    {
       return $this->getProperty('sampleType');
    }

    /**
    * Runtime platform or script interpreter dependencies (Example - Java v1, Python2.3, .Net Framework 3.0).
    * @param string|array $value
    * @return $this
    */
    public function runtime(?string $value)
    {
        $this->setProperty('runtime', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setRuntime(?string $value)
    {
        $this->setProperty('runtime', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getRuntime()
    {
       return $this->getProperty('runtime');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\SoftwareSourceCode','Thing\\SoftwareSourceCode');

