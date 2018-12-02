<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
/**
* An list item, e.g. a step in a checklist or how-to description.
* @see http://schema.org/ListItem
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class ListItem extends Intangible
{

     
     /**
     * A link to the ListItem that follows the current one.
     * @param ListItem $value
     * @return $this
     */

     public function nextItem(?ListItem $value):self
     {
        $this->setProperty("nextItem",$value);
        return $this;
     }

     
     /**
     * A link to the ListItem that preceeds the current one.
     * @param ListItem $value
     * @return $this
     */

     public function previousItem(?ListItem $value):self
     {
        $this->setProperty("previousItem",$value);
        return $this;
     }

     
}

