<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* (Eventually to be defined as) a supertype of GeoShape designed to accommodate
 * definitions from Geo-Spatial best practices.
* @see schema:GeospatialGeometry
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class GeospatialGeometry extends Intangible
{


    /**
        * Represents spatial relations in which two geometries (or the places they
 * represent) are topologically equal, as defined in
 * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM). "Two geometries are
 * topologically equal if their interiors intersect and no part of the interior
 * or boundary of one geometry intersects the exterior of the other" (a
 * symmetric relationship).
        * @param array|string|mixed $value
    * @return $this
    */
    public function geoEquals($value)
    {
        $this->setProperty('geoEquals', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Represents spatial relations in which two geometries (or the places they
 * represent) touch: "they have at least one boundary point in common, but no
 * interior points." (A symmetric relationship, as defined in
 * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).)
        * @param array|string|mixed $value
    * @return $this
    */
    public function geoTouches($value)
    {
        $this->setProperty('geoTouches', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Represents a relationship between two geometries (or the places they
 * represent), relating a containing geometry to a contained geometry. "a
 * contains b iff no points of b lie in the exterior of a, and at least one
 * point of the interior of b lies in the interior of a". As defined in
 * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
        * @param array|string|mixed $value
    * @return $this
    */
    public function geoContains($value)
    {
        $this->setProperty('geoContains', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Represents spatial relations in which two geometries (or the places they
 * represent) are topologically disjoint: "they have no point in common. They
 * form a set of disconnected geometries." (A symmetric relationship, as defined
 * in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).)
        * @param array|string|mixed $value
    * @return $this
    */
    public function geoDisjoint($value)
    {
        $this->setProperty('geoDisjoint', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Represents a relationship between two geometries (or the places they
 * represent), relating a geometry to another that covers it. As defined in
 * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
        * @param array|string|mixed $value
    * @return $this
    */
    public function geoCoveredBy($value)
    {
        $this->setProperty('geoCoveredBy', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Represents a relationship between two geometries (or the places they
 * represent), relating a geometry to another that geospatially overlaps it,
 * i.e. they have some but not all points in common. As defined in
 * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
        * @param array|string|mixed $value
    * @return $this
    */
    public function geoOverlaps($value)
    {
        $this->setProperty('geoOverlaps', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Represents a relationship between two geometries (or the places they
 * represent), relating a geometry to one that contains it, i.e. it is inside
 * (i.e. within) its interior. As defined in
 * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
        * @param array|string|mixed $value
    * @return $this
    */
    public function geoWithin($value)
    {
        $this->setProperty('geoWithin', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Represents a relationship between two geometries (or the places they
 * represent), relating a geometry to another that crosses it: "a crosses b:
 * they have some but not all interior points in common, and the dimension of
 * the intersection is less than that of at least one of them". As defined in
 * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
        * @param array|string|mixed $value
    * @return $this
    */
    public function geoCrosses($value)
    {
        $this->setProperty('geoCrosses', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Represents a relationship between two geometries (or the places they
 * represent), relating a covering geometry to a covered geometry. "Every point
 * of b is a point of (the interior or boundary of) a". As defined in
 * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
        * @param array|string|mixed $value
    * @return $this
    */
    public function geoCovers($value)
    {
        $this->setProperty('geoCovers', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Represents spatial relations in which two geometries (or the places they
 * represent) have at least one point in common. As defined in
 * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
        * @param array|string|mixed $value
    * @return $this
    */
    public function geoIntersects($value)
    {
        $this->setProperty('geoIntersects', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
