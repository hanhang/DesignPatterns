<?php
namespace Patterns\StaticFactory;

class FormatString implements FormatterInterface
{
    public function show()
    {
        echo __CLASS__;
        echo "\r\n";
    }
}