<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* A single message from a sender to one or more organizations or people.
* @see schema:Message
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Message extends CreativeWork
{


    /**
        * A sub property of participant. The participant who is at the sending end of
 * the action.
        * @param array|string|mixed $value
    * @return $this
    */
    public function sender($value)
    {
        $this->setProperty('sender', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setSender($value)
    {
        $this->setProperty('sender', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSender()
    {
       return $this->getProperty('sender');
    }


    /**
        * The date/time the message was received if a single recipient exists.
        * @param array|string|mixed $value
    * @return $this
    */
    public function dateReceived($value)
    {
        $this->setProperty('dateReceived', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setDateReceived($value)
    {
        $this->setProperty('dateReceived', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDateReceived()
    {
       return $this->getProperty('dateReceived');
    }


    /**
        * The date/time at which the message has been read by the recipient if a single
 * recipient exists.
        * @param array|string|mixed $value
    * @return $this
    */
    public function dateRead($value)
    {
        $this->setProperty('dateRead', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setDateRead($value)
    {
        $this->setProperty('dateRead', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDateRead()
    {
       return $this->getProperty('dateRead');
    }


    /**
        * A sub property of recipient. The recipient blind copied on a message.
        * @param array|string|mixed $value
    * @return $this
    */
    public function bccRecipient($value)
    {
        $this->setProperty('bccRecipient', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setBccRecipient($value)
    {
        $this->setProperty('bccRecipient', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBccRecipient()
    {
       return $this->getProperty('bccRecipient');
    }


    /**
        * A sub property of recipient. The recipient who was directly sent the message.
        * @param array|string|mixed $value
    * @return $this
    */
    public function toRecipient($value)
    {
        $this->setProperty('toRecipient', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setToRecipient($value)
    {
        $this->setProperty('toRecipient', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getToRecipient()
    {
       return $this->getProperty('toRecipient');
    }


    /**
        * A CreativeWork attached to the message.
        * @param array|string|mixed $value
    * @return $this
    */
    public function messageAttachment($value)
    {
        $this->setProperty('messageAttachment', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setMessageAttachment($value)
    {
        $this->setProperty('messageAttachment', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMessageAttachment()
    {
       return $this->getProperty('messageAttachment');
    }


    /**
        * A sub property of participant. The participant who is at the receiving end of
 * the action.
        * @param array|string|mixed $value
    * @return $this
    */
    public function recipient($value)
    {
        $this->setProperty('recipient', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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


    /**
        * The date/time at which the message was sent.
        * @param array|string|mixed $value
    * @return $this
    */
    public function dateSent($value)
    {
        $this->setProperty('dateSent', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setDateSent($value)
    {
        $this->setProperty('dateSent', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDateSent()
    {
       return $this->getProperty('dateSent');
    }


    /**
        * A sub property of recipient. The recipient copied on a message.
        * @param array|string|mixed $value
    * @return $this
    */
    public function ccRecipient($value)
    {
        $this->setProperty('ccRecipient', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setCcRecipient($value)
    {
        $this->setProperty('ccRecipient', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCcRecipient()
    {
       return $this->getProperty('ccRecipient');
    }


}
