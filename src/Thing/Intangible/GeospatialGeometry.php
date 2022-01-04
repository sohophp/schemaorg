<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Place;

/**
* (Eventually to be defined as) a supertype of GeoShape designed to accommodate definitions from Geo-Spatial best practices.
* @see http://schema.org/GeospatialGeometry
* @package Sohophp\SchemaOrg\Thing\Intangible

*
*/
class GeospatialGeometry extends Intangible
{

    /**
    * Represents a relationship between two geometries (or the places they represent), relating a geometry to one that contains it, i.e. it is inside (i.e. within) its interior. As defined in <a href="https://en.wikipedia.org/wiki/DE-9IM">DE-9IM</a>.
    * @param Place|GeospatialGeometry|array|string $value
    * @return $this
    * @deprecated use setGeoWithin
    */
    public function geoWithin($value)
    {
        $this->setProperty('geoWithin', $value);
        return $this;
    }
   /**
    * @param Place|GeospatialGeometry|array|string $value
    * @return $this
    */
    public function setGeoWithin($value)
    {
        $this->setProperty('geoWithin', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getGeoWithin()
    {
       return $this->getProperty('geoWithin');
    }

    /**
    * Represents a relationship between two geometries (or the places they represent), relating a containing geometry to a contained geometry. "a contains b iff no points of b lie in the exterior of a, and at least one point of the interior of b lies in the interior of a". As defined in <a href="https://en.wikipedia.org/wiki/DE-9IM">DE-9IM</a>.
    * @param GeospatialGeometry|Place|array|string $value
    * @return $this
    * @deprecated use setGeoContains
    */
    public function geoContains($value)
    {
        $this->setProperty('geoContains', $value);
        return $this;
    }
   /**
    * @param GeospatialGeometry|Place|array|string $value
    * @return $this
    */
    public function setGeoContains($value)
    {
        $this->setProperty('geoContains', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getGeoContains()
    {
       return $this->getProperty('geoContains');
    }

    /**
    * Represents a relationship between two geometries (or the places they represent), relating a geometry to another that geospatially overlaps it, i.e. they have some but not all points in common. As defined in <a href="https://en.wikipedia.org/wiki/DE-9IM">DE-9IM</a>.
    * @param GeospatialGeometry|Place|array|string $value
    * @return $this
    * @deprecated use setGeoOverlaps
    */
    public function geoOverlaps($value)
    {
        $this->setProperty('geoOverlaps', $value);
        return $this;
    }
   /**
    * @param GeospatialGeometry|Place|array|string $value
    * @return $this
    */
    public function setGeoOverlaps($value)
    {
        $this->setProperty('geoOverlaps', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getGeoOverlaps()
    {
       return $this->getProperty('geoOverlaps');
    }

    /**
    * Represents a relationship between two geometries (or the places they represent), relating a geometry to another that crosses it: "a crosses b: they have some but not all interior points in common, and the dimension of the intersection is less than that of at least one of them". As defined in <a href="https://en.wikipedia.org/wiki/DE-9IM">DE-9IM</a>.
    * @param GeospatialGeometry|Place|array|string $value
    * @return $this
    * @deprecated use setGeoCrosses
    */
    public function geoCrosses($value)
    {
        $this->setProperty('geoCrosses', $value);
        return $this;
    }
   /**
    * @param GeospatialGeometry|Place|array|string $value
    * @return $this
    */
    public function setGeoCrosses($value)
    {
        $this->setProperty('geoCrosses', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getGeoCrosses()
    {
       return $this->getProperty('geoCrosses');
    }

    /**
    * Represents a relationship between two geometries (or the places they represent), relating a covering geometry to a covered geometry. "Every point of b is a point of (the interior or boundary of) a". As defined in <a href="https://en.wikipedia.org/wiki/DE-9IM">DE-9IM</a>.
    * @param GeospatialGeometry|Place|array|string $value
    * @return $this
    * @deprecated use setGeoCovers
    */
    public function geoCovers($value)
    {
        $this->setProperty('geoCovers', $value);
        return $this;
    }
   /**
    * @param GeospatialGeometry|Place|array|string $value
    * @return $this
    */
    public function setGeoCovers($value)
    {
        $this->setProperty('geoCovers', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getGeoCovers()
    {
       return $this->getProperty('geoCovers');
    }

    /**
    * Represents spatial relations in which two geometries (or the places they represent) are topologically equal, as defined in <a href="https://en.wikipedia.org/wiki/DE-9IM">DE-9IM</a>. "Two geometries are topologically equal if their interiors intersect and no part of the interior or boundary of one geometry intersects the exterior of the other" (a symmetric relationship)
    * @param Place|GeospatialGeometry|array|string $value
    * @return $this
    * @deprecated use setGeoEquals
    */
    public function geoEquals($value)
    {
        $this->setProperty('geoEquals', $value);
        return $this;
    }
   /**
    * @param Place|GeospatialGeometry|array|string $value
    * @return $this
    */
    public function setGeoEquals($value)
    {
        $this->setProperty('geoEquals', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getGeoEquals()
    {
       return $this->getProperty('geoEquals');
    }

    /**
    * Represents spatial relations in which two geometries (or the places they represent) touch: they have at least one boundary point in common, but no interior points." (a symmetric relationship, as defined in <a href="https://en.wikipedia.org/wiki/DE-9IM">DE-9IM</a> )
    * @param Place|GeospatialGeometry|array|string $value
    * @return $this
    * @deprecated use setGeoTouches
    */
    public function geoTouches($value)
    {
        $this->setProperty('geoTouches', $value);
        return $this;
    }
   /**
    * @param Place|GeospatialGeometry|array|string $value
    * @return $this
    */
    public function setGeoTouches($value)
    {
        $this->setProperty('geoTouches', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getGeoTouches()
    {
       return $this->getProperty('geoTouches');
    }

    /**
    * Represents spatial relations in which two geometries (or the places they represent) have at least one point in common. As defined in <a href="https://en.wikipedia.org/wiki/DE-9IM">DE-9IM</a>.
    * @param GeospatialGeometry|Place|array|string $value
    * @return $this
    * @deprecated use setGeoIntersects
    */
    public function geoIntersects($value)
    {
        $this->setProperty('geoIntersects', $value);
        return $this;
    }
   /**
    * @param GeospatialGeometry|Place|array|string $value
    * @return $this
    */
    public function setGeoIntersects($value)
    {
        $this->setProperty('geoIntersects', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getGeoIntersects()
    {
       return $this->getProperty('geoIntersects');
    }

    /**
    * Represents spatial relations in which two geometries (or the places they represent) are topologically disjoint: they have no point in common. They form a set of disconnected geometries." (a symmetric relationship, as defined in <a href="https://en.wikipedia.org/wiki/DE-9IM">DE-9IM</a>)
    * @param GeospatialGeometry|Place|array|string $value
    * @return $this
    * @deprecated use setGeoDisjoint
    */
    public function geoDisjoint($value)
    {
        $this->setProperty('geoDisjoint', $value);
        return $this;
    }
   /**
    * @param GeospatialGeometry|Place|array|string $value
    * @return $this
    */
    public function setGeoDisjoint($value)
    {
        $this->setProperty('geoDisjoint', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getGeoDisjoint()
    {
       return $this->getProperty('geoDisjoint');
    }

    /**
    * Represents a relationship between two geometries (or the places they represent), relating a geometry to another that covers it. As defined in <a href="https://en.wikipedia.org/wiki/DE-9IM">DE-9IM</a>.
    * @param Place|GeospatialGeometry|array|string $value
    * @return $this
    * @deprecated use setGeoCoveredBy
    */
    public function geoCoveredBy($value)
    {
        $this->setProperty('geoCoveredBy', $value);
        return $this;
    }
   /**
    * @param Place|GeospatialGeometry|array|string $value
    * @return $this
    */
    public function setGeoCoveredBy($value)
    {
        $this->setProperty('geoCoveredBy', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getGeoCoveredBy()
    {
       return $this->getProperty('geoCoveredBy');
    }


}
