<?php
namespace Patterns\SimpleFactory;

class Bicycle
{
    public function driveTo(string $destination)
    {
        return $destination;
    }
}