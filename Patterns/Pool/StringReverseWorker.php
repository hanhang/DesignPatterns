<?php
namespace Patterns\Pool;

use DateTime;

class StringReverseWorker
{
    private $createdAt;

    public function __construct()
    {
        $this->createdAt = new DateTime();
    }

    public function run(string $text)
    {
        return strrev($text);
    }
}