<?php
namespace Sohophp\SchemaOrg\Thing\Action\CreateAction;

use Sohophp\SchemaOrg\Thing\Action\CreateAction;
use Sohophp\SchemaOrg\Thing\Intangible\Language;

/**
* The act of authoring written creative content.
* @see http://schema.org/WriteAction
* @package Sohophp\SchemaOrg\Thing\Action\CreateAction

*
*/
class WriteAction extends CreateAction
{

    /**
    * The language of the content or performance or used in an action. Please use one of the language codes from the <a href="http://tools.ietf.org/html/bcp47">IETF BCP 47 standard</a>. See also <a class="localLink" href="http://schema.org/availableLanguage">availableLanguage</a>.
    * @param Language|string|array $value
    * @return $this
    * @deprecated use setInLanguage
    */
    public function inLanguage($value)
    {
        $this->setProperty('inLanguage', $value);
        return $this;
    }
   /**
    * @param Language|string|array $value
    * @return $this
    */
    public function setInLanguage($value)
    {
        $this->setProperty('inLanguage', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getInLanguage()
    {
       return $this->getProperty('inLanguage');
    }

    /**
    * A sub property of instrument. The language used on this action.
    * @param Language|array|string $value
    * @return $this
    * @deprecated use setLanguage
    */
    public function language($value)
    {
        $this->setProperty('language', $value);
        return $this;
    }
   /**
    * @param Language|array|string $value
    * @return $this
    */
    public function setLanguage($value)
    {
        $this->setProperty('language', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getLanguage()
    {
       return $this->getProperty('language');
    }


}
