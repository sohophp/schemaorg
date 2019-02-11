<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Action\InteractAction;

use Sohophp\SchemaOrg\Thing\Action\InteractAction;
use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Intangible\Audience;
use Sohophp\SchemaOrg\Thing\Intangible\Language;

/**
* The act of conveying information to another person via a communication medium (instrument) such as speech, email, or telephone conversation.
* @see http://schema.org/CommunicateAction
* @package Sohophp\SchemaOrg\Thing\Action\InteractAction
*/
class CommunicateAction extends InteractAction
{

    /**
    * The subject matter of the content.
    * @param Thing $value
    * @return $this
    */
    public function about(?Thing $value)
    {
        $this->setProperty('about', $value);
        return $this;
    }

    /**
    * A sub property of participant. The participant who is at the receiving end of the action.
    * @param Person|ContactPoint|Organization|Audience $value
    * @return $this
    */
    public function recipient($value)
    {
        $this->setProperty('recipient', $value);
        return $this;
    }

    /**
    * The language of the content or performance or used in an action. Please use one of the language codes from the <a href="http://tools.ietf.org/html/bcp47">IETF BCP 47 standard</a>. See also <a class="localLink" href="http://schema.org/availableLanguage">availableLanguage</a>.
    * @param string|Language $value
    * @return $this
    */
    public function inLanguage($value)
    {
        $this->setProperty('inLanguage', $value);
        return $this;
    }

    /**
    * A sub property of instrument. The language used on this action.
    * @param Language $value
    * @return $this
    */
    public function language(?Language $value)
    {
        $this->setProperty('language', $value);
        return $this;
    }


}

