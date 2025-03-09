<?php
namespace Sohophp\SchemaOrg\Text;

use Sohophp\SchemaOrg\Text;

/**
* Data type: PronounceableText.
* @see schema:PronounceableText
* @package Sohophp\SchemaOrg\Text
*/
class PronounceableText extends Text
{
   /**
        * The language of the content or performance or used in an action. Please use one of the language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
        */
    protected $inLanguage = null;

   /**
        * Form of markup used. eg. [SSML](https://www.w3.org/TR/speech-synthesis11) or [IPA](https://www.wikidata.org/wiki/Property:P898).
        */
    protected $speechToTextMarkup = null;

   /**
        * Text value being annotated.
        */
    protected $textValue = null;

   /**
        * Representation of a text [[textValue]] using the specified [[speechToTextMarkup]]. For example the city name of Houston in IPA: /ˈhjuːstən/.
        */
    protected $phoneticText = null;


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
    public function setSpeechToTextMarkup($value)
    {
        $this->setProperty('speechToTextMarkup', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSpeechToTextMarkup()
    {
       return $this->getProperty('speechToTextMarkup');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setTextValue($value)
    {
        $this->setProperty('textValue', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTextValue()
    {
       return $this->getProperty('textValue');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setPhoneticText($value)
    {
        $this->setProperty('phoneticText', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPhoneticText()
    {
       return $this->getProperty('phoneticText');
    }


}
