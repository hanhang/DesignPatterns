<?php
namespace Patterns\Prototype;

class BarBookPrototype extends BookPrototype
{
    protected $category = 'Bar';

    public function __clone()
    {
        
    }
}