<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Person;

/**
* A quotation. Often but not necessarily from some written work, attributable to a real world author and - if associated with a fictional character - to any fictional Person. Use <a class="localLink" href="http://schema.org/isBasedOn">isBasedOn</a> to link to source/origin. The <a class="localLink" href="http://schema.org/recordedIn">recordedIn</a> property can be used to reference a Quotation from an <a class="localLink" href="http://schema.org/Event">Event</a>.
* @see http://schema.org/Quotation
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Quotation extends CreativeWork
{

    /**
    * The (e.g. fictional) character, Person or Organization to whom the quotation is attributed within the containing CreativeWork.
    * @param Organization|Person $value
    * @return $this
    */
    public function spokenByCharacter($value)
    {
        $this->setProperty('spokenByCharacter', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\Quotation','Thing\\Quotation');

