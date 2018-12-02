<?php

declare (strict_types=1);

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
     * @param Thing $value
     * @return $this
     */

     public function replacee(?Thing $value):self
     {
        $this->setProperty("replacee",$value);
        return $this;
     }

     
     /**
     * A sub property of object. The object that replaces.
     * @param Thing $value
     * @return $this
     */

     public function replacer(?Thing $value):self
     {
        $this->setProperty("replacer",$value);
        return $this;
     }

     
}

