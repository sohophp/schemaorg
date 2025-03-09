<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* Computer programming source code. Example: Full (compile ready) solutions, code snippet samples, scripts, templates.
* @see schema:SoftwareSourceCode
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class SoftwareSourceCode extends CreativeWork
{
   /**
        * Link to the repository where the un-compiled, human readable code and related code is located (SVN, GitHub, CodePlex).
        */
    protected $codeRepository = null;

   /**
        * The computer programming language.
        */
    protected $programmingLanguage = null;

   /**
        * What type of code sample: full (compile ready) solution, code snippet, inline code, scripts, template.
        */
    protected $sampleType = null;

   /**
        * Target Operating System / Product to which the code applies.  If applies to several versions, just the product name can be used.
        */
    protected $targetProduct = null;

   /**
        * Runtime platform or script interpreter dependencies (example: Java v1, Python 2.3, .NET Framework 3.0).
        */
    protected $runtimePlatform = null;

   /**
        * What type of code sample: full (compile ready) solution, code snippet, inline code, scripts, template.
        */
    protected $codeSampleType = null;

   /**
        * Runtime platform or script interpreter dependencies (example: Java v1, Python 2.3, .NET Framework 3.0).
        */
    protected $runtime = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setCodeRepository($value)
    {
        $this->setProperty('codeRepository', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCodeRepository()
    {
       return $this->getProperty('codeRepository');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setProgrammingLanguage($value)
    {
        $this->setProperty('programmingLanguage', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getProgrammingLanguage()
    {
       return $this->getProperty('programmingLanguage');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setSampleType($value)
    {
        $this->setProperty('sampleType', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSampleType()
    {
       return $this->getProperty('sampleType');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setTargetProduct($value)
    {
        $this->setProperty('targetProduct', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTargetProduct()
    {
       return $this->getProperty('targetProduct');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setRuntimePlatform($value)
    {
        $this->setProperty('runtimePlatform', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRuntimePlatform()
    {
       return $this->getProperty('runtimePlatform');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setCodeSampleType($value)
    {
        $this->setProperty('codeSampleType', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCodeSampleType()
    {
       return $this->getProperty('codeSampleType');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setRuntime($value)
    {
        $this->setProperty('runtime', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRuntime()
    {
       return $this->getProperty('runtime');
    }


}
