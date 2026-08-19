<?php
namespace Sohophp\SchemaOrg\Thing;

  use Sohophp\SchemaOrg\Thing;
  use Sohophp\SchemaOrg\Thing\Organization;
  use Sohophp\SchemaOrg\Thing\Person;
  use Sohophp\SchemaOrg\Thing\Organization\PerformingGroup;
  use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm;
  use Sohophp\SchemaOrg\Thing\Intangible\Grant;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress;
  use Sohophp\SchemaOrg\Thing\Intangible\VirtualLocation;
  use Sohophp\SchemaOrg\Thing\Place;
  use Sohophp\SchemaOrg\Thing\CreativeWork\Review;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\EventAttendanceModeEnumeration;
  use Sohophp\SchemaOrg\Thing\CreativeWork;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\StatusEnumeration\EventStatusType;
  use Sohophp\SchemaOrg\Thing\Intangible\Offer;
  use Sohophp\SchemaOrg\Thing\Intangible\Demand;
  use Sohophp\SchemaOrg\Thing\Intangible\Schedule;
  use Sohophp\SchemaOrg\Thing\Intangible\Rating\AggregateRating;
  use Sohophp\SchemaOrg\Thing\Intangible\Audience;
  use Sohophp\SchemaOrg\Quantity\Duration;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
  use Sohophp\SchemaOrg\Thing\Intangible\Language;

/**
  * An event happening at a certain time and location, such as a concert,
 * lecture, or festival. Ticketing information may be added via the [[offers]]
 * property. Repeated events may be structured as separate Event objects.
  * @see schema:Event
* @package Sohophp\SchemaOrg\Thing
*/
class Event extends Thing
{


  /**
      * A person or organization that supports a thing through a pledge, promise, or
 * financial contribution. E.g. a sponsor of a Medical Study or a corporate
 * sponsor of an event.
    * @param Organization|Person|array $value
  * @return $this
  */
  public function sponsor($value)
  {
  $this->setProperty('sponsor', $value);
  return $this;
  }

  /**
  * @param Organization|Person|array $value
  * @return $this
  */
  public function setSponsor($value)
  {
  $this->setProperty('sponsor', $value);
  return $this;
  }

  /**
  * @param Organization|Person $value
  * @return $this
  */
  public function addSponsor($value)
  {
  $current = $this->getProperty('sponsor');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('sponsor', $current);
  return $this;
  }

  /**
  * @return Organization|Person|array
  */
  public function getSponsor()
  {
  return $this->getProperty('sponsor');
  }


  /**
      * A secondary contributor to the CreativeWork or Event.
    * @param Organization|Person|array $value
  * @return $this
  */
  public function contributor($value)
  {
  $this->setProperty('contributor', $value);
  return $this;
  }

  /**
  * @param Organization|Person|array $value
  * @return $this
  */
  public function setContributor($value)
  {
  $this->setProperty('contributor', $value);
  return $this;
  }

  /**
  * @param Organization|Person $value
  * @return $this
  */
  public function addContributor($value)
  {
  $current = $this->getProperty('contributor');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('contributor', $current);
  return $this;
  }

  /**
  * @return Organization|Person|array
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
  public function typicalAgeRange($value)
  {
  $this->setProperty('typicalAgeRange', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setTypicalAgeRange($value)
  {
  $this->setProperty('typicalAgeRange', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addTypicalAgeRange($value)
  {
  $current = $this->getProperty('typicalAgeRange');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('typicalAgeRange', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getTypicalAgeRange()
  {
  return $this->getProperty('typicalAgeRange');
  }


  /**
      * A person or organization that supports (sponsors) something through some kind
 * of financial contribution.
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
  * @param Organization|Person $value
  * @return $this
  */
  public function addFunder($value)
  {
  $current = $this->getProperty('funder');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('funder', $current);
  return $this;
  }

  /**
  * @return Organization|Person|array
  */
  public function getFunder()
  {
  return $this->getProperty('funder');
  }


  /**
      * The total number of individuals that may attend an event or venue.
    * @param int|array $value
  * @return $this
  */
  public function maximumAttendeeCapacity($value)
  {
  $this->setProperty('maximumAttendeeCapacity', $value);
  return $this;
  }

  /**
  * @param int|array $value
  * @return $this
  */
  public function setMaximumAttendeeCapacity($value)
  {
  $this->setProperty('maximumAttendeeCapacity', $value);
  return $this;
  }

  /**
  * @param int $value
  * @return $this
  */
  public function addMaximumAttendeeCapacity($value)
  {
  $current = $this->getProperty('maximumAttendeeCapacity');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('maximumAttendeeCapacity', $current);
  return $this;
  }

  /**
  * @return int|array
  */
  public function getMaximumAttendeeCapacity()
  {
  return $this->getProperty('maximumAttendeeCapacity');
  }


  /**
      * Used in conjunction with eventStatus for rescheduled or cancelled events.
 * This property contains the previously scheduled start date. For rescheduled
 * events, the startDate property should be used for the newly scheduled start
 * date. In the (rare) case of an event that has been postponed and rescheduled
 * multiple times, this field may be repeated.
    * @param mixed $value
  * @return $this
  */
  public function previousStartDate($value)
  {
  $this->setProperty('previousStartDate', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setPreviousStartDate($value)
  {
  $this->setProperty('previousStartDate', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addPreviousStartDate($value)
  {
  $current = $this->getProperty('previousStartDate');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('previousStartDate', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getPreviousStartDate()
  {
  return $this->getProperty('previousStartDate');
  }


  /**
      * An actor (individual or a group), e.g. in TV, radio, movie, video games etc.,
 * or in an event. Actors can be associated with individual items or with a
 * series, episode, clip.
    * @param Person|PerformingGroup|array $value
  * @return $this
  */
  public function actor($value)
  {
  $this->setProperty('actor', $value);
  return $this;
  }

  /**
  * @param Person|PerformingGroup|array $value
  * @return $this
  */
  public function setActor($value)
  {
  $this->setProperty('actor', $value);
  return $this;
  }

  /**
  * @param Person|PerformingGroup $value
  * @return $this
  */
  public function addActor($value)
  {
  $current = $this->getProperty('actor');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('actor', $current);
  return $this;
  }

  /**
  * @return Person|PerformingGroup|array
  */
  public function getActor()
  {
  return $this->getProperty('actor');
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
  * @param Organization|Person $value
  * @return $this
  */
  public function addOrganizer($value)
  {
  $current = $this->getProperty('organizer');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('organizer', $current);
  return $this;
  }

  /**
  * @return Organization|Person|array
  */
  public function getOrganizer()
  {
  return $this->getProperty('organizer');
  }


  /**
      * Keywords or tags used to describe some item. Multiple textual entries in a
 * keywords list are typically delimited by commas, or by repeating the
 * property.
    * @param DefinedTerm|string|array $value
  * @return $this
  */
  public function keywords($value)
  {
  $this->setProperty('keywords', $value);
  return $this;
  }

  /**
  * @param DefinedTerm|string|array $value
  * @return $this
  */
  public function setKeywords($value)
  {
  $this->setProperty('keywords', $value);
  return $this;
  }

  /**
  * @param DefinedTerm|string $value
  * @return $this
  */
  public function addKeywords($value)
  {
  $current = $this->getProperty('keywords');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('keywords', $current);
  return $this;
  }

  /**
  * @return DefinedTerm|string|array
  */
  public function getKeywords()
  {
  return $this->getProperty('keywords');
  }


  /**
      * The person or organization who wrote a composition, or who is the composer of
 * a work performed at some event.
    * @param Organization|Person|array $value
  * @return $this
  */
  public function composer($value)
  {
  $this->setProperty('composer', $value);
  return $this;
  }

  /**
  * @param Organization|Person|array $value
  * @return $this
  */
  public function setComposer($value)
  {
  $this->setProperty('composer', $value);
  return $this;
  }

  /**
  * @param Organization|Person $value
  * @return $this
  */
  public function addComposer($value)
  {
  $current = $this->getProperty('composer');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('composer', $current);
  return $this;
  }

  /**
  * @return Organization|Person|array
  */
  public function getComposer()
  {
  return $this->getProperty('composer');
  }


  /**
      * A [[Grant]] that directly or indirectly provide funding or sponsorship for
 * this item. See also [[ownershipFundingInfo]].
    * @param Grant|array $value
  * @return $this
  */
  public function funding($value)
  {
  $this->setProperty('funding', $value);
  return $this;
  }

  /**
  * @param Grant|array $value
  * @return $this
  */
  public function setFunding($value)
  {
  $this->setProperty('funding', $value);
  return $this;
  }

  /**
  * @param Grant $value
  * @return $this
  */
  public function addFunding($value)
  {
  $current = $this->getProperty('funding');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('funding', $current);
  return $this;
  }

  /**
  * @return Grant|array
  */
  public function getFunding()
  {
  return $this->getProperty('funding');
  }


  /**
      * The location of, for example, where an event is happening, where an
 * organization is located, or where an action takes place.
    * @param string|PostalAddress|VirtualLocation|Place|array $value
  * @return $this
  */
  public function location($value)
  {
  $this->setProperty('location', $value);
  return $this;
  }

  /**
  * @param string|PostalAddress|VirtualLocation|Place|array $value
  * @return $this
  */
  public function setLocation($value)
  {
  $this->setProperty('location', $value);
  return $this;
  }

  /**
  * @param string|PostalAddress|VirtualLocation|Place $value
  * @return $this
  */
  public function addLocation($value)
  {
  $current = $this->getProperty('location');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('location', $current);
  return $this;
  }

  /**
  * @return string|PostalAddress|VirtualLocation|Place|array
  */
  public function getLocation()
  {
  return $this->getProperty('location');
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
  * @param Organization|Person $value
  * @return $this
  */
  public function addAttendee($value)
  {
  $current = $this->getProperty('attendee');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('attendee', $current);
  return $this;
  }

  /**
  * @return Organization|Person|array
  */
  public function getAttendee()
  {
  return $this->getProperty('attendee');
  }


  /**
      * A review of the item.
    * @param Review|array $value
  * @return $this
  */
  public function review($value)
  {
  $this->setProperty('review', $value);
  return $this;
  }

  /**
  * @param Review|array $value
  * @return $this
  */
  public function setReview($value)
  {
  $this->setProperty('review', $value);
  return $this;
  }

  /**
  * @param Review $value
  * @return $this
  */
  public function addReview($value)
  {
  $current = $this->getProperty('review');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('review', $current);
  return $this;
  }

  /**
  * @return Review|array
  */
  public function getReview()
  {
  return $this->getProperty('review');
  }


  /**
      * The eventAttendanceMode of an event indicates whether it occurs online,
 * offline, or a mix.
    * @param EventAttendanceModeEnumeration|array $value
  * @return $this
  */
  public function eventAttendanceMode($value)
  {
  $this->setProperty('eventAttendanceMode', $value);
  return $this;
  }

  /**
  * @param EventAttendanceModeEnumeration|array $value
  * @return $this
  */
  public function setEventAttendanceMode($value)
  {
  $this->setProperty('eventAttendanceMode', $value);
  return $this;
  }

  /**
  * @param EventAttendanceModeEnumeration $value
  * @return $this
  */
  public function addEventAttendanceMode($value)
  {
  $current = $this->getProperty('eventAttendanceMode');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('eventAttendanceMode', $current);
  return $this;
  }

  /**
  * @return EventAttendanceModeEnumeration|array
  */
  public function getEventAttendanceMode()
  {
  return $this->getProperty('eventAttendanceMode');
  }


  /**
      * The maximum virtual attendee capacity of an [[Event]] whose
 * [[eventAttendanceMode]] is [[OnlineEventAttendanceMode]] (or the online
 * aspects, in the case of a [[MixedEventAttendanceMode]]).
    * @param int|array $value
  * @return $this
  */
  public function maximumVirtualAttendeeCapacity($value)
  {
  $this->setProperty('maximumVirtualAttendeeCapacity', $value);
  return $this;
  }

  /**
  * @param int|array $value
  * @return $this
  */
  public function setMaximumVirtualAttendeeCapacity($value)
  {
  $this->setProperty('maximumVirtualAttendeeCapacity', $value);
  return $this;
  }

  /**
  * @param int $value
  * @return $this
  */
  public function addMaximumVirtualAttendeeCapacity($value)
  {
  $current = $this->getProperty('maximumVirtualAttendeeCapacity');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('maximumVirtualAttendeeCapacity', $current);
  return $this;
  }

  /**
  * @return int|array
  */
  public function getMaximumVirtualAttendeeCapacity()
  {
  return $this->getProperty('maximumVirtualAttendeeCapacity');
  }


  /**
      * An Event that is part of this event. For example, a conference event includes
 * many presentations, each of which is a subEvent of the conference.
    * @param Event|array $value
  * @return $this
  */
  public function subEvent($value)
  {
  $this->setProperty('subEvent', $value);
  return $this;
  }

  /**
  * @param Event|array $value
  * @return $this
  */
  public function setSubEvent($value)
  {
  $this->setProperty('subEvent', $value);
  return $this;
  }

  /**
  * @param Event $value
  * @return $this
  */
  public function addSubEvent($value)
  {
  $current = $this->getProperty('subEvent');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('subEvent', $current);
  return $this;
  }

  /**
  * @return Event|array
  */
  public function getSubEvent()
  {
  return $this->getProperty('subEvent');
  }


  /**
      * A work featured in some event, e.g. exhibited in an ExhibitionEvent.
 *        Specific subproperties are available for workPerformed (e.g. a play),
 * or a workPresented (a Movie at a ScreeningEvent).
    * @param CreativeWork|array $value
  * @return $this
  */
  public function workFeatured($value)
  {
  $this->setProperty('workFeatured', $value);
  return $this;
  }

  /**
  * @param CreativeWork|array $value
  * @return $this
  */
  public function setWorkFeatured($value)
  {
  $this->setProperty('workFeatured', $value);
  return $this;
  }

  /**
  * @param CreativeWork $value
  * @return $this
  */
  public function addWorkFeatured($value)
  {
  $current = $this->getProperty('workFeatured');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('workFeatured', $current);
  return $this;
  }

  /**
  * @return CreativeWork|array
  */
  public function getWorkFeatured()
  {
  return $this->getProperty('workFeatured');
  }


  /**
      * The time admission will commence.
    * @param mixed $value
  * @return $this
  */
  public function doorTime($value)
  {
  $this->setProperty('doorTime', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setDoorTime($value)
  {
  $this->setProperty('doorTime', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addDoorTime($value)
  {
  $current = $this->getProperty('doorTime');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('doorTime', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getDoorTime()
  {
  return $this->getProperty('doorTime');
  }


  /**
      * The main performer or performers of the event&#x2014;for example, a
 * presenter, musician, or actor.
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
  * @param Organization|Person $value
  * @return $this
  */
  public function addPerformers($value)
  {
  $current = $this->getProperty('performers');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('performers', $current);
  return $this;
  }

  /**
  * @return Organization|Person|array
  */
  public function getPerformers()
  {
  return $this->getProperty('performers');
  }


  /**
      * An eventStatus of an event represents its status; particularly useful when an
 * event is cancelled or rescheduled.
    * @param EventStatusType|array $value
  * @return $this
  */
  public function eventStatus($value)
  {
  $this->setProperty('eventStatus', $value);
  return $this;
  }

  /**
  * @param EventStatusType|array $value
  * @return $this
  */
  public function setEventStatus($value)
  {
  $this->setProperty('eventStatus', $value);
  return $this;
  }

  /**
  * @param EventStatusType $value
  * @return $this
  */
  public function addEventStatus($value)
  {
  $current = $this->getProperty('eventStatus');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('eventStatus', $current);
  return $this;
  }

  /**
  * @return EventStatusType|array
  */
  public function getEventStatus()
  {
  return $this->getProperty('eventStatus');
  }


  /**
      * The number of attendee places for an event that remain unallocated.
    * @param int|array $value
  * @return $this
  */
  public function remainingAttendeeCapacity($value)
  {
  $this->setProperty('remainingAttendeeCapacity', $value);
  return $this;
  }

  /**
  * @param int|array $value
  * @return $this
  */
  public function setRemainingAttendeeCapacity($value)
  {
  $this->setProperty('remainingAttendeeCapacity', $value);
  return $this;
  }

  /**
  * @param int $value
  * @return $this
  */
  public function addRemainingAttendeeCapacity($value)
  {
  $current = $this->getProperty('remainingAttendeeCapacity');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('remainingAttendeeCapacity', $current);
  return $this;
  }

  /**
  * @return int|array
  */
  public function getRemainingAttendeeCapacity()
  {
  return $this->getProperty('remainingAttendeeCapacity');
  }


  /**
      * A work performed in some event, for example a play performed in a
 * TheaterEvent.
    * @param CreativeWork|array $value
  * @return $this
  */
  public function workPerformed($value)
  {
  $this->setProperty('workPerformed', $value);
  return $this;
  }

  /**
  * @param CreativeWork|array $value
  * @return $this
  */
  public function setWorkPerformed($value)
  {
  $this->setProperty('workPerformed', $value);
  return $this;
  }

  /**
  * @param CreativeWork $value
  * @return $this
  */
  public function addWorkPerformed($value)
  {
  $current = $this->getProperty('workPerformed');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('workPerformed', $current);
  return $this;
  }

  /**
  * @return CreativeWork|array
  */
  public function getWorkPerformed()
  {
  return $this->getProperty('workPerformed');
  }


  /**
      * An offer to provide this item&#x2014;for example, an offer to sell a product,
 * rent the DVD of a movie, perform a service, or give away tickets to an event.
 * Use [[businessFunction]] to indicate the kind of transaction offered, i.e.
 * sell, lease, etc. This property can also be used to describe a [[Demand]].
 * While this property is listed as expected on a number of common types, it can
 * be used in others. In that case, using a second type, such as Product or a
 * subtype of Product, can clarify the nature of the offer.
    * @param Offer|Demand|array $value
  * @return $this
  */
  public function offers($value)
  {
  $this->setProperty('offers', $value);
  return $this;
  }

  /**
  * @param Offer|Demand|array $value
  * @return $this
  */
  public function setOffers($value)
  {
  $this->setProperty('offers', $value);
  return $this;
  }

  /**
  * @param Offer|Demand $value
  * @return $this
  */
  public function addOffers($value)
  {
  $current = $this->getProperty('offers');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('offers', $current);
  return $this;
  }

  /**
  * @return Offer|Demand|array
  */
  public function getOffers()
  {
  return $this->getProperty('offers');
  }


  /**
      * Associates an [[Event]] with a [[Schedule]]. There are circumstances where it
 * is preferable to share a schedule for a series of
 *       repeating events rather than data on the individual events themselves.
 * For example, a website or application might prefer to publish a schedule for
 * a weekly
 *       gym class rather than provide data on every event. A schedule could be
 * processed by applications to add forthcoming events to a calendar. An
 * [[Event]] that
 *       is associated with a [[Schedule]] using this property should not have
 * [[startDate]] or [[endDate]] properties. These are instead defined within the
 * associated
 *       [[Schedule]], this avoids any ambiguity for clients using the data. The
 * property might have repeated values to specify different schedules, e.g. for
 * different months
 *       or seasons.
    * @param Schedule|array $value
  * @return $this
  */
  public function eventSchedule($value)
  {
  $this->setProperty('eventSchedule', $value);
  return $this;
  }

  /**
  * @param Schedule|array $value
  * @return $this
  */
  public function setEventSchedule($value)
  {
  $this->setProperty('eventSchedule', $value);
  return $this;
  }

  /**
  * @param Schedule $value
  * @return $this
  */
  public function addEventSchedule($value)
  {
  $current = $this->getProperty('eventSchedule');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('eventSchedule', $current);
  return $this;
  }

  /**
  * @return Schedule|array
  */
  public function getEventSchedule()
  {
  return $this->getProperty('eventSchedule');
  }


  /**
      * The maximum physical attendee capacity of an [[Event]] whose
 * [[eventAttendanceMode]] is [[OfflineEventAttendanceMode]] (or the offline
 * aspects, in the case of a [[MixedEventAttendanceMode]]).
    * @param int|array $value
  * @return $this
  */
  public function maximumPhysicalAttendeeCapacity($value)
  {
  $this->setProperty('maximumPhysicalAttendeeCapacity', $value);
  return $this;
  }

  /**
  * @param int|array $value
  * @return $this
  */
  public function setMaximumPhysicalAttendeeCapacity($value)
  {
  $this->setProperty('maximumPhysicalAttendeeCapacity', $value);
  return $this;
  }

  /**
  * @param int $value
  * @return $this
  */
  public function addMaximumPhysicalAttendeeCapacity($value)
  {
  $current = $this->getProperty('maximumPhysicalAttendeeCapacity');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('maximumPhysicalAttendeeCapacity', $current);
  return $this;
  }

  /**
  * @return int|array
  */
  public function getMaximumPhysicalAttendeeCapacity()
  {
  return $this->getProperty('maximumPhysicalAttendeeCapacity');
  }


  /**
      * The end date and time of the item (in [ISO 8601 date
 * format](http://en.wikipedia.org/wiki/ISO_8601)).
    * @param mixed $value
  * @return $this
  */
  public function endDate($value)
  {
  $this->setProperty('endDate', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setEndDate($value)
  {
  $this->setProperty('endDate', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addEndDate($value)
  {
  $current = $this->getProperty('endDate');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('endDate', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getEndDate()
  {
  return $this->getProperty('endDate');
  }


  /**
      * The subject matter of an object.
    * @param Thing|array $value
  * @return $this
  */
  public function about($value)
  {
  $this->setProperty('about', $value);
  return $this;
  }

  /**
  * @param Thing|array $value
  * @return $this
  */
  public function setAbout($value)
  {
  $this->setProperty('about', $value);
  return $this;
  }

  /**
  * @param Thing $value
  * @return $this
  */
  public function addAbout($value)
  {
  $current = $this->getProperty('about');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('about', $current);
  return $this;
  }

  /**
  * @return Thing|array
  */
  public function getAbout()
  {
  return $this->getProperty('about');
  }


  /**
      * The overall rating, based on a collection of reviews or ratings, of the item.
    * @param AggregateRating|array $value
  * @return $this
  */
  public function aggregateRating($value)
  {
  $this->setProperty('aggregateRating', $value);
  return $this;
  }

  /**
  * @param AggregateRating|array $value
  * @return $this
  */
  public function setAggregateRating($value)
  {
  $this->setProperty('aggregateRating', $value);
  return $this;
  }

  /**
  * @param AggregateRating $value
  * @return $this
  */
  public function addAggregateRating($value)
  {
  $current = $this->getProperty('aggregateRating');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('aggregateRating', $current);
  return $this;
  }

  /**
  * @return AggregateRating|array
  */
  public function getAggregateRating()
  {
  return $this->getProperty('aggregateRating');
  }


  /**
      * The CreativeWork that captured all or part of this Event.
    * @param CreativeWork|array $value
  * @return $this
  */
  public function recordedIn($value)
  {
  $this->setProperty('recordedIn', $value);
  return $this;
  }

  /**
  * @param CreativeWork|array $value
  * @return $this
  */
  public function setRecordedIn($value)
  {
  $this->setProperty('recordedIn', $value);
  return $this;
  }

  /**
  * @param CreativeWork $value
  * @return $this
  */
  public function addRecordedIn($value)
  {
  $current = $this->getProperty('recordedIn');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('recordedIn', $current);
  return $this;
  }

  /**
  * @return CreativeWork|array
  */
  public function getRecordedIn()
  {
  return $this->getProperty('recordedIn');
  }


  /**
      * An event that this event is a part of. For example, a collection of
 * individual music performances might each have a music festival as their
 * superEvent.
    * @param Event|array $value
  * @return $this
  */
  public function superEvent($value)
  {
  $this->setProperty('superEvent', $value);
  return $this;
  }

  /**
  * @param Event|array $value
  * @return $this
  */
  public function setSuperEvent($value)
  {
  $this->setProperty('superEvent', $value);
  return $this;
  }

  /**
  * @param Event $value
  * @return $this
  */
  public function addSuperEvent($value)
  {
  $current = $this->getProperty('superEvent');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('superEvent', $current);
  return $this;
  }

  /**
  * @return Event|array
  */
  public function getSuperEvent()
  {
  return $this->getProperty('superEvent');
  }


  /**
      * The start date and time of the item (in [ISO 8601 date
 * format](http://en.wikipedia.org/wiki/ISO_8601)).
    * @param mixed $value
  * @return $this
  */
  public function startDate($value)
  {
  $this->setProperty('startDate', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setStartDate($value)
  {
  $this->setProperty('startDate', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addStartDate($value)
  {
  $current = $this->getProperty('startDate');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('startDate', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getStartDate()
  {
  return $this->getProperty('startDate');
  }


  /**
      * An offer to sponsor the event, for example, Sponsorship Prospectus,
 * Sponsorship Opportunities, or Sponsor Packages.
    * @param Offer|array $value
  * @return $this
  */
  public function hasSponsorshipOffer($value)
  {
  $this->setProperty('hasSponsorshipOffer', $value);
  return $this;
  }

  /**
  * @param Offer|array $value
  * @return $this
  */
  public function setHasSponsorshipOffer($value)
  {
  $this->setProperty('hasSponsorshipOffer', $value);
  return $this;
  }

  /**
  * @param Offer $value
  * @return $this
  */
  public function addHasSponsorshipOffer($value)
  {
  $current = $this->getProperty('hasSponsorshipOffer');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('hasSponsorshipOffer', $current);
  return $this;
  }

  /**
  * @return Offer|array
  */
  public function getHasSponsorshipOffer()
  {
  return $this->getProperty('hasSponsorshipOffer');
  }


  /**
      * An intended audience, i.e. a group for whom something was created.
    * @param Audience|array $value
  * @return $this
  */
  public function audience($value)
  {
  $this->setProperty('audience', $value);
  return $this;
  }

  /**
  * @param Audience|array $value
  * @return $this
  */
  public function setAudience($value)
  {
  $this->setProperty('audience', $value);
  return $this;
  }

  /**
  * @param Audience $value
  * @return $this
  */
  public function addAudience($value)
  {
  $current = $this->getProperty('audience');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('audience', $current);
  return $this;
  }

  /**
  * @return Audience|array
  */
  public function getAudience()
  {
  return $this->getProperty('audience');
  }


  /**
      * A director of e.g. TV, radio, movie, video gaming etc. content, or of an
 * event. Directors can be associated with individual items or with a series,
 * episode, clip.
    * @param Person|array $value
  * @return $this
  */
  public function director($value)
  {
  $this->setProperty('director', $value);
  return $this;
  }

  /**
  * @param Person|array $value
  * @return $this
  */
  public function setDirector($value)
  {
  $this->setProperty('director', $value);
  return $this;
  }

  /**
  * @param Person $value
  * @return $this
  */
  public function addDirector($value)
  {
  $current = $this->getProperty('director');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('director', $current);
  return $this;
  }

  /**
  * @return Person|array
  */
  public function getDirector()
  {
  return $this->getProperty('director');
  }


  /**
      * Events that are a part of this event. For example, a conference event
 * includes many presentations, each subEvents of the conference.
    * @param Event|array $value
  * @return $this
  */
  public function subEvents($value)
  {
  $this->setProperty('subEvents', $value);
  return $this;
  }

  /**
  * @param Event|array $value
  * @return $this
  */
  public function setSubEvents($value)
  {
  $this->setProperty('subEvents', $value);
  return $this;
  }

  /**
  * @param Event $value
  * @return $this
  */
  public function addSubEvents($value)
  {
  $current = $this->getProperty('subEvents');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('subEvents', $current);
  return $this;
  }

  /**
  * @return Event|array
  */
  public function getSubEvents()
  {
  return $this->getProperty('subEvents');
  }


  /**
      * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601
 * duration format](http://en.wikipedia.org/wiki/ISO_8601).
    * @param Duration|QuantitativeValue|array $value
  * @return $this
  */
  public function duration($value)
  {
  $this->setProperty('duration', $value);
  return $this;
  }

  /**
  * @param Duration|QuantitativeValue|array $value
  * @return $this
  */
  public function setDuration($value)
  {
  $this->setProperty('duration', $value);
  return $this;
  }

  /**
  * @param Duration|QuantitativeValue $value
  * @return $this
  */
  public function addDuration($value)
  {
  $current = $this->getProperty('duration');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('duration', $current);
  return $this;
  }

  /**
  * @return Duration|QuantitativeValue|array
  */
  public function getDuration()
  {
  return $this->getProperty('duration');
  }


  /**
      * An offer to participate in the event, for example, Call for Proposals, Call
 * for Speakers, or Call for Performers.
    * @param Offer|array $value
  * @return $this
  */
  public function hasParticipationOffer($value)
  {
  $this->setProperty('hasParticipationOffer', $value);
  return $this;
  }

  /**
  * @param Offer|array $value
  * @return $this
  */
  public function setHasParticipationOffer($value)
  {
  $this->setProperty('hasParticipationOffer', $value);
  return $this;
  }

  /**
  * @param Offer $value
  * @return $this
  */
  public function addHasParticipationOffer($value)
  {
  $current = $this->getProperty('hasParticipationOffer');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('hasParticipationOffer', $current);
  return $this;
  }

  /**
  * @return Offer|array
  */
  public function getHasParticipationOffer()
  {
  return $this->getProperty('hasParticipationOffer');
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
  * @param Organization|Person $value
  * @return $this
  */
  public function addAttendees($value)
  {
  $current = $this->getProperty('attendees');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('attendees', $current);
  return $this;
  }

  /**
  * @return Organization|Person|array
  */
  public function getAttendees()
  {
  return $this->getProperty('attendees');
  }


  /**
      * A performer at the event&#x2014;for example, a presenter, musician, musical
 * group or actor.
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
  * @param Organization|Person $value
  * @return $this
  */
  public function addPerformer($value)
  {
  $current = $this->getProperty('performer');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('performer', $current);
  return $this;
  }

  /**
  * @return Organization|Person|array
  */
  public function getPerformer()
  {
  return $this->getProperty('performer');
  }


  /**
      * A flag to signal that the item, event, or place is accessible for free.
    * @param bool|array $value
  * @return $this
  */
  public function isAccessibleForFree($value)
  {
  $this->setProperty('isAccessibleForFree', $value);
  return $this;
  }

  /**
  * @param bool|array $value
  * @return $this
  */
  public function setIsAccessibleForFree($value)
  {
  $this->setProperty('isAccessibleForFree', $value);
  return $this;
  }

  /**
  * @param bool $value
  * @return $this
  */
  public function addIsAccessibleForFree($value)
  {
  $current = $this->getProperty('isAccessibleForFree');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('isAccessibleForFree', $current);
  return $this;
  }

  /**
  * @return bool|array
  */
  public function getIsAccessibleForFree()
  {
  return $this->getProperty('isAccessibleForFree');
  }


  /**
      * The language of the content or performance or used in an action. Please use
 * one of the language codes from the [IETF BCP 47
 * standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
    * @param string|Language|array $value
  * @return $this
  */
  public function inLanguage($value)
  {
  $this->setProperty('inLanguage', $value);
  return $this;
  }

  /**
  * @param string|Language|array $value
  * @return $this
  */
  public function setInLanguage($value)
  {
  $this->setProperty('inLanguage', $value);
  return $this;
  }

  /**
  * @param string|Language $value
  * @return $this
  */
  public function addInLanguage($value)
  {
  $current = $this->getProperty('inLanguage');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('inLanguage', $current);
  return $this;
  }

  /**
  * @return string|Language|array
  */
  public function getInLanguage()
  {
  return $this->getProperty('inLanguage');
  }


  /**
      * Organization or person who adapts a creative work to different languages,
 * regional differences and technical requirements of a target market, or that
 * translates during some event.
    * @param Organization|Person|array $value
  * @return $this
  */
  public function translator($value)
  {
  $this->setProperty('translator', $value);
  return $this;
  }

  /**
  * @param Organization|Person|array $value
  * @return $this
  */
  public function setTranslator($value)
  {
  $this->setProperty('translator', $value);
  return $this;
  }

  /**
  * @param Organization|Person $value
  * @return $this
  */
  public function addTranslator($value)
  {
  $current = $this->getProperty('translator');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('translator', $current);
  return $this;
  }

  /**
  * @return Organization|Person|array
  */
  public function getTranslator()
  {
  return $this->getProperty('translator');
  }


}
