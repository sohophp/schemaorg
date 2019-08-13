<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible\Role;

use Sohophp\SchemaOrg\Thing\Intangible\Role;

/**
* A subclass of Role used to describe roles within organizations.
* @see http://schema.org/OrganizationRole
* @package Sohophp\SchemaOrg\Thing\Intangible\Role
*/
class OrganizationRole extends Role
{

    /**
    * A number associated with a role in an organization, for example, the number on an athlete's jersey.
    * @param  $value
    * @return $this
    */
    public function numberedPosition($value)
    {
        $this->setProperty('numberedPosition', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Role\\OrganizationRole','Thing\\OrganizationRole');

