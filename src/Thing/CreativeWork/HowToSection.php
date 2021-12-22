<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Intangible\ItemList;

/**
* A sub-grouping of steps in the instructions for how to achieve a result (e.g. steps for making a pie crust within a pie recipe).
* @see http://schema.org/HowToSection
* @package Sohophp\SchemaOrg\Thing\CreativeWork

*
*/
class HowToSection extends CreativeWork
{

    /**
    * A single step item (as HowToStep, text, document, video, etc.) or a HowToSection (originally misnamed 'steps'; 'step' is preferred).
    * @param string|CreativeWork|ItemList|array $value
    * @return $this
    */
    public function steps($value)
    {
        $this->setProperty('steps', $value);
        return $this;
    }
   /**
    * @param string|CreativeWork|ItemList|array $value
    * @return $this
    */
    public function setSteps($value)
    {
        $this->setProperty('steps', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSteps()
    {
       return $this->getProperty('steps');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\HowToSection','Thing\\HowToSection');

