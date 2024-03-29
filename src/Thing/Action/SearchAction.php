<?php
namespace Sohophp\SchemaOrg\Thing\Action;

use Sohophp\SchemaOrg\Thing\Action;

/**
* The act of searching for an object.<br/><br/>

Related actions:<br/><br/>

<ul>
<li><a class="localLink" href="http://schema.org/FindAction">FindAction</a>: SearchAction generally leads to a FindAction, but not necessarily.</li>
</ul>

* @see http://schema.org/SearchAction
* @package Sohophp\SchemaOrg\Thing\Action

*
*/
class SearchAction extends Action
{

    /**
    * A sub property of instrument. The query used on this action.
    * @param string|array $value
    * @return $this
    * @deprecated use setQuery
    */
    public function query($value)
    {
        $this->setProperty('query', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setQuery($value)
    {
        $this->setProperty('query', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getQuery()
    {
       return $this->getProperty('query');
    }


}
