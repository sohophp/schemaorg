<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* (Eventually to be defined as) a supertype of GeoShape designed to accommodate definitions from Geo-Spatial best practices.
* @see schema:GeospatialGeometry
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class GeospatialGeometry extends Intangible
{
   /**
        * Represents spatial relations in which two geometries (or the places they represent) are topologically equal, as defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM). "Two geometries are topologically equal if their interiors intersect and no part of the interior or boundary of one geometry intersects the exterior of the other" (a symmetric relationship).
        */
    protected $geoEquals = null;

   /**
        * Represents spatial relations in which two geometries (or the places they represent) touch: "they have at least one boundary point in common, but no interior points." (A symmetric relationship, as defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).)
        */
    protected $geoTouches = null;

   /**
        * Represents a relationship between two geometries (or the places they represent), relating a containing geometry to a contained geometry. "a contains b iff no points of b lie in the exterior of a, and at least one point of the interior of b lies in the interior of a". As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
        */
    protected $geoContains = null;

   /**
        * Represents spatial relations in which two geometries (or the places they represent) are topologically disjoint: "they have no point in common. They form a set of disconnected geometries." (A symmetric relationship, as defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).)
        */
    protected $geoDisjoint = null;

   /**
        * Represents a relationship between two geometries (or the places they represent), relating a geometry to another that covers it. As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
        */
    protected $geoCoveredBy = null;

   /**
        * Represents a relationship between two geometries (or the places they represent), relating a geometry to another that geospatially overlaps it, i.e. they have some but not all points in common. As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
        */
    protected $geoOverlaps = null;

   /**
        * Represents a relationship between two geometries (or the places they represent), relating a geometry to one that contains it, i.e. it is inside (i.e. within) its interior. As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
        */
    protected $geoWithin = null;

   /**
        * Represents a relationship between two geometries (or the places they represent), relating a geometry to another that crosses it: "a crosses b: they have some but not all interior points in common, and the dimension of the intersection is less than that of at least one of them". As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
        */
    protected $geoCrosses = null;

   /**
        * Represents a relationship between two geometries (or the places they represent), relating a covering geometry to a covered geometry. "Every point of b is a point of (the interior or boundary of) a". As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
        */
    protected $geoCovers = null;

   /**
        * Represents spatial relations in which two geometries (or the places they represent) have at least one point in common. As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
        */
    protected $geoIntersects = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setGeoEquals($value)
    {
        $this->setProperty('geoEquals', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGeoEquals()
    {
       return $this->getProperty('geoEquals');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setGeoTouches($value)
    {
        $this->setProperty('geoTouches', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGeoTouches()
    {
       return $this->getProperty('geoTouches');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setGeoContains($value)
    {
        $this->setProperty('geoContains', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGeoContains()
    {
       return $this->getProperty('geoContains');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setGeoDisjoint($value)
    {
        $this->setProperty('geoDisjoint', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGeoDisjoint()
    {
       return $this->getProperty('geoDisjoint');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setGeoCoveredBy($value)
    {
        $this->setProperty('geoCoveredBy', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGeoCoveredBy()
    {
       return $this->getProperty('geoCoveredBy');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setGeoOverlaps($value)
    {
        $this->setProperty('geoOverlaps', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGeoOverlaps()
    {
       return $this->getProperty('geoOverlaps');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setGeoWithin($value)
    {
        $this->setProperty('geoWithin', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGeoWithin()
    {
       return $this->getProperty('geoWithin');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setGeoCrosses($value)
    {
        $this->setProperty('geoCrosses', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGeoCrosses()
    {
       return $this->getProperty('geoCrosses');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setGeoCovers($value)
    {
        $this->setProperty('geoCovers', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGeoCovers()
    {
       return $this->getProperty('geoCovers');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setGeoIntersects($value)
    {
        $this->setProperty('geoIntersects', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGeoIntersects()
    {
       return $this->getProperty('geoIntersects');
    }


}
