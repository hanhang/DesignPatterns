<?php
namespace Patterns\StaticFactory;

final class StaticFactory
{
    public static function factory(string $type): FormatterInterface
    {
        if($type == 'number'){
            return new FormatNumber();
        }

        if($type == 'string'){
            return new FormatString();
        }

        throw new \InvalidArgumentException('Unknown format given');
    }
}