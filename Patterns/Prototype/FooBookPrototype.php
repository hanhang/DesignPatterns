<?php
namespace Patterns\Prototype;

class FooBookPrototype extends BookPrototype
{
    protected $category = 'Foo';
    
    public function __clone()
    {
        
    }
}