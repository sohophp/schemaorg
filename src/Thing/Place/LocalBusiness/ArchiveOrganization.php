<?php
namespace Sohophp\SchemaOrg\Thing\Place\LocalBusiness;

  use Sohophp\SchemaOrg\Thing\Place\LocalBusiness;
  use Sohophp\SchemaOrg\Thing\CreativeWork\ArchiveComponent;

/**
  * An organization with archival holdings. An organization which keeps and
 * preserves archival material and typically makes it accessible to the public.
  * @see schema:ArchiveOrganization
* @package Sohophp\SchemaOrg\Thing\Place\LocalBusiness
*/
class ArchiveOrganization extends LocalBusiness
{


  /**
      * Collection, [fonds](https://en.wikipedia.org/wiki/Fonds), or item held, kept
 * or maintained by an [[ArchiveOrganization]].
    * @param ArchiveComponent|array $value
  * @return $this
  */
  public function archiveHeld($value)
  {
  $this->setProperty('archiveHeld', $value);
  return $this;
  }

  /**
  * @param ArchiveComponent|array $value
  * @return $this
  */
  public function setArchiveHeld($value)
  {
  $this->setProperty('archiveHeld', $value);
  return $this;
  }

  /**
  * @param ArchiveComponent $value
  * @return $this
  */
  public function addArchiveHeld($value)
  {
  $current = $this->getProperty('archiveHeld');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('archiveHeld', $current);
  return $this;
  }

  /**
  * @return ArchiveComponent|array
  */
  public function getArchiveHeld()
  {
  return $this->getProperty('archiveHeld');
  }


}
