<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Action\InteractAction;

use Sohophp\SchemaOrg\Thing\Action\InteractAction;
use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\Intangible\Language;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Intangible\Audience;

/**
* The act of conveying information to another person via a communication medium (instrument) such as speech, email, or telephone conversation.
* @see http://schema.org/CommunicateAction
* @package Sohophp\SchemaOrg\Thing\Action\InteractAction

*
*/
class CommunicateAction extends InteractAction
{

    /**
    * The subject matter of the content.
    * @param Thing|array $value
    * @return $this
    */
    public function about(?Thing $value)
    {
        $this->setProperty('about', $value);
        return $this;
    }
   /**
    * @param Thing|array $value
    * @return $this
    */
    public function setAbout(?Thing $value)
    {
        $this->setProperty('about', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAbout()
    {
       return $this->getProperty('about');
    }

    /**
    * The language of the content or performance or used in an action. Please use one of the language codes from the <a href="http://tools.ietf.org/html/bcp47">IETF BCP 47 standard</a>. See also <a class="localLink" href="http://schema.org/availableLanguage">availableLanguage</a>.
    * @param Language|string|array $value
    * @return $this
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
    * A sub property of participant. The participant who is at the receiving end of the action.
    * @param Person|ContactPoint|Organization|Audience|array $value
    * @return $this
    */
    public function recipient($value)
    {
        $this->setProperty('recipient', $value);
        return $this;
    }
   /**
    * @param Person|ContactPoint|Organization|Audience|array $value
    * @return $this
    */
    public function setRecipient($value)
    {
        $this->setProperty('recipient', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getRecipient()
    {
       return $this->getProperty('recipient');
    }

    /**
    * A sub property of instrument. The language used on this action.
    * @param Language|array $value
    * @return $this
    */
    public function language(?Language $value)
    {
        $this->setProperty('language', $value);
        return $this;
    }
   /**
    * @param Language|array $value
    * @return $this
    */
    public function setLanguage(?Language $value)
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


class_alias('Sohophp\\SchemaOrg\\Thing\\Action\\InteractAction\\CommunicateAction','Thing\\CommunicateAction');

