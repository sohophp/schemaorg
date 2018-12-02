<?php

namespace Sohophp\SchemaOrg;

class DataType
{
    protected $value;

    public function __construct($value = null)
    {
        if (!is_null($value)) {
            $this->value = $value;
        }
    }

    public function getValue()
    {
        return $this->value;
    }

}
