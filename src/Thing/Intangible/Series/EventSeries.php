<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible\Series;

use Sohophp\SchemaOrg\Thing\Intangible\Series;

/**
* A series of <a class="localLink" href="http://schema.org/Event">Event</a>s. Included events can relate with the series using the <a class="localLink" href="http://schema.org/superEvent">superEvent</a> property.<br/><br/>

An EventSeries is a collection of events that share some unifying characteristic. For example, "The Olympic Games" is a series, which
is repeated regularly. The "2012 London Olympics" can be presented both as an <a class="localLink" href="http://schema.org/Event">Event</a> in the series "Olympic Games", and as an
<a class="localLink" href="http://schema.org/EventSeries">EventSeries</a> that included a number of sporting competitions as Events.<br/><br/>

The nature of the association between the events in an <a class="localLink" href="http://schema.org/EventSeries">EventSeries</a> can vary, but typical examples could
include a thematic event series (e.g. topical meetups or classes), or a series of regular events that share a location, attendee group and/or organizers.<br/><br/>

EventSeries has been defined as a kind of Event to make it easy for publishers to use it in an Event context without
worrying about which kinds of series are really event-like enough to call an Event. In general an EventSeries
may seem more Event-like when the period of time is compact and when aspects such as location are fixed, but
it may also sometimes prove useful to describe a longer-term series as an Event.
* @see http://schema.org/EventSeries
* @package Sohophp\SchemaOrg\Thing\Intangible\Series
*/
class EventSeries extends Series
{


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Series\\EventSeries','Thing\\EventSeries');

