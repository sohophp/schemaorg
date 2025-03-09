<?php
namespace Sohophp\SchemaOrg\Thing;

use Sohophp\SchemaOrg\Thing;

/**
* An action performed by a direct agent and indirect participants upon a direct object. Optionally happens at a location with the help of an inanimate instrument. The execution of the action may produce a result. Specific action sub-type documentation specifies the exact expectation of each argument/role.\n\nSee also [blog post](http://blog.schema.org/2014/04/announcing-schemaorg-actions.html) and [Actions overview document](https://schema.org/docs/actions.html).
* @see schema:Action
* @package Sohophp\SchemaOrg\Thing
*/
class Action extends Thing
{
   /**
        * The direct performer or driver of the action (animate or inanimate). E.g. *John* wrote a book.
        */
    protected $agent = null;

   /**
        * Indicates a target EntryPoint, or url, for an Action.
        */
    protected $target = null;

   /**
        * Indicates the current disposition of the Action.
        */
    protected $actionStatus = null;

   /**
        * For failed actions, more information on the cause of the failure.
        */
    protected $error = null;

   /**
        * The object upon which the action is carried out, whose state is kept intact or changed. Also known as the semantic roles patient, affected or undergoer (which change their state) or theme (which doesn't). E.g. John read *a book*.
        */
    protected $object = null;

   /**
        * The object that helped the agent perform the action. E.g. John wrote a book with *a pen*.
        */
    protected $instrument = null;

   /**
        * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
        */
    protected $provider = null;

   /**
        * The startTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to start. For actions that span a period of time, when the action was performed. E.g. John wrote a book from *January* to December. For media, including audio and video, it's the time offset of the start of a clip within a larger file.\n\nNote that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
        */
    protected $startTime = null;

   /**
        * Description of the process by which the action was performed.
        */
    protected $actionProcess = null;

   /**
        * Other co-agents that participated in the action indirectly. E.g. John wrote a book with *Steve*.
        */
    protected $participant = null;

   /**
        * The result produced in the action. E.g. John wrote *a book*.
        */
    protected $result = null;

   /**
        * The endTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to end. For actions that span a period of time, when the action was performed. E.g. John wrote a book from January to *December*. For media, including audio and video, it's the time offset of the end of a clip within a larger file.\n\nNote that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
        */
    protected $endTime = null;

   /**
        * The location of, for example, where an event is happening, where an organization is located, or where an action takes place.
        */
    protected $location = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setAgent($value)
    {
        $this->setProperty('agent', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAgent()
    {
       return $this->getProperty('agent');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setTarget($value)
    {
        $this->setProperty('target', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTarget()
    {
       return $this->getProperty('target');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setActionStatus($value)
    {
        $this->setProperty('actionStatus', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getActionStatus()
    {
       return $this->getProperty('actionStatus');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setError($value)
    {
        $this->setProperty('error', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getError()
    {
       return $this->getProperty('error');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setObject($value)
    {
        $this->setProperty('object', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getObject()
    {
       return $this->getProperty('object');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setInstrument($value)
    {
        $this->setProperty('instrument', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getInstrument()
    {
       return $this->getProperty('instrument');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setProvider($value)
    {
        $this->setProperty('provider', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getProvider()
    {
       return $this->getProperty('provider');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setStartTime($value)
    {
        $this->setProperty('startTime', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getStartTime()
    {
       return $this->getProperty('startTime');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setActionProcess($value)
    {
        $this->setProperty('actionProcess', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getActionProcess()
    {
       return $this->getProperty('actionProcess');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setParticipant($value)
    {
        $this->setProperty('participant', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getParticipant()
    {
       return $this->getProperty('participant');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setResult($value)
    {
        $this->setProperty('result', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getResult()
    {
       return $this->getProperty('result');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setEndTime($value)
    {
        $this->setProperty('endTime', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEndTime()
    {
       return $this->getProperty('endTime');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setLocation($value)
    {
        $this->setProperty('location', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getLocation()
    {
       return $this->getProperty('location');
    }


}
