<?php
namespace Sohophp\SchemaOrg\Thing\Action\UpdateAction;

use Sohophp\SchemaOrg\Thing\Action\UpdateAction;
use Sohophp\SchemaOrg\Thing;

/**
* The act of editing a recipient by replacing an old object with a new object.
* @see http://schema.org/ReplaceAction
* @package Sohophp\SchemaOrg\Thing\Action\UpdateAction
*/
class ReplaceAction extends UpdateAction
{


    /**
        * A sub property of object. The object that is being replaced.
        * @param Thing|array|string|mixed $value
    * @return $this
    */
    public function replacee($value)
    {
        $this->setProperty('replacee', $value);
        return $this;
    }

    /**
    * @param Thing|array|string|mixed $value
    * @return $this
    */
    public function setReplacee($value)
    {
        $this->setProperty('replacee', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getReplacee()
    {
       return $this->getProperty('replacee');
    }


    /**
        * A sub property of object. The object that replaces.
        * @param Thing|array|string|mixed $value
    * @return $this
    */
    public function replacer($value)
    {
        $this->setProperty('replacer', $value);
        return $this;
    }

    /**
    * @param Thing|array|string|mixed $value
    * @return $this
    */
    public function setReplacer($value)
    {
        $this->setProperty('replacer', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getReplacer()
    {
       return $this->getProperty('replacer');
    }


}
