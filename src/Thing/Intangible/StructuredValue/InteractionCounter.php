<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress;
  use Sohophp\SchemaOrg\Thing\Intangible\VirtualLocation;
  use Sohophp\SchemaOrg\Thing\Place;
  use Sohophp\SchemaOrg\Thing\Action;
  use Sohophp\SchemaOrg\Thing\CreativeWork\SoftwareApplication;
  use Sohophp\SchemaOrg\Thing\CreativeWork\WebSite;

/**
  * A summary of how users have interacted with this CreativeWork. In most cases,
 * authors will use a subtype to specify the specific type of interaction.
  * @see schema:InteractionCounter
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class InteractionCounter extends StructuredValue
{


  /**
      * The endTime of something. For a reserved event or service (e.g.
 * FoodEstablishmentReservation), the time that it is expected to end. For
 * actions that span a period of time, when the action was performed. E.g. John
 * wrote a book from January to *December*. For media, including audio and
 * video, it's the time offset of the end of a clip within a larger file.
 * 
 * Note that Event uses startDate/endDate instead of startTime/endTime, even
 * when describing dates with times. This situation may be clarified in future
 * revisions.
    * @param mixed $value
  * @return $this
  */
  public function endTime($value)
  {
  $this->setProperty('endTime', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setEndTime($value)
  {
  $this->setProperty('endTime', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addEndTime($value)
  {
  $current = $this->getProperty('endTime');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('endTime', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getEndTime()
  {
  return $this->getProperty('endTime');
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
      * The Action representing the type of interaction. For up votes, +1s, etc. use
 * [[LikeAction]]. For down votes use [[DislikeAction]]. Otherwise, use the most
 * specific Action.
    * @param Action|array $value
  * @return $this
  */
  public function interactionType($value)
  {
  $this->setProperty('interactionType', $value);
  return $this;
  }

  /**
  * @param Action|array $value
  * @return $this
  */
  public function setInteractionType($value)
  {
  $this->setProperty('interactionType', $value);
  return $this;
  }

  /**
  * @param Action $value
  * @return $this
  */
  public function addInteractionType($value)
  {
  $current = $this->getProperty('interactionType');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('interactionType', $current);
  return $this;
  }

  /**
  * @return Action|array
  */
  public function getInteractionType()
  {
  return $this->getProperty('interactionType');
  }


  /**
      * The WebSite or SoftwareApplication where the interactions took place.
    * @param SoftwareApplication|WebSite|array $value
  * @return $this
  */
  public function interactionService($value)
  {
  $this->setProperty('interactionService', $value);
  return $this;
  }

  /**
  * @param SoftwareApplication|WebSite|array $value
  * @return $this
  */
  public function setInteractionService($value)
  {
  $this->setProperty('interactionService', $value);
  return $this;
  }

  /**
  * @param SoftwareApplication|WebSite $value
  * @return $this
  */
  public function addInteractionService($value)
  {
  $current = $this->getProperty('interactionService');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('interactionService', $current);
  return $this;
  }

  /**
  * @return SoftwareApplication|WebSite|array
  */
  public function getInteractionService()
  {
  return $this->getProperty('interactionService');
  }


  /**
      * The number of interactions for the CreativeWork using the WebSite or
 * SoftwareApplication.
    * @param int|array $value
  * @return $this
  */
  public function userInteractionCount($value)
  {
  $this->setProperty('userInteractionCount', $value);
  return $this;
  }

  /**
  * @param int|array $value
  * @return $this
  */
  public function setUserInteractionCount($value)
  {
  $this->setProperty('userInteractionCount', $value);
  return $this;
  }

  /**
  * @param int $value
  * @return $this
  */
  public function addUserInteractionCount($value)
  {
  $current = $this->getProperty('userInteractionCount');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('userInteractionCount', $current);
  return $this;
  }

  /**
  * @return int|array
  */
  public function getUserInteractionCount()
  {
  return $this->getProperty('userInteractionCount');
  }


  /**
      * The startTime of something. For a reserved event or service (e.g.
 * FoodEstablishmentReservation), the time that it is expected to start. For
 * actions that span a period of time, when the action was performed. E.g. John
 * wrote a book from *January* to December. For media, including audio and
 * video, it's the time offset of the start of a clip within a larger file.
 * 
 * Note that Event uses startDate/endDate instead of startTime/endTime, even
 * when describing dates with times. This situation may be clarified in future
 * revisions.
    * @param mixed $value
  * @return $this
  */
  public function startTime($value)
  {
  $this->setProperty('startTime', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setStartTime($value)
  {
  $this->setProperty('startTime', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addStartTime($value)
  {
  $current = $this->getProperty('startTime');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('startTime', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getStartTime()
  {
  return $this->getProperty('startTime');
  }


}
