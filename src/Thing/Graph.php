<?php
namespace Sohophp\SchemaOrg\Thing;

use Sohophp\SchemaOrg\Thing;

class Graph extends Thing
{
    protected $type = false;
    private $things = [];

    public function push(Thing $thing)
    {
        $this->things[] = $thing;
    }

    public function toArray($context = false)
    {
        $this->setProperty('@graph', $this->things);
        return parent::toArray($context);
    }

}
