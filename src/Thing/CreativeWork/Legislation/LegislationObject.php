<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\Legislation;

use Sohophp\SchemaOrg\Thing\CreativeWork\Legislation;

/**
* A specific object or file containing a Legislation. Note that the same
 * Legislation can be published in multiple files. For example, a digitally
 * signed PDF, a plain PDF and an HTML version.
* @see schema:LegislationObject
* @package Sohophp\SchemaOrg\Thing\CreativeWork\Legislation
*/
class LegislationObject extends Legislation
{


    /**
        * The legal value of this legislation file. The same legislation can be written
 * in multiple files with different legal values. Typically a digitally signed
 * PDF have a "stronger" legal value than the HTML file of the same act.
        * @param array|string|mixed $value
    * @return $this
    */
    public function legislationLegalValue($value)
    {
        $this->setProperty('legislationLegalValue', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setLegislationLegalValue($value)
    {
        $this->setProperty('legislationLegalValue', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getLegislationLegalValue()
    {
       return $this->getProperty('legislationLegalValue');
    }


}
