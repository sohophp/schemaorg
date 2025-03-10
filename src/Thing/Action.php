<?php
namespace Sohophp\SchemaOrg\Thing;

use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\ActionStatusType;
use Sohophp\SchemaOrg\Thing\Intangible\EntryPoint;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress;
use Sohophp\SchemaOrg\Thing\Place;

/**
* An action performed by a direct agent and indirect participants upon a direct
 * object. Optionally happens at a location with the help of an inanimate
 * instrument. The execution of the action may produce a result. Specific action
 * sub-type documentation specifies the exact expectation of each argument/role.
 * 
 * See also [blog
 * post](http://blog.schema.org/2014/04/announcing-schemaorg-actions.html) and
 * [Actions overview document](http://schema.org/docs/actions.html).
* @see http://schema.org/Action
* @package Sohophp\SchemaOrg\Thing
*/
class Action extends Thing
{


    /**
        * The result produced in the action. e.g. John wrote *a book*.
        * @param Thing|array|string|mixed $value
    * @return $this
    */
    public function result($value)
    {
        $this->setProperty('result', $value);
        return $this;
    }

    /**
    * @param Thing|array|string|mixed $value
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
        * The startTime of something. For a reserved event or service (e.g.
 * FoodEstablishmentReservation), the time that it is expected to start. For
 * actions that span a period of time, when the action was performed. e.g. John
 * wrote a book from *January* to December. For media, including audio and
 * video, it's the time offset of the start of a clip within a larger file.
 * 
 * Note that Event uses startDate/endDate instead of startTime/endTime, even
 * when describing dates with times. This situation may be clarified in future
 * revisions.
        * @param array|string|mixed $value
    * @return $this
    */
    public function startTime($value)
    {
        $this->setProperty('startTime', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Indicates the current disposition of the Action.
        * @param ActionStatusType|array|string|mixed $value
    * @return $this
    */
    public function actionStatus($value)
    {
        $this->setProperty('actionStatus', $value);
        return $this;
    }

    /**
    * @param ActionStatusType|array|string|mixed $value
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
        * Indicates a target EntryPoint for an Action.
        * @param EntryPoint|array|string|mixed $value
    * @return $this
    */
    public function target($value)
    {
        $this->setProperty('target', $value);
        return $this;
    }

    /**
    * @param EntryPoint|array|string|mixed $value
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
        * The direct performer or driver of the action (animate or inanimate). e.g.
 * *John* wrote a book.
        * @param Person|Organization|array|string|mixed $value
    * @return $this
    */
    public function agent($value)
    {
        $this->setProperty('agent', $value);
        return $this;
    }

    /**
    * @param Person|Organization|array|string|mixed $value
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
        * Other co-agents that participated in the action indirectly. e.g. John wrote a
 * book with *Steve*.
        * @param Organization|Person|array|string|mixed $value
    * @return $this
    */
    public function participant($value)
    {
        $this->setProperty('participant', $value);
        return $this;
    }

    /**
    * @param Organization|Person|array|string|mixed $value
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
        * The object that helped the agent perform the action. e.g. John wrote a book
 * with *a pen*.
        * @param Thing|array|string|mixed $value
    * @return $this
    */
    public function instrument($value)
    {
        $this->setProperty('instrument', $value);
        return $this;
    }

    /**
    * @param Thing|array|string|mixed $value
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
        * The endTime of something. For a reserved event or service (e.g.
 * FoodEstablishmentReservation), the time that it is expected to end. For
 * actions that span a period of time, when the action was performed. e.g. John
 * wrote a book from January to *December*. For media, including audio and
 * video, it's the time offset of the end of a clip within a larger file.
 * 
 * Note that Event uses startDate/endDate instead of startTime/endTime, even
 * when describing dates with times. This situation may be clarified in future
 * revisions.
        * @param array|string|mixed $value
    * @return $this
    */
    public function endTime($value)
    {
        $this->setProperty('endTime', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The object upon which the action is carried out, whose state is kept intact
 * or changed. Also known as the semantic roles patient, affected or undergoer
 * (which change their state) or theme (which doesn't). e.g. John read *a book*.
        * @param Thing|array|string|mixed $value
    * @return $this
    */
    public function object($value)
    {
        $this->setProperty('object', $value);
        return $this;
    }

    /**
    * @param Thing|array|string|mixed $value
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
        * For failed actions, more information on the cause of the failure.
        * @param Thing|array|string|mixed $value
    * @return $this
    */
    public function error($value)
    {
        $this->setProperty('error', $value);
        return $this;
    }

    /**
    * @param Thing|array|string|mixed $value
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
        * The location of for example where the event is happening, an organization is
 * located, or where an action takes place.
        * @param PostalAddress|string|Place|array|mixed $value
    * @return $this
    */
    public function location($value)
    {
        $this->setProperty('location', $value);
        return $this;
    }

    /**
    * @param PostalAddress|string|Place|array|mixed $value
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
