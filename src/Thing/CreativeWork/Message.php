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
        * A sub property of participant. The participant who is at the sending end of the action.
        */
    protected $sender = null;

   /**
        * The date/time the message was received if a single recipient exists.
        */
    protected $dateReceived = null;

   /**
        * The date/time at which the message has been read by the recipient if a single recipient exists.
        */
    protected $dateRead = null;

   /**
        * A sub property of recipient. The recipient blind copied on a message.
        */
    protected $bccRecipient = null;

   /**
        * A sub property of recipient. The recipient who was directly sent the message.
        */
    protected $toRecipient = null;

   /**
        * A CreativeWork attached to the message.
        */
    protected $messageAttachment = null;

   /**
        * A sub property of participant. The participant who is at the receiving end of the action.
        */
    protected $recipient = null;

   /**
        * The date/time at which the message was sent.
        */
    protected $dateSent = null;

   /**
        * A sub property of recipient. The recipient copied on a message.
        */
    protected $ccRecipient = null;


    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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

    /**
    * @param array|string $value
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
    * @param array|string $value
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
