<?php
namespace Sohophp\SchemaOrg\Thing\Action\InteractAction;

use Sohophp\SchemaOrg\Thing\Action\InteractAction;

/**
* The act of conveying information to another person via a communication medium (instrument) such as speech, email, or telephone conversation.
* @see schema:CommunicateAction
* @package Sohophp\SchemaOrg\Thing\Action\InteractAction
*/
class CommunicateAction extends InteractAction
{
   /**
        * The language of the content or performance or used in an action. Please use one of the language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
        */
    protected $inLanguage = null;

   /**
        * The subject matter of the content.
        */
    protected $about = null;

   /**
        * A sub property of instrument. The language used on this action.
        */
    protected $language = null;

   /**
        * A sub property of participant. The participant who is at the receiving end of the action.
        */
    protected $recipient = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setInLanguage($value)
    {
        $this->setProperty('inLanguage', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getInLanguage()
    {
       return $this->getProperty('inLanguage');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setAbout($value)
    {
        $this->setProperty('about', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAbout()
    {
       return $this->getProperty('about');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setLanguage($value)
    {
        $this->setProperty('language', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getLanguage()
    {
       return $this->getProperty('language');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setRecipient($value)
    {
        $this->setProperty('recipient', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRecipient()
    {
       return $this->getProperty('recipient');
    }


}
