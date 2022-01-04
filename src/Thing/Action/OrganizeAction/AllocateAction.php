<?php
namespace Sohophp\SchemaOrg\Thing\Action\OrganizeAction;

use Sohophp\SchemaOrg\Thing\Action\OrganizeAction;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalDevicePurpose;
use Sohophp\SchemaOrg\Thing;

/**
* The act of organizing tasks/objects/events by associating resources to it.
* @see http://schema.org/AllocateAction
* @package Sohophp\SchemaOrg\Thing\Action\OrganizeAction

*
*/
class AllocateAction extends OrganizeAction
{

    /**
    * A goal towards an action is taken. Can be concrete or abstract.
    * @param MedicalDevicePurpose|Thing|array|string $value
    * @return $this
    * @deprecated use setPurpose
    */
    public function purpose($value)
    {
        $this->setProperty('purpose', $value);
        return $this;
    }
   /**
    * @param MedicalDevicePurpose|Thing|array|string $value
    * @return $this
    */
    public function setPurpose($value)
    {
        $this->setProperty('purpose', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPurpose()
    {
       return $this->getProperty('purpose');
    }


}
