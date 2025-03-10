<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* A quotation. Often but not necessarily from some written work, attributable
 * to a real world author and - if associated with a fictional character - to
 * any fictional Person. Use [[isBasedOn]] to link to source/origin. The
 * [[recordedIn]] property can be used to reference a Quotation from an
 * [[Event]].
* @see schema:Quotation
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Quotation extends CreativeWork
{


    /**
        * The (e.g. fictional) character, Person or Organization to whom the quotation
 * is attributed within the containing CreativeWork.
        * @param array|string|mixed $value
    * @return $this
    */
    public function spokenByCharacter($value)
    {
        $this->setProperty('spokenByCharacter', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setSpokenByCharacter($value)
    {
        $this->setProperty('spokenByCharacter', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSpokenByCharacter()
    {
       return $this->getProperty('spokenByCharacter');
    }


}
