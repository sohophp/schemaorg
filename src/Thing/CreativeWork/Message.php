<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Intangible\Audience;

/**
* A single message from a sender to one or more organizations or people.
* @see http://schema.org/Message
* @package Sohophp\SchemaOrg\Thing\CreativeWork

*
*/
class Message extends CreativeWork
{

    /**
    * The date/time at which the message has been read by the recipient if a single recipient exists.
    * @param array|string $value
    * @return $this
    * @deprecated use setDateRead
    */
    public function dateRead($value)
    {
        $this->setProperty('dateRead', $value);
        return $this;
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
    * @return $this|string|array
    */
    public function getDateRead()
    {
       return $this->getProperty('dateRead');
    }

    /**
    * A sub property of recipient. The recipient blind copied on a message.
    * @param Organization|ContactPoint|Person|array|string $value
    * @return $this
    * @deprecated use setBccRecipient
    */
    public function bccRecipient($value)
    {
        $this->setProperty('bccRecipient', $value);
        return $this;
    }
   /**
    * @param Organization|ContactPoint|Person|array|string $value
    * @return $this
    */
    public function setBccRecipient($value)
    {
        $this->setProperty('bccRecipient', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getBccRecipient()
    {
       return $this->getProperty('bccRecipient');
    }

    /**
    * The date/time at which the message was sent.
    * @param array|string $value
    * @return $this
    * @deprecated use setDateSent
    */
    public function dateSent($value)
    {
        $this->setProperty('dateSent', $value);
        return $this;
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
    * @return $this|string|array
    */
    public function getDateSent()
    {
       return $this->getProperty('dateSent');
    }

    /**
    * A sub property of recipient. The recipient copied on a message.
    * @param Person|ContactPoint|Organization|array|string $value
    * @return $this
    * @deprecated use setCcRecipient
    */
    public function ccRecipient($value)
    {
        $this->setProperty('ccRecipient', $value);
        return $this;
    }
   /**
    * @param Person|ContactPoint|Organization|array|string $value
    * @return $this
    */
    public function setCcRecipient($value)
    {
        $this->setProperty('ccRecipient', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCcRecipient()
    {
       return $this->getProperty('ccRecipient');
    }

    /**
    * A sub property of participant. The participant who is at the receiving end of the action.
    * @param Person|ContactPoint|Organization|Audience|array|string $value
    * @return $this
    * @deprecated use setRecipient
    */
    public function recipient($value)
    {
        $this->setProperty('recipient', $value);
        return $this;
    }
   /**
    * @param Person|ContactPoint|Organization|Audience|array|string $value
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
    * A sub property of participant. The participant who is at the sending end of the action.
    * @param Audience|Person|Organization|array|string $value
    * @return $this
    * @deprecated use setSender
    */
    public function sender($value)
    {
        $this->setProperty('sender', $value);
        return $this;
    }
   /**
    * @param Audience|Person|Organization|array|string $value
    * @return $this
    */
    public function setSender($value)
    {
        $this->setProperty('sender', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSender()
    {
       return $this->getProperty('sender');
    }

    /**
    * A CreativeWork attached to the message.
    * @param CreativeWork|array|string $value
    * @return $this
    * @deprecated use setMessageAttachment
    */
    public function messageAttachment($value)
    {
        $this->setProperty('messageAttachment', $value);
        return $this;
    }
   /**
    * @param CreativeWork|array|string $value
    * @return $this
    */
    public function setMessageAttachment($value)
    {
        $this->setProperty('messageAttachment', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getMessageAttachment()
    {
       return $this->getProperty('messageAttachment');
    }

    /**
    * The date/time the message was received if a single recipient exists.
    * @param array|string $value
    * @return $this
    * @deprecated use setDateReceived
    */
    public function dateReceived($value)
    {
        $this->setProperty('dateReceived', $value);
        return $this;
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
    * @return $this|string|array
    */
    public function getDateReceived()
    {
       return $this->getProperty('dateReceived');
    }

    /**
    * A sub property of recipient. The recipient who was directly sent the message.
    * @param ContactPoint|Organization|Audience|Person|array|string $value
    * @return $this
    * @deprecated use setToRecipient
    */
    public function toRecipient($value)
    {
        $this->setProperty('toRecipient', $value);
        return $this;
    }
   /**
    * @param ContactPoint|Organization|Audience|Person|array|string $value
    * @return $this
    */
    public function setToRecipient($value)
    {
        $this->setProperty('toRecipient', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getToRecipient()
    {
       return $this->getProperty('toRecipient');
    }


}
