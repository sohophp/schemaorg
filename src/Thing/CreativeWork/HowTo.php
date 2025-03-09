<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* Instructions that explain how to achieve a result by performing a sequence of steps.
* @see schema:HowTo
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class HowTo extends CreativeWork
{
   /**
        * The length of time it takes to perform instructions or a direction (not including time to prepare the supplies), in [ISO 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
        */
    protected $performTime = null;

   /**
        * The length of time it takes to prepare the items to be used in instructions or a direction, in [ISO 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
        */
    protected $prepTime = null;

   /**
        * A single step item (as HowToStep, text, document, video, etc.) or a HowToSection.
        */
    protected $step = null;

   /**
        * A sub property of instrument. An object used (but not consumed) when performing instructions or a direction.
        */
    protected $tool = null;

   /**
        * A single step item (as HowToStep, text, document, video, etc.) or a HowToSection (originally misnamed 'steps'; 'step' is preferred).
        */
    protected $steps = null;

   /**
        * The total time required to perform instructions or a direction (including time to prepare the supplies), in [ISO 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
        */
    protected $totalTime = null;

   /**
        * The estimated cost of the supply or supplies consumed when performing instructions.
        */
    protected $estimatedCost = null;

   /**
        * The quantity that results by performing instructions. For example, a paper airplane, 10 personalized candles.
        */
    protected $yield = null;

   /**
        * A sub-property of instrument. A supply consumed when performing instructions or a direction.
        */
    protected $supply = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setPerformTime($value)
    {
        $this->setProperty('performTime', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPerformTime()
    {
       return $this->getProperty('performTime');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setPrepTime($value)
    {
        $this->setProperty('prepTime', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPrepTime()
    {
       return $this->getProperty('prepTime');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setStep($value)
    {
        $this->setProperty('step', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getStep()
    {
       return $this->getProperty('step');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setTool($value)
    {
        $this->setProperty('tool', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTool()
    {
       return $this->getProperty('tool');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setSteps($value)
    {
        $this->setProperty('steps', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSteps()
    {
       return $this->getProperty('steps');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setTotalTime($value)
    {
        $this->setProperty('totalTime', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTotalTime()
    {
       return $this->getProperty('totalTime');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setEstimatedCost($value)
    {
        $this->setProperty('estimatedCost', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEstimatedCost()
    {
       return $this->getProperty('estimatedCost');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setYield($value)
    {
        $this->setProperty('yield', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getYield()
    {
       return $this->getProperty('yield');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setSupply($value)
    {
        $this->setProperty('supply', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSupply()
    {
       return $this->getProperty('supply');
    }


}
