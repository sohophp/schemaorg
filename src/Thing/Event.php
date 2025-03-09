<?php
namespace Sohophp\SchemaOrg\Thing;

use Sohophp\SchemaOrg\Thing;

/**
* An event happening at a certain time and location, such as a concert, lecture, or festival. Ticketing information may be added via the [[offers]] property. Repeated events may be structured as separate Event objects.
* @see schema:Event
* @package Sohophp\SchemaOrg\Thing
*/
class Event extends Thing
{
   /**
        * A person or organization that supports a thing through a pledge, promise, or financial contribution. E.g. a sponsor of a Medical Study or a corporate sponsor of an event.
        */
    protected $sponsor = null;

   /**
        * The language of the content or performance or used in an action. Please use one of the language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
        */
    protected $inLanguage = null;

   /**
        * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event. Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell, lease, etc. This property can also be used to describe a [[Demand]]. While this property is listed as expected on a number of common types, it can be used in others. In that case, using a second type, such as Product or a subtype of Product, can clarify the nature of the offer.
      
        */
    protected $offers = null;

   /**
        * Associates an [[Event]] with a [[Schedule]]. There are circumstances where it is preferable to share a schedule for a series of
      repeating events rather than data on the individual events themselves. For example, a website or application might prefer to publish a schedule for a weekly
      gym class rather than provide data on every event. A schedule could be processed by applications to add forthcoming events to a calendar. An [[Event]] that
      is associated with a [[Schedule]] using this property should not have [[startDate]] or [[endDate]] properties. These are instead defined within the associated
      [[Schedule]], this avoids any ambiguity for clients using the data. The property might have repeated values to specify different schedules, e.g. for different months
      or seasons.
        */
    protected $eventSchedule = null;

   /**
        * Keywords or tags used to describe some item. Multiple textual entries in a keywords list are typically delimited by commas, or by repeating the property.
        */
    protected $keywords = null;

   /**
        * An Event that is part of this event. For example, a conference event includes many presentations, each of which is a subEvent of the conference.
        */
    protected $subEvent = null;

   /**
        * An event that this event is a part of. For example, a collection of individual music performances might each have a music festival as their superEvent.
        */
    protected $superEvent = null;

   /**
        * The end date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
        */
    protected $endDate = null;

   /**
        * The total number of individuals that may attend an event or venue.
        */
    protected $maximumAttendeeCapacity = null;

   /**
        * A director of e.g. TV, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip.
        */
    protected $director = null;

   /**
        * The person or organization who wrote a composition, or who is the composer of a work performed at some event.
        */
    protected $composer = null;

   /**
        * The main performer or performers of the event&#x2014;for example, a presenter, musician, or actor.
        */
    protected $performers = null;

   /**
        * The eventAttendanceMode of an event indicates whether it occurs online, offline, or a mix.
        */
    protected $eventAttendanceMode = null;

   /**
        * A [[Grant]] that directly or indirectly provide funding or sponsorship for this item. See also [[ownershipFundingInfo]].
        */
    protected $funding = null;

   /**
        * A person or organization that supports (sponsors) something through some kind of financial contribution.
        */
    protected $funder = null;

   /**
        * The subject matter of the content.
        */
    protected $about = null;

   /**
        * The maximum virtual attendee capacity of an [[Event]] whose [[eventAttendanceMode]] is [[OnlineEventAttendanceMode]] (or the online aspects, in the case of a [[MixedEventAttendanceMode]]). 
        */
    protected $maximumVirtualAttendeeCapacity = null;

   /**
        * The time admission will commence.
        */
    protected $doorTime = null;

   /**
        * The start date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
        */
    protected $startDate = null;

   /**
        * An intended audience, i.e. a group for whom something was created.
        */
    protected $audience = null;

   /**
        * A review of the item.
        */
    protected $review = null;

   /**
        * The maximum physical attendee capacity of an [[Event]] whose [[eventAttendanceMode]] is [[OfflineEventAttendanceMode]] (or the offline aspects, in the case of a [[MixedEventAttendanceMode]]). 
        */
    protected $maximumPhysicalAttendeeCapacity = null;

   /**
        * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
        */
    protected $duration = null;

   /**
        * A person or organization attending the event.
        */
    protected $attendee = null;

   /**
        * The CreativeWork that captured all or part of this Event.
        */
    protected $recordedIn = null;

   /**
        * Organization or person who adapts a creative work to different languages, regional differences and technical requirements of a target market, or that translates during some event.
        */
    protected $translator = null;

   /**
        * A work featured in some event, e.g. exhibited in an ExhibitionEvent.
       Specific subproperties are available for workPerformed (e.g. a play), or a workPresented (a Movie at a ScreeningEvent).
        */
    protected $workFeatured = null;

   /**
        * A flag to signal that the item, event, or place is accessible for free.
        */
    protected $isAccessibleForFree = null;

   /**
        * An eventStatus of an event represents its status; particularly useful when an event is cancelled or rescheduled.
        */
    protected $eventStatus = null;

   /**
        * A performer at the event&#x2014;for example, a presenter, musician, musical group or actor.
        */
    protected $performer = null;

   /**
        * Used in conjunction with eventStatus for rescheduled or cancelled events. This property contains the previously scheduled start date. For rescheduled events, the startDate property should be used for the newly scheduled start date. In the (rare) case of an event that has been postponed and rescheduled multiple times, this field may be repeated.
        */
    protected $previousStartDate = null;

   /**
        * Events that are a part of this event. For example, a conference event includes many presentations, each subEvents of the conference.
        */
    protected $subEvents = null;

   /**
        * A secondary contributor to the CreativeWork or Event.
        */
    protected $contributor = null;

   /**
        * The overall rating, based on a collection of reviews or ratings, of the item.
        */
    protected $aggregateRating = null;

   /**
        * The number of attendee places for an event that remain unallocated.
        */
    protected $remainingAttendeeCapacity = null;

   /**
        * A person attending the event.
        */
    protected $attendees = null;

   /**
        * A work performed in some event, for example a play performed in a TheaterEvent.
        */
    protected $workPerformed = null;

   /**
        * An actor (individual or a group), e.g. in TV, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip.
        */
    protected $actor = null;

   /**
        * An organizer of an Event.
        */
    protected $organizer = null;

   /**
        * The typical expected age range, e.g. '7-9', '11-'.
        */
    protected $typicalAgeRange = null;

   /**
        * The location of, for example, where an event is happening, where an organization is located, or where an action takes place.
        */
    protected $location = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setSponsor($value)
    {
        $this->setProperty('sponsor', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSponsor()
    {
       return $this->getProperty('sponsor');
    }

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
    public function setOffers($value)
    {
        $this->setProperty('offers', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getOffers()
    {
       return $this->getProperty('offers');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setEventSchedule($value)
    {
        $this->setProperty('eventSchedule', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEventSchedule()
    {
       return $this->getProperty('eventSchedule');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setKeywords($value)
    {
        $this->setProperty('keywords', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getKeywords()
    {
       return $this->getProperty('keywords');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setSubEvent($value)
    {
        $this->setProperty('subEvent', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSubEvent()
    {
       return $this->getProperty('subEvent');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setSuperEvent($value)
    {
        $this->setProperty('superEvent', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSuperEvent()
    {
       return $this->getProperty('superEvent');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setEndDate($value)
    {
        $this->setProperty('endDate', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEndDate()
    {
       return $this->getProperty('endDate');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setMaximumAttendeeCapacity($value)
    {
        $this->setProperty('maximumAttendeeCapacity', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMaximumAttendeeCapacity()
    {
       return $this->getProperty('maximumAttendeeCapacity');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setDirector($value)
    {
        $this->setProperty('director', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDirector()
    {
       return $this->getProperty('director');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setComposer($value)
    {
        $this->setProperty('composer', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getComposer()
    {
       return $this->getProperty('composer');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setPerformers($value)
    {
        $this->setProperty('performers', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPerformers()
    {
       return $this->getProperty('performers');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setEventAttendanceMode($value)
    {
        $this->setProperty('eventAttendanceMode', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEventAttendanceMode()
    {
       return $this->getProperty('eventAttendanceMode');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setFunding($value)
    {
        $this->setProperty('funding', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getFunding()
    {
       return $this->getProperty('funding');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setFunder($value)
    {
        $this->setProperty('funder', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getFunder()
    {
       return $this->getProperty('funder');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setAbout($value)
    {
        $this->setProperty('about', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAbout()
    {
       return $this->getProperty('about');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setMaximumVirtualAttendeeCapacity($value)
    {
        $this->setProperty('maximumVirtualAttendeeCapacity', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMaximumVirtualAttendeeCapacity()
    {
       return $this->getProperty('maximumVirtualAttendeeCapacity');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setDoorTime($value)
    {
        $this->setProperty('doorTime', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDoorTime()
    {
       return $this->getProperty('doorTime');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setStartDate($value)
    {
        $this->setProperty('startDate', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getStartDate()
    {
       return $this->getProperty('startDate');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setAudience($value)
    {
        $this->setProperty('audience', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAudience()
    {
       return $this->getProperty('audience');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setReview($value)
    {
        $this->setProperty('review', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getReview()
    {
       return $this->getProperty('review');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setMaximumPhysicalAttendeeCapacity($value)
    {
        $this->setProperty('maximumPhysicalAttendeeCapacity', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMaximumPhysicalAttendeeCapacity()
    {
       return $this->getProperty('maximumPhysicalAttendeeCapacity');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setDuration($value)
    {
        $this->setProperty('duration', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDuration()
    {
       return $this->getProperty('duration');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setAttendee($value)
    {
        $this->setProperty('attendee', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAttendee()
    {
       return $this->getProperty('attendee');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setRecordedIn($value)
    {
        $this->setProperty('recordedIn', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRecordedIn()
    {
       return $this->getProperty('recordedIn');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setTranslator($value)
    {
        $this->setProperty('translator', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTranslator()
    {
       return $this->getProperty('translator');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setWorkFeatured($value)
    {
        $this->setProperty('workFeatured', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getWorkFeatured()
    {
       return $this->getProperty('workFeatured');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setIsAccessibleForFree($value)
    {
        $this->setProperty('isAccessibleForFree', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIsAccessibleForFree()
    {
       return $this->getProperty('isAccessibleForFree');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setEventStatus($value)
    {
        $this->setProperty('eventStatus', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEventStatus()
    {
       return $this->getProperty('eventStatus');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setPerformer($value)
    {
        $this->setProperty('performer', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPerformer()
    {
       return $this->getProperty('performer');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setPreviousStartDate($value)
    {
        $this->setProperty('previousStartDate', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPreviousStartDate()
    {
       return $this->getProperty('previousStartDate');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setSubEvents($value)
    {
        $this->setProperty('subEvents', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSubEvents()
    {
       return $this->getProperty('subEvents');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setContributor($value)
    {
        $this->setProperty('contributor', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getContributor()
    {
       return $this->getProperty('contributor');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setAggregateRating($value)
    {
        $this->setProperty('aggregateRating', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAggregateRating()
    {
       return $this->getProperty('aggregateRating');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setRemainingAttendeeCapacity($value)
    {
        $this->setProperty('remainingAttendeeCapacity', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRemainingAttendeeCapacity()
    {
       return $this->getProperty('remainingAttendeeCapacity');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setAttendees($value)
    {
        $this->setProperty('attendees', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAttendees()
    {
       return $this->getProperty('attendees');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setWorkPerformed($value)
    {
        $this->setProperty('workPerformed', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getWorkPerformed()
    {
       return $this->getProperty('workPerformed');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setActor($value)
    {
        $this->setProperty('actor', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getActor()
    {
       return $this->getProperty('actor');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setOrganizer($value)
    {
        $this->setProperty('organizer', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getOrganizer()
    {
       return $this->getProperty('organizer');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setTypicalAgeRange($value)
    {
        $this->setProperty('typicalAgeRange', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTypicalAgeRange()
    {
       return $this->getProperty('typicalAgeRange');
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
