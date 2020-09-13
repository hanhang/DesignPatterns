<?php
namespace Patterns\StaticFactory;

class FormatNumber implements FormatterInterface
{
    public function show()
    {
        echo __CLASS__;
        echo "\r\n";
    }
}