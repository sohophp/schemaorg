<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing;

use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Intangible\Audience;
use Sohophp\SchemaOrg\Thing\Intangible\Rating\AggregateRating;
use Sohophp\SchemaOrg\Thing\Intangible\Offer;
use Sohophp\SchemaOrg\Thing\Intangible\Language;
use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\EventStatusType;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Duration;
use Sohophp\SchemaOrg\Thing\CreativeWork\Review;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress;
use Sohophp\SchemaOrg\Thing\Place;

/**
* An event happening at a certain time and location, such as a concert, lecture, or festival. Ticketing information may be added via the <a class="localLink" href="http://schema.org/offers">offers</a> property. Repeated events may be structured as separate Event objects.
* @see http://schema.org/Event
* @package Sohophp\SchemaOrg\Thing
*/
class Event extends Thing
{

    /**
    * The subject matter of the content.
    * @param Thing $value
    * @return $this
    */
    public function about(?Thing $value)
    {
        $this->setProperty('about', $value);
        return $this;
    }

    /**
    * A person or organization that supports (sponsors) something through some kind of financial contribution.
    * @param Organization|Person $value
    * @return $this
    */
    public function funder($value)
    {
        $this->setProperty('funder', $value);
        return $this;
    }

    /**
    * An intended audience, i.e. a group for whom something was created.
    * @param Audience $value
    * @return $this
    */
    public function audience(?Audience $value)
    {
        $this->setProperty('audience', $value);
        return $this;
    }

    /**
    * The number of attendee places for an event that remain unallocated.
    * @param int $value
    * @return $this
    */
    public function remainingAttendeeCapacity(?int $value)
    {
        $this->setProperty('remainingAttendeeCapacity', $value);
        return $this;
    }

    /**
    * An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip.
    * @param Person $value
    * @return $this
    */
    public function actor(?Person $value)
    {
        $this->setProperty('actor', $value);
        return $this;
    }

    /**
    * The main performer or performers of the event&#x2014;for example, a presenter, musician, or actor.
    * @param Organization|Person $value
    * @return $this
    */
    public function performers($value)
    {
        $this->setProperty('performers', $value);
        return $this;
    }

    /**
    * The end date and time of the item (in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 date format</a>).
    * @param  $value
    * @return $this
    */
    public function endDate($value)
    {
        $this->setProperty('endDate', $value);
        return $this;
    }

    /**
    * The time admission will commence.
    * @param  $value
    * @return $this
    */
    public function doorTime($value)
    {
        $this->setProperty('doorTime', $value);
        return $this;
    }

    /**
    * A secondary contributor to the CreativeWork or Event.
    * @param Person|Organization $value
    * @return $this
    */
    public function contributor($value)
    {
        $this->setProperty('contributor', $value);
        return $this;
    }

    /**
    * The typical expected age range, e.g. '7-9', '11-'.
    * @param string $value
    * @return $this
    */
    public function typicalAgeRange(?string $value)
    {
        $this->setProperty('typicalAgeRange', $value);
        return $this;
    }

    /**
    * An organizer of an Event.
    * @param Organization|Person $value
    * @return $this
    */
    public function organizer($value)
    {
        $this->setProperty('organizer', $value);
        return $this;
    }

    /**
    * A person attending the event.
    * @param Organization|Person $value
    * @return $this
    */
    public function attendees($value)
    {
        $this->setProperty('attendees', $value);
        return $this;
    }

    /**
    * The overall rating, based on a collection of reviews or ratings, of the item.
    * @param AggregateRating $value
    * @return $this
    */
    public function aggregateRating(?AggregateRating $value)
    {
        $this->setProperty('aggregateRating', $value);
        return $this;
    }

    /**
    * An Event that is part of this event. For example, a conference event includes many presentations, each of which is a subEvent of the conference.
    * @param Event $value
    * @return $this
    */
    public function subEvent(?Event $value)
    {
        $this->setProperty('subEvent', $value);
        return $this;
    }

    /**
    * Events that are a part of this event. For example, a conference event includes many presentations, each subEvents of the conference.
    * @param Event $value
    * @return $this
    */
    public function subEvents(?Event $value)
    {
        $this->setProperty('subEvents', $value);
        return $this;
    }

    /**
    * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event.
    * @param Offer $value
    * @return $this
    */
    public function offers(?Offer $value)
    {
        $this->setProperty('offers', $value);
        return $this;
    }

    /**
    * The language of the content or performance or used in an action. Please use one of the language codes from the <a href="http://tools.ietf.org/html/bcp47">IETF BCP 47 standard</a>. See also <a class="localLink" href="http://schema.org/availableLanguage">availableLanguage</a>.
    * @param Language|string $value
    * @return $this
    */
    public function inLanguage($value)
    {
        $this->setProperty('inLanguage', $value);
        return $this;
    }

    /**
    * A person or organization attending the event.
    * @param Organization|Person $value
    * @return $this
    */
    public function attendee($value)
    {
        $this->setProperty('attendee', $value);
        return $this;
    }

    /**
    * A work performed in some event, for example a play performed in a TheaterEvent.
    * @param CreativeWork $value
    * @return $this
    */
    public function workPerformed(?CreativeWork $value)
    {
        $this->setProperty('workPerformed', $value);
        return $this;
    }

    /**
    * An eventStatus of an event represents its status; particularly useful when an event is cancelled or rescheduled.
    * @param EventStatusType $value
    * @return $this
    */
    public function eventStatus(?EventStatusType $value)
    {
        $this->setProperty('eventStatus', $value);
        return $this;
    }

    /**
    * The start date and time of the item (in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 date format</a>).
    * @param  $value
    * @return $this
    */
    public function startDate($value)
    {
        $this->setProperty('startDate', $value);
        return $this;
    }

    /**
    * A director of e.g. tv, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip.
    * @param Person $value
    * @return $this
    */
    public function director(?Person $value)
    {
        $this->setProperty('director', $value);
        return $this;
    }

    /**
    * An event that this event is a part of. For example, a collection of individual music performances might each have a music festival as their superEvent.
    * @param Event $value
    * @return $this
    */
    public function superEvent(?Event $value)
    {
        $this->setProperty('superEvent', $value);
        return $this;
    }

    /**
    * A work featured in some event, e.g. exhibited in an ExhibitionEvent.
       Specific subproperties are available for workPerformed (e.g. a play), or a workPresented (a Movie at a ScreeningEvent).
    * @param CreativeWork $value
    * @return $this
    */
    public function workFeatured(?CreativeWork $value)
    {
        $this->setProperty('workFeatured', $value);
        return $this;
    }

    /**
    * The duration of the item (movie, audio recording, event, etc.) in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 date format</a>.
    * @param Duration $value
    * @return $this
    */
    public function duration(?Duration $value)
    {
        $this->setProperty('duration', $value);
        return $this;
    }

    /**
    * Organization or person who adapts a creative work to different languages, regional differences and technical requirements of a target market, or that translates during some event.
    * @param Person|Organization $value
    * @return $this
    */
    public function translator($value)
    {
        $this->setProperty('translator', $value);
        return $this;
    }

    /**
    * Used in conjunction with eventStatus for rescheduled or cancelled events. This property contains the previously scheduled start date. For rescheduled events, the startDate property should be used for the newly scheduled start date. In the (rare) case of an event that has been postponed and rescheduled multiple times, this field may be repeated.
    * @param  $value
    * @return $this
    */
    public function previousStartDate($value)
    {
        $this->setProperty('previousStartDate', $value);
        return $this;
    }

    /**
    * A review of the item.
    * @param Review $value
    * @return $this
    */
    public function review(?Review $value)
    {
        $this->setProperty('review', $value);
        return $this;
    }

    /**
    * A person or organization that supports a thing through a pledge, promise, or financial contribution. e.g. a sponsor of a Medical Study or a corporate sponsor of an event.
    * @param Person|Organization $value
    * @return $this
    */
    public function sponsor($value)
    {
        $this->setProperty('sponsor', $value);
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

    /**
    * The CreativeWork that captured all or part of this Event.
    * @param CreativeWork $value
    * @return $this
    */
    public function recordedIn(?CreativeWork $value)
    {
        $this->setProperty('recordedIn', $value);
        return $this;
    }

    /**
    * The person or organization who wrote a composition, or who is the composer of a work performed at some event.
    * @param Person|Organization $value
    * @return $this
    */
    public function composer($value)
    {
        $this->setProperty('composer', $value);
        return $this;
    }

    /**
    * A flag to signal that the item, event, or place is accessible for free.
    * @param bool $value
    * @return $this
    */
    public function isAccessibleForFree(?bool $value)
    {
        $this->setProperty('isAccessibleForFree', $value);
        return $this;
    }

    /**
    * The total number of individuals that may attend an event or venue.
    * @param int $value
    * @return $this
    */
    public function maximumAttendeeCapacity(?int $value)
    {
        $this->setProperty('maximumAttendeeCapacity', $value);
        return $this;
    }

    /**
    * A performer at the event&#x2014;for example, a presenter, musician, musical group or actor.
    * @param Organization|Person $value
    * @return $this
    */
    public function performer($value)
    {
        $this->setProperty('performer', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Event','Thing\\Event');

