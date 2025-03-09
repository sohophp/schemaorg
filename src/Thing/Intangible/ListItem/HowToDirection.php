<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\ListItem;

use Sohophp\SchemaOrg\Thing\Intangible\ListItem;

/**
* A direction indicating a single action to do in the instructions for how to achieve a result.
* @see schema:HowToDirection
* @package Sohophp\SchemaOrg\Thing\Intangible\ListItem
*/
class HowToDirection extends ListItem
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
        * A media object representing the circumstances while performing this direction.
        */
    protected $duringMedia = null;

   /**
        * A media object representing the circumstances before performing this direction.
        */
    protected $beforeMedia = null;

   /**
        * A sub property of instrument. An object used (but not consumed) when performing instructions or a direction.
        */
    protected $tool = null;

   /**
        * The total time required to perform instructions or a direction (including time to prepare the supplies), in [ISO 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
        */
    protected $totalTime = null;

   /**
        * A media object representing the circumstances after performing this direction.
        */
    protected $afterMedia = null;

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
    public function setDuringMedia($value)
    {
        $this->setProperty('duringMedia', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDuringMedia()
    {
       return $this->getProperty('duringMedia');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setBeforeMedia($value)
    {
        $this->setProperty('beforeMedia', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBeforeMedia()
    {
       return $this->getProperty('beforeMedia');
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
    public function setAfterMedia($value)
    {
        $this->setProperty('afterMedia', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAfterMedia()
    {
       return $this->getProperty('afterMedia');
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
