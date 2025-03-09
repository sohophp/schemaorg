<?php
namespace Sohophp\SchemaOrg\Thing\BioChemEntity;

use Sohophp\SchemaOrg\Thing\BioChemEntity;

/**
* A discrete unit of inheritance which affects one or more biological traits (Source: [https://en.wikipedia.org/wiki/Gene](https://en.wikipedia.org/wiki/Gene)). Examples include FOXP2 (Forkhead box protein P2), SCARNA21 (small Cajal body-specific RNA 21), A- (agouti genotype).
* @see schema:Gene
* @package Sohophp\SchemaOrg\Thing\BioChemEntity
*/
class Gene extends BioChemEntity
{
   /**
        * Another BioChemEntity encoded by this one. 
        */
    protected $encodesBioChemEntity = null;

   /**
        * Tissue, organ, biological sample, etc in which activity of this gene has been observed experimentally. For example brain, digestive system.
        */
    protected $expressedIn = null;

   /**
        * Another gene which is a variation of this one.
        */
    protected $alternativeOf = null;

   /**
        * A symbolic representation of a BioChemEntity. For example, a nucleotide sequence of a Gene or an amino acid sequence of a Protein.
        */
    protected $hasBioPolymerSequence = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setEncodesBioChemEntity($value)
    {
        $this->setProperty('encodesBioChemEntity', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEncodesBioChemEntity()
    {
       return $this->getProperty('encodesBioChemEntity');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setExpressedIn($value)
    {
        $this->setProperty('expressedIn', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getExpressedIn()
    {
       return $this->getProperty('expressedIn');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setAlternativeOf($value)
    {
        $this->setProperty('alternativeOf', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAlternativeOf()
    {
       return $this->getProperty('alternativeOf');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setHasBioPolymerSequence($value)
    {
        $this->setProperty('hasBioPolymerSequence', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHasBioPolymerSequence()
    {
       return $this->getProperty('hasBioPolymerSequence');
    }


}
