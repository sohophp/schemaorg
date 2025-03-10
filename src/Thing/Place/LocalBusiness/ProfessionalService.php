<?php
namespace Sohophp\SchemaOrg\Thing\Place\LocalBusiness;

use Sohophp\SchemaOrg\Thing\Place\LocalBusiness;

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
* @see schema:ProfessionalService
* @package Sohophp\SchemaOrg\Thing\Place\LocalBusiness
*/
class ProfessionalService extends LocalBusiness
{


}
