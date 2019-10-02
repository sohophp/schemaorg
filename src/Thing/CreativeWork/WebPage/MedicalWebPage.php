<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\CreativeWork\WebPage;

use Sohophp\SchemaOrg\Thing\CreativeWork\WebPage;

/**
* A web page that provides medical information.
* @see http://schema.org/MedicalWebPage
* @package Sohophp\SchemaOrg\Thing\CreativeWork\WebPage
*/
class MedicalWebPage extends WebPage
{

    /**
    * An aspect of medical practice that is considered on the page, such as 'diagnosis', 'treatment', 'causes', 'prognosis', 'etiology', 'epidemiology', etc.
    * @param string $value
    * @return $this
    */
    public function aspect(?string $value)
    {
        $this->setProperty('aspect', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\WebPage\\MedicalWebPage','Thing\\MedicalWebPage');

