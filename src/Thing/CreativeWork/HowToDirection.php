<?php declare(strict_types=1);
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
*/
class HowToDirection extends CreativeWork
{

    /**
    * A media object representing the circumstances before performing this direction.
    * @param string|MediaObject $value
    * @return $this
    */
    public function beforeMedia($value)
    {
        $this->setProperty('beforeMedia', $value);
        return $this;
    }

    /**
    * The length of time it takes to prepare the items to be used in instructions or a direction, in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 duration format</a>.
    * @param Duration $value
    * @return $this
    */
    public function prepTime(?Duration $value)
    {
        $this->setProperty('prepTime', $value);
        return $this;
    }

    /**
    * The length of time it takes to perform instructions or a direction (not including time to prepare the supplies), in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 duration format</a>.
    * @param Duration $value
    * @return $this
    */
    public function performTime(?Duration $value)
    {
        $this->setProperty('performTime', $value);
        return $this;
    }

    /**
    * The total time required to perform instructions or a direction (including time to prepare the supplies), in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 duration format</a>.
    * @param Duration $value
    * @return $this
    */
    public function totalTime(?Duration $value)
    {
        $this->setProperty('totalTime', $value);
        return $this;
    }

    /**
    * A sub-property of instrument. A supply consumed when performing instructions or a direction.
    * @param HowToSupply|string $value
    * @return $this
    */
    public function supply($value)
    {
        $this->setProperty('supply', $value);
        return $this;
    }

    /**
    * A media object representing the circumstances after performing this direction.
    * @param MediaObject|string $value
    * @return $this
    */
    public function afterMedia($value)
    {
        $this->setProperty('afterMedia', $value);
        return $this;
    }

    /**
    * A media object representing the circumstances while performing this direction.
    * @param MediaObject|string $value
    * @return $this
    */
    public function duringMedia($value)
    {
        $this->setProperty('duringMedia', $value);
        return $this;
    }

    /**
    * A sub property of instrument. An object used (but not consumed) when performing instructions or a direction.
    * @param string|HowToTool $value
    * @return $this
    */
    public function tool($value)
    {
        $this->setProperty('tool', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\HowToDirection','Thing\\HowToDirection');

