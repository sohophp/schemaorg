<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg;

class Entities
{
  
  public static function CafeOrCoffeeShop()
  {
     return new Thing\Organization\LocalBusiness\FoodEstablishment\CafeOrCoffeeShop();
  }

  
  public static function UserReview()
  {
     return new Thing\CreativeWork\Review\UserReview();
  }

  
  public static function ReturnFeesEnumeration()
  {
     return new Thing\Intangible\Enumeration\ReturnFeesEnumeration();
  }

  
  public static function Recipe()
  {
     return new Thing\CreativeWork\HowTo\Recipe();
  }

  
  public static function Photograph()
  {
     return new Thing\CreativeWork\Photograph();
  }

  
  public static function SportsTeam()
  {
     return new Thing\Organization\SportsOrganization\SportsTeam();
  }

  
  public static function GroceryStore()
  {
     return new Thing\Organization\LocalBusiness\Store\GroceryStore();
  }

  
  public static function ExchangeRateSpecification()
  {
     return new Thing\Intangible\StructuredValue\ExchangeRateSpecification();
  }

  
  public static function Demand()
  {
     return new Thing\Intangible\Demand();
  }

  
  public static function AboutPage()
  {
     return new Thing\CreativeWork\WebPage\AboutPage();
  }

  
  public static function Atlas()
  {
     return new Thing\CreativeWork\Atlas();
  }

  
  public static function ExerciseAction()
  {
     return new Thing\Action\PlayAction\ExerciseAction();
  }

  
  public static function UserPlays()
  {
     return new Thing\Event\UserInteraction\UserPlays();
  }

  
  public static function FoodService()
  {
     return new Thing\Intangible\Service\FoodService();
  }

  
  public static function StadiumOrArena()
  {
     return new Thing\Place\CivicStructure\StadiumOrArena();
  }

  
  public static function ConvenienceStore()
  {
     return new Thing\Organization\LocalBusiness\Store\ConvenienceStore();
  }

  
  public static function Trip()
  {
     return new Thing\Intangible\Trip();
  }

  
  public static function Dataset()
  {
     return new Thing\CreativeWork\Dataset();
  }

  
  public static function MapCategoryType()
  {
     return new Thing\Intangible\Enumeration\MapCategoryType();
  }

  
  public static function Action()
  {
     return new Thing\Action();
  }

  
  public static function InsuranceAgency()
  {
     return new Thing\Organization\LocalBusiness\FinancialService\InsuranceAgency();
  }

  
  public static function AudioObject()
  {
     return new Thing\CreativeWork\MediaObject\AudioObject();
  }

  
  public static function BookmarkAction()
  {
     return new Thing\Action\OrganizeAction\BookmarkAction();
  }

  
  public static function TaxiReservation()
  {
     return new Thing\Intangible\Reservation\TaxiReservation();
  }

  
  public static function BackgroundNewsArticle()
  {
     return new Thing\CreativeWork\Article\NewsArticle\BackgroundNewsArticle();
  }

  
  public static function Artery()
  {
     return new Thing\MedicalEntity\AnatomicalStructure\Vessel\Artery();
  }

  
  public static function Game()
  {
     return new Thing\CreativeWork\Game();
  }

  
  public static function Volcano()
  {
     return new Thing\Place\Landform\Volcano();
  }

  
  public static function MedicalProcedureType()
  {
     return new Thing\Intangible\Enumeration\MedicalEnumeration\MedicalProcedureType();
  }

  
  public static function Vehicle()
  {
     return new Thing\Product\Vehicle();
  }

  
  public static function Ligament()
  {
     return new Thing\MedicalEntity\AnatomicalStructure\Ligament();
  }

  
  public static function Permit()
  {
     return new Thing\Intangible\Permit();
  }

  
  public static function AutoPartsStore()
  {
     return new Thing\Organization\LocalBusiness\Store\AutoPartsStore();
  }

  
  public static function Painting()
  {
     return new Thing\CreativeWork\Painting();
  }

  
  public static function SomeProducts()
  {
     return new Thing\Product\SomeProducts();
  }

  
  public static function MoveAction()
  {
     return new Thing\Action\MoveAction();
  }

  
  public static function CreativeWork()
  {
     return new Thing\CreativeWork();
  }

  
  public static function AddAction()
  {
     return new Thing\Action\UpdateAction\AddAction();
  }

  
  public static function JewelryStore()
  {
     return new Thing\Organization\LocalBusiness\Store\JewelryStore();
  }

  
  public static function ViewAction()
  {
     return new Thing\Action\ConsumeAction\ViewAction();
  }

  
  public static function WPFooter()
  {
     return new Thing\CreativeWork\WebPageElement\WPFooter();
  }

  
  public static function QAPage()
  {
     return new Thing\CreativeWork\WebPage\QAPage();
  }

  
  public static function HomeGoodsStore()
  {
     return new Thing\Organization\LocalBusiness\Store\HomeGoodsStore();
  }

  
  public static function LikeAction()
  {
     return new Thing\Action\AssessAction\ReactAction\LikeAction();
  }

  
  public static function PublicationEvent()
  {
     return new Thing\Event\PublicationEvent();
  }

  
  public static function Course()
  {
     return new Thing\CreativeWork\Course();
  }

  
  public static function ParcelService()
  {
     return new Thing\Intangible\Enumeration\DeliveryMethod\ParcelService();
  }

  
  public static function BefriendAction()
  {
     return new Thing\Action\InteractAction\BefriendAction();
  }

  
  public static function Muscle()
  {
     return new Thing\MedicalEntity\AnatomicalStructure\Muscle();
  }

  
  public static function MedicalWebPage()
  {
     return new Thing\CreativeWork\WebPage\MedicalWebPage();
  }

  
  public static function HowTo()
  {
     return new Thing\CreativeWork\HowTo();
  }

  
  public static function DanceEvent()
  {
     return new Thing\Event\DanceEvent();
  }

  
  public static function PoliceStation()
  {
     return new Thing\Organization\LocalBusiness\EmergencyService\PoliceStation();
  }

  
  public static function DigitalDocument()
  {
     return new Thing\CreativeWork\DigitalDocument();
  }

  
  public static function HealthClub()
  {
     return new Thing\Organization\LocalBusiness\SportsActivityLocation\HealthClub();
  }

  
  public static function MedicineSystem()
  {
     return new Thing\Intangible\Enumeration\MedicalEnumeration\MedicineSystem();
  }

  
  public static function DrinkAction()
  {
     return new Thing\Action\ConsumeAction\DrinkAction();
  }

  
  public static function DownloadAction()
  {
     return new Thing\Action\TransferAction\DownloadAction();
  }

  
  public static function TireShop()
  {
     return new Thing\Organization\LocalBusiness\Store\TireShop();
  }

  
  public static function Synagogue()
  {
     return new Thing\Place\CivicStructure\PlaceOfWorship\Synagogue();
  }

  
  public static function AnimalShelter()
  {
     return new Thing\Organization\LocalBusiness\AnimalShelter();
  }

  
  public static function Thesis()
  {
     return new Thing\CreativeWork\Thesis();
  }

  
  public static function WorkersUnion()
  {
     return new Thing\Organization\WorkersUnion();
  }

  
  public static function HowToSection()
  {
     return new Thing\CreativeWork\HowToSection();
  }

  
  public static function MusicAlbum()
  {
     return new Thing\CreativeWork\MusicPlaylist\MusicAlbum();
  }

  
  public static function Person()
  {
     return new Thing\Person();
  }

  
  public static function DeliveryChargeSpecification()
  {
     return new Thing\Intangible\StructuredValue\PriceSpecification\DeliveryChargeSpecification();
  }

  
  public static function LendAction()
  {
     return new Thing\Action\TransferAction\LendAction();
  }

  
  public static function FoodEstablishment()
  {
     return new Thing\Organization\LocalBusiness\FoodEstablishment();
  }

  
  public static function ListenAction()
  {
     return new Thing\Action\ConsumeAction\ListenAction();
  }

  
  public static function TransferAction()
  {
     return new Thing\Action\TransferAction();
  }

  
  public static function MedicalDevicePurpose()
  {
     return new Thing\Intangible\Enumeration\MedicalEnumeration\MedicalDevicePurpose();
  }

  
  public static function NutritionInformation()
  {
     return new Thing\Intangible\StructuredValue\NutritionInformation();
  }

  
  public static function Manuscript()
  {
     return new Thing\CreativeWork\Manuscript();
  }

  
  public static function SiteNavigationElement()
  {
     return new Thing\CreativeWork\WebPageElement\SiteNavigationElement();
  }

  
  public static function MedicalImagingTechnique()
  {
     return new Thing\Intangible\Enumeration\MedicalEnumeration\MedicalImagingTechnique();
  }

  
  public static function Organization()
  {
     return new Thing\Organization();
  }

  
  public static function MedicalProcedure()
  {
     return new Thing\MedicalEntity\MedicalProcedure();
  }

  
  public static function DeleteAction()
  {
     return new Thing\Action\UpdateAction\DeleteAction();
  }

  
  public static function TradeAction()
  {
     return new Thing\Action\TradeAction();
  }

  
  public static function LegalService()
  {
     return new Thing\Organization\LocalBusiness\LegalService();
  }

  
  public static function Project()
  {
     return new Thing\Organization\Project();
  }

  
  public static function DiagnosticLab()
  {
     return new Thing\Organization\MedicalOrganization\DiagnosticLab();
  }

  
  public static function Attorney()
  {
     return new Thing\Organization\LocalBusiness\LegalService\Attorney();
  }

  
  public static function RsvpAction()
  {
     return new Thing\Action\InteractAction\CommunicateAction\InformAction\RsvpAction();
  }

  
  public static function Rating()
  {
     return new Thing\Intangible\Rating();
  }

  
  public static function ApartmentComplex()
  {
     return new Thing\Place\Residence\ApartmentComplex();
  }

  
  public static function ShareAction()
  {
     return new Thing\Action\InteractAction\CommunicateAction\ShareAction();
  }

  
  public static function HousePainter()
  {
     return new Thing\Organization\LocalBusiness\HomeAndConstructionBusiness\HousePainter();
  }

  
  public static function WinAction()
  {
     return new Thing\Action\AchieveAction\WinAction();
  }

  
  public static function MedicalCondition()
  {
     return new Thing\MedicalEntity\MedicalCondition();
  }

  
  public static function MovieRentalStore()
  {
     return new Thing\Organization\LocalBusiness\Store\MovieRentalStore();
  }

  
  public static function Quotation()
  {
     return new Thing\CreativeWork\Quotation();
  }

  
  public static function PropertyValueSpecification()
  {
     return new Thing\Intangible\PropertyValueSpecification();
  }

  
  public static function EducationEvent()
  {
     return new Thing\Event\EducationEvent();
  }

  
  public static function ResumeAction()
  {
     return new Thing\Action\ControlAction\ResumeAction();
  }

  
  public static function ToyStore()
  {
     return new Thing\Organization\LocalBusiness\Store\ToyStore();
  }

  
  public static function BedAndBreakfast()
  {
     return new Thing\Organization\LocalBusiness\LodgingBusiness\BedAndBreakfast();
  }

  
  public static function Suite()
  {
     return new Thing\Place\Accommodation\Suite();
  }

  
  public static function ImagingTest()
  {
     return new Thing\MedicalEntity\MedicalTest\ImagingTest();
  }

  
  public static function MedicalGuidelineContraindication()
  {
     return new Thing\MedicalEntity\MedicalGuideline\MedicalGuidelineContraindication();
  }

  
  public static function Report()
  {
     return new Thing\CreativeWork\Article\Report();
  }

  
  public static function InvestmentFund()
  {
     return new Thing\Intangible\Service\FinancialProduct\InvestmentOrDeposit\InvestmentFund();
  }

  
  public static function GenderType()
  {
     return new Thing\Intangible\Enumeration\GenderType();
  }

  
  public static function InstallAction()
  {
     return new Thing\Action\ConsumeAction\InstallAction();
  }

  
  public static function EventVenue()
  {
     return new Thing\Place\CivicStructure\EventVenue();
  }

  
  public static function GiveAction()
  {
     return new Thing\Action\TransferAction\GiveAction();
  }

  
  public static function CompleteDataFeed()
  {
     return new Thing\CreativeWork\Dataset\DataFeed\CompleteDataFeed();
  }

  
  public static function InfectiousDisease()
  {
     return new Thing\MedicalEntity\MedicalCondition\InfectiousDisease();
  }

  
  public static function BuyAction()
  {
     return new Thing\Action\TradeAction\BuyAction();
  }

  
  public static function PostOffice()
  {
     return new Thing\Organization\LocalBusiness\GovernmentOffice\PostOffice();
  }

  
  public static function CheckoutPage()
  {
     return new Thing\CreativeWork\WebPage\CheckoutPage();
  }

  
  public static function Accommodation()
  {
     return new Thing\Place\Accommodation();
  }

  
  public static function VeterinaryCare()
  {
     return new Thing\Organization\MedicalOrganization\VeterinaryCare();
  }

  
  public static function LandmarksOrHistoricalBuildings()
  {
     return new Thing\Place\LandmarksOrHistoricalBuildings();
  }

  
  public static function WorkBasedProgram()
  {
     return new Thing\Intangible\EducationalOccupationalProgram\WorkBasedProgram();
  }

  
  public static function AggregateOffer()
  {
     return new Thing\Intangible\Offer\AggregateOffer();
  }

  
  public static function Review()
  {
     return new Thing\CreativeWork\Review();
  }

  
  public static function HowToSupply()
  {
     return new Thing\Intangible\ListItem\HowToItem\HowToSupply();
  }

  
  public static function AnatomicalSystem()
  {
     return new Thing\MedicalEntity\AnatomicalSystem();
  }

  
  public static function MedicalContraindication()
  {
     return new Thing\MedicalEntity\MedicalContraindication();
  }

  
  public static function AutoRepair()
  {
     return new Thing\Organization\LocalBusiness\AutomotiveBusiness\AutoRepair();
  }

  
  public static function ExerciseGym()
  {
     return new Thing\Organization\LocalBusiness\SportsActivityLocation\ExerciseGym();
  }

  
  public static function Embassy()
  {
     return new Thing\Place\CivicStructure\GovernmentBuilding\Embassy();
  }

  
  public static function ProfilePage()
  {
     return new Thing\CreativeWork\WebPage\ProfilePage();
  }

  
  public static function DisagreeAction()
  {
     return new Thing\Action\AssessAction\ReactAction\DisagreeAction();
  }

  
  public static function InfectiousAgentClass()
  {
     return new Thing\Intangible\Enumeration\MedicalEnumeration\InfectiousAgentClass();
  }

  
  public static function Poster()
  {
     return new Thing\CreativeWork\Poster();
  }

  
  public static function ImageObject()
  {
     return new Thing\CreativeWork\MediaObject\ImageObject();
  }

  
  public static function ReservationPackage()
  {
     return new Thing\Intangible\Reservation\ReservationPackage();
  }

  
  public static function FinancialProduct()
  {
     return new Thing\Intangible\Service\FinancialProduct();
  }

  
  public static function ApprovedIndication()
  {
     return new Thing\MedicalEntity\MedicalIndication\ApprovedIndication();
  }

  
  public static function HomeAndConstructionBusiness()
  {
     return new Thing\Organization\LocalBusiness\HomeAndConstructionBusiness();
  }

  
  public static function ProgramMembership()
  {
     return new Thing\Intangible\ProgramMembership();
  }

  
  public static function ControlAction()
  {
     return new Thing\Action\ControlAction();
  }

  
  public static function CheckAction()
  {
     return new Thing\Action\FindAction\CheckAction();
  }

  
  public static function EducationalOccupationalProgram()
  {
     return new Thing\Intangible\EducationalOccupationalProgram();
  }

  
  public static function DanceGroup()
  {
     return new Thing\Organization\PerformingGroup\DanceGroup();
  }

  
  public static function Claim()
  {
     return new Thing\CreativeWork\Claim();
  }

  
  public static function DiscussionForumPosting()
  {
     return new Thing\CreativeWork\Article\SocialMediaPosting\DiscussionForumPosting();
  }

  
  public static function TouristAttraction()
  {
     return new Thing\Place\TouristAttraction();
  }

  
  public static function Car()
  {
     return new Thing\Product\Vehicle\Car();
  }

  
  public static function PriceSpecification()
  {
     return new Thing\Intangible\StructuredValue\PriceSpecification();
  }

  
  public static function Joint()
  {
     return new Thing\MedicalEntity\AnatomicalStructure\Joint();
  }

  
  public static function Season()
  {
     return new Thing\CreativeWork\Season();
  }

  
  public static function DrawAction()
  {
     return new Thing\Action\CreateAction\DrawAction();
  }

  
  public static function PaymentCard()
  {
     return new Thing\Intangible\Enumeration\PaymentMethod\PaymentCard();
  }

  
  public static function PublicationVolume()
  {
     return new Thing\CreativeWork\PublicationVolume();
  }

  
  public static function LocalBusiness()
  {
     return new Thing\Organization\LocalBusiness();
  }

  
  public static function MedicalIndication()
  {
     return new Thing\MedicalEntity\MedicalIndication();
  }

  
  public static function DeliveryMethod()
  {
     return new Thing\Intangible\Enumeration\DeliveryMethod();
  }

  
  public static function CancelAction()
  {
     return new Thing\Action\OrganizeAction\PlanAction\CancelAction();
  }

  
  public static function CreditCard()
  {
     return new Thing\Intangible\Service\FinancialProduct\LoanOrCredit\CreditCard();
  }

  
  public static function IgnoreAction()
  {
     return new Thing\Action\AssessAction\IgnoreAction();
  }

  
  public static function MusicRecording()
  {
     return new Thing\CreativeWork\MusicRecording();
  }

  
  public static function MotorcycleDealer()
  {
     return new Thing\Organization\LocalBusiness\AutomotiveBusiness\MotorcycleDealer();
  }

  
  public static function Optician()
  {
     return new Thing\Organization\LocalBusiness\MedicalBusiness\Optician();
  }

  
  public static function CheckOutAction()
  {
     return new Thing\Action\InteractAction\CommunicateAction\CheckOutAction();
  }

  
  public static function MedicalGuidelineRecommendation()
  {
     return new Thing\MedicalEntity\MedicalGuideline\MedicalGuidelineRecommendation();
  }

  
  public static function TouristDestination()
  {
     return new Thing\Place\TouristDestination();
  }

  
  public static function BankAccount()
  {
     return new Thing\Intangible\Service\FinancialProduct\BankAccount();
  }

  
  public static function MenuItem()
  {
     return new Thing\Intangible\MenuItem();
  }

  
  public static function RealEstateAgent()
  {
     return new Thing\Organization\LocalBusiness\RealEstateAgent();
  }

  
  public static function SportsOrganization()
  {
     return new Thing\Organization\SportsOrganization();
  }

  
  public static function EndorseAction()
  {
     return new Thing\Action\AssessAction\ReactAction\EndorseAction();
  }

  
  public static function EducationalOrganization()
  {
     return new Thing\Organization\EducationalOrganization();
  }

  
  public static function CableOrSatelliteService()
  {
     return new Thing\Intangible\Service\CableOrSatelliteService();
  }

  
  public static function HinduTemple()
  {
     return new Thing\Place\CivicStructure\PlaceOfWorship\HinduTemple();
  }

  
  public static function TVSeason()
  {
     return new Thing\CreativeWork\CreativeWorkSeason\TVSeason();
  }

  
  public static function SearchResultsPage()
  {
     return new Thing\CreativeWork\WebPage\SearchResultsPage();
  }

  
  public static function UserBlocks()
  {
     return new Thing\Event\UserInteraction\UserBlocks();
  }

  
  public static function MedicalSymptom()
  {
     return new Thing\MedicalEntity\MedicalCondition\MedicalSignOrSymptom\MedicalSymptom();
  }

  
  public static function BookStore()
  {
     return new Thing\Organization\LocalBusiness\Store\BookStore();
  }

  
  public static function EntryPoint()
  {
     return new Thing\Intangible\EntryPoint();
  }

  
  public static function FoodEvent()
  {
     return new Thing\Event\FoodEvent();
  }

  
  public static function DigitalDocumentPermission()
  {
     return new Thing\Intangible\DigitalDocumentPermission();
  }

  
  public static function OutletStore()
  {
     return new Thing\Organization\LocalBusiness\Store\OutletStore();
  }

  
  public static function Substance()
  {
     return new Thing\MedicalEntity\Substance();
  }

  
  public static function MedicalObservationalStudy()
  {
     return new Thing\MedicalEntity\MedicalStudy\MedicalObservationalStudy();
  }

  
  public static function MonetaryAmountDistribution()
  {
     return new Thing\Intangible\StructuredValue\QuantitativeValueDistribution\MonetaryAmountDistribution();
  }

  
  public static function InviteAction()
  {
     return new Thing\Action\InteractAction\CommunicateAction\InviteAction();
  }

  
  public static function NewsMediaOrganization()
  {
     return new Thing\Organization\NewsMediaOrganization();
  }

  
  public static function TVEpisode()
  {
     return new Thing\CreativeWork\Episode\TVEpisode();
  }

  
  public static function MusicGroup()
  {
     return new Thing\Organization\PerformingGroup\MusicGroup();
  }

  
  public static function AmusementPark()
  {
     return new Thing\Organization\LocalBusiness\EntertainmentBusiness\AmusementPark();
  }

  
  public static function ContactPointOption()
  {
     return new Thing\Intangible\Enumeration\ContactPointOption();
  }

  
  public static function MobilePhoneStore()
  {
     return new Thing\Organization\LocalBusiness\Store\MobilePhoneStore();
  }

  
  public static function Casino()
  {
     return new Thing\Organization\LocalBusiness\EntertainmentBusiness\Casino();
  }

  
  public static function SubscribeAction()
  {
     return new Thing\Action\InteractAction\SubscribeAction();
  }

  
  public static function BusinessEvent()
  {
     return new Thing\Event\BusinessEvent();
  }

  
  public static function AgreeAction()
  {
     return new Thing\Action\AssessAction\ReactAction\AgreeAction();
  }

  
  public static function RiverBodyOfWater()
  {
     return new Thing\Place\Landform\BodyOfWater\RiverBodyOfWater();
  }

  
  public static function GameServer()
  {
     return new Thing\Intangible\GameServer();
  }

  
  public static function DepositAccount()
  {
     return new Thing\Intangible\Service\FinancialProduct\BankAccount\DepositAccount();
  }

  
  public static function DigitalDocumentPermissionType()
  {
     return new Thing\Intangible\Enumeration\DigitalDocumentPermissionType();
  }

  
  public static function Motel()
  {
     return new Thing\Organization\LocalBusiness\LodgingBusiness\Motel();
  }

  
  public static function WPAdBlock()
  {
     return new Thing\CreativeWork\WebPageElement\WPAdBlock();
  }

  
  public static function MedicalCode()
  {
     return new Thing\Intangible\DefinedTerm\CategoryCode\MedicalCode();
  }

  
  public static function ChildCare()
  {
     return new Thing\Organization\LocalBusiness\ChildCare();
  }

  
  public static function InternetCafe()
  {
     return new Thing\Organization\LocalBusiness\InternetCafe();
  }

  
  public static function PaymentStatusType()
  {
     return new Thing\Intangible\Enumeration\PaymentStatusType();
  }

  
  public static function MusicAlbumReleaseType()
  {
     return new Thing\Intangible\Enumeration\MusicAlbumReleaseType();
  }

  
  public static function DefinedTermSet()
  {
     return new Thing\CreativeWork\DefinedTermSet();
  }

  
  public static function Pharmacy()
  {
     return new Thing\Organization\MedicalOrganization\Pharmacy();
  }

  
  public static function DefenceEstablishment()
  {
     return new Thing\Place\CivicStructure\GovernmentBuilding\DefenceEstablishment();
  }

  
  public static function BreadcrumbList()
  {
     return new Thing\Intangible\ItemList\BreadcrumbList();
  }

  
  public static function Church()
  {
     return new Thing\Place\CivicStructure\PlaceOfWorship\Church();
  }

  
  public static function LiquorStore()
  {
     return new Thing\Organization\LocalBusiness\Store\LiquorStore();
  }

  
  public static function PublicationIssue()
  {
     return new Thing\CreativeWork\PublicationIssue();
  }

  
  public static function GameServerStatus()
  {
     return new Thing\Intangible\Enumeration\GameServerStatus();
  }

  
  public static function Article()
  {
     return new Thing\CreativeWork\Article();
  }

  
  public static function UserTweets()
  {
     return new Thing\Event\UserInteraction\UserTweets();
  }

  
  public static function Enumeration()
  {
     return new Thing\Intangible\Enumeration();
  }

  
  public static function WebPageElement()
  {
     return new Thing\CreativeWork\WebPageElement();
  }

  
  public static function VideoGame()
  {
     return new Thing\CreativeWork\Game\VideoGame();
  }

  
  public static function UserInteraction()
  {
     return new Thing\Event\UserInteraction();
  }

  
  public static function Property()
  {
     return new Thing\Intangible\Property();
  }

  
  public static function MedicalTrialDesign()
  {
     return new Thing\Intangible\Enumeration\MedicalEnumeration\MedicalTrialDesign();
  }

  
  public static function Airline()
  {
     return new Thing\Organization\Airline();
  }

  
  public static function LiveBlogPosting()
  {
     return new Thing\CreativeWork\Article\SocialMediaPosting\BlogPosting\LiveBlogPosting();
  }

  
  public static function MedicalStudy()
  {
     return new Thing\MedicalEntity\MedicalStudy();
  }

  
  public static function PublicToilet()
  {
     return new Thing\Place\CivicStructure\PublicToilet();
  }

  
  public static function BikeStore()
  {
     return new Thing\Organization\LocalBusiness\Store\BikeStore();
  }

  
  public static function BuddhistTemple()
  {
     return new Thing\Place\CivicStructure\PlaceOfWorship\BuddhistTemple();
  }

  
  public static function GardenStore()
  {
     return new Thing\Organization\LocalBusiness\Store\GardenStore();
  }

  
  public static function AutoRental()
  {
     return new Thing\Organization\LocalBusiness\AutomotiveBusiness\AutoRental();
  }

  
  public static function AchieveAction()
  {
     return new Thing\Action\AchieveAction();
  }

  
  public static function Zoo()
  {
     return new Thing\Place\CivicStructure\Zoo();
  }

  
  public static function WebSite()
  {
     return new Thing\CreativeWork\WebSite();
  }

  
  public static function Movie()
  {
     return new Thing\CreativeWork\Movie();
  }

  
  public static function OrganizeAction()
  {
     return new Thing\Action\OrganizeAction();
  }

  
  public static function MedicalObservationalStudyDesign()
  {
     return new Thing\Intangible\Enumeration\MedicalEnumeration\MedicalObservationalStudyDesign();
  }

  
  public static function TreatmentIndication()
  {
     return new Thing\MedicalEntity\MedicalIndication\TreatmentIndication();
  }

  
  public static function Audience()
  {
     return new Thing\Intangible\Audience();
  }

  
  public static function LymphaticVessel()
  {
     return new Thing\MedicalEntity\AnatomicalStructure\Vessel\LymphaticVessel();
  }

  
  public static function Restaurant()
  {
     return new Thing\Organization\LocalBusiness\FoodEstablishment\Restaurant();
  }

  
  public static function UseAction()
  {
     return new Thing\Action\ConsumeAction\UseAction();
  }

  
  public static function APIReference()
  {
     return new Thing\CreativeWork\Article\TechArticle\APIReference();
  }

  
  public static function TravelAction()
  {
     return new Thing\Action\MoveAction\TravelAction();
  }

  
  public static function FilmAction()
  {
     return new Thing\Action\CreateAction\FilmAction();
  }

  
  public static function MobileApplication()
  {
     return new Thing\CreativeWork\SoftwareApplication\MobileApplication();
  }

  
  public static function SoftwareApplication()
  {
     return new Thing\CreativeWork\SoftwareApplication();
  }

  
  public static function PhysicalExam()
  {
     return new Thing\MedicalEntity\MedicalProcedure\PhysicalExam();
  }

  
  public static function Code()
  {
     return new Thing\CreativeWork\Code();
  }

  
  public static function TouristTrip()
  {
     return new Thing\Intangible\Trip\TouristTrip();
  }

  
  public static function SportingGoodsStore()
  {
     return new Thing\Organization\LocalBusiness\Store\SportingGoodsStore();
  }

  
  public static function MedicalAudience()
  {
     return new Thing\Intangible\Audience\PeopleAudience\MedicalAudience();
  }

  
  public static function MedicalTestPanel()
  {
     return new Thing\MedicalEntity\MedicalTest\MedicalTestPanel();
  }

  
  public static function MedicalClinic()
  {
     return new Thing\Organization\MedicalOrganization\MedicalClinic();
  }

  
  public static function QuantitativeValueDistribution()
  {
     return new Thing\Intangible\StructuredValue\QuantitativeValueDistribution();
  }

  
  public static function Waterfall()
  {
     return new Thing\Place\Landform\BodyOfWater\Waterfall();
  }

  
  public static function OfficeEquipmentStore()
  {
     return new Thing\Organization\LocalBusiness\Store\OfficeEquipmentStore();
  }

  
  public static function LinkRole()
  {
     return new Thing\Intangible\Role\LinkRole();
  }

  
  public static function PlanAction()
  {
     return new Thing\Action\OrganizeAction\PlanAction();
  }

  
  public static function CategoryCodeSet()
  {
     return new Thing\CreativeWork\DefinedTermSet\CategoryCodeSet();
  }

  
  public static function Vessel()
  {
     return new Thing\MedicalEntity\AnatomicalStructure\Vessel();
  }

  
  public static function MovieTheater()
  {
     return new Thing\Place\CivicStructure\MovieTheater();
  }

  
  public static function Bakery()
  {
     return new Thing\Organization\LocalBusiness\FoodEstablishment\Bakery();
  }

  
  public static function GatedResidenceCommunity()
  {
     return new Thing\Place\Residence\GatedResidenceCommunity();
  }

  
  public static function Country()
  {
     return new Thing\Place\AdministrativeArea\Country();
  }

  
  public static function PlaceOfWorship()
  {
     return new Thing\Place\CivicStructure\PlaceOfWorship();
  }

  
  public static function HowToTip()
  {
     return new Thing\CreativeWork\HowToTip();
  }

  
  public static function ComputerLanguage()
  {
     return new Thing\Intangible\ComputerLanguage();
  }

  
  public static function PerformanceRole()
  {
     return new Thing\Intangible\Role\PerformanceRole();
  }

  
  public static function UnitPriceSpecification()
  {
     return new Thing\Intangible\StructuredValue\PriceSpecification\UnitPriceSpecification();
  }

  
  public static function BedType()
  {
     return new Thing\Intangible\Enumeration\QualitativeValue\BedType();
  }

  
  public static function ClothingStore()
  {
     return new Thing\Organization\LocalBusiness\Store\ClothingStore();
  }

  
  public static function Mountain()
  {
     return new Thing\Place\Landform\Mountain();
  }

  
  public static function PhysicalTherapy()
  {
     return new Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy\PhysicalTherapy();
  }

  
  public static function ReceiveAction()
  {
     return new Thing\Action\TransferAction\ReceiveAction();
  }

  
  public static function MedicalRiskScore()
  {
     return new Thing\MedicalEntity\MedicalRiskEstimator\MedicalRiskScore();
  }

  
  public static function VideoGameClip()
  {
     return new Thing\CreativeWork\Clip\VideoGameClip();
  }

  
  public static function MusicStore()
  {
     return new Thing\Organization\LocalBusiness\Store\MusicStore();
  }

  
  public static function Crematorium()
  {
     return new Thing\Place\CivicStructure\Crematorium();
  }

  
  public static function ScholarlyArticle()
  {
     return new Thing\CreativeWork\Article\ScholarlyArticle();
  }

  
  public static function MedicalEnumeration()
  {
     return new Thing\Intangible\Enumeration\MedicalEnumeration();
  }

  
  public static function QuoteAction()
  {
     return new Thing\Action\TradeAction\QuoteAction();
  }

  
  public static function PropertyValue()
  {
     return new Thing\Intangible\StructuredValue\PropertyValue();
  }

  
  public static function DefinedTerm()
  {
     return new Thing\Intangible\DefinedTerm();
  }

  
  public static function ListItem()
  {
     return new Thing\Intangible\ListItem();
  }

  
  public static function ContactPage()
  {
     return new Thing\CreativeWork\WebPage\ContactPage();
  }

  
  public static function WebApplication()
  {
     return new Thing\CreativeWork\SoftwareApplication\WebApplication();
  }

  
  public static function BroadcastFrequencySpecification()
  {
     return new Thing\Intangible\BroadcastFrequencySpecification();
  }

  
  public static function BlogPosting()
  {
     return new Thing\CreativeWork\Article\SocialMediaPosting\BlogPosting();
  }

  
  public static function ExercisePlan()
  {
     return new Thing\MedicalEntity\LifestyleModification\PhysicalActivity\ExercisePlan();
  }

  
  public static function PalliativeProcedure()
  {
     return new Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy\PalliativeProcedure();
  }

  
  public static function LodgingReservation()
  {
     return new Thing\Intangible\Reservation\LodgingReservation();
  }

  
  public static function CarUsageType()
  {
     return new Thing\Intangible\Enumeration\QualitativeValue\CarUsageType();
  }

  
  public static function PreOrderAction()
  {
     return new Thing\Action\TradeAction\PreOrderAction();
  }

  
  public static function MediaSubscription()
  {
     return new Thing\Intangible\MediaSubscription();
  }

  
  public static function PresentationDigitalDocument()
  {
     return new Thing\CreativeWork\DigitalDocument\PresentationDigitalDocument();
  }

  
  public static function EventSeries()
  {
     return new Thing\Intangible\Series\EventSeries();
  }

  
  public static function Book()
  {
     return new Thing\CreativeWork\Book();
  }

  
  public static function OpinionNewsArticle()
  {
     return new Thing\CreativeWork\Article\NewsArticle\OpinionNewsArticle();
  }

  
  public static function OfferItemCondition()
  {
     return new Thing\Intangible\Enumeration\OfferItemCondition();
  }

  
  public static function LocationFeatureSpecification()
  {
     return new Thing\Intangible\StructuredValue\PropertyValue\LocationFeatureSpecification();
  }

  
  public static function MusicRelease()
  {
     return new Thing\CreativeWork\MusicPlaylist\MusicRelease();
  }

  
  public static function BarOrPub()
  {
     return new Thing\Organization\LocalBusiness\FoodEstablishment\BarOrPub();
  }

  
  public static function TechArticle()
  {
     return new Thing\CreativeWork\Article\TechArticle();
  }

  
  public static function Sculpture()
  {
     return new Thing\CreativeWork\Sculpture();
  }

  
  public static function SaleEvent()
  {
     return new Thing\Event\SaleEvent();
  }

  
  public static function ComputerStore()
  {
     return new Thing\Organization\LocalBusiness\Store\ComputerStore();
  }

  
  public static function RadioStation()
  {
     return new Thing\Organization\LocalBusiness\RadioStation();
  }

  
  public static function Map()
  {
     return new Thing\CreativeWork\Map();
  }

  
  public static function GolfCourse()
  {
     return new Thing\Organization\LocalBusiness\SportsActivityLocation\GolfCourse();
  }

  
  public static function DrugPrescriptionStatus()
  {
     return new Thing\Intangible\Enumeration\MedicalEnumeration\DrugPrescriptionStatus();
  }

  
  public static function DepartAction()
  {
     return new Thing\Action\MoveAction\DepartAction();
  }

  
  public static function ActionAccessSpecification()
  {
     return new Thing\Intangible\ActionAccessSpecification();
  }

  
  public static function Comment()
  {
     return new Thing\CreativeWork\Comment();
  }

  
  public static function ShoeStore()
  {
     return new Thing\Organization\LocalBusiness\Store\ShoeStore();
  }

  
  public static function SuspendAction()
  {
     return new Thing\Action\ControlAction\SuspendAction();
  }

  
  public static function WPSideBar()
  {
     return new Thing\CreativeWork\WebPageElement\WPSideBar();
  }

  
  public static function FlightReservation()
  {
     return new Thing\Intangible\Reservation\FlightReservation();
  }

  
  public static function AlignmentObject()
  {
     return new Thing\Intangible\AlignmentObject();
  }

  
  public static function SellAction()
  {
     return new Thing\Action\TradeAction\SellAction();
  }

  
  public static function PetStore()
  {
     return new Thing\Organization\LocalBusiness\Store\PetStore();
  }

  
  public static function OnDemandEvent()
  {
     return new Thing\Event\PublicationEvent\OnDemandEvent();
  }

  
  public static function AutoDealer()
  {
     return new Thing\Organization\LocalBusiness\AutomotiveBusiness\AutoDealer();
  }

  
  public static function ChooseAction()
  {
     return new Thing\Action\AssessAction\ChooseAction();
  }

  
  public static function GovernmentOffice()
  {
     return new Thing\Organization\LocalBusiness\GovernmentOffice();
  }

  
  public static function Place()
  {
     return new Thing\Place();
  }

  
  public static function QualitativeValue()
  {
     return new Thing\Intangible\Enumeration\QualitativeValue();
  }

  
  public static function ComicCoverArt()
  {
     return new Thing\CreativeWork\VisualArtwork\CoverArt\ComicCoverArt();
  }

  
  public static function SendAction()
  {
     return new Thing\Action\TransferAction\SendAction();
  }

  
  public static function LeaveAction()
  {
     return new Thing\Action\InteractAction\LeaveAction();
  }

  
  public static function GasStation()
  {
     return new Thing\Organization\LocalBusiness\AutomotiveBusiness\GasStation();
  }

  
  public static function SeaBodyOfWater()
  {
     return new Thing\Place\Landform\BodyOfWater\SeaBodyOfWater();
  }

  
  public static function AssessAction()
  {
     return new Thing\Action\AssessAction();
  }

  
  public static function CommentAction()
  {
     return new Thing\Action\InteractAction\CommunicateAction\CommentAction();
  }

  
  public static function Order()
  {
     return new Thing\Intangible\Order();
  }

  
  public static function Library()
  {
     return new Thing\Organization\LocalBusiness\Library();
  }

  
  public static function TouristInformationCenter()
  {
     return new Thing\Organization\LocalBusiness\TouristInformationCenter();
  }

  
  public static function MusicComposition()
  {
     return new Thing\CreativeWork\MusicComposition();
  }

  
  public static function Drug()
  {
     return new Thing\MedicalEntity\Substance\Drug();
  }

  
  public static function Aquarium()
  {
     return new Thing\Place\CivicStructure\Aquarium();
  }

  
  public static function SelfStorage()
  {
     return new Thing\Organization\LocalBusiness\SelfStorage();
  }

  
  public static function GeoShape()
  {
     return new Thing\Intangible\StructuredValue\GeoShape();
  }

  
  public static function MonetaryGrant()
  {
     return new Thing\Intangible\Grant\MonetaryGrant();
  }

  
  public static function EntertainmentBusiness()
  {
     return new Thing\Organization\LocalBusiness\EntertainmentBusiness();
  }

  
  public static function BroadcastChannel()
  {
     return new Thing\Intangible\BroadcastChannel();
  }

  
  public static function Florist()
  {
     return new Thing\Organization\LocalBusiness\Store\Florist();
  }

  
  public static function HowToTool()
  {
     return new Thing\Intangible\ListItem\HowToItem\HowToTool();
  }

  
  public static function UserPlusOnes()
  {
     return new Thing\Event\UserInteraction\UserPlusOnes();
  }

  
  public static function WebPage()
  {
     return new Thing\CreativeWork\WebPage();
  }

  
  public static function Residence()
  {
     return new Thing\Place\Residence();
  }

  
  public static function UserPageVisits()
  {
     return new Thing\Event\UserInteraction\UserPageVisits();
  }

  
  public static function Mosque()
  {
     return new Thing\Place\CivicStructure\PlaceOfWorship\Mosque();
  }

  
  public static function ProductReturnPolicy()
  {
     return new Thing\Intangible\ProductReturnPolicy();
  }

  
  public static function Room()
  {
     return new Thing\Place\Accommodation\Room();
  }

  
  public static function PreventionIndication()
  {
     return new Thing\MedicalEntity\MedicalIndication\PreventionIndication();
  }

  
  public static function HealthInsurancePlan()
  {
     return new Thing\Intangible\HealthInsurancePlan();
  }

  
  public static function Continent()
  {
     return new Thing\Place\Landform\Continent();
  }

  
  public static function Collection()
  {
     return new Thing\CreativeWork\Collection();
  }

  
  public static function BusTrip()
  {
     return new Thing\Intangible\Trip\BusTrip();
  }

  
  public static function Newspaper()
  {
     return new Thing\CreativeWork\CreativeWorkSeries\Periodical\Newspaper();
  }

  
  public static function MedicalStudyStatus()
  {
     return new Thing\Intangible\Enumeration\MedicalEnumeration\MedicalStudyStatus();
  }

  
  public static function UnRegisterAction()
  {
     return new Thing\Action\InteractAction\UnRegisterAction();
  }

  
  public static function LoseAction()
  {
     return new Thing\Action\AchieveAction\LoseAction();
  }

  
  public static function ShoppingCenter()
  {
     return new Thing\Organization\LocalBusiness\ShoppingCenter();
  }

  
  public static function Flight()
  {
     return new Thing\Intangible\Trip\Flight();
  }

  
  public static function HowToStep()
  {
     return new Thing\CreativeWork\HowToStep();
  }

  
  public static function ActionStatusType()
  {
     return new Thing\Intangible\Enumeration\ActionStatusType();
  }

  
  public static function OfferCatalog()
  {
     return new Thing\Intangible\ItemList\OfferCatalog();
  }

  
  public static function EducationalOccupationalCredential()
  {
     return new Thing\CreativeWork\EducationalOccupationalCredential();
  }

  
  public static function AnatomicalStructure()
  {
     return new Thing\MedicalEntity\AnatomicalStructure();
  }

  
  public static function CreativeWorkSeries()
  {
     return new Thing\CreativeWork\CreativeWorkSeries();
  }

  
  public static function NightClub()
  {
     return new Thing\Organization\LocalBusiness\EntertainmentBusiness\NightClub();
  }

  
  public static function DataFeed()
  {
     return new Thing\CreativeWork\Dataset\DataFeed();
  }

  
  public static function State()
  {
     return new Thing\Place\AdministrativeArea\State();
  }

  
  public static function Playground()
  {
     return new Thing\Place\CivicStructure\Playground();
  }

  
  public static function AppendAction()
  {
     return new Thing\Action\UpdateAction\AddAction\InsertAction\AppendAction();
  }

  
  public static function ParkingFacility()
  {
     return new Thing\Place\CivicStructure\ParkingFacility();
  }

  
  public static function CookAction()
  {
     return new Thing\Action\CreateAction\CookAction();
  }

  
  public static function AuthorizeAction()
  {
     return new Thing\Action\OrganizeAction\AllocateAction\AuthorizeAction();
  }

  
  public static function BookSeries()
  {
     return new Thing\CreativeWork\CreativeWorkSeries\BookSeries();
  }

  
  public static function MedicalSign()
  {
     return new Thing\MedicalEntity\MedicalCondition\MedicalSignOrSymptom\MedicalSign();
  }

  
  public static function UserDownloads()
  {
     return new Thing\Event\UserInteraction\UserDownloads();
  }

  
  public static function PawnShop()
  {
     return new Thing\Organization\LocalBusiness\Store\PawnShop();
  }

  
  public static function AssignAction()
  {
     return new Thing\Action\OrganizeAction\AllocateAction\AssignAction();
  }

  
  public static function PayAction()
  {
     return new Thing\Action\TradeAction\PayAction();
  }

  
  public static function HighSchool()
  {
     return new Thing\Organization\EducationalOrganization\HighSchool();
  }

  
  public static function OccupationalTherapy()
  {
     return new Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy\OccupationalTherapy();
  }

  
  public static function TypeAndQuantityNode()
  {
     return new Thing\Intangible\StructuredValue\TypeAndQuantityNode();
  }

  
  public static function SteeringPositionValue()
  {
     return new Thing\Intangible\Enumeration\QualitativeValue\SteeringPositionValue();
  }

  
  public static function SportsClub()
  {
     return new Thing\Organization\LocalBusiness\SportsActivityLocation\SportsClub();
  }

  
  public static function NewsArticle()
  {
     return new Thing\CreativeWork\Article\NewsArticle();
  }

  
  public static function Bridge()
  {
     return new Thing\Place\CivicStructure\Bridge();
  }

  
  public static function TrainStation()
  {
     return new Thing\Place\CivicStructure\TrainStation();
  }

  
  public static function DatedMoneySpecification()
  {
     return new Thing\Intangible\StructuredValue\DatedMoneySpecification();
  }

  
  public static function ParcelDelivery()
  {
     return new Thing\Intangible\ParcelDelivery();
  }

  
  public static function MedicalTrial()
  {
     return new Thing\MedicalEntity\MedicalStudy\MedicalTrial();
  }

  
  public static function SoftwareSourceCode()
  {
     return new Thing\CreativeWork\SoftwareSourceCode();
  }

  
  public static function PaymentService()
  {
     return new Thing\Intangible\Service\FinancialProduct\PaymentService();
  }

  
  public static function SpeakableSpecification()
  {
     return new Thing\Intangible\SpeakableSpecification();
  }

  
  public static function RefundTypeEnumeration()
  {
     return new Thing\Intangible\Enumeration\RefundTypeEnumeration();
  }

  
  public static function ProfessionalService()
  {
     return new Thing\Organization\LocalBusiness\ProfessionalService();
  }

  
  public static function RadiationTherapy()
  {
     return new Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy\RadiationTherapy();
  }

  
  public static function InteractAction()
  {
     return new Thing\Action\InteractAction();
  }

  
  public static function AMRadioChannel()
  {
     return new Thing\Intangible\BroadcastChannel\RadioChannel\AMRadioChannel();
  }

  
  public static function AutoBodyShop()
  {
     return new Thing\Organization\LocalBusiness\AutomotiveBusiness\AutoBodyShop();
  }

  
  public static function School()
  {
     return new Thing\Organization\EducationalOrganization\School();
  }

  
  public static function TelevisionStation()
  {
     return new Thing\Organization\LocalBusiness\TelevisionStation();
  }

  
  public static function LakeBodyOfWater()
  {
     return new Thing\Place\Landform\BodyOfWater\LakeBodyOfWater();
  }

  
  public static function BodyOfWater()
  {
     return new Thing\Place\Landform\BodyOfWater();
  }

  
  public static function Answer()
  {
     return new Thing\CreativeWork\Comment\Answer();
  }

  
  public static function PathologyTest()
  {
     return new Thing\MedicalEntity\MedicalTest\PathologyTest();
  }

  
  public static function RadioSeries()
  {
     return new Thing\CreativeWork\CreativeWorkSeries\RadioSeries();
  }

  
  public static function MusicVideoObject()
  {
     return new Thing\CreativeWork\MediaObject\MusicVideoObject();
  }

  
  public static function Beach()
  {
     return new Thing\Place\CivicStructure\Beach();
  }

  
  public static function HowToItem()
  {
     return new Thing\Intangible\ListItem\HowToItem();
  }

  
  public static function MaximumDoseSchedule()
  {
     return new Thing\MedicalEntity\MedicalIntangible\DoseSchedule\MaximumDoseSchedule();
  }

  
  public static function AdvertiserContentArticle()
  {
     return new Thing\CreativeWork\Article\AdvertiserContentArticle();
  }

  
  public static function WPHeader()
  {
     return new Thing\CreativeWork\WebPageElement\WPHeader();
  }

  
  public static function MarryAction()
  {
     return new Thing\Action\InteractAction\MarryAction();
  }

  
  public static function AnalysisNewsArticle()
  {
     return new Thing\CreativeWork\Article\NewsArticle\AnalysisNewsArticle();
  }

  
  public static function MedicalBusiness()
  {
     return new Thing\Organization\LocalBusiness\MedicalBusiness();
  }

  
  public static function Notary()
  {
     return new Thing\Organization\LocalBusiness\LegalService\Notary();
  }

  
  public static function IceCreamShop()
  {
     return new Thing\Organization\LocalBusiness\FoodEstablishment\IceCreamShop();
  }

  
  public static function ReactAction()
  {
     return new Thing\Action\AssessAction\ReactAction();
  }

  
  public static function Message()
  {
     return new Thing\CreativeWork\Message();
  }

  
  public static function InvestmentOrDeposit()
  {
     return new Thing\Intangible\Service\FinancialProduct\InvestmentOrDeposit();
  }

  
  public static function DryCleaningOrLaundry()
  {
     return new Thing\Organization\LocalBusiness\DryCleaningOrLaundry();
  }

  
  public static function DeactivateAction()
  {
     return new Thing\Action\ControlAction\DeactivateAction();
  }

  
  public static function FastFoodRestaurant()
  {
     return new Thing\Organization\LocalBusiness\FoodEstablishment\FastFoodRestaurant();
  }

  
  public static function DataFeedItem()
  {
     return new Thing\Intangible\DataFeedItem();
  }

  
  public static function OrderStatus()
  {
     return new Thing\Intangible\Enumeration\OrderStatus();
  }

  
  public static function SocialMediaPosting()
  {
     return new Thing\CreativeWork\Article\SocialMediaPosting();
  }

  
  public static function Park()
  {
     return new Thing\Place\CivicStructure\Park();
  }

  
  public static function VoteAction()
  {
     return new Thing\Action\AssessAction\ChooseAction\VoteAction();
  }

  
  public static function BookFormatType()
  {
     return new Thing\Intangible\Enumeration\BookFormatType();
  }

  
  public static function LoanOrCredit()
  {
     return new Thing\Intangible\Service\FinancialProduct\LoanOrCredit();
  }

  
  public static function CatholicChurch()
  {
     return new Thing\Place\CivicStructure\PlaceOfWorship\Church\CatholicChurch();
  }

  
  public static function Consortium()
  {
     return new Thing\Organization\Consortium();
  }

  
  public static function CategoryCode()
  {
     return new Thing\Intangible\DefinedTerm\CategoryCode();
  }

  
  public static function ItemListOrderType()
  {
     return new Thing\Intangible\Enumeration\ItemListOrderType();
  }

  
  public static function SurgicalProcedure()
  {
     return new Thing\MedicalEntity\MedicalProcedure\SurgicalProcedure();
  }

  
  public static function ComedyClub()
  {
     return new Thing\Organization\LocalBusiness\EntertainmentBusiness\ComedyClub();
  }

  
  public static function ServiceChannel()
  {
     return new Thing\Intangible\ServiceChannel();
  }

  
  public static function SuperficialAnatomy()
  {
     return new Thing\MedicalEntity\SuperficialAnatomy();
  }

  
  public static function ExhibitionEvent()
  {
     return new Thing\Event\ExhibitionEvent();
  }

  
  public static function RentAction()
  {
     return new Thing\Action\TradeAction\RentAction();
  }

  
  public static function DrugStrength()
  {
     return new Thing\MedicalEntity\MedicalIntangible\DrugStrength();
  }

  
  public static function EmployeeRole()
  {
     return new Thing\Intangible\Role\OrganizationRole\EmployeeRole();
  }

  
  public static function EmploymentAgency()
  {
     return new Thing\Organization\LocalBusiness\EmploymentAgency();
  }

  
  public static function PrependAction()
  {
     return new Thing\Action\UpdateAction\AddAction\InsertAction\PrependAction();
  }

  
  public static function FireStation()
  {
     return new Thing\Place\CivicStructure\FireStation();
  }

  
  public static function CourseInstance()
  {
     return new Thing\Event\CourseInstance();
  }

  
  public static function Play()
  {
     return new Thing\CreativeWork\Play();
  }

  
  public static function Hotel()
  {
     return new Thing\Organization\LocalBusiness\LodgingBusiness\Hotel();
  }

  
  public static function IndividualProduct()
  {
     return new Thing\Product\IndividualProduct();
  }

  
  public static function MedicalEvidenceLevel()
  {
     return new Thing\Intangible\Enumeration\MedicalEnumeration\MedicalEvidenceLevel();
  }

  
  public static function StructuredValue()
  {
     return new Thing\Intangible\StructuredValue();
  }

  
  public static function RadioClip()
  {
     return new Thing\CreativeWork\Clip\RadioClip();
  }

  
  public static function VisualArtwork()
  {
     return new Thing\CreativeWork\VisualArtwork();
  }

  
  public static function PaymentMethod()
  {
     return new Thing\Intangible\Enumeration\PaymentMethod();
  }

  
  public static function Intangible()
  {
     return new Thing\Intangible();
  }

  
  public static function ElectronicsStore()
  {
     return new Thing\Organization\LocalBusiness\Store\ElectronicsStore();
  }

  
  public static function AskPublicNewsArticle()
  {
     return new Thing\CreativeWork\Article\NewsArticle\AskPublicNewsArticle();
  }

  
  public static function ReviewNewsArticle()
  {
     return new Thing\CreativeWork\Review\CriticReview\ReviewNewsArticle();
  }

  
  public static function BloodTest()
  {
     return new Thing\MedicalEntity\MedicalTest\BloodTest();
  }

  
  public static function TVClip()
  {
     return new Thing\CreativeWork\Clip\TVClip();
  }

  
  public static function NailSalon()
  {
     return new Thing\Organization\LocalBusiness\HealthAndBeautyBusiness\NailSalon();
  }

  
  public static function ContactPoint()
  {
     return new Thing\Intangible\StructuredValue\ContactPoint();
  }

  
  public static function GeneralContractor()
  {
     return new Thing\Organization\LocalBusiness\HomeAndConstructionBusiness\GeneralContractor();
  }

  
  public static function TelevisionChannel()
  {
     return new Thing\Intangible\BroadcastChannel\TelevisionChannel();
  }

  
  public static function SpreadsheetDigitalDocument()
  {
     return new Thing\CreativeWork\DigitalDocument\SpreadsheetDigitalDocument();
  }

  
  public static function GovernmentBuilding()
  {
     return new Thing\Place\CivicStructure\GovernmentBuilding();
  }

  
  public static function EmergencyService()
  {
     return new Thing\Organization\LocalBusiness\EmergencyService();
  }

  
  public static function FinancialService()
  {
     return new Thing\Organization\LocalBusiness\FinancialService();
  }

  
  public static function VideoObject()
  {
     return new Thing\CreativeWork\MediaObject\VideoObject();
  }

  
  public static function Menu()
  {
     return new Thing\CreativeWork\Menu();
  }

  
  public static function Periodical()
  {
     return new Thing\CreativeWork\CreativeWorkSeries\Periodical();
  }

  
  public static function MovieSeries()
  {
     return new Thing\CreativeWork\CreativeWorkSeries\MovieSeries();
  }

  
  public static function Series()
  {
     return new Thing\Intangible\Series();
  }

  
  public static function Electrician()
  {
     return new Thing\Organization\LocalBusiness\HomeAndConstructionBusiness\Electrician();
  }

  
  public static function WarrantyScope()
  {
     return new Thing\Intangible\Enumeration\WarrantyScope();
  }

  
  public static function CollectionPage()
  {
     return new Thing\CreativeWork\WebPage\CollectionPage();
  }

  
  public static function PhotographAction()
  {
     return new Thing\Action\CreateAction\PhotographAction();
  }

  
  public static function HealthAndBeautyBusiness()
  {
     return new Thing\Organization\LocalBusiness\HealthAndBeautyBusiness();
  }

  
  public static function CssSelectorType()
  {
     return new Text\CssSelectorType();
  }

  
  public static function LegislativeBuilding()
  {
     return new Thing\Place\CivicStructure\GovernmentBuilding\LegislativeBuilding();
  }

  
  public static function UserCheckins()
  {
     return new Thing\Event\UserInteraction\UserCheckins();
  }

  
  public static function Patient()
  {
     return new Thing\Person\Patient();
  }

  
  public static function VideoGameSeries()
  {
     return new Thing\CreativeWork\CreativeWorkSeries\VideoGameSeries();
  }

  
  public static function RegisterAction()
  {
     return new Thing\Action\InteractAction\RegisterAction();
  }

  
  public static function WearAction()
  {
     return new Thing\Action\ConsumeAction\UseAction\WearAction();
  }

  
  public static function MedicalConditionStage()
  {
     return new Thing\MedicalEntity\MedicalIntangible\MedicalConditionStage();
  }

  
  public static function TravelAgency()
  {
     return new Thing\Organization\LocalBusiness\TravelAgency();
  }

  
  public static function CoverArt()
  {
     return new Thing\CreativeWork\VisualArtwork\CoverArt();
  }

  
  public static function PerformingGroup()
  {
     return new Thing\Organization\PerformingGroup();
  }

  
  public static function Hostel()
  {
     return new Thing\Organization\LocalBusiness\LodgingBusiness\Hostel();
  }

  
  public static function Bone()
  {
     return new Thing\MedicalEntity\AnatomicalStructure\Bone();
  }

  
  public static function Quantity()
  {
     return new Thing\Intangible\Quantity();
  }

  
  public static function VideoGallery()
  {
     return new Thing\CreativeWork\WebPage\CollectionPage\VideoGallery();
  }

  
  public static function EducationalAudience()
  {
     return new Thing\Intangible\Audience\EducationalAudience();
  }

  
  public static function WatchAction()
  {
     return new Thing\Action\ConsumeAction\WatchAction();
  }

  
  public static function RadioBroadcastService()
  {
     return new Thing\Intangible\Service\BroadcastService\RadioBroadcastService();
  }

  
  public static function CityHall()
  {
     return new Thing\Place\CivicStructure\GovernmentBuilding\CityHall();
  }

  
  public static function ComedyEvent()
  {
     return new Thing\Event\ComedyEvent();
  }

  
  public static function DonateAction()
  {
     return new Thing\Action\TradeAction\DonateAction();
  }

  
  public static function Brand()
  {
     return new Thing\Intangible\Brand();
  }

  
  public static function FundingScheme()
  {
     return new Thing\Organization\FundingScheme();
  }

  
  public static function MovingCompany()
  {
     return new Thing\Organization\LocalBusiness\HomeAndConstructionBusiness\MovingCompany();
  }

  
  public static function Question()
  {
     return new Thing\CreativeWork\Question();
  }

  
  public static function AccountingService()
  {
     return new Thing\Organization\LocalBusiness\FinancialService\AccountingService();
  }

  
  public static function BorrowAction()
  {
     return new Thing\Action\TransferAction\BorrowAction();
  }

  
  public static function MenuSection()
  {
     return new Thing\CreativeWork\MenuSection();
  }

  
  public static function ReviewAction()
  {
     return new Thing\Action\AssessAction\ReviewAction();
  }

  
  public static function Audiobook()
  {
     return new Thing\CreativeWork\Book\Audiobook();
  }

  
  public static function UserComments()
  {
     return new Thing\Event\UserInteraction\UserComments();
  }

  
  public static function PaintAction()
  {
     return new Thing\Action\CreateAction\PaintAction();
  }

  
  public static function BusinessAudience()
  {
     return new Thing\Intangible\Audience\BusinessAudience();
  }

  
  public static function SportsActivityLocation()
  {
     return new Thing\Organization\LocalBusiness\SportsActivityLocation();
  }

  
  public static function WarrantyPromise()
  {
     return new Thing\Intangible\StructuredValue\WarrantyPromise();
  }

  
  public static function EmployerAggregateRating()
  {
     return new Thing\Intangible\Rating\AggregateRating\EmployerAggregateRating();
  }

  
  public static function Event()
  {
     return new Thing\Event();
  }

  
  public static function ReportedDoseSchedule()
  {
     return new Thing\MedicalEntity\MedicalIntangible\DoseSchedule\ReportedDoseSchedule();
  }

  
  public static function Dentist()
  {
     return new Thing\Organization\LocalBusiness\Dentist();
  }

  
  public static function AdultEntertainment()
  {
     return new Thing\Organization\LocalBusiness\EntertainmentBusiness\AdultEntertainment();
  }

  
  public static function DriveWheelConfigurationValue()
  {
     return new Thing\Intangible\Enumeration\QualitativeValue\DriveWheelConfigurationValue();
  }

  
  public static function Role()
  {
     return new Thing\Intangible\Role();
  }

  
  public static function MedicalIntangible()
  {
     return new Thing\MedicalEntity\MedicalIntangible();
  }

  
  public static function City()
  {
     return new Thing\Place\AdministrativeArea\City();
  }

  
  public static function ConsumeAction()
  {
     return new Thing\Action\ConsumeAction();
  }

  
  public static function ScreeningEvent()
  {
     return new Thing\Event\ScreeningEvent();
  }

  
  public static function DrugPregnancyCategory()
  {
     return new Thing\Intangible\Enumeration\MedicalEnumeration\DrugPregnancyCategory();
  }

  
  public static function VitalSign()
  {
     return new Thing\MedicalEntity\MedicalCondition\MedicalSignOrSymptom\MedicalSign\VitalSign();
  }

  
  public static function CreateAction()
  {
     return new Thing\Action\CreateAction();
  }

  
  public static function LegislationObject()
  {
     return new Thing\CreativeWork\Legislation\LegislationObject();
  }

  
  public static function DiscoverAction()
  {
     return new Thing\Action\FindAction\DiscoverAction();
  }

  
  public static function TattooParlor()
  {
     return new Thing\Organization\LocalBusiness\HealthAndBeautyBusiness\TattooParlor();
  }

  
  public static function EndorsementRating()
  {
     return new Thing\Intangible\Rating\EndorsementRating();
  }

  
  public static function Reservoir()
  {
     return new Thing\Place\Landform\BodyOfWater\Reservoir();
  }

  
  public static function MusicEvent()
  {
     return new Thing\Event\MusicEvent();
  }

  
  public static function Store()
  {
     return new Thing\Organization\LocalBusiness\Store();
  }

  
  public static function MonetaryAmount()
  {
     return new Thing\Intangible\StructuredValue\MonetaryAmount();
  }

  
  public static function UserLikes()
  {
     return new Thing\Event\UserInteraction\UserLikes();
  }

  
  public static function HairSalon()
  {
     return new Thing\Organization\LocalBusiness\HealthAndBeautyBusiness\HairSalon();
  }

  
  public static function TherapeuticProcedure()
  {
     return new Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure();
  }

  
  public static function DaySpa()
  {
     return new Thing\Organization\LocalBusiness\HealthAndBeautyBusiness\DaySpa();
  }

  
  public static function EngineSpecification()
  {
     return new Thing\Intangible\StructuredValue\EngineSpecification();
  }

  
  public static function ActivateAction()
  {
     return new Thing\Action\ControlAction\ActivateAction();
  }

  
  public static function RadioEpisode()
  {
     return new Thing\CreativeWork\Episode\RadioEpisode();
  }

  
  public static function ElementarySchool()
  {
     return new Thing\Organization\EducationalOrganization\ElementarySchool();
  }

  
  public static function ReplaceAction()
  {
     return new Thing\Action\UpdateAction\ReplaceAction();
  }

  
  public static function MedicalTherapy()
  {
     return new Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy();
  }

  
  public static function OpeningHoursSpecification()
  {
     return new Thing\Intangible\StructuredValue\OpeningHoursSpecification();
  }

  
  public static function DislikeAction()
  {
     return new Thing\Action\AssessAction\ReactAction\DislikeAction();
  }

  
  public static function PlayAction()
  {
     return new Thing\Action\PlayAction();
  }

  
  public static function BankOrCreditUnion()
  {
     return new Thing\Organization\LocalBusiness\FinancialService\BankOrCreditUnion();
  }

  
  public static function FAQPage()
  {
     return new Thing\CreativeWork\WebPage\FAQPage();
  }

  
  public static function BusinessFunction()
  {
     return new Thing\Intangible\Enumeration\BusinessFunction();
  }

  
  public static function TieAction()
  {
     return new Thing\Action\AchieveAction\TieAction();
  }

  
  public static function StatisticalPopulation()
  {
     return new Thing\Intangible\StatisticalPopulation();
  }

  
  public static function DiagnosticProcedure()
  {
     return new Thing\MedicalEntity\MedicalProcedure\DiagnosticProcedure();
  }

  
  public static function Blog()
  {
     return new Thing\CreativeWork\Blog();
  }

  
  public static function ItemList()
  {
     return new Thing\Intangible\ItemList();
  }

  
  public static function MedicalScholarlyArticle()
  {
     return new Thing\CreativeWork\Article\ScholarlyArticle\MedicalScholarlyArticle();
  }

  
  public static function Winery()
  {
     return new Thing\Organization\LocalBusiness\FoodEstablishment\Winery();
  }

  
  public static function InformAction()
  {
     return new Thing\Action\InteractAction\CommunicateAction\InformAction();
  }

  
  public static function Chapter()
  {
     return new Thing\CreativeWork\Chapter();
  }

  
  public static function ReturnAction()
  {
     return new Thing\Action\TransferAction\ReturnAction();
  }

  
  public static function MeetingRoom()
  {
     return new Thing\Place\Accommodation\Room\MeetingRoom();
  }

  
  public static function EventReservation()
  {
     return new Thing\Intangible\Reservation\EventReservation();
  }

  
  public static function OrderAction()
  {
     return new Thing\Action\TradeAction\OrderAction();
  }

  
  public static function JoinAction()
  {
     return new Thing\Action\InteractAction\JoinAction();
  }

  
  public static function Mass()
  {
     return new Thing\Intangible\Quantity\Mass();
  }

  
  public static function SearchAction()
  {
     return new Thing\Action\SearchAction();
  }

  
  public static function HVACBusiness()
  {
     return new Thing\Organization\LocalBusiness\HomeAndConstructionBusiness\HVACBusiness();
  }

  
  public static function TaxiStand()
  {
     return new Thing\Place\CivicStructure\TaxiStand();
  }

  
  public static function ProductModel()
  {
     return new Thing\Product\ProductModel();
  }

  
  public static function Drawing()
  {
     return new Thing\CreativeWork\Drawing();
  }

  
  public static function MovieClip()
  {
     return new Thing\CreativeWork\Clip\MovieClip();
  }

  
  public static function WriteAction()
  {
     return new Thing\Action\CreateAction\WriteAction();
  }

  
  public static function MusicAlbumProductionType()
  {
     return new Thing\Intangible\Enumeration\MusicAlbumProductionType();
  }

  
  public static function ApplyAction()
  {
     return new Thing\Action\OrganizeAction\ApplyAction();
  }

  
  public static function MedicalRiskCalculator()
  {
     return new Thing\MedicalEntity\MedicalRiskEstimator\MedicalRiskCalculator();
  }

  
  public static function BrokerageAccount()
  {
     return new Thing\Intangible\Service\FinancialProduct\InvestmentOrDeposit\BrokerageAccount();
  }

  
  public static function Locksmith()
  {
     return new Thing\Organization\LocalBusiness\HomeAndConstructionBusiness\Locksmith();
  }

  
  public static function Corporation()
  {
     return new Thing\Organization\Corporation();
  }

  
  public static function Landform()
  {
     return new Thing\Place\Landform();
  }

  
  public static function Episode()
  {
     return new Thing\CreativeWork\Episode();
  }

  
  public static function OceanBodyOfWater()
  {
     return new Thing\Place\Landform\BodyOfWater\OceanBodyOfWater();
  }

  
  public static function MedicalOrganization()
  {
     return new Thing\Organization\MedicalOrganization();
  }

  
  public static function MedicalTest()
  {
     return new Thing\MedicalEntity\MedicalTest();
  }

  
  public static function TrainReservation()
  {
     return new Thing\Intangible\Reservation\TrainReservation();
  }

  
  public static function MusicVenue()
  {
     return new Thing\Place\CivicStructure\MusicVenue();
  }

  
  public static function Motorcycle()
  {
     return new Thing\Product\Vehicle\Motorcycle();
  }

  
  public static function HealthPlanCostSharingSpecification()
  {
     return new Thing\Intangible\HealthPlanCostSharingSpecification();
  }

  
  public static function DrugCost()
  {
     return new Thing\Intangible\Enumeration\MedicalEnumeration\DrugCost();
  }

  
  public static function Museum()
  {
     return new Thing\Place\CivicStructure\Museum();
  }

  
  public static function PostalAddress()
  {
     return new Thing\Intangible\StructuredValue\ContactPoint\PostalAddress();
  }

  
  public static function ClaimReview()
  {
     return new Thing\CreativeWork\Review\ClaimReview();
  }

  
  public static function ConfirmAction()
  {
     return new Thing\Action\InteractAction\CommunicateAction\InformAction\ConfirmAction();
  }

  
  public static function CollegeOrUniversity()
  {
     return new Thing\Organization\EducationalOrganization\CollegeOrUniversity();
  }

  
  public static function Clip()
  {
     return new Thing\CreativeWork\Clip();
  }

  
  public static function WantAction()
  {
     return new Thing\Action\AssessAction\ReactAction\WantAction();
  }

  
  public static function ReadAction()
  {
     return new Thing\Action\ConsumeAction\ReadAction();
  }

  
  public static function Specialty()
  {
     return new Thing\Intangible\Enumeration\Specialty();
  }

  
  public static function TaxiService()
  {
     return new Thing\Intangible\Service\TaxiService();
  }

  
  public static function ItemAvailability()
  {
     return new Thing\Intangible\Enumeration\ItemAvailability();
  }

  
  public static function Ticket()
  {
     return new Thing\Intangible\Ticket();
  }

  
  public static function LifestyleModification()
  {
     return new Thing\MedicalEntity\LifestyleModification();
  }

  
  public static function Occupation()
  {
     return new Thing\Intangible\Occupation();
  }

  
  public static function ArtGallery()
  {
     return new Thing\Organization\LocalBusiness\EntertainmentBusiness\ArtGallery();
  }

  
  public static function ComicStory()
  {
     return new Thing\CreativeWork\ComicStory();
  }

  
  public static function Plumber()
  {
     return new Thing\Organization\LocalBusiness\HomeAndConstructionBusiness\Plumber();
  }

  
  public static function ProductReturnEnumeration()
  {
     return new Thing\Intangible\Enumeration\ProductReturnEnumeration();
  }

  
  public static function Preschool()
  {
     return new Thing\Organization\EducationalOrganization\Preschool();
  }

  
  public static function RejectAction()
  {
     return new Thing\Action\OrganizeAction\AllocateAction\RejectAction();
  }

  
  public static function Diet()
  {
     return new Thing\MedicalEntity\LifestyleModification\Diet();
  }

  
  public static function GeoCircle()
  {
     return new Thing\Intangible\StructuredValue\GeoShape\GeoCircle();
  }

  
  public static function SheetMusic()
  {
     return new Thing\CreativeWork\SheetMusic();
  }

  
  public static function Energy()
  {
     return new Thing\Intangible\Quantity\Energy();
  }

  
  public static function FurnitureStore()
  {
     return new Thing\Organization\LocalBusiness\Store\FurnitureStore();
  }

  
  public static function BusStop()
  {
     return new Thing\Place\CivicStructure\BusStop();
  }

  
  public static function ReportageNewsArticle()
  {
     return new Thing\CreativeWork\Article\NewsArticle\ReportageNewsArticle();
  }

  
  public static function CriticReview()
  {
     return new Thing\CreativeWork\Review\CriticReview();
  }

  
  public static function MotorcycleRepair()
  {
     return new Thing\Organization\LocalBusiness\AutomotiveBusiness\MotorcycleRepair();
  }

  
  public static function ArchiveOrganization()
  {
     return new Thing\Organization\LocalBusiness\ArchiveOrganization();
  }

  
  public static function GovernmentPermit()
  {
     return new Thing\Intangible\Permit\GovernmentPermit();
  }

  
  public static function InsertAction()
  {
     return new Thing\Action\UpdateAction\AddAction\InsertAction();
  }

  
  public static function Resort()
  {
     return new Thing\Organization\LocalBusiness\LodgingBusiness\Resort();
  }

  
  public static function Invoice()
  {
     return new Thing\Intangible\Invoice();
  }

  
  public static function Table()
  {
     return new Thing\CreativeWork\WebPageElement\Table();
  }

  
  public static function MedicalRiskFactor()
  {
     return new Thing\MedicalEntity\MedicalRiskFactor();
  }

  
  public static function Distillery()
  {
     return new Thing\Organization\LocalBusiness\FoodEstablishment\Distillery();
  }

  
  public static function CompoundPriceSpecification()
  {
     return new Thing\Intangible\StructuredValue\PriceSpecification\CompoundPriceSpecification();
  }

  
  public static function PeopleAudience()
  {
     return new Thing\Intangible\Audience\PeopleAudience();
  }

  
  public static function GovernmentOrganization()
  {
     return new Thing\Organization\GovernmentOrganization();
  }

  
  public static function MoneyTransfer()
  {
     return new Thing\Action\TransferAction\MoneyTransfer();
  }

  
  public static function PaymentChargeSpecification()
  {
     return new Thing\Intangible\StructuredValue\PriceSpecification\PaymentChargeSpecification();
  }

  
  public static function MedicalSpecialty()
  {
     return new Thing\Intangible\Enumeration\Specialty\MedicalSpecialty();
  }

  
  public static function BusReservation()
  {
     return new Thing\Intangible\Reservation\BusReservation();
  }

  
  public static function Taxi()
  {
     return new Thing\Intangible\Service\Taxi();
  }

  
  public static function ItemPage()
  {
     return new Thing\CreativeWork\WebPage\ItemPage();
  }

  
  public static function RsvpResponseType()
  {
     return new Thing\Intangible\Enumeration\RsvpResponseType();
  }

  
  public static function DietarySupplement()
  {
     return new Thing\MedicalEntity\Substance\DietarySupplement();
  }

  
  public static function OrderItem()
  {
     return new Thing\Intangible\OrderItem();
  }

  
  public static function BusinessEntityType()
  {
     return new Thing\Intangible\Enumeration\BusinessEntityType();
  }

  
  public static function TipAction()
  {
     return new Thing\Action\TradeAction\TipAction();
  }

  
  public static function HowToDirection()
  {
     return new Thing\CreativeWork\HowToDirection();
  }

  
  public static function Apartment()
  {
     return new Thing\Place\Accommodation\Apartment();
  }

  
  public static function NoteDigitalDocument()
  {
     return new Thing\CreativeWork\DigitalDocument\NoteDigitalDocument();
  }

  
  public static function Service()
  {
     return new Thing\Intangible\Service();
  }

  
  public static function Campground()
  {
     return new Thing\Organization\LocalBusiness\LodgingBusiness\Campground();
  }

  
  public static function HealthPlanFormulary()
  {
     return new Thing\Intangible\HealthPlanFormulary();
  }

  
  public static function BusOrCoach()
  {
     return new Thing\Product\Vehicle\BusOrCoach();
  }

  
  public static function TennisComplex()
  {
     return new Thing\Organization\LocalBusiness\SportsActivityLocation\TennisComplex();
  }

  
  public static function Thing()
  {
     return new \Thing();
  }

  
  public static function WebAPI()
  {
     return new Thing\Intangible\Service\WebAPI();
  }

  
  public static function SubwayStation()
  {
     return new Thing\Place\CivicStructure\SubwayStation();
  }

  
  public static function Vein()
  {
     return new Thing\MedicalEntity\AnatomicalStructure\Vessel\Vein();
  }

  
  public static function StupidType()
  {
     return new Thing\StupidType();
  }

  
  public static function Grant()
  {
     return new Thing\Intangible\Grant();
  }

  
  public static function Courthouse()
  {
     return new Thing\Place\CivicStructure\GovernmentBuilding\Courthouse();
  }

  
  public static function BroadcastService()
  {
     return new Thing\Intangible\Service\BroadcastService();
  }

  
  public static function ReservationStatusType()
  {
     return new Thing\Intangible\Enumeration\ReservationStatusType();
  }

  
  public static function AutoWash()
  {
     return new Thing\Organization\LocalBusiness\AutomotiveBusiness\AutoWash();
  }

  
  public static function HardwareStore()
  {
     return new Thing\Organization\LocalBusiness\Store\HardwareStore();
  }

  
  public static function EmployerReview()
  {
     return new Thing\CreativeWork\Review\EmployerReview();
  }

  
  public static function AskAction()
  {
     return new Thing\Action\InteractAction\CommunicateAction\AskAction();
  }

  
  public static function ComicSeries()
  {
     return new Thing\CreativeWork\CreativeWorkSeries\Periodical\ComicSeries();
  }

  
  public static function Barcode()
  {
     return new Thing\CreativeWork\MediaObject\ImageObject\Barcode();
  }

  
  public static function RecommendedDoseSchedule()
  {
     return new Thing\MedicalEntity\MedicalIntangible\DoseSchedule\RecommendedDoseSchedule();
  }

  
  public static function VisualArtsEvent()
  {
     return new Thing\Event\VisualArtsEvent();
  }

  
  public static function TrackAction()
  {
     return new Thing\Action\FindAction\TrackAction();
  }

  
  public static function MedicalRiskEstimator()
  {
     return new Thing\MedicalEntity\MedicalRiskEstimator();
  }

  
  public static function BeautySalon()
  {
     return new Thing\Organization\LocalBusiness\HealthAndBeautyBusiness\BeautySalon();
  }

  
  public static function LegalForceStatus()
  {
     return new Thing\Intangible\Enumeration\LegalForceStatus();
  }

  
  public static function CommunicateAction()
  {
     return new Thing\Action\InteractAction\CommunicateAction();
  }

  
  public static function MedicalGuideline()
  {
     return new Thing\MedicalEntity\MedicalGuideline();
  }

  
  public static function Duration()
  {
     return new Thing\Intangible\Quantity\Duration();
  }

  
  public static function DDxElement()
  {
     return new Thing\MedicalEntity\MedicalIntangible\DDxElement();
  }

  
  public static function CurrencyConversionService()
  {
     return new Thing\Intangible\Service\FinancialProduct\CurrencyConversionService();
  }

  
  public static function RoofingContractor()
  {
     return new Thing\Organization\LocalBusiness\HomeAndConstructionBusiness\RoofingContractor();
  }

  
  public static function GovernmentService()
  {
     return new Thing\Intangible\Service\GovernmentService();
  }

  
  public static function DeliveryEvent()
  {
     return new Thing\Event\DeliveryEvent();
  }

  
  public static function HobbyShop()
  {
     return new Thing\Organization\LocalBusiness\Store\HobbyShop();
  }

  
  public static function TextDigitalDocument()
  {
     return new Thing\CreativeWork\DigitalDocument\TextDigitalDocument();
  }

  
  public static function FollowAction()
  {
     return new Thing\Action\InteractAction\FollowAction();
  }

  
  public static function ArchiveComponent()
  {
     return new Thing\CreativeWork\ArchiveComponent();
  }

  
  public static function ChildrensEvent()
  {
     return new Thing\Event\ChildrensEvent();
  }

  
  public static function RVPark()
  {
     return new Thing\Place\CivicStructure\RVPark();
  }

  
  public static function InteractionCounter()
  {
     return new Thing\Intangible\StructuredValue\InteractionCounter();
  }

  
  public static function FoodEstablishmentReservation()
  {
     return new Thing\Intangible\Reservation\FoodEstablishmentReservation();
  }

  
  public static function SingleFamilyResidence()
  {
     return new Thing\Place\Accommodation\House\SingleFamilyResidence();
  }

  
  public static function GeospatialGeometry()
  {
     return new Thing\Intangible\GeospatialGeometry();
  }

  
  public static function DataCatalog()
  {
     return new Thing\CreativeWork\DataCatalog();
  }

  
  public static function WholesaleStore()
  {
     return new Thing\Organization\LocalBusiness\Store\WholesaleStore();
  }

  
  public static function ComicIssue()
  {
     return new Thing\CreativeWork\PublicationIssue\ComicIssue();
  }

  
  public static function BroadcastEvent()
  {
     return new Thing\Event\PublicationEvent\BroadcastEvent();
  }

  
  public static function RentalCarReservation()
  {
     return new Thing\Intangible\Reservation\RentalCarReservation();
  }

  
  public static function Observation()
  {
     return new Thing\Intangible\Observation();
  }

  
  public static function DepartmentStore()
  {
     return new Thing\Organization\LocalBusiness\Store\DepartmentStore();
  }

  
  public static function CorrectionComment()
  {
     return new Thing\CreativeWork\Comment\CorrectionComment();
  }

  
  public static function DrugClass()
  {
     return new Thing\Intangible\Enumeration\MedicalEnumeration\DrugClass();
  }

  
  public static function Schedule()
  {
     return new Thing\Intangible\Schedule();
  }

  
  public static function OrganizationRole()
  {
     return new Thing\Intangible\Role\OrganizationRole();
  }

  
  public static function SkiResort()
  {
     return new Thing\Organization\LocalBusiness\SportsActivityLocation\SkiResort();
  }

  
  public static function AutomatedTeller()
  {
     return new Thing\Organization\LocalBusiness\FinancialService\AutomatedTeller();
  }

  
  public static function Canal()
  {
     return new Thing\Place\Landform\BodyOfWater\Canal();
  }

  
  public static function NGO()
  {
     return new Thing\Organization\NGO();
  }

  
  public static function SatiricalArticle()
  {
     return new Thing\CreativeWork\Article\SatiricalArticle();
  }

  
  public static function DoseSchedule()
  {
     return new Thing\MedicalEntity\MedicalIntangible\DoseSchedule();
  }

  
  public static function TVSeries()
  {
     return new Thing\CreativeWork\CreativeWorkSeries\TVSeries();
  }

  
  public static function AdministrativeArea()
  {
     return new Thing\Place\AdministrativeArea();
  }

  
  public static function Nerve()
  {
     return new Thing\MedicalEntity\AnatomicalStructure\Nerve();
  }

  
  public static function FMRadioChannel()
  {
     return new Thing\Intangible\BroadcastChannel\RadioChannel\FMRadioChannel();
  }

  
  public static function Distance()
  {
     return new Thing\Intangible\Quantity\Distance();
  }

  
  public static function MotorizedBicycle()
  {
     return new Thing\Product\Vehicle\MotorizedBicycle();
  }

  
  public static function MusicPlaylist()
  {
     return new Thing\CreativeWork\MusicPlaylist();
  }

  
  public static function XPathType()
  {
     return new Text\XPathType();
  }

  
  public static function RestrictedDiet()
  {
     return new Thing\Intangible\Enumeration\RestrictedDiet();
  }

  
  public static function PerformingArtsTheater()
  {
     return new Thing\Place\CivicStructure\PerformingArtsTheater();
  }

  
  public static function QuantitativeValue()
  {
     return new Thing\Intangible\StructuredValue\QuantitativeValue();
  }

  
  public static function MedicalCause()
  {
     return new Thing\MedicalEntity\MedicalCause();
  }

  
  public static function BedDetails()
  {
     return new Thing\Intangible\BedDetails();
  }

  
  public static function OwnershipInfo()
  {
     return new Thing\Intangible\StructuredValue\OwnershipInfo();
  }

  
  public static function MensClothingStore()
  {
     return new Thing\Organization\LocalBusiness\Store\MensClothingStore();
  }

  
  public static function AcceptAction()
  {
     return new Thing\Action\OrganizeAction\AllocateAction\AcceptAction();
  }

  
  public static function Language()
  {
     return new Thing\Intangible\Language();
  }

  
  public static function TrainTrip()
  {
     return new Thing\Intangible\Trip\TrainTrip();
  }

  
  public static function ShortStory()
  {
     return new Thing\CreativeWork\ShortStory();
  }

  
  public static function DrugCostCategory()
  {
     return new Thing\Intangible\Enumeration\MedicalEnumeration\DrugCostCategory();
  }

  
  public static function TheaterGroup()
  {
     return new Thing\Organization\PerformingGroup\TheaterGroup();
  }

  
  public static function Physician()
  {
     return new Thing\Organization\MedicalOrganization\Physician();
  }

  
  public static function ResearchProject()
  {
     return new Thing\Organization\Project\ResearchProject();
  }

  
  public static function MedicalSignOrSymptom()
  {
     return new Thing\MedicalEntity\MedicalCondition\MedicalSignOrSymptom();
  }

  
  public static function BoardingPolicyType()
  {
     return new Thing\Intangible\Enumeration\BoardingPolicyType();
  }

  
  public static function PhysicalActivityCategory()
  {
     return new Thing\Intangible\Enumeration\PhysicalActivityCategory();
  }

  
  public static function Brewery()
  {
     return new Thing\Organization\LocalBusiness\FoodEstablishment\Brewery();
  }

  
  public static function AllocateAction()
  {
     return new Thing\Action\OrganizeAction\AllocateAction();
  }

  
  public static function ParentAudience()
  {
     return new Thing\Intangible\Audience\PeopleAudience\ParentAudience();
  }

  
  public static function RadioChannel()
  {
     return new Thing\Intangible\BroadcastChannel\RadioChannel();
  }

  
  public static function FundingAgency()
  {
     return new Thing\Organization\Project\FundingAgency();
  }

  
  public static function PublicSwimmingPool()
  {
     return new Thing\Organization\LocalBusiness\SportsActivityLocation\PublicSwimmingPool();
  }

  
  public static function JobPosting()
  {
     return new Thing\Intangible\JobPosting();
  }

  
  public static function MusicReleaseFormatType()
  {
     return new Thing\Intangible\Enumeration\MusicReleaseFormatType();
  }

  
  public static function Conversation()
  {
     return new Thing\CreativeWork\Conversation();
  }

  
  public static function MediaObject()
  {
     return new Thing\CreativeWork\MediaObject();
  }

  
  public static function Cemetery()
  {
     return new Thing\Place\CivicStructure\Cemetery();
  }

  
  public static function CheckInAction()
  {
     return new Thing\Action\InteractAction\CommunicateAction\CheckInAction();
  }

  
  public static function DayOfWeek()
  {
     return new Thing\Intangible\Enumeration\DayOfWeek();
  }

  
  public static function HotelRoom()
  {
     return new Thing\Place\Accommodation\Room\HotelRoom();
  }

  
  public static function LodgingBusiness()
  {
     return new Thing\Organization\LocalBusiness\LodgingBusiness();
  }

  
  public static function House()
  {
     return new Thing\Place\Accommodation\House();
  }

  
  public static function Airport()
  {
     return new Thing\Place\CivicStructure\Airport();
  }

  
  public static function EventStatusType()
  {
     return new Thing\Intangible\Enumeration\EventStatusType();
  }

  
  public static function BrainStructure()
  {
     return new Thing\MedicalEntity\AnatomicalStructure\BrainStructure();
  }

  
  public static function CreativeWorkSeason()
  {
     return new Thing\CreativeWork\CreativeWorkSeason();
  }

  
  public static function PhysicalActivity()
  {
     return new Thing\MedicalEntity\LifestyleModification\PhysicalActivity();
  }

  
  public static function HealthPlanNetwork()
  {
     return new Thing\Intangible\HealthPlanNetwork();
  }

  
  public static function Reservation()
  {
     return new Thing\Intangible\Reservation();
  }

  
  public static function FindAction()
  {
     return new Thing\Action\FindAction();
  }

  
  public static function PerformAction()
  {
     return new Thing\Action\PlayAction\PerformAction();
  }

  
  public static function RecyclingCenter()
  {
     return new Thing\Organization\LocalBusiness\RecyclingCenter();
  }

  
  public static function Hospital()
  {
     return new Thing\Organization\MedicalOrganization\Hospital();
  }

  
  public static function Festival()
  {
     return new Thing\Event\Festival();
  }

  
  public static function ArriveAction()
  {
     return new Thing\Action\MoveAction\ArriveAction();
  }

  
  public static function LockerDelivery()
  {
     return new Thing\Intangible\Enumeration\DeliveryMethod\LockerDelivery();
  }

  
  public static function LegalValueLevel()
  {
     return new Thing\Intangible\Enumeration\LegalValueLevel();
  }

  
  public static function Seat()
  {
     return new Thing\Intangible\Seat();
  }

  
  public static function DrugLegalStatus()
  {
     return new Thing\MedicalEntity\MedicalIntangible\DrugLegalStatus();
  }

  
  public static function MortgageLoan()
  {
     return new Thing\Intangible\Service\FinancialProduct\LoanOrCredit\MortgageLoan();
  }

  
  public static function RadioSeason()
  {
     return new Thing\CreativeWork\CreativeWorkSeason\RadioSeason();
  }

  
  public static function MedicalDevice()
  {
     return new Thing\MedicalEntity\MedicalDevice();
  }

  
  public static function PsychologicalTreatment()
  {
     return new Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\PsychologicalTreatment();
  }

  
  public static function UpdateAction()
  {
     return new Thing\Action\UpdateAction();
  }

  
  public static function AggregateRating()
  {
     return new Thing\Intangible\Rating\AggregateRating();
  }

  
  public static function Legislation()
  {
     return new Thing\CreativeWork\Legislation();
  }

  
  public static function ReplyAction()
  {
     return new Thing\Action\InteractAction\CommunicateAction\ReplyAction();
  }

  
  public static function EmailMessage()
  {
     return new Thing\CreativeWork\Message\EmailMessage();
  }

  
  public static function MedicalEntity()
  {
     return new Thing\MedicalEntity();
  }

  
  public static function BusStation()
  {
     return new Thing\Place\CivicStructure\BusStation();
  }

  
  public static function ReserveAction()
  {
     return new Thing\Action\OrganizeAction\PlanAction\ReserveAction();
  }

  
  public static function BowlingAlley()
  {
     return new Thing\Organization\LocalBusiness\SportsActivityLocation\BowlingAlley();
  }

  
  public static function ImageGallery()
  {
     return new Thing\CreativeWork\WebPage\CollectionPage\ImageGallery();
  }

  
  public static function LibrarySystem()
  {
     return new Thing\Organization\LibrarySystem();
  }

  
  public static function Offer()
  {
     return new Thing\Intangible\Offer();
  }

  
  public static function DataDownload()
  {
     return new Thing\CreativeWork\MediaObject\DataDownload();
  }

  
  public static function ScheduleAction()
  {
     return new Thing\Action\OrganizeAction\PlanAction\ScheduleAction();
  }

  
  public static function Product()
  {
     return new Thing\Product();
  }

  
  public static function CampingPitch()
  {
     return new Thing\Place\Accommodation\CampingPitch();
  }

  
  public static function CivicStructure()
  {
     return new Thing\Place\CivicStructure();
  }

  
  public static function GeoCoordinates()
  {
     return new Thing\Intangible\StructuredValue\GeoCoordinates();
  }

  
  public static function MiddleSchool()
  {
     return new Thing\Organization\EducationalOrganization\MiddleSchool();
  }

  
  public static function AutomotiveBusiness()
  {
     return new Thing\Organization\LocalBusiness\AutomotiveBusiness();
  }

  
  public static function LiteraryEvent()
  {
     return new Thing\Event\LiteraryEvent();
  }

  
  public static function Pond()
  {
     return new Thing\Place\Landform\BodyOfWater\Pond();
  }

  
  public static function SocialEvent()
  {
     return new Thing\Event\SocialEvent();
  }

  
  public static function EatAction()
  {
     return new Thing\Action\ConsumeAction\EatAction();
  }

  
  public static function TheaterEvent()
  {
     return new Thing\Event\TheaterEvent();
  }

  
  public static function TakeAction()
  {
     return new Thing\Action\TransferAction\TakeAction();
  }

  
  public static function RepaymentSpecification()
  {
     return new Thing\Intangible\StructuredValue\RepaymentSpecification();
  }

  
  public static function SportsEvent()
  {
     return new Thing\Event\SportsEvent();
  }

  
  public static function GamePlayMode()
  {
     return new Thing\Intangible\Enumeration\GamePlayMode();
  }

  }

