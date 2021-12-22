<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Duration;
use Sohophp\SchemaOrg\Thing\Intangible\ListItem\HowToItem\HowToSupply;
use Sohophp\SchemaOrg\Thing\Intangible\ListItem\HowToItem\HowToTool;

/**
* A direction indicating a single action to do in the instructions for how to achieve a result.
* @see http://schema.org/HowToDirection
* @package Sohophp\SchemaOrg\Thing\CreativeWork

*
*/
class HowToDirection extends CreativeWork
{

    /**
    * A media object representing the circumstances before performing this direction.
    * @param string|MediaObject|array $value
    * @return $this
    */
    public function beforeMedia($value)
    {
        $this->setProperty('beforeMedia', $value);
        return $this;
    }
   /**
    * @param string|MediaObject|array $value
    * @return $this
    */
    public function setBeforeMedia($value)
    {
        $this->setProperty('beforeMedia', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getBeforeMedia()
    {
       return $this->getProperty('beforeMedia');
    }

    /**
    * The length of time it takes to prepare the items to be used in instructions or a direction, in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 duration format</a>.
    * @param Duration|array $value
    * @return $this
    */
    public function prepTime(?Duration $value)
    {
        $this->setProperty('prepTime', $value);
        return $this;
    }
   /**
    * @param Duration|array $value
    * @return $this
    */
    public function setPrepTime(?Duration $value)
    {
        $this->setProperty('prepTime', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPrepTime()
    {
       return $this->getProperty('prepTime');
    }

    /**
    * The length of time it takes to perform instructions or a direction (not including time to prepare the supplies), in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 duration format</a>.
    * @param Duration|array $value
    * @return $this
    */
    public function performTime(?Duration $value)
    {
        $this->setProperty('performTime', $value);
        return $this;
    }
   /**
    * @param Duration|array $value
    * @return $this
    */
    public function setPerformTime(?Duration $value)
    {
        $this->setProperty('performTime', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPerformTime()
    {
       return $this->getProperty('performTime');
    }

    /**
    * The total time required to perform instructions or a direction (including time to prepare the supplies), in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 duration format</a>.
    * @param Duration|array $value
    * @return $this
    */
    public function totalTime(?Duration $value)
    {
        $this->setProperty('totalTime', $value);
        return $this;
    }
   /**
    * @param Duration|array $value
    * @return $this
    */
    public function setTotalTime(?Duration $value)
    {
        $this->setProperty('totalTime', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getTotalTime()
    {
       return $this->getProperty('totalTime');
    }

    /**
    * A sub-property of instrument. A supply consumed when performing instructions or a direction.
    * @param HowToSupply|string|array $value
    * @return $this
    */
    public function supply($value)
    {
        $this->setProperty('supply', $value);
        return $this;
    }
   /**
    * @param HowToSupply|string|array $value
    * @return $this
    */
    public function setSupply($value)
    {
        $this->setProperty('supply', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSupply()
    {
       return $this->getProperty('supply');
    }

    /**
    * A media object representing the circumstances after performing this direction.
    * @param MediaObject|string|array $value
    * @return $this
    */
    public function afterMedia($value)
    {
        $this->setProperty('afterMedia', $value);
        return $this;
    }
   /**
    * @param MediaObject|string|array $value
    * @return $this
    */
    public function setAfterMedia($value)
    {
        $this->setProperty('afterMedia', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAfterMedia()
    {
       return $this->getProperty('afterMedia');
    }

    /**
    * A media object representing the circumstances while performing this direction.
    * @param MediaObject|string|array $value
    * @return $this
    */
    public function duringMedia($value)
    {
        $this->setProperty('duringMedia', $value);
        return $this;
    }
   /**
    * @param MediaObject|string|array $value
    * @return $this
    */
    public function setDuringMedia($value)
    {
        $this->setProperty('duringMedia', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDuringMedia()
    {
       return $this->getProperty('duringMedia');
    }

    /**
    * A sub property of instrument. An object used (but not consumed) when performing instructions or a direction.
    * @param string|HowToTool|array $value
    * @return $this
    */
    public function tool($value)
    {
        $this->setProperty('tool', $value);
        return $this;
    }
   /**
    * @param string|HowToTool|array $value
    * @return $this
    */
    public function setTool($value)
    {
        $this->setProperty('tool', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getTool()
    {
       return $this->getProperty('tool');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\HowToDirection','Thing\\HowToDirection');

