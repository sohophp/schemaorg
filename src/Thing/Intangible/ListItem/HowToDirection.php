<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\ListItem;

use Sohophp\SchemaOrg\Thing\Intangible\ListItem;

/**
* A direction indicating a single action to do in the instructions for how to
 * achieve a result.
* @see schema:HowToDirection
* @package Sohophp\SchemaOrg\Thing\Intangible\ListItem
*/
class HowToDirection extends ListItem
{


    /**
        * The length of time it takes to perform instructions or a direction (not
 * including time to prepare the supplies), in [ISO 8601 duration
 * format](http://en.wikipedia.org/wiki/ISO_8601).
        * @param array|string|mixed $value
    * @return $this
    */
    public function performTime($value)
    {
        $this->setProperty('performTime', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The length of time it takes to prepare the items to be used in instructions
 * or a direction, in [ISO 8601 duration
 * format](http://en.wikipedia.org/wiki/ISO_8601).
        * @param array|string|mixed $value
    * @return $this
    */
    public function prepTime($value)
    {
        $this->setProperty('prepTime', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A media object representing the circumstances while performing this
 * direction.
        * @param array|string|mixed $value
    * @return $this
    */
    public function duringMedia($value)
    {
        $this->setProperty('duringMedia', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A media object representing the circumstances before performing this
 * direction.
        * @param array|string|mixed $value
    * @return $this
    */
    public function beforeMedia($value)
    {
        $this->setProperty('beforeMedia', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A sub property of instrument. An object used (but not consumed) when
 * performing instructions or a direction.
        * @param array|string|mixed $value
    * @return $this
    */
    public function tool($value)
    {
        $this->setProperty('tool', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The total time required to perform instructions or a direction (including
 * time to prepare the supplies), in [ISO 8601 duration
 * format](http://en.wikipedia.org/wiki/ISO_8601).
        * @param array|string|mixed $value
    * @return $this
    */
    public function totalTime($value)
    {
        $this->setProperty('totalTime', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A media object representing the circumstances after performing this
 * direction.
        * @param array|string|mixed $value
    * @return $this
    */
    public function afterMedia($value)
    {
        $this->setProperty('afterMedia', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A sub-property of instrument. A supply consumed when performing instructions
 * or a direction.
        * @param array|string|mixed $value
    * @return $this
    */
    public function supply($value)
    {
        $this->setProperty('supply', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
