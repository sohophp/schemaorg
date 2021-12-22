<?php
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

*
*/
class Event extends Thing
{

    /**
    * The subject matter of the content.
    * @param Thing|array $value
    * @return $this
    */
    public function about(?Thing $value)
    {
        $this->setProperty('about', $value);
        return $this;
    }
   /**
    * @param Thing|array $value
    * @return $this
    */
    public function setAbout(?Thing $value)
    {
        $this->setProperty('about', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAbout()
    {
       return $this->getProperty('about');
    }

    /**
    * A person or organization that supports (sponsors) something through some kind of financial contribution.
    * @param Organization|Person|array $value
    * @return $this
    */
    public function funder($value)
    {
        $this->setProperty('funder', $value);
        return $this;
    }
   /**
    * @param Organization|Person|array $value
    * @return $this
    */
    public function setFunder($value)
    {
        $this->setProperty('funder', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getFunder()
    {
       return $this->getProperty('funder');
    }

    /**
    * An intended audience, i.e. a group for whom something was created.
    * @param Audience|array $value
    * @return $this
    */
    public function audience(?Audience $value)
    {
        $this->setProperty('audience', $value);
        return $this;
    }
   /**
    * @param Audience|array $value
    * @return $this
    */
    public function setAudience(?Audience $value)
    {
        $this->setProperty('audience', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAudience()
    {
       return $this->getProperty('audience');
    }

    /**
    * The number of attendee places for an event that remain unallocated.
    * @param int|array $value
    * @return $this
    */
    public function remainingAttendeeCapacity(?int $value)
    {
        $this->setProperty('remainingAttendeeCapacity', $value);
        return $this;
    }
   /**
    * @param int|array $value
    * @return $this
    */
    public function setRemainingAttendeeCapacity(?int $value)
    {
        $this->setProperty('remainingAttendeeCapacity', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getRemainingAttendeeCapacity()
    {
       return $this->getProperty('remainingAttendeeCapacity');
    }

    /**
    * An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip.
    * @param Person|array $value
    * @return $this
    */
    public function actor(?Person $value)
    {
        $this->setProperty('actor', $value);
        return $this;
    }
   /**
    * @param Person|array $value
    * @return $this
    */
    public function setActor(?Person $value)
    {
        $this->setProperty('actor', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getActor()
    {
       return $this->getProperty('actor');
    }

    /**
    * The main performer or performers of the event&#x2014;for example, a presenter, musician, or actor.
    * @param Organization|Person|array $value
    * @return $this
    */
    public function performers($value)
    {
        $this->setProperty('performers', $value);
        return $this;
    }
   /**
    * @param Organization|Person|array $value
    * @return $this
    */
    public function setPerformers($value)
    {
        $this->setProperty('performers', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPerformers()
    {
       return $this->getProperty('performers');
    }

    /**
    * The end date and time of the item (in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 date format</a>).
    * @param |array $value
    * @return $this
    */
    public function endDate($value)
    {
        $this->setProperty('endDate', $value);
        return $this;
    }
   /**
    * @param |array $value
    * @return $this
    */
    public function setEndDate($value)
    {
        $this->setProperty('endDate', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getEndDate()
    {
       return $this->getProperty('endDate');
    }

    /**
    * The time admission will commence.
    * @param |array $value
    * @return $this
    */
    public function doorTime($value)
    {
        $this->setProperty('doorTime', $value);
        return $this;
    }
   /**
    * @param |array $value
    * @return $this
    */
    public function setDoorTime($value)
    {
        $this->setProperty('doorTime', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDoorTime()
    {
       return $this->getProperty('doorTime');
    }

    /**
    * A secondary contributor to the CreativeWork or Event.
    * @param Person|Organization|array $value
    * @return $this
    */
    public function contributor($value)
    {
        $this->setProperty('contributor', $value);
        return $this;
    }
   /**
    * @param Person|Organization|array $value
    * @return $this
    */
    public function setContributor($value)
    {
        $this->setProperty('contributor', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getContributor()
    {
       return $this->getProperty('contributor');
    }

    /**
    * The typical expected age range, e.g. '7-9', '11-'.
    * @param string|array $value
    * @return $this
    */
    public function typicalAgeRange(?string $value)
    {
        $this->setProperty('typicalAgeRange', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setTypicalAgeRange(?string $value)
    {
        $this->setProperty('typicalAgeRange', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getTypicalAgeRange()
    {
       return $this->getProperty('typicalAgeRange');
    }

    /**
    * An organizer of an Event.
    * @param Organization|Person|array $value
    * @return $this
    */
    public function organizer($value)
    {
        $this->setProperty('organizer', $value);
        return $this;
    }
   /**
    * @param Organization|Person|array $value
    * @return $this
    */
    public function setOrganizer($value)
    {
        $this->setProperty('organizer', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getOrganizer()
    {
       return $this->getProperty('organizer');
    }

    /**
    * A person attending the event.
    * @param Organization|Person|array $value
    * @return $this
    */
    public function attendees($value)
    {
        $this->setProperty('attendees', $value);
        return $this;
    }
   /**
    * @param Organization|Person|array $value
    * @return $this
    */
    public function setAttendees($value)
    {
        $this->setProperty('attendees', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAttendees()
    {
       return $this->getProperty('attendees');
    }

    /**
    * The overall rating, based on a collection of reviews or ratings, of the item.
    * @param AggregateRating|array $value
    * @return $this
    */
    public function aggregateRating(?AggregateRating $value)
    {
        $this->setProperty('aggregateRating', $value);
        return $this;
    }
   /**
    * @param AggregateRating|array $value
    * @return $this
    */
    public function setAggregateRating(?AggregateRating $value)
    {
        $this->setProperty('aggregateRating', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAggregateRating()
    {
       return $this->getProperty('aggregateRating');
    }

    /**
    * An Event that is part of this event. For example, a conference event includes many presentations, each of which is a subEvent of the conference.
    * @param Event|array $value
    * @return $this
    */
    public function subEvent(?Event $value)
    {
        $this->setProperty('subEvent', $value);
        return $this;
    }
   /**
    * @param Event|array $value
    * @return $this
    */
    public function setSubEvent(?Event $value)
    {
        $this->setProperty('subEvent', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSubEvent()
    {
       return $this->getProperty('subEvent');
    }

    /**
    * Events that are a part of this event. For example, a conference event includes many presentations, each subEvents of the conference.
    * @param Event|array $value
    * @return $this
    */
    public function subEvents(?Event $value)
    {
        $this->setProperty('subEvents', $value);
        return $this;
    }
   /**
    * @param Event|array $value
    * @return $this
    */
    public function setSubEvents(?Event $value)
    {
        $this->setProperty('subEvents', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSubEvents()
    {
       return $this->getProperty('subEvents');
    }

    /**
    * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event.
    * @param Offer|array $value
    * @return $this
    */
    public function offers(?Offer $value)
    {
        $this->setProperty('offers', $value);
        return $this;
    }
   /**
    * @param Offer|array $value
    * @return $this
    */
    public function setOffers(?Offer $value)
    {
        $this->setProperty('offers', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getOffers()
    {
       return $this->getProperty('offers');
    }

    /**
    * The language of the content or performance or used in an action. Please use one of the language codes from the <a href="http://tools.ietf.org/html/bcp47">IETF BCP 47 standard</a>. See also <a class="localLink" href="http://schema.org/availableLanguage">availableLanguage</a>.
    * @param Language|string|array $value
    * @return $this
    */
    public function inLanguage($value)
    {
        $this->setProperty('inLanguage', $value);
        return $this;
    }
   /**
    * @param Language|string|array $value
    * @return $this
    */
    public function setInLanguage($value)
    {
        $this->setProperty('inLanguage', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getInLanguage()
    {
       return $this->getProperty('inLanguage');
    }

    /**
    * A person or organization attending the event.
    * @param Organization|Person|array $value
    * @return $this
    */
    public function attendee($value)
    {
        $this->setProperty('attendee', $value);
        return $this;
    }
   /**
    * @param Organization|Person|array $value
    * @return $this
    */
    public function setAttendee($value)
    {
        $this->setProperty('attendee', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAttendee()
    {
       return $this->getProperty('attendee');
    }

    /**
    * A work performed in some event, for example a play performed in a TheaterEvent.
    * @param CreativeWork|array $value
    * @return $this
    */
    public function workPerformed(?CreativeWork $value)
    {
        $this->setProperty('workPerformed', $value);
        return $this;
    }
   /**
    * @param CreativeWork|array $value
    * @return $this
    */
    public function setWorkPerformed(?CreativeWork $value)
    {
        $this->setProperty('workPerformed', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getWorkPerformed()
    {
       return $this->getProperty('workPerformed');
    }

    /**
    * An eventStatus of an event represents its status; particularly useful when an event is cancelled or rescheduled.
    * @param EventStatusType|array $value
    * @return $this
    */
    public function eventStatus(?EventStatusType $value)
    {
        $this->setProperty('eventStatus', $value);
        return $this;
    }
   /**
    * @param EventStatusType|array $value
    * @return $this
    */
    public function setEventStatus(?EventStatusType $value)
    {
        $this->setProperty('eventStatus', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getEventStatus()
    {
       return $this->getProperty('eventStatus');
    }

    /**
    * The start date and time of the item (in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 date format</a>).
    * @param |array $value
    * @return $this
    */
    public function startDate($value)
    {
        $this->setProperty('startDate', $value);
        return $this;
    }
   /**
    * @param |array $value
    * @return $this
    */
    public function setStartDate($value)
    {
        $this->setProperty('startDate', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getStartDate()
    {
       return $this->getProperty('startDate');
    }

    /**
    * A director of e.g. tv, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip.
    * @param Person|array $value
    * @return $this
    */
    public function director(?Person $value)
    {
        $this->setProperty('director', $value);
        return $this;
    }
   /**
    * @param Person|array $value
    * @return $this
    */
    public function setDirector(?Person $value)
    {
        $this->setProperty('director', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDirector()
    {
       return $this->getProperty('director');
    }

    /**
    * An event that this event is a part of. For example, a collection of individual music performances might each have a music festival as their superEvent.
    * @param Event|array $value
    * @return $this
    */
    public function superEvent(?Event $value)
    {
        $this->setProperty('superEvent', $value);
        return $this;
    }
   /**
    * @param Event|array $value
    * @return $this
    */
    public function setSuperEvent(?Event $value)
    {
        $this->setProperty('superEvent', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSuperEvent()
    {
       return $this->getProperty('superEvent');
    }

    /**
    * A work featured in some event, e.g. exhibited in an ExhibitionEvent.
       Specific subproperties are available for workPerformed (e.g. a play), or a workPresented (a Movie at a ScreeningEvent).
    * @param CreativeWork|array $value
    * @return $this
    */
    public function workFeatured(?CreativeWork $value)
    {
        $this->setProperty('workFeatured', $value);
        return $this;
    }
   /**
    * @param CreativeWork|array $value
    * @return $this
    */
    public function setWorkFeatured(?CreativeWork $value)
    {
        $this->setProperty('workFeatured', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getWorkFeatured()
    {
       return $this->getProperty('workFeatured');
    }

    /**
    * The duration of the item (movie, audio recording, event, etc.) in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 date format</a>.
    * @param Duration|array $value
    * @return $this
    */
    public function duration(?Duration $value)
    {
        $this->setProperty('duration', $value);
        return $this;
    }
   /**
    * @param Duration|array $value
    * @return $this
    */
    public function setDuration(?Duration $value)
    {
        $this->setProperty('duration', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDuration()
    {
       return $this->getProperty('duration');
    }

    /**
    * Organization or person who adapts a creative work to different languages, regional differences and technical requirements of a target market, or that translates during some event.
    * @param Person|Organization|array $value
    * @return $this
    */
    public function translator($value)
    {
        $this->setProperty('translator', $value);
        return $this;
    }
   /**
    * @param Person|Organization|array $value
    * @return $this
    */
    public function setTranslator($value)
    {
        $this->setProperty('translator', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getTranslator()
    {
       return $this->getProperty('translator');
    }

    /**
    * Used in conjunction with eventStatus for rescheduled or cancelled events. This property contains the previously scheduled start date. For rescheduled events, the startDate property should be used for the newly scheduled start date. In the (rare) case of an event that has been postponed and rescheduled multiple times, this field may be repeated.
    * @param |array $value
    * @return $this
    */
    public function previousStartDate($value)
    {
        $this->setProperty('previousStartDate', $value);
        return $this;
    }
   /**
    * @param |array $value
    * @return $this
    */
    public function setPreviousStartDate($value)
    {
        $this->setProperty('previousStartDate', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPreviousStartDate()
    {
       return $this->getProperty('previousStartDate');
    }

    /**
    * A review of the item.
    * @param Review|array $value
    * @return $this
    */
    public function review(?Review $value)
    {
        $this->setProperty('review', $value);
        return $this;
    }
   /**
    * @param Review|array $value
    * @return $this
    */
    public function setReview(?Review $value)
    {
        $this->setProperty('review', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getReview()
    {
       return $this->getProperty('review');
    }

    /**
    * A person or organization that supports a thing through a pledge, promise, or financial contribution. e.g. a sponsor of a Medical Study or a corporate sponsor of an event.
    * @param Person|Organization|array $value
    * @return $this
    */
    public function sponsor($value)
    {
        $this->setProperty('sponsor', $value);
        return $this;
    }
   /**
    * @param Person|Organization|array $value
    * @return $this
    */
    public function setSponsor($value)
    {
        $this->setProperty('sponsor', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSponsor()
    {
       return $this->getProperty('sponsor');
    }

    /**
    * The location of for example where the event is happening, an organization is located, or where an action takes place.
    * @param PostalAddress|string|Place|array $value
    * @return $this
    */
    public function location($value)
    {
        $this->setProperty('location', $value);
        return $this;
    }
   /**
    * @param PostalAddress|string|Place|array $value
    * @return $this
    */
    public function setLocation($value)
    {
        $this->setProperty('location', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getLocation()
    {
       return $this->getProperty('location');
    }

    /**
    * The CreativeWork that captured all or part of this Event.
    * @param CreativeWork|array $value
    * @return $this
    */
    public function recordedIn(?CreativeWork $value)
    {
        $this->setProperty('recordedIn', $value);
        return $this;
    }
   /**
    * @param CreativeWork|array $value
    * @return $this
    */
    public function setRecordedIn(?CreativeWork $value)
    {
        $this->setProperty('recordedIn', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getRecordedIn()
    {
       return $this->getProperty('recordedIn');
    }

    /**
    * The person or organization who wrote a composition, or who is the composer of a work performed at some event.
    * @param Person|Organization|array $value
    * @return $this
    */
    public function composer($value)
    {
        $this->setProperty('composer', $value);
        return $this;
    }
   /**
    * @param Person|Organization|array $value
    * @return $this
    */
    public function setComposer($value)
    {
        $this->setProperty('composer', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getComposer()
    {
       return $this->getProperty('composer');
    }

    /**
    * A flag to signal that the item, event, or place is accessible for free.
    * @param bool|array $value
    * @return $this
    */
    public function isAccessibleForFree(?bool $value)
    {
        $this->setProperty('isAccessibleForFree', $value);
        return $this;
    }
   /**
    * @param bool|array $value
    * @return $this
    */
    public function setIsAccessibleForFree(?bool $value)
    {
        $this->setProperty('isAccessibleForFree', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getIsAccessibleForFree()
    {
       return $this->getProperty('isAccessibleForFree');
    }

    /**
    * The total number of individuals that may attend an event or venue.
    * @param int|array $value
    * @return $this
    */
    public function maximumAttendeeCapacity(?int $value)
    {
        $this->setProperty('maximumAttendeeCapacity', $value);
        return $this;
    }
   /**
    * @param int|array $value
    * @return $this
    */
    public function setMaximumAttendeeCapacity(?int $value)
    {
        $this->setProperty('maximumAttendeeCapacity', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getMaximumAttendeeCapacity()
    {
       return $this->getProperty('maximumAttendeeCapacity');
    }

    /**
    * A performer at the event&#x2014;for example, a presenter, musician, musical group or actor.
    * @param Organization|Person|array $value
    * @return $this
    */
    public function performer($value)
    {
        $this->setProperty('performer', $value);
        return $this;
    }
   /**
    * @param Organization|Person|array $value
    * @return $this
    */
    public function setPerformer($value)
    {
        $this->setProperty('performer', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPerformer()
    {
       return $this->getProperty('performer');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Event','Thing\\Event');

