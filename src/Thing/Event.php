<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing;

use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\EventStatusType;
/**
* An event happening at a certain time and location, such as a concert, lecture, or festival. Ticketing information may be added via the <a class="localLink" href="http://schema.org/offers">offers</a> property. Repeated events may be structured as separate Event objects.
* @see http://schema.org/Event
* @package Sohophp\SchemaOrg\Thing
*/
class Event extends Thing
{

     
     /**
     * A work featured in some event, e.g. exhibited in an ExhibitionEvent.
       Specific subproperties are available for workPerformed (e.g. a play), or a workPresented (a Movie at a ScreeningEvent).
     * @param CreativeWork $value
     * @return $this
     */

     public function workFeatured(?CreativeWork $value):self
     {
        $this->setProperty("workFeatured",$value);
        return $this;
     }

     
     /**
     * The number of attendee places for an event that remain unallocated.
     * @param int $value
     * @return $this
     */

     public function remainingAttendeeCapacity(?int $value):self
     {
        $this->setProperty("remainingAttendeeCapacity",$value);
        return $this;
     }

     
     /**
     * The main performer or performers of the event&#x2014;for example, a presenter, musician, or actor.
     * @param Person|Organization $value
     * @return $this
     */

     public function performers( $value):self
     {
        $this->setProperty("performers",$value);
        return $this;
     }

     
     /**
     * The time admission will commence.
     * @param \DateTimeInterface $value
     * @return $this
     */

     public function doorTime(?\DateTimeInterface $value):self
     {
        $this->setProperty("doorTime",$value);
        return $this;
     }

     
     /**
     * An organizer of an Event.
     * @param Person|Organization $value
     * @return $this
     */

     public function organizer( $value):self
     {
        $this->setProperty("organizer",$value);
        return $this;
     }

     
     /**
     * A person attending the event.
     * @param Person|Organization $value
     * @return $this
     */

     public function attendees( $value):self
     {
        $this->setProperty("attendees",$value);
        return $this;
     }

     
     /**
     * An Event that is part of this event. For example, a conference event includes many presentations, each of which is a subEvent of the conference.
     * @param Event $value
     * @return $this
     */

     public function subEvent(?Event $value):self
     {
        $this->setProperty("subEvent",$value);
        return $this;
     }

     
     /**
     * Events that are a part of this event. For example, a conference event includes many presentations, each subEvents of the conference.
     * @param Event $value
     * @return $this
     */

     public function subEvents(?Event $value):self
     {
        $this->setProperty("subEvents",$value);
        return $this;
     }

     
     /**
     * A person or organization attending the event.
     * @param Person|Organization $value
     * @return $this
     */

     public function attendee( $value):self
     {
        $this->setProperty("attendee",$value);
        return $this;
     }

     
     /**
     * A work performed in some event, for example a play performed in a TheaterEvent.
     * @param CreativeWork $value
     * @return $this
     */

     public function workPerformed(?CreativeWork $value):self
     {
        $this->setProperty("workPerformed",$value);
        return $this;
     }

     
     /**
     * An eventStatus of an event represents its status; particularly useful when an event is cancelled or rescheduled.
     * @param EventStatusType $value
     * @return $this
     */

     public function eventStatus(?EventStatusType $value):self
     {
        $this->setProperty("eventStatus",$value);
        return $this;
     }

     
     /**
     * An event that this event is a part of. For example, a collection of individual music performances might each have a music festival as their superEvent.
     * @param Event $value
     * @return $this
     */

     public function superEvent(?Event $value):self
     {
        $this->setProperty("superEvent",$value);
        return $this;
     }

     
     /**
     * Used in conjunction with eventStatus for rescheduled or cancelled events. This property contains the previously scheduled start date. For rescheduled events, the startDate property should be used for the newly scheduled start date. In the (rare) case of an event that has been postponed and rescheduled multiple times, this field may be repeated.
     * @param \DateTimeInterface $value
     * @return $this
     */

     public function previousStartDate(?\DateTimeInterface $value):self
     {
        $this->setProperty("previousStartDate",$value);
        return $this;
     }

     
     /**
     * The CreativeWork that captured all or part of this Event.
     * @param CreativeWork $value
     * @return $this
     */

     public function recordedIn(?CreativeWork $value):self
     {
        $this->setProperty("recordedIn",$value);
        return $this;
     }

     
     /**
     * A performer at the event&#x2014;for example, a presenter, musician, musical group or actor.
     * @param Person|Organization $value
     * @return $this
     */

     public function performer( $value):self
     {
        $this->setProperty("performer",$value);
        return $this;
     }

     
}

