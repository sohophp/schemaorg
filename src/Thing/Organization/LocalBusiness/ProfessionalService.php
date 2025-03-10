<?php
namespace Sohophp\SchemaOrg\Thing\Organization\LocalBusiness;

use Sohophp\SchemaOrg\Thing\Organization\LocalBusiness;

/**
* Original definition: "provider of professional services."
 * 
 * The general [[ProfessionalService]] type for local businesses was deprecated
 * due to confusion with [[Service]]. For reference, the types that it included
 * were: [[Dentist]],
 *         [[AccountingService]], [[Attorney]], [[Notary]], as well as types for
 * several kinds of [[HomeAndConstructionBusiness]]: [[Electrician]],
 * [[GeneralContractor]],
 *         [[HousePainter]], [[Locksmith]], [[Plumber]], [[RoofingContractor]].
 * [[LegalService]] was introduced as a more inclusive supertype of
 * [[Attorney]].
* @see http://schema.org/ProfessionalService
* @package Sohophp\SchemaOrg\Thing\Organization\LocalBusiness
*/
class ProfessionalService extends LocalBusiness
{


}
