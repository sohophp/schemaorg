<?php
namespace Sohophp\SchemaOrg\Thing\Action\ConsumeAction;

  use Sohophp\SchemaOrg\Thing\Action\ConsumeAction;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\GameAvailabilityEnumeration;

/**
  * The act of playing a video game.
  * @see schema:PlayGameAction
* @package Sohophp\SchemaOrg\Thing\Action\ConsumeAction
*/
class PlayGameAction extends ConsumeAction
{


  /**
      * Indicates the availability type of the game content associated with this
 * action, such as whether it is a full version or a demo.
    * @param GameAvailabilityEnumeration|string|array $value
  * @return $this
  */
  public function gameAvailabilityType($value)
  {
  $this->setProperty('gameAvailabilityType', $value);
  return $this;
  }

  /**
  * @param GameAvailabilityEnumeration|string|array $value
  * @return $this
  */
  public function setGameAvailabilityType($value)
  {
  $this->setProperty('gameAvailabilityType', $value);
  return $this;
  }

  /**
  * @param GameAvailabilityEnumeration|string $value
  * @return $this
  */
  public function addGameAvailabilityType($value)
  {
  $current = $this->getProperty('gameAvailabilityType');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('gameAvailabilityType', $current);
  return $this;
  }

  /**
  * @return GameAvailabilityEnumeration|string|array
  */
  public function getGameAvailabilityType()
  {
  return $this->getProperty('gameAvailabilityType');
  }


}
