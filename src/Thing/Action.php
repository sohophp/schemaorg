<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing;

use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\ActionStatusType;
use Sohophp\SchemaOrg\Thing\Intangible\EntryPoint;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress;
use Sohophp\SchemaOrg\Thing\Place;

/**
* An action performed by a direct agent and indirect participants upon a direct object. Optionally happens at a location with the help of an inanimate instrument. The execution of the action may produce a result. Specific action sub-type documentation specifies the exact expectation of each argument/role.<br/><br/>

See also <a href="http://blog.schema.org/2014/04/announcing-schemaorg-actions.html">blog post</a> and <a href="http://schema.org/docs/actions.html">Actions overview document</a>.
* @see http://schema.org/Action
* @package Sohophp\SchemaOrg\Thing
*/
class Action extends Thing
{

    /**
    * The result produced in the action. e.g. John wrote <em>a book</em>.
    * @param Thing $value
    * @return $this
    */
    public function result(?Thing $value)
    {
        $this->setProperty('result', $value);
        return $this;
    }

    /**
    * The startTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to start. For actions that span a period of time, when the action was performed. e.g. John wrote a book from <em>January</em> to December. For media, including audio and video, it's the time offset of the start of a clip within a larger file.<br/><br/>

Note that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
    * @param  $value
    * @return $this
    */
    public function startTime($value)
    {
        $this->setProperty('startTime', $value);
        return $this;
    }

    /**
    * Indicates the current disposition of the Action.
    * @param ActionStatusType $value
    * @return $this
    */
    public function actionStatus(?ActionStatusType $value)
    {
        $this->setProperty('actionStatus', $value);
        return $this;
    }

    /**
    * Indicates a target EntryPoint for an Action.
    * @param EntryPoint $value
    * @return $this
    */
    public function target(?EntryPoint $value)
    {
        $this->setProperty('target', $value);
        return $this;
    }

    /**
    * The direct performer or driver of the action (animate or inanimate). e.g. <em>John</em> wrote a book.
    * @param Person|Organization $value
    * @return $this
    */
    public function agent($value)
    {
        $this->setProperty('agent', $value);
        return $this;
    }

    /**
    * Other co-agents that participated in the action indirectly. e.g. John wrote a book with <em>Steve</em>.
    * @param Organization|Person $value
    * @return $this
    */
    public function participant($value)
    {
        $this->setProperty('participant', $value);
        return $this;
    }

    /**
    * The object that helped the agent perform the action. e.g. John wrote a book with <em>a pen</em>.
    * @param Thing $value
    * @return $this
    */
    public function instrument(?Thing $value)
    {
        $this->setProperty('instrument', $value);
        return $this;
    }

    /**
    * The endTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to end. For actions that span a period of time, when the action was performed. e.g. John wrote a book from January to <em>December</em>. For media, including audio and video, it's the time offset of the end of a clip within a larger file.<br/><br/>

Note that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
    * @param  $value
    * @return $this
    */
    public function endTime($value)
    {
        $this->setProperty('endTime', $value);
        return $this;
    }

    /**
    * The object upon which the action is carried out, whose state is kept intact or changed. Also known as the semantic roles patient, affected or undergoer (which change their state) or theme (which doesn't). e.g. John read <em>a book</em>.
    * @param Thing $value
    * @return $this
    */
    public function object(?Thing $value)
    {
        $this->setProperty('object', $value);
        return $this;
    }

    /**
    * For failed actions, more information on the cause of the failure.
    * @param Thing $value
    * @return $this
    */
    public function error(?Thing $value)
    {
        $this->setProperty('error', $value);
        return $this;
    }

    /**
    * The location of for example where the event is happening, an organization is located, or where an action takes place.
    * @param PostalAddress|string|Place $value
    * @return $this
    */
    public function location($value)
    {
        $this->setProperty('location', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Action','Thing\\Action');

